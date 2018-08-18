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
	
	$data1 = json_decode(file_get_contents("php://input")); 
	$index = $data1->id;
	$qry = $dbConnection->prepare("SELECT * FROM tbl_registration WHERE reg_id=? ");
	$qry->execute(array($index));
	
	$data = array();	
	
	$rows = $qry->fetch();
	$id = $rows['reg_id'];
	$user_id = $rows['user_id'];
	$fname = $rows['first_name'];
	$lname = $rows['last_name'];
	$emailid = $rows['email_id'];
	$mobileno =$rows['mobile_no'];
	
	$data[] = array("id" =>$id,"userid" =>$user_id,"fname" => $fname,"lname" => $lname,"emailid" => $emailid,"mobileno" => $mobileno);
	echo (json_encode($data));
}
?>
