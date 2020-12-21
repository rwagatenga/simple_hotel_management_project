<?php
	session_start();
	include('../connection/connection.php');

	if(isset($_POST['signin'])){
		$email=$_POST['email'];
		$password=$_POST['password'];//sha1($_POST['password']);
		if(empty($email) and empty($password)){
			echo'<p style="color:red;background:#efefef;text-align:center;font-size:20px;width:80%;margin:auto;padding:4px 0px;">Fill out all fields</p>';
		}
		else{
			$password = sha1($_POST['password']);
			$check="SELECT * FROM `admin` where email='$email' and password='$password'";
			$sql=mysqli_query($conn,$check);
					                 
			if($sql){
				if(mysqli_num_rows($sql)>0){
					while($data=mysqli_fetch_array($sql)){
					  $_SESSION['logged_id']=$data['email']; 
					}
					$_SESSION['logged']=1;
					 
					echo"<script type='text/javascript'>window.location='home.php';</script>";
				}
				else{
					echo'<p style="color:red;background:#efefef;text-align:center;font-size:20px;width:80%;margin:auto;padding:4px 0px;">Invalid email or password</p>';
				}	
			}
			else{
				echo'<p style="color:green;background:#efefef;text-align:center;font-size:20px;width:80%;margin:auto;padding:4px 0px;">Something went wrong!</p>';
			}
		}
	}

?>