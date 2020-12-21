<?php
  session_start();
  require_once'../connection/connection.php';
  if(isset($_SESSION['logged']) and $_SESSION['logged']==1){
      $name=$_SESSION['logged_id'];
      $check="SELECT * FROM `user` where email='$name'";
      $sql=mysqli_query($connection, $check);
      while($data=mysqli_fetch_array($sql)){
        $fname = $data['fname'];
          $lname=$data['lname'];
          $email=$data['email'];
      }
  }
  else{
      echo"<script type='text/JavaScript'>window.location='../login.php';</script>";
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>ECG Hotel</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap-4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .table tbody tr:hover {
        background: white;
        color: black;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">ECG Hotel</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">
              <span data-feather="plus"></span>
              Add Services
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="rooms.php">
              <span data-feather="plus"></span>
              Add Rooms
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="adduser.php">
              <span data-feather="plus users"></span>
              Add User <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user.php">
              <span data-feather="user"></span>
              User Account
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-dark" data-aos="zoom-in" style="color: white;">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add User</h1>
      </div>
      <!-- Add Room -->
      <?php
	      function password_generate($chars) {
					$data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
					return substr(str_shuffle($data), 0, $chars);
				}
      	if(isset($_POST['add'])) {
      		$first_name = $_POST['first_name'];
      		$last_name = $_POST['last_name'];
      		$role = $_POST['role'];
      		$phone = $_POST['phone'];
      		$email = $_POST['email'];
      		$salary = $_POST['salary'];
      		if (empty($first_name) || empty($last_name) || empty($role) || empty($phone) || empty($email) || empty($salary)) {
      			echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							  <strong>Error!</strong> Some of your field are empty.
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>';
      		}
      		if (mysqli_num_rows(mysqli_query($connection, "SELECT email, phone FROM user WHERE email = '$email' OR phone = '$phone'")) > 0) {
      			echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							  <strong>Error!</strong> E-mail or Password is already exists.
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>';
      		}
      		$password = password_generate(8);
      		$sql = "INSERT INTO `user` set user_id = '', fname='{$first_name}', lname='$last_name', user_role='$role', phone='$phone', email='$email', salary='$salary', password = '$password'";
      		$query = mysqli_query($connection, $sql);
      		if ($query) {
      			$to = $_POST['email']; // note the comma

								// Subject
								$subject = 'ECG Hotel has added you';

								// Message
								$message = '
								<html>
								<head>
								  <title>ECG Hotel</title>
								</head>
								<body>
								  <h2>Dear '.$first_name.' '.$last_name.' !</h2>
								  ECG Hotel has been added you to their system<br/>
								  <b>User Name or E-Mail: '.$email.' <br/>
								  Password: '.$password. ' <br/></b>
								 <h4>Your Role in System is : '.$role.'</h4>

								  <h3>Thank You, Best Wishes !!</h3>

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
      		} else {
      			echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
									  <strong>Error!</strong> Failed to Register a User.
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									    <span aria-hidden="true">&times;</span>
									  </button>
									</div>';
      		}
      	}
      ?>
      <form action="" method="POST">
      	<div class="form-row">
          <div class="col-md-4 mb-4">
            <label for="validationDefault01">First Name</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="KARANGWA" name="first_name">
          </div>
          <div class="col-md-4 mb-4">
            <label for="validationDefault01">Last Name</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="Mark" name="last_name">
          </div>
          <div class="col-md-4 mb-4">
            <label for="validationDefault01">User Role</label>
            <select type="text" class="form-control" id="validationDefault01" placeholder="Manager" name="role">
            	<option>Manager</option>
            	<option>Receptionist</option>
            	<option>Cooker</option>
            	<option>Waiter</option>
            	<option>Waitress</option>
            </select>
          </div>
          <div class="col-md-4 mb-4">
            <label for="validationDefault01">Telephone</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="07XXX" name="phone" required>
          </div>
          <div class="col-md-4 mb-4">
            <label for="validationDefault01">E-Mail</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="example@example.com" name="email" required>
          </div>
          <div class="col-md-4 mb-4">
            <label for="validationDefault01">Salary</label>
            <input type="number" class="form-control" id="validationDefault01" placeholder="100000" name="salary" required>
          </div>
          <button class="btn btn-primary" name="add"style="width: 100px;height: 45px;margin-top: 0px; margin-left: 0px;padding: 10px;font-size: 17px;font-weight: bold;">Add</button>
        </div>
      </form>
      <!-- End User Account -->
      <!-- View Rooms -->
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">View Users</h1>
      </div>
      <div class="table-responsive">
        <table class="table table-hover table-striped table-sm" style="color: white;font-size: 17px;margin-top: 30px;">
          <thead>
            <tr>
              <th>No#</th>
              <th>Full Name</th>
              <th>Role</th>
              <th>Telephone</th>
              <th>E-Mail</th>
              <th>Salary</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            	$count = 0;
            	$query = mysqli_query($connection, "SELECT * FROM user WHERE user_role != 'admin'");
            	while($row = mysqli_fetch_array($query)) {
            		echo "<tr>";
            		echo "<td>".($count+=1)."</td>";
            		echo "<td>".$row['fname']." ".$row['lname']."</td>";
            		echo "<td>".$row['user_role']."</td>";
            		echo "<td>".$row['phone']."</td>";
            		echo "<td>".$row['email']."</td>";
            		echo "<td>".number_format($row['salary'])." frw</td>";
            		echo '<td><button class="btn btn-primary">Edit</button>';
                echo '<td><button class="btn btn-danger">Delete</button>';
            		echo "</tr>";
            	}
            ?>
          </tbody>
        </table>
    <center>
      <div class="footer">
        copy &copy; 2020 ECG Hotel
      </div>
    </center>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../bootstrap-4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="../js/backToTop.js"></script>
    <script type="text/javascript" src="../js/modal.js"></script>
    <script>
      AOS.init();
    </script>

    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script>
  </body>
</html>
