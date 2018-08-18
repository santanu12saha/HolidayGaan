<?php
error_reporting(0);
session_start();
if($_SESSION['bpid']=="")
{
	echo "<script language=\"javascript\">window.location=\"index?status=2\";</script>";
}
else
{
	include "../db/db_connection.php";
	$admin_id = $_SESSION['bpid'];
	
	$data=array();		
	$dflag='1';
	
	$query = "SELECT * FROM tble_status_master WHERE delflag=? ORDER BY status_id DESC";
	$result = $dbConnection->prepare($query);
	$result->execute(array($dflag));	
	while($rows = $result->fetch())
	{	
		$id = $rows['status_id'];
		$pname = $rows['status'];		
		$pdes = $rows['description'];
		$data[] = array("id"=> $id,"name" => $pname,"description" => $pdes);
	}
	echo (json_encode($data));
}
?>
