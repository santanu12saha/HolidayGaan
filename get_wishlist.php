<?php
	error_reporting(0);
	include "db/db_connection.php";
	
	$post_data = file_get_contents("php://input");
	$post = json_decode($post_data);
	
	$delflag = "1";
	$fbid = $post->fbid;
	$data = array(); 
	
	$count1 = "1";
	$query = $dbConnection->prepare("SELECT property_name from tble_property where delflag=? AND property_id in (SELECT property_id FROM tble_wishlist where oauth_id=?) ");
	
	$query->execute(array($delflag,$fbid));	
	while ($info = $query->fetch())
	{
		if (strlen($info['property_name'])>27)
		{
			$rest = substr($info['property_name'], 0, 27);
			$dots = "..."; 
			$ftitle = $rest."".$dots;
		}
		else
		{
			$ftitle = $info['property_name'];
		}
		$data[] = array("ftitle" =>$ftitle);
		$count1++;		
	}
	echo (json_encode($data));
?>