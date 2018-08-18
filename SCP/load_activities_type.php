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
	
	$query = "SELECT * FROM tble_activity_type WHERE delflag=? ORDER BY activity_type_id DESC";
	$result = $dbConnection->prepare($query);
	$result->execute(array($dflag));	
	while($rows = $result->fetch())
	{	
		$id = $rows['activity_type_id'];
		$aname = $rows['activity_type'];		
		$ades = $rows['type_description'];
		$data[] = array("id"=> $id,"activity_name" => $aname,"description" => $ades);
	}
	echo (json_encode($data));
}
?>
