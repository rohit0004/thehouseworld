<?php
$mysqli = new mysqli("localhost","root","","house");
	if($mysqli->connect_error)
		die("Database connection failed ".$mysql->connect_error);
?>
<?php
 
 $sql="SELECT * FROM  addproperty,addimage where addproperty.id=addimage.pid order by addproperty.id desc limit 4;";
 $sql.="SELECT * FROM  addproperty,addimage where addproperty.id=addimage.pid limit 9;";
?>
<?php
if($mysqli->multi_query($sql)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Property in patna</title>
	<meta charset="UTF-8">
	<meta name="description" content="LERAMIZ Landing Page ">
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

<script>

</script>
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
							<a href="login.php"><i class="fa fa-sign-in"></i> Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
						<div class="site-logo" style="text:white;">thehouseworld<img src="logo.jpg" alt="" style="width:0px"></div>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="categories.php">All LISTING</a></li>
							<li><a href="addproperty.php">ADD PROPERTY</a></li>
							<li><a href="profile.php">Profile</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="container hero-text text-white">
		<!--	<h2>Best property site for patna</h2>-->
			<h2>This is the best property site</h2>
			</div>
	</section>
	<!-- Hero section end -->
	<!-- Filter form section end -->
<div class="site-section site-section-sm pb-0">
      <div class="container">
        <div class="row">
          <form class="form-search col-md-12" action="search.php" style="margin-top: -100px;"  onSubmit="return validateForm()" name = "mySearch" method="post">
            <div class="row  align-items-end">
			<div class="col-md-3">
                <label for="select1-city">Select Places</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="select-city" id="select1-city" class="form-control d-block rounded-0" class="validate[required]">
				  <option value=" ">Select...</option>
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
					 
                  </select>
				  <b class="form-text text-danger" id="cityError"> </b> 
                </div>
              </div>
			   <div class="col-md-3">
                <label for="offer1-types">Offer Type</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="offer-types" id="offer1-types" class="form-control d-block rounded-0" class="validate[required]"> 
				  <option value=" ">Select...</option>
                    <option value="sale"> sale</option>
                    <option value="rent"> rent</option>
                  </select>
				  <b class="form-text text-danger" id="offerError"> </b> 
                </div>
              </div>
              <div class="col-md-3">
                <label for="list-types">Listing Types</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="list-types" id="list-types" class="form-control d-block rounded-0" >
                          <option value="">Select...</option>
						  <option value="flat">Flat</option>
						  <option value="plot">Plot</option>
						  <option value="commercial">Commercial</option>
						  <option value="hostel">Hostel</option>
						  <option value="signleroom"> Single room</option>
						  <option value="doubleroom">Double room</option>
                  </select>
				  <b class="form-text text-danger" id="listError"> </b> 
                </div>
              </div>  
              <div class="col-md-3">
                <input type="submit" class="btn btn-success text-white btn-block rounded-0" name="search" value="Search" id="submit">
              </div>
            </div>
          </form>
        </div>  



	<!-- Properties section -->
	<section class="properties-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>RECENT PROPERTIES</h3>
				<p>Discover how much the latest properties have been sold for</p>
			</div>
			<div class="row">
			<?php
			//if($mysqli->multi_query($sql)){
			$result=$mysqli->store_result();
   while($row = $result->fetch_assoc())
    {
        $id = $row['id'];
		$place = $row['place'];
		//echo $place;
		//echo $id;
        ?>
				<a href="details.php?id=<?php echo $row['id'];?>" class="col-md-6">
					<div class="propertie-item set-bg" data-setbg="uploads/<?php echo $row['file_name'];?>">
						<div class="sale-notic">FOR <?php echo $row['motive'];?></div>
						<div class="propertie-info text-white">
							<div class="info-warp">
								<h5><?php echo $row['place'];?></h5>
								<p><i class="fa fa-map-marker"></i> <?php echo $row['city'];?> <?php echo $row['state'];?> <?php echo $row['pincode'];?></p>
							</div>
							<div class="price">Rs.<?php echo $row['monthly'];?> , <?php echo $row['price'];?></div>
						</div>
					</div>
				</a>
					 <?php
}
?>
			</div>
		</div>
	</section>
	<!-- Properties section end -->


	<!-- Services section -->
	<section class="services-section spad set-bg" data-setbg=""><!---img/service-bg.jpg-->
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<img src="img/rohit.jpg" alt="">
				</div>
				<div class="col-lg-5 offset-lg-1 pl-lg-0" >
					<div class="section-title text-black" style="background-color:;">
						<h3>OUR SERVICES</h3>
						<p>We provide the perfect service for </p>
					</div>
					<div class="services" style="background-color:; height:;">
						<div class="service-item">
							<i class="fa fa-comments"></i>
							<div class="service-text text-black">
								<h5 class="">Consultant Service</h5>
								<p>We, help in guiding customers to buy their dream homes according to their budget and expectation in only minimum time by rules and policies.</p>
							</div>
						</div>
						<div class="service-item">
							<i class="fa fa-home"></i>
							<div class="service-text text-black ">
								<h5>Properties Management</h5>
								<p> We provide overseeing of your residential, commercial include apartment,houses, shopping center.We help owmers to get qualify tenant and collect rent. </p>
							</div>
						</div>
						<div class="service-item  text-black">
							<i class="fa fa-briefcase"></i>
							<div class="service-text">
								<h5>Renting and Selling</h5>
								<p>We honesty provide trouble free house for tenant and buyer.and we always try to get property for customers in less time.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end -->


	<!-- feature section -->
	<section class="feature-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>Featured Listings</h3>
				<p>Browse houses and flats for sale and to rent in your area</p>
			</div>
			<div class="row">
			
			  <?php
			  $mysqli->next_result();
     $result=$mysqli->store_result();
    while($row = $result->fetch_assoc())
    {
        $id = $row['id'];
		$place=$row['place'];
        ?>
				<a href="details.php?id=<?php echo $row['id'];?>"  class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="uploads/<?php echo $row['file_name'];?>">
							<div class="sale-notic">FOR <?php echo $row['motive'];?> , <?php echo $row['price'];?></div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5><?php echo $row['place'];?></h5>
								<p><i class="fa fa-map-marker"></i> <?php echo $row['city'];?> , <?php echo $row['state'];?>, <?php echo $row['pincode'];?></p>
							</div>
							<div class="room-price">Rs.<?php echo $row['monthly'];?> , <?php echo $row['price'];?></div>
						</div>
				
					</div>
				</a>
				 <?php
}
}
$mysqli->close();
?>
			</div>
		</div>
	</section>
	<!-- feature section end -->



	<!-- feature category section -->
	<section class="feature-category-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>LOOKING PROPERTY</h3>
				<p>What kind of property are you looking for? We will help you</p>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="img/feature-cate/1.jpg" alt="">
					<h5>Flat</h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="img/feature-cate/2.jpg" alt="">
					<h5>PG for rent</h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="img/feature-cate/3.jpg" alt="">
					<h5> Hostel boys and girls</h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="img/feature-cate/4.jpg" alt="">
					<h5>Commercial</h5>
				</div>
			</div>
		</div>
	</section>
	<!-- feature category section end-->


	<!-- Gallery section -->
	<section class="gallery-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>Popular Places</h3>
				<p>We understand the value and importance of place</p>
			</div>
			<div class="gallery">
				<div class="grid-sizer"></div>
				<a href="brsearch.php" class="gallery-item grid-long set-bg" data-setbg="img/gallery/1.jpg" name="Boring road">
					<div class="gi-info">
						<h3>Nearby Boring road</h3>
						<!--<p>118 Properties</p>-->
					</div>
				</a>
		
				<a href="bsearch.php" class="gallery-item set-bg" data-setbg="img/gallery/3.jpg" id="Baily road">
					<div class="gi-info">
						<h3>Nearby Baily Road</h3>
						
					</div>
				</a>
				<a href="msearch.php" class="gallery-item set-bg" data-setbg="img/gallery/4.jpg" name="Ganddhi Maidan">
					<div class="gi-info">
						<h3>Nearby Gandhi Maidan</h3>
						
					</div>
				</a>
					<a href="rsearch.php" class="gallery-item set-bg" data-setbg="img/gallery/4.jpg" name="Rajendra Nagar">
					<div class="gi-info">
						<h3>Nearby Rajendra Nagar</h3>
						
					</div>
				</a>
				<a href="pjsearch.php" class="gallery-item grid-long set-bg" data-setbg="img/gallery/1.jpg" name="Patna Junction">
					<div class="gi-info">
						<h3>Nearby Patna Junction</h3>
						
					</div>
				</a>
				<a href="gsearch.php" class="gallery-item set-bg" data-setbg="img/gallery/4.jpg" name="Gai ghat">
					<div class="gi-info">
						<h3>Nearby Gai Ghat</h3>
						
					</div>
				</a>
				
			</div>
		</div>
	</section>
	<!-- Gallery section end -->



	<!-- Review section -->
	<section class="review-section set-bg" data-setbg="" style="background-color:#b3f0ff;">
		<div class="container">
			<div class="review-slider owl-carousel">
				<div class="review-item text-white">
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
					<h5>Stacy Mc Neeley</h5>
					<span>CEP’s Director</span>
					<div class="clint-pic set-bg" data-setbg="img/review/1.jpg"></div>
				</div>
				<div class="review-item text-white">
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
					<h5>Stacy Mc Neeley</h5>
					<span>CEP’s Director</span>
					<div class="clint-pic set-bg" data-setbg="img/review/1.jpg"></div>
				</div>
				<div class="review-item text-white">
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
					<h5>Stacy Mc Neeley</h5>
					<span>CEP’s Director</span>
					<div class="clint-pic set-bg" data-setbg="img/review/1.jpg"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Review section end-->

	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg" style="margin-top:110px;">
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
					       <ul class="main-menu">
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
	<script src="search.js"></script>


	<!-- load for map -->
</body>
</html>