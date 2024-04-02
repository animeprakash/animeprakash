<?php
			session_start();
			ini_set('display_errors', 0); 
			include("database.php");				
			$username=$_COOKIE['username'];
			$useremail=$_COOKIE['useremail'];
			$sql="select username,useremail from userdetails where username='".$username."' and useremail='".$useremail."' ";
			$res= mysqli_query($con,$sql);
			$data=mysqli_fetch_assoc($res);
?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="VPrakash" content=" " />
        <!-- Title -->
        <!-- Favicon  -->
        <!--link rel="shortcut icon" href="assets/images/fevicon.png" />

        <!-- *********** CSS Files *********** -->
        <!-- Plugin CSS -->
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <!-- Styles CSS -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        <link rel="stylesheet" href="assets/css/responsive.css" />    


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>		
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
@media only screen and (min-device-width : 600px) {

.mobile-bar{
	display:none;
}
.logosize{
     height:70px;  
     width:auto;
}
.likeme{
	font-size:100%;
	color:#6610f2;
	margin-top:2px;
}
.likecount{
	margin:2px 0 0 10%;
	color:#6610f2;
}
.saveme{
	position:absolute;
	z-index:1;
	font-size:100%;
	color:#6610f2;
	margin:2px 0 0 61px;
}
.download-btn, .heart-btn{
	color:#6610f2;
	font-size:25px;
}
.heart-redbtn{
	color:red;
	font-size:25px;
}
}

@media only screen and (min-device-width : 0px) and (max-device-width :600px) {
	
.desktop-view{
	display:none;
}
.logosize{
     height:45px; 
     width:auto;
}
.likeme{
	margin:5px 0 0 20%;
	font-size:60%;
	color:#6610f2;
}
.likecount{
	margin:5px 0 0 22%;
	font-size:60%;
	color:#6610f2;
}
.saveme{
	position:absolute;
	z-index:1;
	margin:5px 0 0 40%;
	font-size:60%;
	color:#6610f2;
}
.download-btn{
	color:#6610f2;
	font-size:20px;
	margin:0px 30% 0px 0px;
}
.heart-btn{
	position:absolute;
	z-index:1;
	color:#6610f2;
	font-size:20px;
	margin:0px 0% 0px -13%;
}
.heart-redbtn{
	position:absolute;
	z-index:1;
	color:red;
	font-size:20px;
	margin:0px 0% 0px -13%;
}
}
</style>
</head>

<body class="template-index">

        <!-- End Page Loader -->

        <!--  Start Main Wrapper -->
        <div class="main-wrapper cart-drawer-push">

            <!-- Start Header Section -->
            <!-- Start Header Section -->
            <header class="header bg-white">
                <div class="container-fluid full-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Start Navigation -->
                        <nav class="navigation navbar position-static navbar-expand-lg p-0 w-50">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"><span class="icon ti-menu"></span></button>        
                            <div id="navbar-collapse" class="navbar-collapse collapse dual-nav">
                                <a href="#" class="closeNav-btn d-lg-none clearfix" id="closeNav" title="Close"><span class="menu-close mr-2">Close</span><i class="ti-close" aria-hidden="true"></i></a>
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="index.php">Home</a>       
                                    </li>
                                    <!--li class="nav-item dropdown">
                                        <a class="nav-link" href="about.php">About</a>       
                                    </li-->
                                </ul>
                            </div>
                        </nav>
                        <!-- Start Navigation -->
                        <!-- Start Logo -->
                        <div class="navbar-brand logo mx-auto p-0 text-center">
                            <a href="index.php" class="logoimg" ><img width="200px"  src="assets/images/logo.png" alt="logo" title="Posh Auto Parts" /></a>
                        </div>
                        <!-- End Logo -->
                        <!-- Start Right Menu -->
                        <div class="w-50 right-side">						
                            <div class="float-right" >
    
								<?php 		
								if($data['username']==FALSE&$data['useremail']==FALSE)
								{	
								?>
								 <a href="user/userlogin.php?data=user" class="btn btn-primary py-2 px-4 ms-3 desktop-view" style="border-radius:50px;">LOGIN / SIGNUP</a>
								<?php				
								}else if($data['username']==TRUE&$data['useremail']==TRUE){ ?>

								 <a href="user/userdashboard.php" class=" py-2 px-4 ms-3 btn-primary desktop-view" style="border-radius:50px;"><img src="assets/images/user-icon2.png" width="24px" height="24px">&nbsp;<?php echo $data['username'];?></a>		
								<?php } ?>
								<?php 		
								if($data['username']==FALSE&$data['useremail']==FALSE)
								{	
								?>
								 <a href="user/userlogin.php?data=user" class="mobile-bar"><img src="assets/images/user-icon.png" width="24px" height="24px"></a>
								<?php				
								}else if($data['username']==TRUE&$data['useremail']==TRUE){ ?>

								 <a href="user/userdashboard.php" class="mobile-bar"><img src="assets/images/user-icon.png" width="24px" height="24px" style="margin-left:0;"><br><span  style="font-size:7px;margin-left:-5px;"><?php echo $data['username'];?></span></a>		
								<?php } ?>								
                            </div>
                        </div>
                        <!-- End Right Menu -->
                    </div>
                </div>
            </header>
					<div class="container">
			            <div class="row row-sp row-eq-height">
<?php
				ini_set('display_errors', 0); 
					include("database.php");
	
				$query="select * from quotedetails where quotetitle='English Quotes' ";
				$result= mysqli_query($con, $query);
				while($row= mysqli_fetch_assoc($result)){
					$image='uploads/'.$row['quoteimage'];
?>						
<script>
$(document).ready(function(){
  $(".<?php echo $row['quoteid']; ?>").click(function(){
		var xhr = new XMLHttpRequest();
		xhr.open('GET', 'quotelike.php?quoteid=<?php echo $row['quoteid']; ?>', true);
		xhr.onload = function() {
		  if (xhr.status === 200) {
			  location.reload();
		  } else {
			console.error('AJAX request failed');
		  }
		};
		xhr.send(); 
  });
});		

	function likealert(){
		alert('Kindly Signup / Login To Give Likes');
	}
	function downloadalert(){
		alert('Kindly Signup / Login To Download Image');
	}	
$(document).ready(function(){
  $("#<?php echo $row['quoteid']; ?>").click(function(){
		var xhr = new XMLHttpRequest();
		xhr.open('GET', 'quotedownload.php?quoteid=<?php echo $row['quoteid']; ?>', true);
		xhr.onload = function() {
		  if (xhr.status === 200) {
			  location.reload();
		  } else {
			console.error('AJAX request failed');
		  }
		};
		xhr.send(); 
  });
});
</script>
<script>
function downloadImage(url, name){
      fetch(url)
        .then(resp => resp.blob())
        .then(blob => {
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.style.display = 'none';
            a.href = url;
            a.download = name;
            document.body.appendChild(a);
            a.click();
            window.URL.revokeObjectURL(url);
        })
        .catch(() => alert('An error sorry'));
}
</script>						<div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="product-item">                                    
                                    <img class="img-fluid lazyload" src="<?php echo $image; ?>"  alt="image" title="image" />
									<div class="card container">
									  <div class="row">
										<div class=" col-6 d-flex">
											<?php 
													ini_set('display_errors', 0); 
													include("database.php");
													$useremail=$_COOKIE['useremail'];
													$quoteid=$row['quoteid'];
													$likeqry="select * from likedetails where user_email='".$useremail."' and quote_id='".$quoteid."'";
													$likeres= mysqli_query($con, $likeqry);
													$likerow= mysqli_fetch_assoc($likeres);
													
													if($likerow['quote_id']==TRUE ){
											?>
												<i class='bx bxs-heart <?php echo $row['quoteid'];?> heart-redbtn'  ></i>
											<?php } else {
														if($_COOKIE['username']==TRUE){?>
												<i class='bx bxs-heart <?php echo $row['quoteid'];?> heart-btn' ></i>
											<?php }else{
											?>
												<i class='bx bxs-heart heart-btn' onclick="likealert()"  ></i>
											<?php
											}} ?>	

											<?php 
													ini_set('display_errors', 0); 
													include("database.php");
													$quoteid=$row['quoteid'];
													$countqry="select count(likeid) from likedetails where quote_id='".$quoteid."'";
													$countres= mysqli_query($con, $countqry);
													$countrow= mysqli_fetch_assoc($countres);
													
												if($countrow['count(likeid)']=='0'){	
											?>
												<span class="likeme">Like&nbsp;Me</span>
											<?php }else { ?>
												<span class="likecount"><?php echo $countrow['count(likeid)']; ?> </span>
											<?php } ?>
										</div>
										<div class="col-6 d-flex ">
											<?php 
												if($_COOKIE['username']==TRUE){
											?>
												<i class='bx bx-download download-btn mr-3 ' onclick="downloadImage('<?php echo $image; ?>','animeprakash.png')" id="<?php echo $row['quoteid'];?>"></i>
											<?php }else { ?>
												<i class='bx bx-download download-btn mr-3 ' onclick="downloadalert()" ></i>
											<?php }
													ini_set('display_errors', 0); 
													include("database.php");
													$quoteid=$row['quoteid'];
													$downqry="select sum(downloadcount) from downloaddetails where downquoteid='".$quoteid."'";
													$downres= mysqli_query($con, $downqry);
													$downrow= mysqli_fetch_assoc($downres);
													
												if($downrow['sum(downloadcount)']==FALSE){
											?>	
											<span class="saveme" >Save&nbsp;Me</span>
											<?php }else { ?>
												<span class="saveme"><?php echo $downrow['sum(downloadcount)']; ?> </span>
											<?php } ?>										
										</div>
									  </div>
									</div>                               
								</div>
                            </div>
<?php } ?>						
						</div>
					</div>
		</div>
            <!-- Start Scroll Top -->
            <div id="scrollTop"><i class="ti-arrow-up"></i></div>
            <!-- End Scroll Top -->
            <!-- Overlay -->
            <div class="overlay"></div>
        </div>
        <!--  End Main Wrapper -->        
        <!-- Plugin JS -->
        <script src="assets/js/plugins.js"></script>
        <!-- Main JS -->
        <script src="assets/js/main.js"></script>

    </body>
</html>
