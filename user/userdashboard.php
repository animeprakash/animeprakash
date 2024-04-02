<?php
		//ini_set('display_errors', 0); 
            include("../database.php");
				$useremail=$_COOKIE['useremail'];
				
				$query=" select count(likeid) from quotedetails join likedetails on quoteid=quote_id where user_email='".$useremail."' ";
				$result= mysqli_query($con, $query);

				$query2=" select count(downloadid) from quotedetails join downloaddetails on quoteid=downquoteid where downuseremail='".$useremail."' ";
				$result2= mysqli_query($con, $query2);
				
				$row= mysqli_fetch_assoc($result);
				$row2= mysqli_fetch_assoc($result2);			
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
	margin:5% 0% 5% 0%;
}
.btnwhite{
	width:15%;
	margin:2.5% 0% 0% 19%;	
	position:fixed;
}
.search{
	background-color:#6610f2;
	color:white;
	position:fixed;
	margin:2.5% 0% 0% 34%;
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

.btnprimary{
	background-color:#6610f2;
	color:white;
}
.btnwhite{
	width:32%;
	margin:0% 0% 0% 5%;	
	position:fixed;
}
.search{
	background-color:#6610f2;
	color:white;
	position:fixed;
	margin:0% 0% 0% 37%;
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

<?php include("usersidebar.php");?>

<section class="home">
	<div class="container">
	<div class="row mb-1 mt-5">
		<div class="col-3 col-lg-6">
			<a href="../index.php" class="btn btn-sm btnprimary" >Home</a>
		</div>
		<!--div class="col-9 col-lg-6">
			<form action="userdashboard.php" method="post"  class="d-flex mr-1">
				<div class="">
					<input type="date" class="form-control form-control-sm btnwhite" name="qdate" >
				</div>
					<input type="submit" name="submit" value="Search" id="search"class="btn btn-sm search">

			</form>
		</div-->
	</div>
	</div>
	<div class="container">
		<div class="row ">

				    <div class="col-sm-3">
                            <div class="card border-left-danger shadow py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                Total Likes</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $row['count(likeid)']; ?> </div>
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
                                                Total Downloads</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row2['count(downloadid)']; ?></div>
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