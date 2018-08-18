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
	$data = json_decode(file_get_contents("php://input"));	
	
	$id = $data->id;	
	$pid = $data->pid;
	$adate = $data->adate;
	$date = date_create($adate);
	$fromdnew=date_format($date, 'Y-m-d');	
	
	$guest = $data->guest;

	$qry = $dbConnection->prepare("UPDATE tble_prop_availability set property_id=?, available_date=?, guest=? WHERE avail_id=?");
	$qry->execute(array($pid,$fromdnew,$guest,$id));
	$arr = $qry->rowCount() . " records UPDATED successfully"; 
	print json_encode($arr);
}
?>
