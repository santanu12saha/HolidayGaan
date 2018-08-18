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
	$index = $data->id;
	$qry = $dbConnection->prepare("SELECT * FROM tble_duration WHERE duration_id=? ");
	$qry->execute(array($index));
	
	$data = array();	
	while($rows = $qry->fetch())
	{
		$data[] = array("id" => $rows['duration_id'],"name" => $rows['duration_name'],"detail" => $rows['duration_detail']);
	}
	echo (json_encode($data));
}
?>
