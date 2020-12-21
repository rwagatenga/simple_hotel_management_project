<?php
session_start();
require_once'connection/connection.php';
if (isset($data['login'])) {
  $emails=$data['email'];
    $check="SELECT * FROM `user` where email='$emails'";
    $sql=mysqli_query($conn,$check);
    while($data=mysqli_fetch_array($sql)){
        $email=$data['email'];
    }
  }
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>ECG Hotel</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- CSS -->
    <link
	    rel="stylesheet"
	    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
	  />
	  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <style type="text/css">
    	.container .container {
    		height: 63.7vh;
    	}
    </style>
</head>
<body>
<div class="container">
    	<!-- Navs -->		
    	<nav class="navbar navbar-expand-lg navbar-dark">
		  <a class="navbar-brand" href="#">
		    <img src="images/logo.png" class = "logo">
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php#services">Services</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php#gallery">Gallery</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php#contactUs">Contact Us</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
		      </li>
		      <!-- <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Dropdown
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Action</a>
		          <a class="dropdown-item" href="#">Another action</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
		      </li> -->
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		</nav>
		<!--- End of Navs -->
		<br/><br/><br/>
		<!-- Login Form -->
		<div class="container animate__zoomIn" data-aos="zoom-in-right">
			<h2>Sign In Form</h2>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<!-- PHP Script -->
					<?php

						if(isset($_POST['signin'])){
							$email=$_POST['email'];
							$password=$_POST['password'];//sha1($_POST['password']);
							if(empty($email) and empty($password)){
								echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							  <strong>Error!</strong> Empty E-mail or Password.
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>';
																// echo'<p style="color:red;background:#efefef;text-align:center;font-size:20px;width:80%;margin:auto;padding:4px 0px;">Fill out all fields</p>';
							}
							else{
								// $password = sha1($_POST['password']);
								$check="SELECT * FROM `user` where email='$email' and password='$password'";
								$sql=mysqli_query($connection,$check);
										                 
								if($sql){
									if(mysqli_num_rows($sql)>0){
										while($data=mysqli_fetch_array($sql)){
										  $_SESSION['logged_id']=$data['email']; 
										}
										$_SESSION['logged']=1;
										 
										echo"<script type='text/javascript'>window.location='dashboard/index.php';</script>";
									}
									else{
										echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
							  <strong>Error!</strong> Invalid E-Mail or Password.
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>';
									}	
								}
								else{
									echo'<p style="color:green;background:#efefef;text-align:center;font-size:20px;width:80%;margin:auto;padding:4px 0px;">Something went wrong!</p>';
								}
							}
						}
					?>
					<!-- End of PHP -->
					<form action="" method="POST">
						<label for="validationDefault01">E-Mail</label>
			      <input type="text" class="form-control" id="validationDefault01" placeholder="example@example" name="email" required><br/>
			      <label for="validationDefault01">Password</label>
			      <input type="password" class="form-control" id="validationDefault01" placeholder="XXXXXXXX" name="password" required>
    				<br/>
    				Don't have Account <a href="signup.php">SignUp</a>
    				<br/><br/>
    				<button class="btn btn-primary" name="signin">SignIn</button>
					</form>
				</div>
			</div>
		</div>
		<!-- End of Login Form -->
		<br/>
		<center>
  		<div class="footer">
      	copy &copy; 2020 ECG Hotel
    	</div>
    </center>
	</div>


<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="bootstrap-4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="js/backToTop.js"></script>
    <script type="text/javascript" src="js/modal.js"></script>
		<script>
		  AOS.init();
		</script>
</body>
</html>