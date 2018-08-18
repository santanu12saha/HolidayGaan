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
			
	$query = $dbConnection->prepare("INSERT INTO tble_property(package_name,package_details,package_type,duration,city_name,state_name,starting_price,image,flight_included,resorts,meals,breakfast,transfer,cts) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$query->execute(array($packageName,$detail,$packagetype,$duration,$city,$state,$price,$newname,$flight,$report,$mel,$brk,$trns,$cts));
	
	//echo "<script language=\"javascript\">window.location=\"list_package_details\";alert(\"Data Added Successfully!!!\");</script>";
}
?>
