<?php
error_reporting(E_ALL);
session_start();
if($_SESSION['bpid']=="")
{
	echo "<script language=\"javascript\">window.location=\"index?status=2\";</script>";
}
else
{		
	include "../db/db_connection.php";
	$admin_id = $_SESSION['bpid'];
	
	$data = json_decode(file_get_contents("php://input"));
	$pid = $data->pid; 
	$adate = $data->adate; 
	
	$date = date_create($adate);
	$fromdnew=date_format($date, 'Y-m-d');	

	
	$guest = $data->guest; 
	$cts = date("Y-m-d");
	
	$query = $dbConnection->prepare("INSERT INTO tble_prop_availability(property_id,available_date,guest,cts) VALUES (?,?,?,?)");
	$query->execute(array($pid,$fromdnew,$guest,$cts));
}
?>
