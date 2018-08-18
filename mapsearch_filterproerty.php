<?php
error_reporting(0);
session_start();
include_once ("db/db_connection.php");
$data = json_decode(file_get_contents("php://input"));

//budget
$place = $data->place;
$data=array();	
$dflag='1';

$query = $dbConnection->prepare("SELECT * FROM tble_property WHERE delflag=? AND property_name=?");
$query->execute(array($dflag,$place));
$count = $query->rowCount();	
while ($info = $query->fetch())
{
	if(strlen($info['property_name'])>27)
	{
		$rest = substr($info['property_name'], 0, 27);
		$dots = "..."; 
		$ftitle = $rest."".$dots;
	}
	else
	{
		$ftitle = $info['property_name'];
	}
	$fprice = $info['extra_person'];
	$ftripadvisorrating = $info['tripadvisorrating'];
	$frating = $info['rating'];
	$fpic = $info['property_picture'];
	$ecotourism = $info['ecotourism'];
	$fpid = $info['property_id'];
	$instantbooking = $info['instantbooking'];
	$platitude = $info['latitude'];
	$plongitude = $info['longitude'];

	/*Review Count of Each Property Starts Here*/	
		$query1 = $dbConnection->prepare("SELECT * FROM tble_property_review WHERE property_id=? AND delflag=?");
		$query1->execute(array($fpid,$delflag));	
		$num1 = $query1->rowCount();	
	/*Review Count of Each Property Ends Here*/		
	
	$data[] = array("id"=>$fpid,"ftitle" =>$ftitle,"fpic" =>$fpic,"fprice"=>$fprice,"ftripadvisorrating"=>$ftripadvisorrating,"frating"=>$frating,"ecotourism"=>$ecotourism,"reviewcount"=>$num1,"instantbooking"=>$instantbooking,"latitude" => "$platitude","longitude" => "$plongitude","fbid"=>$_SESSION['useridFB']);			
}
echo (json_encode($data));
?>