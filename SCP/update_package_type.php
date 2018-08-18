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
	
	$id = $data->id;	
	$name = $data->name;
	
	$qry = $dbConnection->prepare("UPDATE tble_packages_type set package_type_name=? WHERE package_type_id=?");
	$qry->execute(array($name,$id));
	$arr = $qry->rowCount() . " records UPDATED successfully"; 
	print json_encode($arr);
}
?>
