<?php
	error_reporting(E_ALL);
	session_start();
	include_once ("db/db_connection.php");

	$data = json_decode(file_get_contents("php://input"));
	$pid = $data->pid;
	$Fbuid = $data->fbid;
	$cts = date("Y-m-d");
	
	$query1 = $dbConnection->prepare("SELECT property_id FROM tble_wishlist WHERE oauth_id = ? AND property_id = ?");
	$query1->execute(array($Fbuid,$pid));
	$num = $query1->rowCount();
	if($num > 0)
	{
		
	}
	else
	{
		
		$query = $dbConnection->prepare("INSERT INTO tble_wishlist(oauth_id,property_id,cts) VALUES (?,?,?)");
		$query->execute(array($Fbuid,$pid,$cts));
		
	}
	
?>
