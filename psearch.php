<?php
$mysqli = new mysqli("localhost","root","","house");
	if($mysqli->connect_error)
		die("Database connection failed ".$mysql->connect_error);
?>
<?php
if(isset($_POST['search'])){ 
$place=$_POST['select-city'];
$offer=$_POST['offer-types'];
$type=$_POST['list-types'];
 $sql="SELECT *FROM  addproperty,addimage where addproperty.id=addimage.pid AND propertytype='$place' AND motive='$offer' AND place='$type';";
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
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<style>
h2{
	color:red;
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
							info.leramiz@sprity.com
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
							<a href=""><i class="fa fa-user-circle-o"></i> Register</a>
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
						<a href="#" class="site-logo"><img src="img/logo.png" alt=""></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="categories.php">All LISTING</a></li>
						
						<!--	<li><a href="blog.php">Blog</a></li>-->
							
							<li><a href="addproperty.php">ADD PROPERTY</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->
	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg" style="margin-bottom:60px;">
	</section>
	<!--  Page top end -->
	<!-- page -->
 <section class="page-section categories-page">
		<div class="container">
			<div class="row">
			<?php
			if($result = $mysqli->query($sql)){
				 if($result->num_rows > 0){
				
				 while($row = mysqli_fetch_array($result))
					 
    {
			?>
				<div class="col-lg-4 col-md-6 mb-4">
					<!-- feature -->
					<a href="details.php?id?id=<?php echo $row['id'];?>" class="feature-item">
						<div class="feature-pic set-bg" data-setbg="uploads/<?php echo $row['file_namae'];?>">
							<div class="sale-notic">FOR SALE</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>1963 S Crescent Heights Blvd</h5>
								<p><i class="fa fa-map-marker"></i> Los Angeles, CA 90034</p>
							</div>
							<div  class="room-price">$1,200,000</div>
					</div>
					</a>
				</div>
					 <?php
	}
	 
    }
	else{
        echo "<h2> No results, Please choose other select option!</h2>";
}

}
}
$mysqli->close();
?>
			</div>
		</div>
	</section>
	<!-- page end -->

	<!-- Clients section end -->


	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg" style="margin-top:100px; width:100%;">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">
					<img src="img/logo.png" alt="">
					<p>Lorem ipsum dolo sit azmet, consecter dipise consult  elit. Maecenas mamus antesme non anean a dolor sample tempor nuncest erat.</p>
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
</body>
</html>