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
	
	$query = "select a.avail_id,p.property_name,a.available_date,a.guest from tble_property p, tble_prop_availability a
where p.property_id=a.property_id AND a.delflag=? AND a.available_date >= CURDATE() ORDER BY a.avail_id DESC";
	$result = $dbConnection->prepare($query);
	$result->execute(array($dflag));	
	while($rows = $result->fetch())
	{	
		$property_name = $rows['property_name'];
		$available_date = $rows['available_date'];		
		$guest = $rows['guest'];
		$data[] = array("id"=> $rows['avail_id'],"property_name" => $property_name,"available_date" => $available_date,"guest" => $guest);
	}
	echo (json_encode($data));
}
?>
