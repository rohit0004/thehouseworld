<?php
session_start();
if($_SESSION['uid'])
{
	//echo $_SESSION['uid'];
}
else{
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>LERAMIZ - Landing Page Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="LERAMIZ Landing Page Template">
	<meta name="keywords" content="LERAMIZ, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
<style>
<style>
 .rohit{
  font-family: Arial, sans-serif;
  background: url(formimage.jpg) no-repeat;
  background-size: cover;
  height: 100vh;
}
	.container1 {
	
            max-width: 1200px;  
        }
        .comment { 
            width: 100%;
            height: auto;
        }
        .commenter1 {            
        }
        .comment-text-area {           
            width: 100%;
            height: auto;
        }
        .textinput { 
            width: 100%;
            min-height:120px;
            outline: none;
            resize: none;
            border: 1px solid grey;
        }
	</style>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 header-top-left">
						<div class="top-info">
							<i class="fa fa-phone"></i>
							7992262042
						</div>
						<div class="top-info">
							<i class="fa fa-envelope"></i>
							info.leramiz@spyrity.com
						</div>
					</div>
					<div class="col-lg-6 text-lg-right header-top-right">
						<div class="top-social">
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-instagram"></i></a>
							<a href=""><i class="fa fa-pinterest"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
						</div>
						<div class="user-panel">
							<a href=""><i class="fa fa-phone"></i>7992262042</a>
							<a href=""><i class="fa fa-sign-in"></i> Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="rohit">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
						<a href="#" class="site-logo"><img src="img/" alt=""></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="categories.php">All LISTING</a></li>
					
						<!--	<li><a href="blog.php">Available city</a></li>-->
							
							<li><a href="addproperty.php">ADD PROPERTY</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href=""><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Add property</span>
		</div>
	</div>
<!-- page-->
 <div class="container">
	<form action="insertdata.php" method="post" onSubmit="return validateForm()" name = "myForm" enctype="multipart/form-data">
	<div class="alert alert-danger display-error" style="display: none">
    </div>
  <div class="form-group row">
  <div class="col-md-4 mb-3">
                        <label for="fname">First name</label>
                        <input type="text" class="form-control" id="fname" placeholder="First name" name="firstN">
						<b class="form-text text-danger" id="firstNError"> </b> 
                    </div>
                     
                      <div class="col-md-4 mb-3">
                        <label for="lastN">Last name</label>
                        <input type="text" class="form-control" id="lastN" placeholder="Last name" name="lastN">
                        <b class="form-text text-danger" id="lastNError"> </b> 
                      </div>
					  <div class="col-md-4 mb-3">
                        <label for="phone">Phone number</label>
                        <input type="text" class="form-control" id="phone" placeholder="Phone nuber" name="phone">
						<b class="form-text text-danger" id="phoneError"> </b> 
                      </div>
   
  </div>
  <div class="form-row">
       <div class="form-group col-md-12">
    <label for="motive">List for Property Motive</label>
    <select class="form-control" id="motive" name="motive" class="validate[required]">
      <option value="">Select..</option>
      <option value="sale">sale</option>
      <option value="rent">rent</option>
    </select>
	<b class="form-text text-danger" id="motiveError"> </b> 
  </div>
  </div>
  <div class="form-group">
    <label for="proptype">Property Type</label>
    <select class="form-control" id="proptype" name="proptype" class="validate[required]" >
      <option value="">Select...</option>
      <option value="flat">Flat</option>
      <option value="plot">Plot</option>
      <option value="commercial">Commercial</option>
      <option value="hostel">Hostel</option>
      <option value="signleroom"> Single room</option>
      <option value="doubleroom">Double room</option>
          

    </select>
	<b class="form-text text-danger" id="proptypeError"> </b> 
  </div>

 
   <div class="form-group">
    <label for="inputPincode">Pincode</label>
    <input type="text" class="form-control" id="inputPincode" name="pincode">
	<b class="form-text text-danger" id="inputPincodeError"> </b>
  </div>
  <div class="form-group ">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="address">
	<b class="form-text text-danger" id="inputAddressError"> </b>
  </div>
  <div class="form-group ">
      <label for="inputLocality">Locality</label>
      <input type="text" class="form-control" id="inputLocality" name="locality">
	  <b class="form-text text-danger" id="inputLocalityError"> </b>
    </div>
  <div class="form-row">
  <div class="col-md-6">
     <div class="form-group">
	 
      <label for="inputPlace">Place..</label>
      <select id="inputPlace" class="form-control" name="place" class="validate[required]">
        <option value="">Choose...</option>
        <option value="Boring road">Boring road</option>
                    <option value="Baily road">Baily road</option>
                    <option value="Saguna more">Saguna more</option>
                    <option value="Danapur">Danapur</option>
                    <option value="Ashok rajpath">Ashok rajpath</option>
					 <option value="Rajendra nagar">Rajendra nagar</option>
					 <option value="Kankarbagh">Kankarbagh</option>
					 <option value="Fraser Road">Fraser Road</option>
					 <option value="Gandhi maidan">Gandhi maidan</option>
					 <option value="Gai ghat">Gai ghat</option>
					 <option value="Gai ghat">Patna junction</option>
      </select>
	  <b class="form-text text-danger" id="placeError"> </b>
	  </div>
    </div>
	<div class="col-md-6">
     <div class="form-group">
	 
      <label for="inputCity">City</label>
      <select id="inputCity" class="form-control" name="city" class="validate[required]">
        <option value="">Choose...</option>
        <option value="patna">patna</option>
      </select>
	  <b class="form-text text-danger" id="inputCityError"> </b>
	  </div>
    </div>
	 </div>
	 <!---->
	 <!---->
	 <div class="form-row">
     <div class="form-group col-md-12">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state" class="validate[required]">
        <option value="">Choose...</option>
        <option value="Bihar">Bihar</option>
      </select>
	  <b class="form-text text-danger" id="inputStateError"> </b>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputFloor">Enter Floor Number</label>
      <input type="text" class="form-control" id="inputFloor" name="floor">
	  <b class="form-text text-danger" id="inputFloorError"> </b>
    </div>
	<div class="form-group col-md-6">
      <label for="inputfurniture">Furniture Type</label>
      <select id="inputfurniture" class="form-control" name="furniture" class="validate[required]">
        <option value="">Choose...</option>
        <option value="Semi furniture">Semi furniture</option>
        <option value="Fully furniture">Fully furniture</option>
        <option value="Not Furnitured">Not furnitured</option>
      </select>
	  <b class="form-text text-danger" id="inputfurnitureError"> </b>
  </div>
  </div>
  <div class="form-group ">
      <label for="inputTenant">tenant type</label>
      <select id="inputTenant" class="form-control" name="tenant" class="validate[required]">
        <option value="">Choose...</option>
        <option value="Student">Student</option>
        <option value="Married">Married</option>
        <option value="professional">professional</option>
      </select>
	  <b class="form-text text-danger" id="inputTenantError"> </b>
    </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputArea"> Enter Areas in sq.ft</label>
      <input type="text" class="form-control" id="inputArea" name="area">
	  <b class="form-text text-danger" id="inputAreaError"> </b>
    </div>
    <div class="form-group  col-md-6">
      <label for="inputMonthly"> Enter Monthly rent</label>
      <input type="number" class="form-control" id="inputMonthly" name="monthly">
	  <b class="form-text text-danger" id="inputMonthlyError"> </b>
    </div>
  </div>
   <div class="form-row">
 <div class="form-group col-md-6">
      <label for="inputSecurity"> Enter Security Deposit</label>
      <input type="text" class="form-control" id="inputSecurity" name="security">
	  <b class="form-text text-danger" id="inputSecurityError"> </b>
    </div>
		<div class="form-group col-md-6">
    <label for="inputPrice">Enter Price</label>
    <input type="text" class="form-control" id="inputprice" name="price">
	<b class="form-text text-danger" id="inputPriceError"> </b>
  </div>
  </div>
    <div class="form-group">
      <label for="inputManintenance"> Enter Maintenance charge</label>
      <input type="text" class="form-control" id="inputManintenance" name="maintenance">
	  <b class="form-text text-danger" id="inputManintenanceError"> </b>
    </div>
	
	 <div class="container1">
        <div class="comment">
		 <label for="about">About property and location</label>
            <textarea class="textinput"  id="about" name="about"></textarea>
			<b class="form-text text-danger" id="aboutError"> </b>
        </div>
    </div>
    <div class="form-group">
      <label for="inputVideo">Upload Video</label>
      <input type="file" class="form-control" id="inputVideo" name='file'>
	  <b class="form-text text-danger" id="inputVideError"> </b>
    </div>
	<div class="form-group ">
      <label for="inputImage">Upload Image</label>
      <input type="file" class="form-control" id="inputImage" multiple="" name="upload_images[]">
	  <b class="form-text text-danger" id="inputImageError"> </b>
    </div>
	
	<div>
<!--<button type="button" class="btn btn-primary btn-lg" style="float:right;">upload </button>-->	
<button type="submit" class="btn btn-primary mt-3" style="float: right; margin-bottom:100px; " id="submit" name='but_upload'>Submit</button>
</div>

					</form>
	</div>
	</div>
	<!-- image-->
	</div>
	<!-- page end -->


	<!-- Clients section -->
	<!-- Clients section end -->


	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg" style="margin-top:120px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">
					<img src="img/log.png" alt="">
					<p>thehouseworld is the property site this is help to find any type of room flat, plot,commercial property for sale and buy in patna.</p>
					<div class="social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="contact-widget">
						<h5 class="fw-title">CONTACT US</h5>
						<p><i class="fa fa-phone"></i>7992262042</p>
						<p><i class="fa fa-envelope"></i>info.leramiz@spyrity.com</p>
						<p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 06 PM</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
				<h5 class="text-white">Download my website android app</h5>
				<img src="google.png" style="margin-top:33px;">
				</div>
				<div class="col-lg-3 col-md-6  footer-widget">
					<div class="newslatter-widget">
						<h5 class="fw-title">NEWSLETTER</h5>
						<p>Subscribe your email to get the latest news and new offer also discount</p>
						<form class="footer-newslatter-form">
							<input type="text" placeholder="Email address">
							<button><i class="fa fa-send"></i></button>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="footer-nav">
					<ul>
						<li><a href="index.php">Home</a></li>
							<li><a href="categories.php">All LISTING</a></li>
					
						<!--	<li><a href="blog.php">Available city</a></li>-->
							
							<li><a href="addproperty.php">ADD PROPERTY</a></li>
					</ul>
				</div>
				<div class="copyright">
					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->

                                        
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/all.js"></script>


	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map-2.js"></script>

</body>
</html>