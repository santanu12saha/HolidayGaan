<?php
	error_reporting(E_ALL);
	include "db/db_connection.php";
	$post_data = file_get_contents("php://input");
	$post = json_decode($post_data);
	
	$fbid = $_SESSION['useridFB'];

	$pid = $post->pid; 
	$delflag = "1";
	$data = array();
	$query = $dbConnection->prepare("SELECT property_id FROM tble_wishlist where delflag=? AND property_id=? AND oauth_id=?");
	$query->execute(array($delflag,$pid,$fbid));	
	$info = $query->fetch();
	
	$propid = $info['property_id'];

	$data[] = array("propid" =>$propid);
	echo (json_encode($data));
?>