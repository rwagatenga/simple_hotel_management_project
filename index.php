<?php
	require_once'connection/connection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/index.css">
     <link
	    rel="stylesheet"
	    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
	  />
	  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	  
    <title>EGC Hotel</title>
  </head>
  <body>
    <div class="container">
    	<!-- Navs -->		
    	<nav class="navbar navbar-expand-lg navbar-dark sticky-top " >
		  <a class="navbar-brand" href="#">
		    <img src="images/logo.png" class = "logo">
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#services">Services</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#gallery">Gallery</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#contactUs">Contact Us</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="login.php">Login</a>
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

		<!--- Carousel -->
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="images/deluxe-room.jpg" class="d-block w-100" alt="deluxe-room" height="520">
		      <div class="carousel-caption d-none d-md-block">
		        <h5>One Personal Room</h5>
		        <p>This is a room for Only one Person.</p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="images/double.jpg" class="d-block w-100" alt="double" height="520">
		      <div class="carousel-caption d-none d-md-block">
		        <h5>Two Person's Room</h5>
		        <p>This is a room for two Persons.</p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="images/pool.jpg" class="d-block w-100" alt="pool" height="520">
		      <div class="carousel-caption d-none d-md-block">
		        <h5>Swimming Pool</h5>
		        <p>This is Pool you can use at our Hotel.</p>
		      </div>
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<!-- End of Carousel -->
		<!-- Service Section -->
		<div name="services" id="services" >
			<br/><br/><br/><br/>
			<center><h1 class="animate__zoomIn">Services </h1></center>
			<div class="row row-cols-1 row-cols-md-3">
  			<div class="col mb-4" data-aos="fade-down-right">
					<div class="card text-white bg-dark mb-3" style="width: 18rem;">
				  	<div class="card-header">
					    <h5 class="card-title">deluxe Room</h5>
					  </div>
				  	<img src="images/deluxe-room.jpg" class="card-img-top" alt="Deluxe">
					  <div class="card-body">
					    <h5 class="card-title">Price: $100</h5>
					    <p class="card-text">One Night including Breakfast Swimming Pool, GYM/Aerobics.</p>
					  </div>
					  <div class="card-footer text-muted">
					    <button type="button" class="btn btn-primary" id="myBtns">Booking</button>
					  </div>
					</div>
				</div>
  			<div class="col mb-4" data-aos="flip-left">
  				<div class="card text-white bg-dark mb-3" style="width: 18rem;">
				  	<div class="card-header">
					    <h5 class="card-title">Double</h5>
					  </div>
				  	<img src="images/double.jpg" class="card-img-top" alt="Double">
					  <div class="card-body">
					    <h5 class="card-title">Price: $150</h5>
					    <p class="card-text">One Night including Breakfast Swimming Pool, GYM/Aerobics.</p>
					  </div>
					  <div class="card-footer text-muted">
					    <a href="#" class="btn btn-primary" id="myBooking">Booking</a>
					  </div>
					</div>
  			</div>
  			<div class="col mb-4" data-aos="fade-down-left">
  				<div class="card text-white bg-dark mb-3" style="width: 18rem;">
				  	<div class="card-header">
					    <h5 class="card-title">Swimming Pool</h5>
					  </div>
				  	<img src="images/pool.jpg" class="card-img-top" alt="Pool" style="height: 12rem;">
					  <div class="card-body">
					    <h5 class="card-title">Price: $20</h5>
					    <p class="card-text">One Day including Snacks and Soft Drinks.</p>
					  </div>
					  <!-- <div class="card-footer text-muted">
					    <a href="#" class="btn btn-primary">Booking</a>
					  </div> -->
					</div>
  			</div>
			</div>
		</div>
		<!-- End of Service Section -->
		<br/>
		<!-- Gallery Section-->
		<div name="gallery" id="gallery">
			<center><h1 class="animate__zoomIn">Gallery </h1></center>
			<div class="row row-cols-1 row-cols-md-3">
  			<div class="col mb-3" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="3000">
					<div class="card" style="width: 18rem;">
					  <img src="images/deluxe-room.jpg" class="card-img-top" alt="deluxe-room">
					  <!-- <div class="card-body">
					  </div> -->
					</div>
				</div>
				<div class="col mb-3" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="3000">
					<div class="card" style="width: 18rem;">
						<img src="images/double.jpg" class="card-img-top" alt="deluxe-room">
					  <!-- <div class="card-body">
					  </div> -->
					</div>
				</div>
				<div class="col mb-3" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="3000">
					<div class="card" style="width: 18rem;">
						<img src="images/pool.jpg" class="card-img-top" alt="pool" style="height: 12rem;">
					  <!-- <div class="card-body">
					  </div> -->
					</div>
				</div>
				<div class="col mb-3" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="3000">
					<div class="card" style="width: 18rem;">
						<img src="images/gym.jpg" class="card-img-top" alt="gym">
					  <!-- <div class="card-body">
					  </div> -->
					</div>
				</div>
				<div class="col mb-3" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="3000">
					<div class="card" style="width: 18rem;">
						<img src="images/restaurant.jpg" class="card-img-top" alt="restauration">
					  <!-- <div class="card-body">
					  </div> -->
					</div>
				</div>
				<div class="col mb-3" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="3000">
					<div class="card" style="width: 18rem;">
						<img src="images/massage.jpg" class="card-img-top" alt="massage">
					  <!-- <div class="card-body">
					  </div> -->
					</div>
				</div>
			</div>
		</div>
		<!-- End of Gallery Section -->
		<br/><br/><br/><br/>
		<!-- Contact Us Section -->
		<div name="contactUs" id="contactUs">
			<center><h1 class="animate__zoomIn">Contact Us </h1></center>
			<div class="container">
				<div class="row">
					<div class="col-md-6" data-aos="fade-right">
						<form>
						<label for="validationDefault01">Full Name</label>
			      <input type="text" class="form-control" id="validationDefault01" placeholder="KARANGWA Mark" name="full_name" required>
			      <label for="validationDefault01">E-Mail</label>
			      <input type="text" class="form-control" id="validationDefault01" placeholder="example@example" name="email" required>
			      <label for="exampleFormControlTextarea1">Message</label>
    				<textarea class="form-control" id="message" rows="5"></textarea>
    				<br/>
    				<button class="btn btn-primary">Contact</button>
					</form>
					</div>
					<div class="col-md-6" data-aos="fade-left">
						<br/>
						<div class="well"><div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="89%" id="gmap_canvas" src="https://maps.google.com/maps?q=Bugesera%20Airport%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:331px;width:513px;}.lic{position:absolute;z-index:999;bottom:-14px;right:0;font-size:11px;font-family:arial;color:#666;}.gmap_canvas {overflow:hidden;background:none!important;height:331px;width:513px;}</style></div></div>
					</div>
				</div>
			</div>
		</div>
		<!-- End of Contact Us Section -->
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
		<!-- Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
    	<h5>Reserve a Room</h5>
      <span class="close">&times;</span>
    </div>
    <?php
    	if (isset($_POST['reserve'])) {
    		$roomNumber;
    		$roomId;
    		$nid = $_POST['nid'];
				$first_name = $_POST['first_name'];
				$last_name = $_POST['last_name'];
				$age = $_POST['age'];
				$email = $_POST['email'];
				$country = $_POST['country'];
				$gender = $_POST['gender'];
				$phone = $_POST['phone'];
				$credit_card = $_POST['credit_card'];
				$check_in = $_POST['check_in'];
				$check_out = $_POST['check_out'];
				$amount = $_POST['amount'];
				$roomType = $_POST['roomType'];
				$amount = substr($amount, 1);
				// Check if username or email exist
				$sql_n = "SELECT * FROM credit_card WHERE card_number='$credit_card' AND card_amount >= '$amount'";
				$res_n = mysqli_query($connection, $sql_n);
				$rooms = mysqli_query($connection, "SELECT * FROM room WHERE status = 1 AND room_type = '$roomType'");

				if (empty($rooms)) {
					echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
								  <strong>Error!</strong> Rooms are Unavailable.
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				 					    <span aria-hidden="true">&times;</span>
				 					  </button>
				 					</div>';
				} else {
					while ($row = mysqli_fetch_assoc($rooms)) {
						$roomId = $row['room_id'];
						$roomNumber = $row['room_number'];
					}
					if(mysqli_num_rows($res_n) > 0){
					while($row = mysqli_fetch_assoc($res_n)){
						$card_amount = $row['card_amount'];
					}
						
						$card_amount -= $amount;
						$updateAmount= "UPDATE credit_card SET card_amount='$card_amount' WHERE card_number='$credit_card'";
						$queryAmount = mysqli_query($connection, $updateAmount);
						$insertCustomer = "INSERT into customer (c_id,first_name,last_name,age,country
							,gender,phone,email,nid,credit_card,amount,check_in,check_out) 
							VALUES('','$first_name','$last_name','$age','$country','$gender','$phone'
							,'$email','$nid','$credit_card','100','$check_in','$check_out')";
						$queryCustomer = mysqli_query($connection,$insertCustomer);

							//insert amount to the hotel
						$insertHotel = "INSERT into hotel (id,amount) 
								VALUES('','$amount')";
						$queryHotel = mysqli_query($connection,$insertHotel);
						if ($queryAmount && $queryCustomer && $queryHotel) {
						
							$selectLast = mysqli_query($connection, "SELECT * FROM customer ORDER BY c_id LIMIT 1");
							$cId;
							while ($row = mysqli_fetch_assoc($selectLast)) {
								$cId = $row['c_id'];
							}
							$inserBooking = mysqli_query($connection, "INSERT INTO booking (book_id, customer_id, room_id, service_id, in_date, out_date) VALUES ('', '$cId', '$roomId', 1, '$check_in', '$check_out')");
							if ($inserBooking) {
								// Multiple recipients
								$to = $_POST['email']; // note the comma

								// Subject
								$subject = 'Room Reservation at ECG Hotel';

								// Message
								$message = '
								<html>
								<head>
								  <title>ECG Hotel</title>
								</head>
								<body>
								  <h2>Welcome Dear '.$first_name.' '.$last_name.' !</h2>
								  You Reserved a '.$roomType.' Room in our Hotel<br/>
								  Your Check In: '.$check_in.'<br/>
								  Your Check Out: '.$check_out.'<br/><br/><br/>

								  <h3>Thank You, We are waiting for you !!</h3>

								</body>
								</html>
								';

								// To send HTML mail, the Content-type header must be set
								$headers[] = 'MIME-Version: 1.0';
								$headers[] = 'Content-type: text/html; charset=iso-8859-1';

								// Additional headers
								$headers[] = 'To: '.$first_name.' <'.$email.'>';
								$headers[] = 'From: ECG Hotel <ecghotel@ecghotel.rw';
								// Mail it
								mail($to, $subject, $message, implode("\r\n", $headers));

								echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
									  <strong>Success!</strong> Successfully Booked.
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									    <span aria-hidden="true">&times;</span>
									  </button>
									</div>';
							}
						}
					else {
						echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
								  <strong>Error!</strong> Failed to Reserve.
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								  </button>
								</div>';
					}
				} 
				else {
					echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
								  <strong>Error!</strong> Insuffiecient Money to book .
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								  </button>
								</div>';
				}
				}
    	}
    ?>
    <form action="" method = "POST">
    <div class="modal-body">
      
			  <div class="form-row">
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault01">First name</label>
			      <input type="text" class="form-control" id="validationDefault01" placeholder="KARANGWA" name="first_name" required>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault02">Last name</label>
			      <input type="text" class="form-control" id="validationDefault02" placeholder="Mark" name="last_name" required>
			    </div>
			  	<div class="col-md-3 mb-3">
			      <label for="validationDefault02">E-Mail</label>
			      <input type="text" class="form-control" id="validationDefault02" placeholder="example@example" name="email" required>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault02">Phone Number</label>
			      <input type="text" class="form-control" id="validationDefault02" placeholder="+2507XX XXX XX" name="phone" required>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault02">NID/Passport No</label>
			      <input type="text" class="form-control" id="validationDefault02" placeholder="X XXXX X XXXXXXX X XX" name="nid" required>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault03">Country</label>
			      <input type="text" class="form-control" id="validationDefault02" placeholder="Rwanda" name="country" required>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault04">Age</label>
			      <input type="text" class="form-control" id="validationDefault02" placeholder="age" name="age" required>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault04">Gender</label>
			      <input type="text" class="form-control" id="validationDefault02" placeholder="Male" name="gender" required>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault04">Check-In</label>
			      <input type="date" class="form-control" id="checkIn" placeholder="" name="check_in" required onchange="myCheckIn()">
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault04">Check-Out</label>
			      <input type="date" class="form-control" id="checkOut" placeholder="" name="check_out" required onchange="myCheckIn()" >
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault04">Credit Card</label>
			      <input type="text" class="form-control" id="validationDefault02" placeholder="XXXX XXXX XXXX XXXX" name="credit_card" required>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault04">Amount</label>
			      <input type="text" class="form-control" id="amount" placeholder="$XXX" name="amount" value="$100" required readonly>
			    </div>
			      <input type="hidden" class="form-control" id="roomType" placeholder="$XXX" name="roomType" value="single" required readonly>
			  </div>
			  <!-- <button class="btn btn-primary" type="submit">Submit form</button> -->
    </div>
    <div class="modal-footer">
      <button class="btn btn-primary" name="reserve">Booking</button>
    </div>
    </form>
  </div>

</div>
  	<!-- End Modal -->
 <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
    	<h5>Reserve a Room</h5>
      <span class="close">&times;</span>
    </div>
<?php
    	if (isset($_POST['reserve'])) {
    		$roomNumber;
    		$roomId;
    		$nid = $_POST['nid'];
				$first_name = $_POST['first_name'];
				$last_name = $_POST['last_name'];
				$age = $_POST['age'];
				$email = $_POST['email'];
				$country = $_POST['country'];
				$gender = $_POST['gender'];
				$phone = $_POST['phone'];
				$credit_card = $_POST['credit_card'];
				$check_in = $_POST['check_in'];
				$check_out = $_POST['check_out'];
				$amount = $_POST['amount'];
				$roomType = $_POST['roomType'];
				$amount = substr($amount, 1);
				// Check if username or email exist
				$sql_n = "SELECT * FROM credit_card WHERE card_number='$credit_card' AND card_amount >= '$amount'";
				$res_n = mysqli_query($connection, $sql_n);
				$rooms = mysqli_query($connection, "SELECT * FROM room WHERE status = 1 AND room_type = '$roomType'");

				if (empty($rooms)) {
					echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
								  <strong>Error!</strong> Rooms are Unavailable.
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				 					    <span aria-hidden="true">&times;</span>
				 					  </button>
				 					</div>';
				} else {
					while ($row = mysqli_fetch_assoc($rooms)) {
						$roomId = $row['room_id'];
						$roomNumber = $row['room_number'];
					}
					if(mysqli_num_rows($res_n) > 0){
					while($row = mysqli_fetch_assoc($res_n)){
						$card_amount = $row['card_amount'];
					}
						
						$card_amount -= $amount;
						$updateAmount= "UPDATE credit_card SET card_amount='$card_amount' WHERE card_number='$credit_card'";
						$queryAmount = mysqli_query($connection, $updateAmount);
						$insertCustomer = "INSERT into customer (c_id,first_name,last_name,age,country
							,gender,phone,email,nid,credit_card,amount,check_in,check_out) 
							VALUES('','$first_name','$last_name','$age','$country','$gender','$phone'
							,'$email','$nid','$credit_card','100','$check_in','$check_out')";
						$queryCustomer = mysqli_query($connection,$insertCustomer);

							//insert amount to the hotel
						$insertHotel = "INSERT into hotel (id,amount) 
								VALUES('','$amount')";
						$queryHotel = mysqli_query($connection,$insertHotel);
						if ($queryAmount && $queryCustomer && $queryHotel) {
						
							$selectLast = mysqli_query($connection, "SELECT * FROM customer ORDER BY c_id LIMIT 1");
							$cId;
							while ($row = mysqli_fetch_assoc($selectLast)) {
								$cId = $row['c_id'];
							}
							$inserBooking = mysqli_query($connection, "INSERT INTO booking (book_id, customer_id, room_id, service_id, in_date, out_date) VALUES ('', '$cId', '$roomId', 1, '$check_in', '$check_out')");
							if ($inserBooking) {
								// Multiple recipients
								$to = $_POST['email']; // note the comma

								// Subject
								$subject = 'Room Reservation at ECG Hotel';

								// Message
								$message = '
								<html>
								<head>
								  <title>ECG Hotel</title>
								</head>
								<body>
								  <h2>Welcome Dear '.$first_name.' '.$last_name.' !</p>
								  You Reserved a '.$roomType.' Room in our Hotel<br/>
								  Your Check In: '.$check_in.'<br/>
								  Your Check Out: '.$check_out.'<br/><br/><br/>

								  <h3>Thank You, We are waiting for you !!</h3>

								</body>
								</html>
								';

								// To send HTML mail, the Content-type header must be set
								$headers[] = 'MIME-Version: 1.0';
								$headers[] = 'Content-type: text/html; charset=iso-8859-1';

								// Additional headers
								$headers[] = 'To: '.$first_name.' <'.$email.'>';
								$headers[] = 'From: ECG Hotel <ecghotel@ecghotel.rw';
								// Mail it
								if(mail($to, $subject, $message, implode("\r\n", $headers))) {

									echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
										  <strong>Error!</strong> Check Your E-Mail to get Confirmation.
										  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										    <span aria-hidden="true">&times;</span>
										  </button>
										</div>';
								} else {
									echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
										  <strong>Error!</strong> Failed to Send E-Mail.
										  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										    <span aria-hidden="true">&times;</span>
										  </button>
										</div>';
								}
							}
						}
					else {
						echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
								  <strong>Error!</strong> Failed to Reserve.
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								  </button>
								</div>';
					}
				} 
				else {
					echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
								  <strong>Error!</strong> Insuffiecient Money to book .
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								  </button>
								</div>';
				}
				}
    	}
    ?>
    <form action="" method = "POST">
    <div class="modal-body">
      
			  <div class="form-row">
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault01">First name</label>
			      <input type="text" class="form-control" id="validationDefault01" placeholder="KARANGWA" name="first_name" required>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault02">Last name</label>
			      <input type="text" class="form-control" id="validationDefault02" placeholder="Mark" name="last_name" required>
			    </div>
			  	<div class="col-md-3 mb-3">
			      <label for="validationDefault02">E-Mail</label>
			      <input type="text" class="form-control" id="validationDefault02" placeholder="example@example" name="email" required>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault02">Phone Number</label>
			      <input type="text" class="form-control" id="validationDefault02" placeholder="+2507XX XXX XX" name="phone" required>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault02">NID/Passport No</label>
			      <input type="text" class="form-control" id="validationDefault02" placeholder="X XXXX X XXXXXXX X XX" name="nid" required>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault03">Country</label>
			      <input type="text" class="form-control" id="validationDefault02" placeholder="Rwanda" name="country" required>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault04">Age</label>
			      <input type="text" class="form-control" id="validationDefault02" placeholder="age" name="age" required>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault04">Gender</label>
			      <input type="text" class="form-control" id="validationDefault02" placeholder="Male" name="gender" required>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault04">Check-In</label>
			      <input type="date" class="form-control" id="checkIn" placeholder="" name="check_in" required onchange="myCheckIn()">
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault04">Check-Out</label>
			      <input type="date" class="form-control" id="checkOut" placeholder="" name="check_out" required onchange="myCheckIn()" >
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault04">Credit Card</label>
			      <input type="text" class="form-control" id="validationDefault02" placeholder="XXXX XXXX XXXX XXXX" name="credit_card" required>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault04">Amount</label>
			      <input type="text" class="form-control" id="amount" placeholder="$XXX" name="amount" value="$150" required readonly>
			    </div>
			      <input type="hidden" class="form-control" id="roomType" placeholder="$XXX" name="roomType" value="double" required readonly>
			  </div>
			  <!-- <button class="btn btn-primary" type="submit">Submit form</button> -->
    </div>
    <div class="modal-footer">
      <button class="btn btn-primary" name="reserve">Booking</button>
    </div>
    </form>
  </div>

</div>
  	<!-- End Modal -->
  	<center>
  		<div class="footer">
      	copy &copy; 2020 ECG Hotel
    	</div>
    </center>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="bootstrap-4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="js/backToTop.js"></script>
    <script type="text/javascript" src="js/modal.js"></script>
    <script>
		  AOS.init();
		</script>
   	<script type="text/javascript">
   		var checkIn;
   		var checkOut;
   		var amount = document.getElementById("amount").value;
   		amount = amount.substring(1);
   		function myCheckIn() {
   			checkIn = document.getElementById("checkIn").value;
   			date1 = new Date(`"${checkIn}"`);
   			checkOut = document.getElementById("checkOut").value;
   			date2 = new Date(`"${checkOut}"`);
   			// To calculate the time difference of two dates 
				var Difference_In_Time = date2.getTime() - date1.getTime(); 
				  
				// To calculate the no. of days between two dates 
				var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
				newAmount = amount * Difference_In_Days;
				document.getElementById("amount").value = "$"+newAmount;
   		}
   	</script>
   	<script type="text/javascript">
   		var window_width = $(window).width();
		if( window_width <= 600 ){
		  console.log("Screen", window_width);
		}
   	</script>
  </body>
</html>