<?php	
		session_start();
		ini_set('display_errors', 0);
			$data=$_GET['data'];
			
 
        if(isset($_POST["register"])) {
            include("../database.php");

			$username=$_POST["username"];
			$useremail=$_POST["useremail"];
			$userpassword=$_POST["userpassword"];
			
			setcookie("username", $username, time() + (86400 * 365), "/");
			setcookie("useremail", $useremail, time() + (86400 * 365), "/");
				
			$data=$_POST['data'];
			
				$qry="create table if not exists userdetails (userid int not null auto_increment primary key,username varchar(100),useremail varchar(200),userpassword varchar(100),useron datetime not null default now())";
				mysqli_query($con,$qry);
			
				$qone = "SELECT * FROM userdetails WHERE useremail = '".$useremail."'";
				$resone=mysqli_query($con,$qone);			
				
				if(mysqli_num_rows($resone)==TRUE){

					echo "<script>alert('Already registered using this E-mail ');window.location.href='register.php?data=user';</script>";														
												
				}
				else
				{
					$qry="insert into userdetails(username,useremail,userpassword)values('".$username."','".$useremail."','".$userpassword."') ";
					$result=mysqli_query($con,$qry);
					
					if($data=='user'){
						header("Location:userdashboard.php");
					}
				}
		}	
?>

<html lang="en" dir="ltr" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins';
}

.container {
    margin: 50px auto;
}
.panel-heading {
    text-align: center;
    margin-bottom: 10px
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
input[type='password'] {
    border: none;
    outline: none;
    box-shadow: none;
    width: 100%;
}
.fa-user{
	font-size:10px;
}
.form-control{
	border:none;
}
</style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
            <div class="panel border bg-white">
                <div class="panel-heading">
                    <h3 class="pt-3 font-weight-bold">SIGN UP</h3>
                </div>
                <div class="panel-body p-3">
                    <form action="register.php" method="POST">
					
						<input type="hidden" name="data" value="<?php echo $data;?>" required>

                        <div class="form-group py-2">
                            <div class="input-field"> <input type="text" name="username" class="form-control" placeholder="Enter Your Name" required> </div>
                        </div>
                        <div class="form-group py-2">
                            <div class="input-field"> <input type="email" name="useremail" class="form-control" placeholder="Enter Your Email" required>  </div>
                        </div>
                        <div class="form-group py-2">
                            <div class="input-field"> <input type="password" name="userpassword" class="form-control" placeholder="Enter Your Password" required>  </div>
                        </div>
                        <div class=""><input type="submit" value="REGISTER" name="register" class="btn btn-primary w-100" ></div>
                    	<div class="form-group py-2 text-center text-muted">
								I have an account.&nbsp;<a href="userlogin.php?data=<?php echo $data; ?>" class="" style="font-family: 'Poppins'">Login&nbsp;here</a>
						</div>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>