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
            <a class="nav-link active" href="user.php">
              <span data-feather="user"></span>
              User Account <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-dark" data-aos="zoom-in" style="color: white;">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update User Account</h1>
      </div>
      <!-- Add Room -->
        <div class="form-row">
          <div class="col-md-4 mb-4">
            <label for="validationDefault01">First Name</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="KARANGWA" name="first_name" readonly>
          </div>
          <div class="col-md-4 mb-4">
            <label for="validationDefault01">Last Name</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="Mark" name="last_name" readonly>
          </div>
          <div class="col-md-4 mb-4">
            <label for="validationDefault01">E-Mail</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="example@example.com" name="email" required>
          </div>
          <div class="col-md-4 mb-4">
            <label for="validationDefault01">Telephone</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="07XXX" name="phone" required>
          </div>
          <div class="col-md-4 mb-4">
            <label for="validationDefault01">Current Password</label>
            <input type="password" class="form-control" id="validationDefault01" placeholder="XXX" name="cpass" required>
          </div>
          <div class="col-md-4 mb-4">
            <label for="validationDefault01">New Password</label>
            <input type="password" class="form-control" id="validationDefault01" placeholder="XXX" name="npass" required>
          </div>
          <button class="btn btn-primary" name="add" style="height: 50px;margin-top: 20px">Update</button>
        </div>
      <!-- End User Account -->
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
