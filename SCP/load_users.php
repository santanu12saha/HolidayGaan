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
	$a = "1";
	$data = array();
	$dflag='1';
	$query = "SELECT * FROM tbl_registration WHERE delflag=? ORDER BY reg_id DESC";
	$result = $dbConnection->prepare($query);
	$result->execute(array($dflag));	
	while($rows = $result->fetch())
	{	
		$id = $rows['reg_id'];
		$user_id = $rows['user_id'];
		$fname = $rows['first_name'];
		$lname = $rows['last_name'];
		$emailid = $rows['email_id'];
		$mobileno =$rows['mobile_no'];
		$name = $fname." ".$lname;
		
		$data[] = array("srno" =>$a,"id" =>$id,"userid" =>$user_id,"name" => $name,"emailid" => $emailid,"mobileno" => $mobileno);
		$a++;
	}
	echo (json_encode($data));
}
?>
