
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
.scrolling{
	overflow-y:scroll;
	height:90%;
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

.downloadimage{
	width:100%;
	height:auto;
}
@media only screen and (min-device-width : 0px) and (max-device-width :600px) {
.scrolling{
	overflow-y:scroll;
	height:90%;
}	
.downloadimage{
	width:100%;
	height:auto;
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

	<div class="container ">
			<div class="row">
			<?php 
				ini_set('display_errors', 0); 
				include("../database.php");
				
				$useremail=$_COOKIE['useremail'];
				$downloadqry="select * from quotedetails join downloaddetails on quoteid=downquoteid where downuseremail='".$useremail."' order by downloadon desc";
				$downloadres= mysqli_query($con, $downloadqry);
				while($row= mysqli_fetch_assoc($downloadres)){
					$image='../uploads/'.$row['quoteimage'];
			?>

			<div class="col-4 col-lg-3 mt-2 mb-2">
					<img src="<?php echo $image; ?>" class="downloadimage">
            </div>
		<?php } ?>
		</div>
	</div>
</section>
</body>
</html>