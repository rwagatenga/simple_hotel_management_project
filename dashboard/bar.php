<?php
	header('Content-Type: application/json');
	require_once '../connection/connection.php';
	$data = [];
	$jan = mysqli_fetch_assoc(mysqli_query($connection, "SELECT SUM(amount) AS total1 FROM hotel WHERE MONTH(`dates`) = 12"));
	// echo implode($jan);
	array_push($data, implode($jan));
	$feb = mysqli_fetch_assoc(mysqli_query($connection, "SELECT SUM(amount) AS total2 FROM hotel WHERE MONTH(`dates`) = 2"));
	array_push($data, implode($feb));
	$mar = mysqli_fetch_assoc(mysqli_query($connection, "SELECT SUM(amount) AS total3 FROM hotel WHERE MONTH(`dates`) = 3"));
	array_push($data, implode($mar));
	$ap = mysqli_fetch_assoc(mysqli_query($connection, "SELECT SUM(amount) AS total4 FROM hotel WHERE MONTH(`dates`) = 4"));
	array_push($data, implode($ap));
	$ma = mysqli_fetch_assoc(mysqli_query($connection, "SELECT SUM(amount) AS total5 FROM hotel WHERE MONTH(`dates`) = 5"));
	array_push($data, implode($ma));
	$ju = mysqli_fetch_assoc(mysqli_query($connection, "SELECT SUM(amount) AS total6 FROM hotel WHERE MONTH(`dates`) = 6"));
	array_push($data, implode($ju));
	$jl = mysqli_fetch_assoc(mysqli_query($connection, "SELECT SUM(amount) AS total7 FROM hotel WHERE MONTH(`dates`) = 7"));
	array_push($data, implode($jl));
	$ag = mysqli_fetch_assoc(mysqli_query($connection, "SELECT SUM(amount) AS total8 FROM hotel WHERE MONTH(`dates`) = 8"));
	array_push($data, implode($ag));
	$se = mysqli_fetch_assoc(mysqli_query($connection, "SELECT SUM(amount) AS total9 FROM hotel WHERE MONTH(`dates`) = 9"));
	array_push($data, implode($se));
	$oc = mysqli_fetch_assoc(mysqli_query($connection, "SELECT SUM(amount) AS total10 FROM hotel WHERE MONTH(`dates`) = 10"));
	array_push($data, implode($oc));
	$nov = mysqli_fetch_assoc(mysqli_query($connection, "SELECT SUM(amount) AS total FROM hotel WHERE MONTH(`dates`) = 11"));
	array_push($data, implode($nov));
	$de = mysqli_fetch_assoc(mysqli_query($connection, "SELECT SUM(amount) AS total12 FROM hotel WHERE MONTH(`dates`) = 12"));
	array_push($data, implode($de));
	// $tot = 
	// $sqlQuery = "SELECT dates FROM customer ORDER BY dates ASC";
	// $result = mysqli_query($connection, $sqlQuery);
	// $data = array();
	// foreach ($result as $row) {
	// 	$data[] = $row;
	// }
	// foreach ($data as $rows) { 
	// 	echo date("m",strtotime($row['dates']));
	// 	// if (substr($rows['dates'], 4) == 1) {
	// 	// 	$count = mysqli_num_rows($result);
	// 	// 	echo $count;
	// 	// }
	// 	// break;
	// }
	$sum = 0;
	for ($i=0; $i < count($data); $i++) { 
		$sum += (int)$data[$i];
	}
	array_push($data, $sum);
	echo json_encode($data);
?>