<?php
$mysqli = new mysqli("localhost","root","","house");
	if($mysqli->connect_error)
		die("Database connection failed ".$mysql->connect_error);
?>
<?php
 //ini_set('display_errors', 1);
if(isset($_POST['submit']))
{
$sql = "INSERT INTO signup (fullname, email, password,cpassword) VALUES (?, ?, ?,?)";
 
if($stmt =$mysqli->prepare($sql)){
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("ssss", $_POST['uname'], $_POST['email'], $_POST['psw'],$_POST['cpsw']);
   
    $stmt->execute();
    header("Location:login.php");
    
} else{
    echo "ERROR: Could not prepare query: $sql. " . $conn->error;
}
 
// Close statement
$stmt->close();
 
// Close connection
$mysqli->close();
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
	</section>
	
	 <div class="container" style="margin-top:20px;">
  <div class="row">
    <div class="col-sm-12 col-md-5" >
    <form action="" style="background-color:#FBEEB6;" method="post" name = "myForm" onSubmit="return validateForm()">
  <div class="imgcontainer">
    <h2>Signup</h2>
  </div>

  <div class="container">
    <label for="uname"><b>Name</b></label>
    <input type="text" placeholder="Enter Fullname" name="uname" id="uname" >
  <b class="form-text text-danger" id="unameError"></b>  
    <label for="psw"><b>E-mail</b></label>
    <input type="text" placeholder="Enter E-mail" name="email" id="email">
	<b class="form-text text-danger" id="emailError"></b>  
	<label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw">
	<b class="form-text text-danger" id="pswError"></b>  
	<label for="psw"><b> Confirm Password</b></label>
    <input type="password" placeholder="Enter Password" name="cpsw" id="cpsw">
	<b class="form-text text-danger" id="cpswError"></b>  

    <button type="submit" id="submit">Signup</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" onclick="window.location.href='login.php'" class="cancelbtn">Login</button>
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
	<script src="sign.js"></script>


	<!-- load for map -->
</body>
</html>