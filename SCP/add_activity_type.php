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
	$admin_id = $_SESSION['bpid'];
	
	$data = json_decode(file_get_contents("php://input"));
	$name = $data->nm; 
	$des = $data->ds; 
	$cts = date("Y-m-d");
	
	$query = $dbConnection->prepare("INSERT INTO tble_activity_type(activity_type,type_description,cts) VALUES (?,?,?)");
	$query->execute(array($name,$des,$cts));
}
?>
