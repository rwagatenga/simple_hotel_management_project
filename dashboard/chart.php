<?php
	header('Content-Type: application/json');
	require_once '../connection/connection.php';
	$data = [];
	$jan = mysqli_num_rows(mysqli_query($connection, "SELECT MONTH(`check_in`) FROM customer WHERE MONTH(`check_in`) = 1"));
	array_push($data, $jan);
	$feb = mysqli_num_rows(mysqli_query($connection, "SELECT MONTH(`check_in`) FROM customer WHERE MONTH(`check_in`) = 2"));
	array_push($data, $feb);
	$mar = mysqli_num_rows(mysqli_query($connection, "SELECT MONTH(`check_in`) FROM customer WHERE MONTH(`check_in`) = 3"));
	array_push($data, $mar);
	$ap = mysqli_num_rows(mysqli_query($connection, "SELECT MONTH(`check_in`) FROM customer WHERE MONTH(`check_in`) = 4"));
	array_push($data, $ap);
	$ma = mysqli_num_rows(mysqli_query($connection, "SELECT MONTH(`check_in`) FROM customer WHERE MONTH(`check_in`) = 5"));
	array_push($data, $ma);
	$ju = mysqli_num_rows(mysqli_query($connection, "SELECT MONTH(`check_in`) FROM customer WHERE MONTH(`check_in`) = 6"));
	array_push($data, $ju);
	$jl = mysqli_num_rows(mysqli_query($connection, "SELECT MONTH(`check_in`) FROM customer WHERE MONTH(`check_in`) = 7"));
	array_push($data, $jl);
	$ag = mysqli_num_rows(mysqli_query($connection, "SELECT MONTH(`check_in`) FROM customer WHERE MONTH(`check_in`) = 8"));
	array_push($data, $ag);
	$se = mysqli_num_rows(mysqli_query($connection, "SELECT MONTH(`check_in`) FROM customer WHERE MONTH(`check_in`) = 9"));
	array_push($data, $se);
	$oc = mysqli_num_rows(mysqli_query($connection, "SELECT MONTH(`check_in`) FROM customer WHERE MONTH(`check_in`) = 10"));
	array_push($data, $oc);
	$nov = mysqli_num_rows(mysqli_query($connection, "SELECT MONTH(`check_in`) FROM customer WHERE MONTH(`check_in`) = 11"));
	array_push($data, $nov);
	$de = mysqli_num_rows(mysqli_query($connection, "SELECT MONTH(`check_in`) FROM customer WHERE MONTH(`check_in`) = 12"));
	array_push($data, $de);
	// $sqlQuery = "SELECT check_in FROM customer ORDER BY check_in ASC";
	// $result = mysqli_query($connection, $sqlQuery);
	// $data = array();
	// foreach ($result as $row) {
	// 	$data[] = $row;
	// }
	// foreach ($data as $rows) { 
	// 	echo date("m",strtotime($row['check_in']));
	// 	// if (substr($rows['check_in'], 4) == 1) {
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