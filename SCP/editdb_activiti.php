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
	
	$data = json_decode(file_get_contents("php://input")); 
	$index = $data->id;
	//echo $index;
	$qry = $dbConnection->prepare("SELECT * FROM tble_activities WHERE activities_id=? ");
	$qry->execute(array($index));
	
	$rows=$qry->fetch();
	$data = array();
	$data[] = array(
	
	"activities_id" => $rows['activities_id'],
	"activity_name" => $rows['activity_name'],
	"activity_type" => $rows['activity_type'],
	"location" => $rows['location'],
	"highlight_about" => $rows['highlight_about'],
	"activity_img" => $rows['activity_img'],
	"latitude" => $rows['latitude'],
	"longitude" => $rows['longitude'],
	"duration" => $rows['duration'],
	"price" => $rows['price'],
	"time" => $rows['time'],
	"things_to_carry" => $rows['things_to_carry'],
	"trip_add_rating" => $rows['trip_add_rating'],
	"out_rating" => $rows['out_rating'],
	"inclusions" => $rows['inclusions'],
	"ecotourism" => $rows['ecotourism'],
	"wellness_n_care" => $rows['wellness_n_care'],
	"heritage_n_sprituality" => $rows['heritage_n_sprituality'],
	"family_n_kids" => $rows['family_n_kids'],
	"adventure_n_explore" => $rows['adventure_n_explore'],
	"romantic_holiday" => $rows['romantic_holiday'],
	"couple" => $rows['couple'],
	"group_activity" => $rows['group_activity'],
	"solo" => $rows['solo'],
	
	
	);

	echo(json_encode($data));
}
?>
