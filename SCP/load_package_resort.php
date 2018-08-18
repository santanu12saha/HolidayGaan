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
	$query = "SELECT a.*,b.package_name FROM tble_packages_resort a,packages_details b WHERE a.package_id=b.package_id  and a.delflag=? ORDER BY package_resort_id DESC";
	$result = $dbConnection->prepare($query);
	$result->execute(array($dflag));	
	
	
	while($rows = $result->fetch())
	{	
		$id = $rows['package_resort_id'];
		$p_id = $rows['package_id'];
		$name=$rows['package_name'];
		$cts=$rows['cts'];
		
		$data[] = array("ID" =>$id,"name" => $name,"p_id" => $p_id,"cts" => $cts);
	}
	echo (json_encode($data));
}
?>
