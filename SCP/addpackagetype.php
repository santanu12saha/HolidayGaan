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
	$cts = date("Y-m-d");
	
	$query = $dbConnection->prepare("INSERT INTO tble_packages_type(package_type_name,cts) VALUES (?,?)");
	$query->execute(array($name,$cts));
}
?>
