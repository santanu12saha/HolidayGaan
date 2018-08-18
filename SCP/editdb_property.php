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
	
	$qry = $dbConnection->prepare("SELECT * FROM tble_property WHERE property_id=? ");
	$qry->execute(array($index));
	
	$rows=$qry->fetch();
	$data = array();
	$data[] = array(
	"property_id" => $rows['property_id'],
	"property_name" => $rows['property_name'],
	"property_address" => $rows['property_address'],
	"property_contact_no" => $rows['property_contact_no'],
	"property_location" => $rows['property_location'],
	"property_description" => $rows['property_description'],
	"latitude" => $rows['latitude'],
	"longitude" => $rows['longitude'],
	
	"rating" => $rows['rating'],
	"tripadvisorrating" => $rows['tripadvisorrating'],
	"extra_person" => $rows['extra_person'],
	"child" => $rows['child'],
	"property_picture" => $rows['property_picture'],
	"cancelling_policy" => $rows['cancelling_policy'],
	"wifi" => $rows['wifi'],
	"tv" => $rows['tv'],
	"kitchen" => $rows['kitchen'],
	"checkin" => $rows['checkin'],
	"safetycard" => $rows['safetycard'],
	"indoorgame" => $rows['indoorgame'],
	"cabletv" => $rows['cabletv'],
	"smokingallowed" => $rows['smokingallowed'],
	"outdoorgame" => $rows['outdoorgame'],
	"gym" => $rows['gym'],
	"wheelchair" => $rows['wheelchair'],
	"kidsplayarea" => $rows['kidsplayarea'],
	"heating" => $rows['heating'],
	"breakfast" => $rows['breakfast'],
	"yoga" => $rows['yoga'],
	"internet" => $rows['internet'],
	"wiintercom" => $rows['wiintercom'],
	"ac" => $rows['ac'],
	"freeparking" => $rows['freeparking'],
	"swimmingpool" => $rows['swimmingpool'],
	"petsallowed" => $rows['petsallowed'],
	"barnrestro" => $rows['barnrestro'],
	"roomservice" => $rows['roomservice'],
	"busscenter" => $rows['busscenter'],
	"lounge" => $rows['lounge'],
	"conferencehall" => $rows['conferencehall'],
	"shopping" => $rows['shopping'],
	"ayurvedacenter" => $rows['ayurvedacenter'],
	"laundry" => $rows['laundry'],
	"security" => $rows['security'],
	"airporttrasport" => $rows['airporttrasport'],
	"atminresort" => $rows['atminresort'],
	"hotcoldwater" => $rows['hotcoldwater'],
	"firstaidkit" => $rows['firstaidkit'],
	"hairdryer" => $rows['hairdryer'],
	"hottub" => $rows['hottub'],
	"suitableforwvent" => $rows['suitableforwvent'],
	
	"spa" => $rows['spa'],
	"jacuzzi" => $rows['jacuzzi'],
	"finedinig" => $rows['finedinig'],
	"caffe" => $rows['caffe'],
	"ecotourism" => $rows['ecotourism'],
	"wellness_n_care" => $rows['wellness_n_care'],
	"heritage_n_spirituality" => $rows['heritage_n_spirituality'],
	"family_n_kids" => $rows['family_n_kids'],
	"adventure_n_explore" => $rows['adventure_n_explore'],
	"romantic_holiday" => $rows['romantic_holiday'],
	"instantbooking" => $rows['instantbooking'],
	"property_type" => $rows['property_type'],
	"busstation" => $rows['busstation'],
	"railwaystation" => $rows['railwaystation'],
	"airport" => $rows['airport'],
	);
	
	echo(json_encode($data));
}
?>
