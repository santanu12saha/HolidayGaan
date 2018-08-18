<?php
error_reporting(0);
session_start();
if($_SESSION['bpid']=="")
{
	echo "<script language=\"javascript\">window.location=\"index?status=3\";</script>";
}
else
{
	include "../db/db_connection.php";
	
	$data = json_decode(file_get_contents("php://input")); 
	$index = $data->id;
	$qry = $dbConnection->prepare("SELECT * FROM tble_packages_details WHERE package_id=? ");
	$qry->execute(array($index));
	
	$data = array();	
	while($rows = $qry->fetch())
	{
		$data[] = array("package_id" => $rows['package_id'],
		"package_name" => $rows['package_name'],
		"package_details" => $rows['package_details'],
		"package_type" => $rows['package_type'],
		"duration" => $rows['duration'],
		"city_name" => $rows['city_name'],
		"state_name" => $rows['state_name'],
		"starting_price" => $rows['starting_price'],
		"image" => $rows['image'],
		"flight_included" => $rows['flight_included'],
		"resorts" => $rows['resorts'],
		"meals" => $rows['meals'],
		"breakfast" => $rows['breakfast'],
		"trans" => $rows['transfer']);
	}
	echo (json_encode($data));
}
?>
