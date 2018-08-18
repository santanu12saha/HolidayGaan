<?php
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
	$index = $data->id; 
	$delflag="0";

	$qry = $dbConnection->prepare("UPDATE tble_property set delflag=? WHERE property_id=?");
	$qry->execute(array($delflag,$index));
	if($qry)
	{
		$arr = array("Data deleted Successfully!!!");
		echo json_encode($arr);
		//print_r($jsn);
	}
	else
	{
		$arr = array('msg' => "", 'error' => 'Error In Updating record');
		$jsn = json_encode($arr);
		//print_r($jsn);
	}
}
?>
