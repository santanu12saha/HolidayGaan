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
	
	$query = "SELECT * FROM tble_property_type WHERE delflag=? ORDER BY property_type_id DESC";
	$result = $dbConnection->prepare($query);
	$result->execute(array($dflag));	
	while($rows = $result->fetch())
	{	
		$id = $rows['property_type_id'];
		$pname = $rows['property_type'];		
		$pdes = $rows['type_description'];
		$data[] = array("id"=> $id,"package_name" => $pname,"description" => $pdes);
	}
	echo (json_encode($data));
}
?>
