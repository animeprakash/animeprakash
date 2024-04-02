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
<style>
@media only screen and (min-device-width : 600px) {

.mobile-bar{
	display:none;
}
.logosize{
     height:70px;  
     width:auto;
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

}
</style>
</head>

    <body class="template-index">
        <!-- Start Page Loader -->
        <!--div class="page-loading"></div>
        <!-- End Page Loader -->

        <!--  Start Main Wrapper -->
        <div class="main-wrapper cart-drawer-push">

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
                                        <a class="nav-link text-primary" href="index.php">Home</a>       
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
            <!-- End Header Section -->
            <!-- Start Main Content -->
            <main class="main-content">
                <!-- Start Banner Slidershow Section -->
                <div class="ymm-slideshow position-relative sections-spacing">
                   

                    <!-- Start Slidershow Banner -->
                    <div class="slideshow slideshow-banner">
                        <div class="single-slide slider-height bg-style d-flex align-items-center" style="background-image:url(assets/images/slider/slider-1.png);">
                            <div class="container slideshow-details">
                            </div>
                        </div>
                        <div class="single-slide slider-height bg-style d-flex align-items-center" style="background-image:url(assets/images/slider/slider-5.png);">
                            <div class="container slideshow-details">
                            </div>
                        </div>
                        <div class="single-slide slider-height bg-style d-flex align-items-center" style="background-image:url(assets/images/slider/slider-3.png);">
                            <div class="container slideshow-details">
                            </div>
                        </div>
                    </div>
                    <!-- End Slidershow Banner -->
                </div>
                <!-- End Banner Slidershow Section -->

                <!-- Start Four Banner Section -->
                <div class="home-four-banner sections-spacing">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 banner-1">
                                <div class="small-banner-1 position-relative">
                                    <a class="animate-scale" href=""><img class="img-fluid blur-up lazyload w-100"  src="assets/images/banner-1.png" data-src="assets/images/banner-1.png" alt="image" title="image" /></a>
                                    <div class="banner-details">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 banner-23">
                                <div class="row mb-5">
                                    <div class="col-12 col-sm-6 col-md-6">
                                        <div class="small-banner-2 position-relative">
                                            <a class="animate-scale" href="#">
                                                <img class="img-fluid blur-up lazyload w-100"  src="assets/images/banner-2.png" data-src="assets/images/banner-2.png" alt="image" title="image" />
                                                <div class="banner-details">
                                                    
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6">
                                        <div class="small-banner-3 position-relative">
                                            <a class="animate-scale" href="#">
                                                <img class="img-fluid blur-up lazyload w-100" src="assets/images/banner-3.png" data-src="assets/images/banner-3.png" alt="image" title="image" />
                                                <div class="banner-details">
                                                   
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12">
                                        <div class="small-banner-4 position-relative">
                                            <a class="animate-scale" href="#">
                                                <img class="img-fluid blur-up lazyload w-100" src="assets/images/banner-4.png" data-src="assets/images/banner-4.png" alt="image" title="image" />
                                                <div class="banner-details">
                                                    
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Four Banner Section -->

               

                <!-- Start Home Collection Section -->
                <!--div class="home-collection  sections-spacing">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters home-collection-prcarousel">
                            <div class="col collection-item">
                                <a href="#" class="animate-scale collection-img">
                                    <img class="img-fluid  lazyload w-100" src="assets/images/banner-1.png" data-src="assets/images/banner-1.png" alt="image" title="image" />
                                </a>

                            </div>
                            <div class="col collection-item">
                                <a href="#" class="animate-scale collection-img">
                                    <img class="img-fluid  lazyload w-100"  src="assets/images/banner-1.png" data-src="assets/images/banner-1.png" alt="image" title="image" />
                                </a>

                            </div>
                            <div class="col collection-item">
                                <a href="#" class="animate-scale collection-img">
                                    <img class="img-fluid lazyload w-100" src="assets/images/collection/collection1.jpg" data-src="assets/images/collection/collection1.jpg" alt="image" title="image" />
                                </a>

                            </div>
                            <div class="col collection-item">
                                <a href="#" class="animate-scale collection-img">
                                    <img class="img-fluid  lazyload w-100" src="assets/images/collection/collection1.jpg" data-src="assets/images/collection/collection1.jpg" alt="image" title="image" />
                                </a>

                            </div>
                            <div class="col collection-item">
                                <a href="#" class="animate-scale collection-img">
                                    <img class="img-fluid  lazyload w-100" src="assets/images/collection/collection1.jpg" data-src="assets/images/collection/collection1.jpg" alt="image" title="image" />
                                </a>

                            </div>
                            <div class="col collection-item">
                                <a href="#" class="animate-scale collection-img">
                                    <img class="img-fluid  lazyload w-100" src="assets/images/collection/collection1.jpg" data-src="assets/images/collection/collection1.jpg" alt="image" title="image" />
                                </a>

                            </div>
                        </div>
                    </div>
                </div-->
                <!-- End Home Collection Section -->

                <!-- Start Popular Product Section -->
                <div class="popular-product sections-spacing">
                    <div class="container">
                        <div class="title-btn clearfix">
                            <div class="section-header">
                                <h2 class="text-primary">Tamil Motivational Quotes</h2>
                                
                            </div>
                            <div class="viewall-btn top-btn">
                                <a href="tamilquotes.php" class="btn btn-primary">View all</a>
                            </div>
                        </div>
                        <div class="row row-sp row-eq-height">
                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="product-item">
                                    <div class="product-image-action">
                                        <div class="product-label">
                                            
                                        </div>
                                        <div class="product-image">
                                            <a href="#">
                                                <img class="img-fluid  lazyload" src="assets/images/banner-5.png" data-src="assets/images/banner-5.png" alt="image" title="image" />
                                            </a>
                                        </div>
                                        <!--div class="product-action">
                                            <ul>
                                                <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                                <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                                <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                                <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                            </ul>
                                        </div-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="product-item">
                                    <div class="product-image-action">
                                        <div class="product-image">
                                            <a href="#">
                                                <img class="img-fluid  lazyload" src="assets/images/banner-6.png" data-src="assets/images/banner-6.png" alt="image" title="image" />
                                            </a>
                                        </div>
                                        <!--div class="product-action">
                                            <ul>
                                                <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                                <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                                <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                                <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                            </ul>
                                        </div-->
                                    </div>

                                </div>
                            </div>
                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="product-item">
                                    <div class="product-image-action">
                                        <div class="product-image">
                                            <a href="#">
                                                <img class="img-fluid  lazyload" src="assets/images/banner-7.png" data-src="assets/images/banner-7.png" alt="image" title="image" />
                                            </a>
                                        </div>
                                          <!--div class="product-action">
                                            <ul>
                                                <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                                <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                                <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                                <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                            </ul>
                                        </div-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="product-item">
                                    <div class="product-image-action">
                                        <div class="product-label">
                                           
                                        </div>
                                        <div class="product-image">
                                            <a href="#">
                                                <img class="img-fluid  lazyload" src="assets/images/banner-8.png" data-src="assets/images/banner-8.png"  alt="image" title="image" />
                                            </a>
                                        </div>
                                          <!--div class="product-action">
                                            <ul>
                                                <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                                <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                                <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                                <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                            </ul>
                                        </div-->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Popular Product Section -->
             <!-- Start Popular Product Section -->
                <div class="popular-product sections-spacing">
                    <div class="container">
                        <div class="title-btn clearfix">
                            <div class="section-header">
                                <h2 class="text-primary">English Motivational Quotes</h2>
                                
                            </div>
                            <div class="viewall-btn top-btn">
                                <a href="englishquotes.php" class="btn btn-primary">View all</a>
                            </div>
                        </div>
                        <div class="row row-sp row-eq-height">
                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="product-item">
                                    <div class="product-image-action">
                                        <div class="product-image">
                                            <a href="#">
                                                <img class="img-fluid  lazyload" src="assets/images/banner-9.png" data-src="assets/images/banner-9.png" alt="image" title="image" />
                                            </a>
                                        </div>
                                        <!--div class="product-action">
                                            <ul>
                                                <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                                <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                                <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                                <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                            </ul>
                                        </div-->
                                    </div>
                                  
                                </div>
                            </div>
                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="product-item">
                                    <div class="product-image-action">
                                        <div class="product-image">
                                            <a href="#">
                                                <img class="img-fluid  lazyload" src="assets/images/banner-10.png" data-src="assets/images/banner-10.png" alt="image" title="image" />
                                            </a>
                                        </div>
                                        <!--div class="product-action">
                                            <ul>
                                                <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                                <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                                <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                                <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                            </ul>
                                        </div-->
                                    </div>
            
                                </div>
                            </div>
                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="product-item">
                                    <div class="product-image-action">
                                        <div class="product-label">
                                            
                                        </div>
                                        <div class="product-image">
                                            <a href="#">
                                                <img class="img-fluid lazyload" src="assets/images/banner-11.png" data-src="assets/images/banner-11.png" alt="image" title="image" />
                                            </a>
                                        </div>
                                        <!--div class="product-action">
                                            <ul>
                                                <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                                <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                                <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                                <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                            </ul>
                                        </div-->
                                    </div>
     
                                </div>
                            </div>
                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="product-item">
                                    <div class="product-image-action">
                                        <div class="product-label">
                                            
                                        </div>
                                        <div class="product-image">
                                            <a href="#">
                                                <img class="img-fluid lazyload" src="assets/images/banner-12.png" data-src="assets/images/banner-12.png"  alt="image" title="image" />
                                            </a>
                                        </div>
                                        <!--div class="product-action">
                                            <ul>
                                                <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                                <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                                <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                                <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                            </ul>
                                        </div-->
                                    </div>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Popular Product Section -->
                

                <!-- Start Latest Blog Section -->
                <div class="home-blog sections-spacing">
                    <div class="container">
                        <div class="title-btn clearfix">
                            <div class="section-header pull-left">
                                <h2 class="text-primary">Comedy Quotes</h2>
                            </div>
                            <div class="viewall-btn top-btn">
                                <a href="comedyquotes.php" class="btn btn-secondary">View all</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="blog-item position-relative">
                                    <div class="blog-image"> 
                                        <a class="animate-scale" href="#"><img class="img-fluid blur-up lazyload w-100" src="assets/images/banner-13.png" data-src="assets/images/banner-13.png" alt="image" title="image" /></a> 
                                    </div>
                                  
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="blog-item position-relative">
                                    <div class="blog-image"> 
                                        <a class="animate-scale" href="#"><img class="img-fluid blur-up lazyload w-100" src="assets/images/banner-14.png" data-src="assets/images/banner-14.png" alt="image" title="image" /></a> 
                                    </div>
                                 
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="blog-item position-relative">
                                    <div class="blog-image"> 
                                        <a class="animate-scale" href="#"><img class="img-fluid blur-up lazyload w-100" src="assets/images/banner-15.png" data-src="assets/images/banner-15.png" alt="image" title="image" /></a> 
                                    </div>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Latest Blog Section -->
            </main>
            <!-- End Main Content -->

            <!-- Start Footer Section -->
            <!--footer class="footer">
                <div class="footer-top clearfix">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 logo-wellcome">
                                <div class="ftr-logo">
                                    <a href="index.html"><img class="img-fluid" src="assets/images/logo/gray-logo.png" alt="Posh Auto Parts" title="Posh Auto Parts" /></a>
                                </div>
                                <div class="welcome-text">
                                    <p class="m-0">Lorem ipsum dolor sit amet,<br> consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.</p>
                                </div>
                                <div class="social-icons">
                                    <ul class="d-flex flex-row align-items-center text-center">
                                        <li><a href="#" title="Facebook"><i class="icon ti-facebook"></i></a></li>
                                        <li><a href="#" title="Twitter"><i class="icon ti-twitter"></i></a></li>
                                        <li><a href="#" title="Instagram"><i class="icon ti-instagram"></i></a></li>
                                        <li><a href="#" title="Google Plus"><i class="icon ti-google"></i></a></li>
                                        <li><a href="#" title="Youtube"><i class="icon ti-youtube"></i></a></li>
                                        <li><a href="#" title="Vimeo"><i class="icon ti-vimeo"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-9 newsletter-menulinks">
                                <div class="row no-gutters footer-newsletter">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <h3>Sign up to our Newsletter and receive 10% off your first order!</h3>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <form action="#" class="needs-validation" method="post">
                                            <div class="form-group m-0 position-relative">
                                                <input type="text" class="form-control" placeholder="Enter your email address..." required />
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="fa fa-paper-plane-o"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row no-gutters footer-links">
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 menu-items">
                                        <h4>Quick Link</h4>
                                        <ul class="linklist">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="about-us.html">About us</a></li>
                                            <li><a href="faqs.html">FAQs</a></li>
                                            <li><a href="contact-us.html">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 menu-items">
                                        <h4>Help Link</h4>
                                        <ul class="linklist">
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="wishlist.html">My Wishlist</a></li>
                                            <li><a href="order-tracking.html">Order Traking</a></li>
                                            <li><a href="#">Returns</a></li>
                                            <li><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 menu-items">
                                        <h4>Custom Link</h4>
                                        <ul class="linklist">
                                            <li><a href="#">Parts Shop</a></li>
                                            <li><a href="#">Delivery</a></li>
                                            <li><a href="#">Refunds</a></li>
                                            <li><a href="#">Help & support</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact">
                                        <h4>Contact Information</h4>
                                        <ul class="linklist contact-info d-flex flex-column">
                                            <li><i class="icon ti-location-pin"></i><span>No 40 Baria Street 133/2, <br/>NewYork, USA</span></li>
                                            <li><i class="icon fa fa-phone"></i><a href="tel:+011234567890">(+01) 123 456 7890</a></li>
                                            <li><i class="icon ti-email"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom clearfix">
                    <div class="container">
                        <div class="payment-icons pull-right">
                            <i class="fa fa-cc-visa" aria-hidden="true"></i> 
                            <i class="fa fa-cc-amex" aria-hidden="true"></i> 
                            <i class="fa fa-cc-mastercard" aria-hidden="true"></i> 
                            <i class="fa fa-cc-discover" aria-hidden="true"></i> 
                            <i class="fa fa-cc-paypal" aria-hidden="true"></i> 
                        </div>
                        <div class="copyright-content pt-md-1 pull-left"> 
                            <span class="content"> Copyright &copy; 2022 Posh Auto Parts. All Rights Reserved.</span> 
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer Section -->

            <!-- Start Scroll Top -->
            <div id="scrollTop"><i class="ti-arrow-up"></i></div>
            <!-- End Scroll Top -->

            

            <!-- Overlay -->
            <div class="overlay"></div>

        </div>
        <!--  End Main Wrapper -->

        <!-- ******** JS Files ******** -->        
        <!-- Plugin JS -->
        <script src="assets/js/plugins.js"></script>

        <!-- Main JS -->
        <script src="assets/js/main.js"></script>

    </body>
</html>

