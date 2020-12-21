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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
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

<div class="container-fluid animate__zoomIn" data-aos="zoom-in-down">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">
              <span data-feather="plus"></span>
              Add Services
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rooms.php">
              <span data-feather="plus"></span>
              Add Rooms
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

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-dark" style="color: white">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <canvas class="my-4 w-100" id="myChart" width="100%" height="100%"></canvas>
          </div>
          <div class="col-6">
            <canvas class="my-4 w-100" id="myBar" width="100%" height="100%"></canvas>
          </div>
        </div>
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

    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../bootstrap-4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <!-- <script type="text/javascript" src="dashboard.js"></script> -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript">
      var response = $.ajax({
        cache: true,
        type:"GET",
        url: "chart.php",
                    
        success:function(value){
          var ctx = document.getElementById('myChart').getContext('2d');
          var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
              ],
                datasets: [{
                    label: '# Total Customers: '+value[12].toLocaleString(),
                    fontColor : '#fff',
                    data: [ 
                      value[0], 
                      value[1],
                      value[2],
                      value[3],
                      value[4],
                      value[5],
                      value[6],
                      value[7],
                      value[8],
                      value[9],
                      value[10],
                      value[11]
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 142, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(93, 227, 138, 0.3)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(93, 227, 138, 0.3)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(93, 227, 138, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(93, 227, 138, 1)',
                    ],
                    borderWidth: 2
                }]
            },
            options: {
              legend: {
                  labels: {
                      fontColor: "white",
                      fontSize: 16
                  }
              },
                scales: {
                  xAxes: [{
                     ticks: {
                        fontColor: "white",
                        fontSize: 16
                     }
                  }],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            fontColor: "white",
                            fontSize: 16
                        }
                    }]
                }
            }
        });
        }
      });
    </script>
    <script type="text/javascript">
      var response = $.ajax({
        cache: true,
        type:"GET",
        url: "bar.php",
                    
        success:function(value){
          var ctx = document.getElementById('myBar').getContext('2d');
            var myChart = new Chart(ctx, {
              type: 'line',
              data: {
                labels: [
                  'Jan',
                  'Feb',
                  'Mar',
                  'Apr',
                  'May',
                  'Jun',
                  'Jul',
                  'Aug',
                  'Sep',
                  'Oct',
                  'Nov',
                  'Dec'
                ],
                datasets: [{
                  label: '# Total Incomes: $'+value[12].toLocaleString() ,
                  fontColor : '#fff',
                  data: [ 
                    value[0], 
                    value[1], 
                    value[2], 
                    value[3], 
                    value[4], 
                    value[5], 
                    value[6], 
                    value[7], 
                    value[8], 
                    value[9], 
                    value[10], 
                    value[11]
                  ],
                  backgroundColor: [
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(255, 99, 142, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(93, 227, 138, 0.3)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(93, 227, 138, 0.3)',
                  ],
                  borderColor: [
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(93, 227, 138, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(93, 227, 138, 1)',
                  ],
                  borderWidth: 2
                }]
              },
              options: {
                legend: {
                    labels: {
                      fontColor: "white",
                      fontSize: 16
                  }
                },
                scales: {
                  xAxes: [{
                    ticks: {
                      fontColor: "white",
                      fontSize: 16
                    }
                  }],
                  yAxes: [{
                    ticks: {
                      beginAtZero: true,
                      fontColor: "white",
                      fontSize: 16
                    }
                  }]
                }
              }
            });
          } 
      }); 
    </script>
  </body>
</html>
