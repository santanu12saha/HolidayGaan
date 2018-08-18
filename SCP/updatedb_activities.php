<?php
error_reporting(E_ALL);
session_start();
if($_SESSION['bpid']=="")
{
	echo "<script language=\"javascript\">window.location=\"index?status=2\";</script>";
}
else
{
	include "../db/db_connection.php";	
	$data = json_decode(file_get_contents("php://input"));
	$index = $data->id;
	
	$activity_name = $data->activity_name;
	$activity_type = $data->activity_type;
	$location =$data->location; 
	$highlight_about = $data->highlight_about;
	$latitude = $data->latitude; 
	$longitude = $data->longitude;
	$duration = $data->duration; 
	$price = $data->price;
	$time = $data->time;
	
	$things_to_carry =$data->things_to_carry; 
	$trip_add_rating = $data->trip_add_rating; 
	$out_rating = $data->out_rating;
	
	
	$inclusions =$data->inclusions; 
	
	$ecotourism = $data->ecotourism;
	$wellness_n_care =$data->wellness_n_care; 
	$heritage_n_spirituality = $data->heritage_n_spirituality; 
	$family_n_kids = $data->family_n_kids;
	$adventure_n_explore = $data->adventure_n_explore;
	$romantic_holiday =$data->romantic_holiday; 
	$couple = $data->couple; 
	$group_activity = $data->group_activity;
	$solo = $data->solo;
	
	$query = $dbConnection->prepare("UPDATE tble_activities SET 
	activity_name=?,
	activity_type=?,
	location=?,
	highlight_about=?,
	latitude=?,
	longitude=?,
	duration=?,
	price=?,
	time=?,
	things_to_carry=?,
	trip_add_rating=?,
	out_rating=?,
	inclusions=?,
	ecotourism=?,
	wellness_n_care=?,
	heritage_n_sprituality=?,
	family_n_kids=?,
	adventure_n_explore=?,
	romantic_holiday=?,
	couple=?,
	group_activity=?,
	solo=?
	where activities_id=?");
	$query->execute(array($activity_name,
	$activity_type,
	$location,
	$highlight_about,
	$latitude,
	$longitude,
	$duration,
	$price,
	$time,
	$things_to_carry,
	$trip_add_rating,
	$out_rating,
	$inclusions,
	$ecotourism,
	$wellness_n_care,
	$heritage_n_spirituality,
	$family_n_kids,
	$adventure_n_explore,
	$romantic_holiday,
	$couple,
	$group_activity,
	$solo,
	$index));
}
?>
