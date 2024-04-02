<?php
		ini_set('display_errors', 0); 
            include("../database.php");
			if(isset($_POST["submit"])) 
			{	
				$qdate=$_POST['qdate'];
				$query="select count(quoteid) from quotedetails where cast(quoteon as date )='".$qdate."'";
				$result= mysqli_query($con, $query);
				
				$query2="select count(quoteid) from quotedetails where quotetitle='Motivational Quotes' and  cast(quoteon as date )='".$qdate."'";
				$result2= mysqli_query($con, $query2);

				$query3="select count(quoteid) from quotedetails where quotetitle='Comedy Quotes' and  cast(quoteon as date )='".$qdate."'";
				$result3= mysqli_query($con, $query3);

				$query4="select count(quoteid) from quotedetails where quotetitle='English Quotes' and  cast(quoteon as date )='".$qdate."'";
				$result4= mysqli_query($con, $query4);

				$query5="select count(likeid) from likedetails where cast(quoteon as date )='".$qdate."' ";
				$result5= mysqli_query($con, $query5);			

				$query6="select count(downloadid) from downloaddetails where cast(quoteon as date )='".$qdate."' ";
				$result6= mysqli_query($con, $query6);
				
				$query7="select count(userid) from userdetails where cast(quoteon as date )='".$qdate."'";
				$result7= mysqli_query($con, $query7);	
			}
			else{
				$query="select count(quoteid) from quotedetails";
				$result= mysqli_query($con, $query);

				$query2="select count(quoteid) from quotedetails where quotetitle='Motivational Quotes' ";
				$result2= mysqli_query($con, $query2);

				$query3="select count(quoteid) from quotedetails where quotetitle='Comedy Quotes' ";
				$result3= mysqli_query($con, $query3);	

				$query4="select count(quoteid) from quotedetails where quotetitle='English Quotes' ";
				$result4= mysqli_query($con, $query4);

				$query5="select count(likeid) from likedetails";
				$result5= mysqli_query($con, $query5);			

				$query6="select count(downloadid) from downloaddetails";
				$result6= mysqli_query($con, $query6);	
				
				$query7="select count(userid) from userdetails";
				$result7= mysqli_query($con, $query7);					
			}
			$row= mysqli_fetch_assoc($result);
			$row2= mysqli_fetch_assoc($result2);
			$row3= mysqli_fetch_assoc($result3);
			$row4= mysqli_fetch_assoc($result4);		
			$row5= mysqli_fetch_assoc($result5);
			$row6= mysqli_fetch_assoc($result6);
			$row7= mysqli_fetch_assoc($result7);
?>
<html lang="en" dir="ltr" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
<style>

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins';
}

::-webkit-scrollbar {
	width: 3px;
	height:3px;
	background-color:white;
}
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
::-webkit-scrollbar-thumb {
  background:#6610f2; 
  border-radius: 10px;
}
.btnprimary{
	background-color:#6610f2;
	color:white;
	margin:5% 0% 5% 10%;
}
.btnwhite{
	width:200px;
	margin:2.5% 0% 0% 20%;	
	position:fixed;
}
.search{
	background-color:#6610f2;
	color:white;
	position:fixed;
	margin:2.5% 0% 0% 35%;
}
.search:hover{
	background-color:#6610f2;
	color:white;
}
.btnprimary:hover{
	background-color:#6610f2;
	color:white;
}
@media only screen and (min-device-width : 0px) and (max-device-width :600px) {
.scrolling{
	overflow-y:scroll;
	height:90%;
}	
.col-sm-3{
	height:100px;
	width:90%;
	margin:1% 5%;
}
.btnprimary{
	background-color:#6610f2;
	color:white;
	margin:15% 0% 10% 35%;
}
.btnwhite{
	width:120px;
	margin:2.5% 0% 0% 10%;	
	position:fixed;
}
.search{
	background-color:#6610f2;
	color:white;
	position:fixed;
	margin:2.5% 0% 0% 40%;
}
}
<script>
			if ( window.history.replaceState ) {
				window.history.replaceState( null, null, window.location.href );
				}
</script>
</style>
</head>
<body >

<?php include("sidebar.php");?>

<section class="home">

	<div class="d-flex">
		<div class="col-sm-6">
			<a href="index.php" class="btn btn-sm btnprimary" >Web&nbsp;View</a>
		</div>
		<div class="col-sm-6">
			<form action="dashboard.php" method="post"  class="d-flex">
				<div class="">
					<input type="date" class="form-control form-control-sm btnwhite" name="qdate" >
				</div>
					<input type="submit" name="submit" value="Search" id="search"class="btn btn-sm search">

			</form>
		</div>
	</div>
	<div class="container">
		<div class="row scrolling">

						<div class="col-sm-3">
                            <div class="card border-left-danger shadow py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                Total Quotes</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row['count(quoteid)']; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					<div class="col-sm-3">
                            <div class="card border-left-danger shadow  py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-Success text-uppercase mb-1">
                                                Motivational Quotes</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row2['count(quoteid)']; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
					<div class="col-sm-3">
                            <div class="card border-left-danger shadow  py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Comedy Quotes</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row3['count(quoteid)']; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-sm-3">
                            <div class="card border-left-danger shadow  py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-Danger text-uppercase mb-1">
                                              English Quotes</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row4['count(quoteid)']; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-sm-3">
                            <div class="card border-left-danger shadow  py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-Danger text-uppercase mb-1">
                                              Total Likes</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row5['count(likeid)']; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-sm-3">
                            <div class="card border-left-danger shadow  py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Total Downloads</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row6['count(downloadid)']; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					<div class="col-sm-3">
                            <div class="card border-left-danger shadow  py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-Success text-uppercase mb-1">
                                                Total User</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row7['count(userid)']; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
		</div>
	</div>
</section>
</body>
</html>