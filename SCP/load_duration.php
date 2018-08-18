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
	
	$data = array();
	$dflag='1';
	$query = "SELECT * FROM tble_duration WHERE del_flag=? ORDER BY duration_id DESC";
	$result = $dbConnection->prepare($query);
	$result->execute(array($dflag));	
	while($rows = $result->fetch())
	{	
		$id = $rows['duration_id'];
		$name = $rows['duration_name'];
		$detail=$rows['duration_detail'];
		$data[] = array("ID" =>$id,"name" => $name,"detail" => $detail);
	}
	echo (json_encode($data));
}
?>
