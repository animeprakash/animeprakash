<?php	


	$quoteid=$_GET['quoteid'];

	include ('../database.php');

	$qry="delete from quotedetails where quoteid='".$quoteid."'";
	$result=mysqli_query($con,$qry);
	
	if($result){
		header("Location:uploaddetails.php");
	}else{
		echo"ERROR!!"; 
	}

?>