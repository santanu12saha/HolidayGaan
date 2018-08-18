<?php
error_reporting(0);
session_start();
if($_SESSION['bpid']=="")
{
	echo "<script language=\"javascript\">window.location=\"index?status=3\";</script>";
}
else
{
	include "../db/db_connection.php";	
	$data = json_decode(file_get_contents("php://input"));
	$index=$data->id;
	//echo $index;
	
	$qry = $dbConnection->prepare("SELECT * FROM tble_prop_availability WHERE avail_id=?");
	$qry->execute(array($index));
	
	$data = array();
	while($rows = $qry->fetch())
	{  
		$date = date_create($rows['available_date']);
		$fromdnew=date_format($date, 'd-m-Y');	
		
		$qry1 = $dbConnection->prepare("SELECT property_name FROM tble_property WHERE property_id=?");
		$qry1->execute(array($rows['property_id']));
		$rows1 = $qry1->fetch();
		$rows1['property_name'];
		$data[] = array("id" => $rows['avail_id'],"property_id" => $rows['property_id'],"property_name" => $rows1['property_name'],"available_date" => $fromdnew,"guest" => $rows['guest']);
	}
	echo(json_encode($data));
}
?>
