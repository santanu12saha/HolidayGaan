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
	$query = "SELECT * FROM tble_activities WHERE delflg=? ORDER BY activities_id DESC";
	$result = $dbConnection->prepare($query);
	$result->execute(array($dflag));	
	while($rows = $result->fetch())
	{	
		$activity_name = $rows['activity_name'];
		$activity_type = $rows['activity_type'];
		$data[] = array("id" => $rows['activities_id'],"activity_name" =>$activity_name,"activity_type" =>$activity_type);		
	}
	echo (json_encode($data));
}
?>
