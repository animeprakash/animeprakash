<?php
		ini_set('display_errors', 0); 
        if(isset($_POST["submit"])) {
            include("../database.php");

            $quotetitle=$_POST['quotetitle'];
            $quotedescription=$_POST['quotedescription'];

			$target_dir = mkdir("../uploads");
			$target_dir = "../uploads/";
			$quoteimage=$_FILES["quoteimage"]["name"];
			$target_file = $target_dir . basename($_FILES["quoteimage"]["name"]);
			move_uploaded_file($_FILES["quoteimage"]["tmp_name"], $target_file);
			
			
			$q="create table if not exists quotedetails (quoteid int not null auto_increment primary key,quotetitle varchar(100),quotedescription varchar(2000),quoteimage blob,quoteon datetime not null default now())ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
			$qq="insert into quotedetails(quotetitle,quoteimage,quotedescription)values('".$quotetitle."','".$quoteimage."','".$quotedescription."')";
			mysqli_query($con,$q);
			mysqli_query($con,$qq);	

			header("Location:uploaddetails.php");
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
input[type='password'] {
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

<?php include("sidebar.php");?>

<section class="home">
<div class="container">
    <div class="row">
	<center>
	<div class="scrolling">
        <div class="col-lg-5 col-md-7 ">
            <div class="panel border bg-white">
                <div class="panel-heading">
                    <h3 class="pt-3 font-weight-bold">Upload Data</h3>
                </div>
                <div class="panel-body p-3">
                    <form action="upload.php" method="post" enctype="multipart/form-data">
	                        <div class="form-group py-2">
                            <div class="input-field"> </span> 
								<select type="text" name="quotetitle" placeholder="Select The Title" class="form-control" required> 
									<option>Tamil Quotes</option>
									<option>Comedy Quotes</option>
									<option>English Quotes</option>
								</select>
							</div>
                        </div>				
                        <div class="form-group py-2">
                            <div class="input-field"></span> <input type="file" class="form-control" name="quoteimage" placeholder="Select Image File" required> <!--button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button--> </div>
                        </div>
                        <div class="form-group py-2">
                            <div class="input-field"></span> <textarea name="quotedescription" class="form-control" placeholder="Enter The Description" required> </textarea></div>
                        </div>
                        <div class=""><input type="submit" name="submit" value="SUBMIT" class="btn btn-primary w-100" ></div>
				   </form>
                </div>
                <div class="mx-3 my-2 py-2 bordert">
                </div>
            </div>
        </div>
	</div>
	</center>
    </div>
</div>
</section>
</body>
</html>