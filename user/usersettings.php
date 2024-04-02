<?php
		ini_set('display_errors', 0); 
        if(isset($_POST["update"])) {
            include("../database.php");
			
			$userid=$_POST['userid'];
            $username=$_POST['username'];
			$useremail=$_POST['useremail'];
			$userpassword=$_POST['userpassword'];

			
			setcookie("username", $username, time() + (86400 * 365), "/");
			setcookie("useremail", $useremail, time() + (86400 * 365), "/");
			
			$q="update userdetails set username='".$username."',userpassword='".$userpassword."' where userid='".$userid."'";
			mysqli_query($con,$q);
				
			header("Location:userdashboard.php");

        }
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
body {
   /* background: linear-gradient(to top, #c9c9ff 50%, #9090fa 90%) no-repeat; */
   
}
.container {
    margin: 50px auto;
}
.panel-heading {
    text-align: center;
    margin-bottom: 10px
}
#forgot {
    min-width: 100px;
    margin-left: auto;
    text-decoration: none
}

.form-inline label {
    padding-left: 10px;
    margin: 0;
    cursor: pointer
}

.btn.btn-primary {
    margin-top: 20px;
    border-radius: 15px
}

.panel {
    min-height: 380px;
    box-shadow: 20px 20px 80px rgb(218, 218, 218);
    border-radius: 12px
}

.input-field {
    border-radius: 5px;
    padding: 5px;
    display: flex;
    align-items: center;
    cursor: pointer;
    border: 1px solid #ddd;
    color: #4343ff
}

input[type='text'],
input[type='password'],
input[type='email']
 {
    border: none;
    outline: none;
    box-shadow: none;
    width: 100%;
}
.fa-user{
	font-size:10px;
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
  background:#5D3FD3; 
  border-radius: 10px;
}
@media only screen and (min-device-width : 0px) and (max-device-width :600px) {
.scrolling{
	overflow-x:scroll;
	width:100%;
	margin:0% 10%;
}	
.panel{
	width:400px;
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
    <div class="row">
	<center>
	<div class="scrolling">
        <div class="col-lg-5 col-md-7 ">
            <div class="panel border bg-white">
                <div class="panel-heading">
                    <h3 class="pt-3 font-weight-bold">Settings</h3>
                </div>
			<?php 
				ini_set('display_errors', 0); 
				include("../database.php");
				
				$useremail=$_COOKIE['useremail'];
				$qry="select*from userdetails where useremail='".$useremail."' ";
				$res= mysqli_query($con, $qry);
				while($row= mysqli_fetch_assoc($res)){
			?>				
                <div class="panel-body p-3">
                    <form action="usersettings.php" method="POST">
					
						<input type="hidden" name="userid" value="<?php echo $row['userid']; ?>" required>
						<input type="hidden" name="cookieemail" value="<?php echo $cookieemail; ?>" required>
						 <div class="text-left">
							<span>Username</span>
						 </div>
                        <div class="form-group py-2">
                            <div class="input-field"> <input type="text" name="username" value="<?php echo $row['username'];?>" class="form-control" placeholder="Enter Your Name" required> </div>
                        </div>
                        <!--div class="form-group py-2">
                            <div class="input-field"> <input type="email" name="useremail" value="<?php echo $row['useremail'];?>" class="form-control" placeholder="Enter Your Email" required>  </div>
                        </div-->
						 <div class="text-left">
							<span>Password</span>
						 </div>
                        <div class="form-group py-2">
                            <div class="input-field"> <input type="password" name="userpassword" value="<?php echo $row['userpassword'];?>" class="form-control" placeholder="Enter Your Password" required>  </div>
                        </div>
                        <div class=""><input type="submit" value="UPDATE" name="update" class="btn btn-primary w-100" ></div>
					</form>
                </div>
				<?php } ?>
            </div>
        </div>
	</div>
	</center>
    </div>
</div>
</section>
</body>
</html>