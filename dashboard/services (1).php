<?php

require_once'db.php';
//INSERTING SERVICES
if (isset($_POST['add'])) {

  $name = $_POST['service_name'];
  $cat = $_POST['service_cat'];
  $price = $_POST['service_price'];
  $images = $_FILES["service_image"]['name'];
  $desc = $_POST['service_desc'];
  
  if (file_exists("upload/" .$_FILES["service_image"]["name"]))
  {
  $store = $_FILES["service_image"]["name"];
  // $_SESSION['status'] = "Service Image arleady Exixts you can rename it and upload again.'.$store.'";
  // header('location:service.php');
  echo"<script> alert('Service Image arleady Exixts you can rename it and upload again!');</script>";
  echo"<script> window.open('services.php','_self')</script>";
  
  
  }
  
  else
  {
  $query ="INSERT INTO tbl_services(tbl_ServicesName,tbl_servicesType,tbl_servicesPrice,tbl_servicesImage,tbl_servicesDesc,visible) 
  VALUES('$name','$cat','$price','$images','$desc',0)";
  
  $query_run = mysqli_query($connection,$query);
  
  if ($query_run) {
  move_uploaded_file($_FILES["service_image"]["tmp_name"],"upload/".$_FILES["service_image"]["name"]);

  echo"<script> alert('Your Service is Added!');</script>";
  echo"<script> window.open('services.php','_self')</script>";
  
  }
  else
  {

  echo"<script> alert('Your Service is Not Added!');</script>";
  echo"<script> window.open('services.php','_self')</script>";
  
  
  }
  }
  
  
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
      table tr:hover {
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
      <a class="nav-link" href="#">Sign out</a>
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
            <a class="nav-link active" href="services.php">
              <span data-feather="plus"></span>
              Add Services <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rooms.php">
              <span data-feather="plus"></span>
              Add Rooms
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="reports.php">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="user.php">
              <span data-feather="users"></span>
              User Account
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-dark animate__zoomIn" data-aos="zoom-in" style="color: white">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Service</h1>
      </div>
      <!-- Add Services -->
      <form action="" method="POST">
        <div class="form-row">
          <div class="col-md-3 mb-3">
            <label for="validationDefault01">Service Name</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="Lodging" name="service_name" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationDefault01">Service Type</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="Single/Double" name="service_cat" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationDefault01">Description</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="allowed swiming pool" name="service_desc" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationDefault01">Price</label>
            <input type="number" class="form-control" id="validationDefault01" placeholder="100" name="service_price" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationDefault01">Service Image</label>
            
            <input type="file" class="form-control" id="validationDefault01" placeholder="Single/Double" name="service_image" required>
          </div>
          <button class="btn btn-primary" name="add" style="height: 50px;margin-top: 20px">Add</button>
        </div></form>
      <!-- End of Add Service -->

      <!-- View Services -->
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">View Services</h1>
      </div>
      <div class="table-responsive">
        <table class="table table-hover table-sm" style="color: white;font-size: 17px;margin-top: 30px;">
          <thead>
            <tr>
              <th>No#</th>
              <th>Service Name</th>
              <th>Description</th>
              <th>Price</th>
              <th colspan="3">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Lodging</td>
              <td>Single</td>
              <td>$100</td>
              <td>
                <span  data-feather="edit-2" title="Edit"></span>
              </td>
              <td>
                <span  data-feather="trash-2" title="Delete"></span>
              </td>
              <td>
                <span  data-feather="thumbs-down" title="Disable"></span>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Swimming Pool</td>
              <td>Single</td>
              <td>$10</td>
              <td>
                <span  data-feather="edit-2" title="Edit"></span>
              </td>
              <td>
                <span  data-feather="trash-2" title="Delete"></span>
              </td>
              <td>
                <span  data-feather="thumbs-down" title="Disable"></span>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>GYM</td>
              <td>Single Per Month</td>
              <td>$50</td>
              <td>
                <span  data-feather="edit-2" title="Edit"></span>
              </td>
              <td>
                <span  data-feather="trash-2" title="Delete"></span>
              </td>
              <td>
                <span  data-feather="thumbs-down" title="Disable"></span>
              </td>
            </tr>
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
