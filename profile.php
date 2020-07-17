<?php
session_start();
if($_SESSION['uid'])
{
	$id= $_SESSION['uid'];
}
else
{
	header('location:login.php');
}
?>
<?php
$mysqli = new mysqli("localhost","root","","house");
	if($mysqli->connect_error)
		die("Database connection failed ".$mysql->connect_error);
?>
<?php
 $sql="SELECT * FROM  addproperty,addimage where addproperty.id=addimage.pid AND userid='$id';";
?>
<!doctype html>
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


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
  </head>
  <body>
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
						<a href="#" class="site-logo"><img src="img/l.png" alt=""></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<li><a href="index.html">Home</a></li>
							<li><a href="categories.html">All LISTING</a></li>
							<li><a href="addproperty.html">ADD PROPERTY</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container text-white">
			
		</div>
	</section>
	<!--  Page top end -->
<div class="container">
 <div class="col-lg-4  mt-4 order-lg-1 text-center float-md-right float-sm-none">
            
            <h6 class="mt-2">Upload a different photo</h6>
            <label class="custom-file">
                <input type="file" id="file" class="custom-file-input">
                <span class="custom-file-control">Choose file</span>
            </label>
        </div>
    <div class="row my-2">
        <div class="col-lg-12 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                </li>
     
				<!--<a href="plot.html" class="btn btn-primary" style="float:right;margin-left:5px; margin-right:5px;">Only Plot</a>-->
		
				
				<a href="addproperty.php" class="btn btn-primary" style="float:right;margin-right:5px;">Add Property </a>
            </ul> 
			
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">User Profile</h5>
                    <div class="row">
                        <div class="col-md-6">
                            
                        </div>
                       
                    </div>
					</div>
                   </div> 
					</div>
					</div>
					</div>
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
					<a href="details.php?id=<?php echo $id = $row['id'];?>" class="feature-item">
						<div class="feature-pic set-bg" data-setbg="uploads/<?php echo $row['file_name'];?>">
							<div class="sale-notic">FOR <?php echo $row['motive'];?></div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5><?php echo $row['place'];?></h5>
								<p><i class="fa fa-map-marker"></i> <?php echo $row['city'];?>, <?php echo $row['state'];?> <?php echo $row['pincode'];?></p>
							</div>
							<div  class="room-price"> Rs.<?php echo $row['monthly'];?> ,<?php echo $row['price'];?></div>
					</div>
					</a>
				<a href="remove.php" type="button" onclick=" return checkdelete()" class="btn btn-primary" style="margin-top:10px;">remove</a>
				</div>
						 <?php
	}
	 
    }
	else{
        echo "<h2> No results, Please choose other select option!</h2>";
}

}
$mysqli->close();
?>
		</div>
<script>
function checkdelete(){
	return confirm("Are you sure you want to remove this property!");
}
</script>
<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
  </body>
</html>