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
	$query = "SELECT * FROM tble_property WHERE delflag=? ORDER BY property_id DESC";
	$result = $dbConnection->prepare($query);
	$result->execute(array($dflag));	
	while($rows = $result->fetch())
	{	
		$property_name = $rows['property_name'];
		$property_add = $rows['property_address'];
		$ratings = $rows['rating'];
		$tripadvisorrating = $rows['tripadvisorrating'];
		$data[] = array("id" => $rows['property_id'],"pname" =>$property_name,"p_add" =>$property_add,"rating"=>$ratings,"tripadvisorrating"=>$tripadvisorrating);		
	}
	echo (json_encode($data));
}
?>
