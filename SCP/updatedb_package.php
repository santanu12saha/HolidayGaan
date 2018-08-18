<?php
error_reporting(E_ALL);
session_start();
if($_SESSION['bpid']=="")
{
	echo "<script language=\"javascript\">window.location=\"index?status=2\";</script>";
}
else
{
	include "../db/db_connection.php";
	$data = json_decode(file_get_contents("php://input"));	
	
	$data = json_decode(file_get_contents("php://input"));
	$id = $data->id;
	$packageName = $data->packageName;
	$detail = $data->detail;
	$packagetype =$data->packagetype; 
	$duration = $data->duration;
	$city = $data->city; 
	$state = $data->state;
	$price =$data->price;
	$report = $data->report;
	$flight =$data->flight;
	$mel = $data->mel;
	$brk = $data->brk;
	$trns= $data->trans;
	//echo $img1=$data->img;
	$cts = date("Y-m-d");
	$img = $_FILES['img']['name'];
	
	$upload_dir = "uploadfiles/";
	$currTime = time();
	$newname = $currTime."_".$img;
	$fname = $upload_dir.$newname;	
	
	//echo "$newname";						
	move_uploaded_file($_FILES['img']['tmp_name'], $fname);
	
	$cts = date("Y-m-d");
			
	$query = $dbConnection->prepare("UPDATE tble_packages_details set package_name=?,package_details=?,package_type=?,duration=?,city_name=?,state_name=?,starting_price=?,image=?,flight_included=?,resorts=?,meals=?,breakfast=?,transfer=? WHERE package_id=?");
	$query->execute(array($packageName,$detail,$packagetype,$duration,$city,$state,$price,$img,$flight,$report,$mel,$brk,$trns,$id));
	//echo (json_encode($data));
}
?>
