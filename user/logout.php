<?php
			session_start();
			ini_set('display_errors', 0); 
			include("../database.php");				
			$username=$_COOKIE['username'];
			$useremail=$_COOKIE['useremail'];
			
			$sql="select username,useremail from userdetails where username='".$username."' and useremail='".$useremail."' ";
			$res= mysqli_query($con,$sql);
			if(mysqli_num_rows($res)==TRUE)
			{
				setcookie("useremail", $useremail, time() - (86400 * 365), "/");
				setcookie("username", $username, time()-(86400 * 365), "/");
				header("Location:../index.php");
			}
?>
