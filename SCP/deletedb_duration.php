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
	$id = $data->id;
	$del_flag = "0";
	$cts = date("Y-m-d");
			
	$query = $dbConnection->prepare("UPDATE tble_duration set del_flag=? WHERE duration_id=?");
	$query->execute(array($del_flag,$id));
	echo (json_encode($data));
}
?>
