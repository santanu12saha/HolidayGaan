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
	$data = json_decode(file_get_contents("php://input"));
	$index=$data->id;
	
	$admin_id = $_SESSION['bpid'];
		
	$data=array();	
	$dflag='1';
	$query = "SELECT * FROM tble_property WHERE delflag=? AND property_id=? ORDER BY property_id DESC";
	$result = $dbConnection->prepare($query);
	$result->execute(array($dflag,$index));	
	while($rows = $result->fetch())
	{	
		$property_name = $rows['property_name'];
		
		$data[] = array("id" => $rows['property_id'],"pname" =>$property_name);		
	}
	echo (json_encode($data));
}
?>
