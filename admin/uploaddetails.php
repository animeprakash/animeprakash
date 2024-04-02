
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
	margin:0% 0% 5% %;

}
.btnwhite{
	width:180px;
	margin:0% 0% 0% 55%;	
}
.search{
	background-color:#6610f2;
	color:white;
	margin:0% 0% 0% 30%;
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
	margin:0% 0% 0% 0%;
}
.btnwhite{
	width:30%;
	margin:0% 0% 0% 0%;	
	position:fixed;
}
.search{
	background-color:#6610f2;
	color:white;
	position:fixed;
	margin:0% 0% 0% 30%;
}
.btn-sm{
	font-size:70%;
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
	<div class="container">
		<div class="row mt-2 mb-2">
			<div class="col-4 col-lg-8">
				<a href="upload.php" class="btn btn-sm btnprimary" >Upload</a>
			</div>
			<div class="col-8 col-lg-4">
				<form action="uploaddetails.php" method="post"  class="d-flex">
					<div class="">
						<select class="form-control form-control-sm btnwhite" name="qtitle" >
							<option>Tamil Quotes</option>
							<option>Comedy Quotes</option>
							<option>English Quotes</option>					
						</select>
					</div>
						<input type="submit" name="submit" value="Search" id="search"class="btn btn-sm search">
				</form>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row scrolling">
<?php
		ini_set('display_errors', 0); 
            include("../database.php");
			if(isset($_POST["submit"])) 
			{	
				$qtitle=$_POST['qtitle'];
				$query="select*from quotedetails where quotetitle='".$qtitle."' order by quoteid desc";
				$result= mysqli_query($con, $query);
			}
			else{
				$query="select*from quotedetails order by quoteid desc";
				$result= mysqli_query($con, $query);				
			}
			while($row= mysqli_fetch_assoc($result)) {
				$image='../uploads/'.$row['quoteimage'];		
?>

				 <div class="col-6 col-lg-3 mb-2">
					<div class="card">
					  <img src="<?php echo $image; ?>" class="card-img-top" alt="...">
					  <div class="card-body">
						<p class="card-text"><?php echo $row['quotedescription']; ?></p>
					  </div>
					</div>
					<div class="card">
						<div class="d-flex">
							<a href="quoteupdate.php?quoteid=<?php echo $row['quoteid'];?>" class="btn btn-sm text-white w-50" style="background-color:#6610f2;">Update</a>
							<a href="quotedelete.php?quoteid=<?php echo $row['quoteid'];?>" class="btn btn-sm btn-danger text-white w-50">Delete</a>
						</div>
					</div>
				  </div>
				<?php } ?>
		</div>
	</div>
</section>
</body>
</html>