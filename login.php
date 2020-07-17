<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="house";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<?php
if(isset($_POST['submit'])){
	$user=$_POST['uname'];
	$password=$_POST['psw'];
	$query="SELECT * FROM `signup` WHERE `email` = '$user' And `password`='$password'";
	$result=mysqli_query($conn,$query);
	$row=mysqli_num_rows($result);
	print_r($row);
	if($row < 1)
	{
		?>
		
		<script>
		alert('Email and Password nat matched!!')
		window.open('login.php')
		</script>
		<?php
	}
	else
	{
		$data=mysqli_fetch_assoc($result);
		$id=$data['id'];
		//echo "id".$id;
		session_start();
		$_SESSION['uid']=$id;
		header('location:profile.php');
	}
}

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
<style>
body {font-family: Arial, Helvetica, sans-serif; background-color:#B4CDF1;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}
button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
span.psw {
  float: right;
  padding-top: 16px;
}
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

</style>
</head>
<body>
	<!-- Page Preloder 
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
	</section>-->
	
	 <div class="container" style="margin-top:20px;">
  <div class="row">
    <div class="col-sm-12 col-md-4" >
    <form action="" style="background-color:#FBEEB6;" method="post">
  <div class="imgcontainer">
    <h2>Login</h2>
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" id="uname">
   <b class="form-text text-danger" id="emailError"></b> 
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw">
   <b class="form-text text-danger" id="emailError"></b> 
    <button type="submit" id="submit" name="submit" onclick="validate()">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="sign.php" class="btn btn-info" role="button">Signup</a>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
  </form>
  </div>
  </div>
  </div>
	<!--  Page top end -->                                    
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