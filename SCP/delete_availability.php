<?php
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
	$id = $data->id;
	
	$delflag = "0";
	$cts = date("Y-m-d");
	
	$qry = $dbConnection->prepare("UPDATE tble_prop_availability set delflag=? WHERE avail_id=?");
	$qry->execute(array($delflag,$id));
	
	echo(json_encode($data));
}
?>
