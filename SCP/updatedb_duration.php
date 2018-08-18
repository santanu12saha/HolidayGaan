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
	$name = $data->name; 
	$detail = $data->detail;	
	$cts = date("Y-m-d");
			
	$query = $dbConnection->prepare("UPDATE tble_duration set duration_name=?,duration_detail=? WHERE duration_id=?");
	$query->execute(array($name,$detail,$id));
	echo (json_encode($data));
}
?>
