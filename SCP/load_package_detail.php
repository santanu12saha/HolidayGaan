<?php
error_reporting(0);
session_start();
if($_SESSION['bpid']=="")
{
	echo "<script language=\"javascript\">window.location=\"index.php?status=2\";</script>";
}
else
{
	include "../db/db_connection.php";
	$admin_id = $_SESSION['bpid'];
	
	$data = array();
	$dflag='1';
	$query = "SELECT * FROM tble_packages_details WHERE delflag=? ORDER BY package_id DESC";
	$result = $dbConnection->prepare($query);
	$result->execute(array($dflag));	
	while($rows = $result->fetch())
	{	
		$id = $rows['package_id'];
		$packageName = $rows['package_name'];
		$detail = $rows['package_details'];
		$packagetype = $rows['package_type'];
		$duration=$rows['duration'];
			
			
		$query1 = "SELECT * FROM tble_packages_type WHERE package_type_id=? ORDER BY package_type_id DESC";
		$result1 = $dbConnection->prepare($query1);
		$result1->execute(array($packagetype));	
		$rows1 = $result1->fetch();
		$ptn = $rows1['package_type_name'];
		
		$query2 = "SELECT * FROM tble_duration WHERE duration_id=? ORDER BY duration_id DESC";
		$result2 = $dbConnection->prepare($query2);
		$result2->execute(array($duration));	
		$rows2 = $result2->fetch();
		$dn = $rows2['duration_name'];
		
		$data[] = array("ID" =>$id,"packageName" => $packageName,"packagetype" => $ptn,"duration" => $dn);
	}
	echo (json_encode($data));
}
?>
