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
	
	$query = "SELECT * FROM tble_packages_type WHERE delflag=? ORDER BY package_type_id DESC";
	$result = $dbConnection->prepare($query);
	$result->execute(array($dflag));	
	while($rows = $result->fetch())
	{	
		$id = $rows['package_type_id'];
		$pname = $rows['package_type_name'];		
		
		$data[] = array("id"=> $id,"package_name" => $pname);
	}
	echo (json_encode($data));
}
?>
