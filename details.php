 <?php
$con=mysqli_connect("localhost","root","","house");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $id=$_GET['id'];
 //$place=$_GET['place'];
// Checking data it is a number or not
if(!is_numeric($id)){
echo "Data Error";
exit;
}
 $sql="SELECT * FROM  addproperty,addimage where addproperty.id=addimage.pid AND addproperty.id ='$id';";
 $sql.="SELECT * FROM  addproperty,addimage where addproperty.id=addimage.pid order by addproperty.id desc limit 4;";
//$result = mysqli_query($con, $sql);
if (mysqli_multi_query($con,$sql)){
$result=mysqli_store_result($con);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>LERAMIZ - Landing Page </title>
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
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/style.css"/>
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
							
							
							<li><a href="blog.php">Blog</a></li>
							
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
		<div class="container text-white">
			
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href=""><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Single Listing</span>
		</div>
	</div>

	<!-- Page -->
	<section class="page-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 single-list-page">
			<!--	<div class="perview-video">
							<video src="videos/video.webm" controls>
							
						</div>-->
				<div class="single-list-slider owl-carousel" id="sl-slider">
						<div class="sl-item set-bg" data-setbg="uploads/<?php echo $row['file_name'];?>">
							<div class="sale-notic">FOR <?php echo $row['motive'];?></div>
						</div>
					</div>
				<div class="owl-carousel sl-thumb-slider" id="sl-slider-thumb">
						<div class="sl-thumb set-bg" data-setbg="uploads/<?php echo $row['file_name'];?>"></div>
					</div>
					<div class="single-list-content">
						<div class="row">
							<div class="col-xl-8 sl-title">
								<h2><?php echo $row['place'];?></h2>
								<p><i class="fa fa-map-marker"></i><?php echo $row['locality'];?>,<?php echo $row['pincode'];?></p>
							</div>
							<div class="col-xl-4">
								<a href="#" class="price-btn">Rs.<?php echo $row['monthly'];?> , <?php echo $row['price'];?></a>
							</div>
						</div>
						
						<h3 class="sl-sp-title bd-no">Video</h3>
							<div class="perview-video">
							<video src="<?php echo $row['location'];?>" controls> </video>
					</div>
						
						<h3 class="sl-sp-title">Property Details</h3>
						<div class="row property-details-list">
							<div class="col-md-4 col-sm-6">
								<p><i class="fa fa-th-large"></i> <?php echo $row['areas'];?> Square foot</p>
								<p><i class="fa fa-user"></i><?php echo $row['furnituretype'];?> </p>
								<p><i class="fa fa-bed"></i> For <?php echo $row['tenanttype'];?></p>
							</div>
							<div class="col-md-4 col-sm-6">
								<p><i class="fa fa-building-o"></i><?php echo $row['floo'];?> Floor No.</p>
								<p><i class="fa fa-building-o"></i> <?php echo $row['propertytype'];?></p>
								<p><i class="fa fa-clock-o"></i>Security charge-<?php echo $row['security'];?></p>
							</div>
							<div class="col-md-4">
								<p><i class="fa fa-map-marker"></i> <?php echo $row['state'];?></p>
								<p><i class="fa fa-map-marker"></i> <?php echo $row['address'];?> </p>
							</div>
						</div>
						<h3 class="sl-sp-title">Description</h3>
						<div class="description">
							<p><?php echo $row['about'];?> </p>
							</div>
						<h3 class="sl-sp-title">Property Details</h3>
						<div class="row property-details-list">
							<div class="col-md-4 col-sm-6">
								<p><i class="fa fa-check-circle-o"></i> Maintenance charge-<?php echo $row['maintenance'];?></p>
								<p><i class="fa fa-check-circle-o"></i> <?php echo $row['city'];?></p>
							</div>
							<div class="col-md-4 col-sm-6">
								<p><i class="fa fa-check-circle-o"></i>Contect -<?php echo $row['firstname'];?><?php echo $row['lastname'];?></p>
								<p><i class="fa fa-check-circle-o"></i> <?php echo $row['propertytype'];?></p>
							</div>
							<div class="col-md-4 col-sm-6">
								<p><i class="fa fa-check-circle-o"></i> City views</p>
								<p><i class="fa fa-check-circle-o"></i><?php echo $row['motive'];?></p>
							</div>
						</div>
<!-- floor plan-->

					<!--	<h3 class="sl-sp-title bd-no">Video</h3>
						<div class="perview-video">
							<video src="videos/video.webm" controls> </video>
					</div>
					<h3 class="sl-sp-title bd-no">Location</h3>
						<div class="pos-map" id="map-canvas"></div>-->
	
					</div>
				
				</div>
				<!-- sidebar -->
				<div class="col-lg-4 col-md-7">
					<div class="contact-form-card">
						<h5>Please contect for this </h5>
						<form>
							<input type="text" placeholder="Your name">
							<input type="text" placeholder="Your number">
							<input type="text" placeholder="Your email">
							<input type="hidden" id="address" name="custId" value="<?php echo $row['firstname'];?>">
							<input type="hidden" id="place" name="custId" value="<?php echo $row['lastname'];?>">
							<input type="hidden" id="phone" name="custId" value="<?php echo $row['phone'];?>">
							<button>SEND</button>
						</form>
					</div>
					<div class="related-properties">
						<h2>Related Property</h2>
							 <?php
				 mysqli_next_result($con);
				$result=mysqli_store_result($con); 
    while($row = mysqli_fetch_array($result))
    {
        $id = $row['id'];
        ?>
						
						<a href="details.php?id=<?php echo $row['id'];?>" class="rp-item" style="margin-top:20px;" >
					
							<div class="rp-pic set-bg" data-setbg="uploads/<?php echo $row['file_name'];?>">
								<div class="sale-notic">FOR <?php echo $row['motive'];?></div>
							</div>
							<div class="rp-info">
								<h5><?php echo $row['place'];?></h5>
								<p><i class="fa fa-map-marker"></i><?php echo $row['city'];?>, <?php echo $row['state'];?> <?php echo $row['pincode'];?></p>
							</div>
							<div class="rp-price">Rs.<?php echo $row['monthly'];?> , <?php echo $row['price'];?></div>
						
						</a>
					<?php
	}
}
mysqli_close($con);
?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page end -->



	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">
					<img src="img/log.png" alt="">
					<p>thehouseworld is the property site this is help to find any type property room flat, plot,commercial for sale and buy in patna.</p>
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


	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map-2.js"></script>

</body>
</html>