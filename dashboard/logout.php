<?php
session_start();
require_once'../connection/connection.php';
//$find=$_GET['id'];
if(isset($_SESSION['logged']) and $_SESSION['logged']==1){
    $name=$_SESSION['logged_id'];
    $check="SELECT * FROM `user` where email='$name'";
    $sql=mysqli_query($connection, $check);
    while($data=mysqli_fetch_array($sql)){
        $fname=$data['fname'];
        $lname=$data['lname'];
        $email=$data['email'];
    }
}
else{
    echo"<script type='text/JavaScript'>window.location='../login.php';</script>";
}
?>
<?php
$sql="UPDATE `user` WHERE username='{$email}' and session='1'";// aha niho ruzingiye rero mn
$query=mysqli_query($connection, $sql);
if ($query=1) {
session_unset();
session_destroy();
echo "<script type='text/javascript'>window.location='../login.php';</script>";
}
?>
