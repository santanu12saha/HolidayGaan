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
	
	$qry = $dbConnection->prepare("SELECT * FROM tble_status_master WHERE status_id=?");
	$qry->execute(array($index));
	
	$data = array();
	while($rows = $qry->fetch())
	{  
		$data[] = array("id" => $rows['status_id'],"name" => $rows['status'],"des" => $rows['description']);
	}
	echo(json_encode($data));
}
?>
