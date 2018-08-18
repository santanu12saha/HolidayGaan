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
	$des = $data->des;

	$qry = $dbConnection->prepare("UPDATE tble_status_master set status=?, description=? WHERE status_id=?");
	$qry->execute(array($name,$des,$id));
	$arr = $qry->rowCount() . " records UPDATED successfully"; 
	print json_encode($arr);
}
?>
