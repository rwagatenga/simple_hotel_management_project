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
            <a class="nav-link active" href="rooms.php">
              <span data-feather="plus"></span>
              Add Rooms <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adduser.php">
              <span data-feather="plus users"></span>
              Add User
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user.php">
              <span data-feather="users"></span>
              User Account
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-dark" data-aos="zoom-in" style="color: white">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Rooms</h1>
      </div>
      <!-- Add Room -->
      <?php
        //INSERTING SERVICES
        if (isset($_POST['add'])) {
          $room_number = $_POST['room_number'];
          $room_type = $_POST['room_type'];
          $price = $_POST['price'];
          $query1 ="INSERT INTO room(room_id,room_number,room_type,satus,price)
            VALUES('',$room_number','$room_type',1,'$price')";
          $query_run = mysqli_query($connection,$query1);
          if ($query_run) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Room Added Successfully.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
          }
          else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Check your inputs, Room was not added.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
          }        
        }
      ?>
      <form action="" method="POST">
        <div class="form-row">
          <div class="col-md-3 mb-3">
            <label for="validationDefault01">Room No</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="RS012" name="service_name" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationDefault01">Room Type</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="Single/Double" name="description" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationDefault01">Price</label>
            <input type="number" class="form-control" id="validationDefault01" placeholder="100" name="price" required>
          </div>
          <button class="btn btn-primary" name="add" style="margin-left: 10px;height: 45px;margin-top: 20px">Add</button>
        </div>
      </form>
      <!-- End of Add Room -->

      <!-- View Rooms -->
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">View Rooms</h1>
      </div>
      <div class="table-responsive">
        <table class="table table-hover table-striped table-sm" style="color: white;font-size: 17px;margin-top: 30px;">
          <thead>
            <tr>
              <th>No#</th>
              <th>Room No</th>
              <th>Room Type</th>
              <th>Price</th>
              <th colspan="3">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $count = 0;
              $query = mysqli_query($connection, "SELECT * FROM room");
              while ($row = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".($count += 1). "</td>";
                echo "<td>".$row['room_number']."</td>";
                echo "<td>".$row['room_type']."</td>";
                echo "<td>".$row['price']."</td>";
                echo '<td><button class="btn btn-primary">Edit</button>';
                echo '<td><button class="btn btn-danger">Delete</button>';
                echo '<td><button class="btn btn-info">'.$row['status'] = 1 ? 'Enabled' : 'Disabled</button></td>';
                echo "</tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
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
