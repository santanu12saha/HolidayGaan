<?php
error_reporting(E_ALL);
session_start();
include_once ("db/db_connection.php");

$post_data = file_get_contents("php://input");
$post = json_decode($post_data);

$pid = $post->pid;
$delflag = "1";

$propertydata = array();

/*Property Loop & Array Starts Here*/

$query = $dbConnection->prepare("SELECT * FROM tble_property WHERE property_id=? AND delflag=? ");
$query->execute(array($pid,$delflag));	
$num = $query->rowCount();
$count = 0;
$info = $query->fetch();
$ppid = $info['property_id'];
$ptitle = $info['property_name'];
$ppdesc = $info['property_description'];	
$plocation = $info['property_location'];
$ppic = $info['property_picture'];
$pprice = number_format($info['extra_person']);
$ptripadvisorrating = $info['tripadvisorrating'];
$prating = $info['rating'];
$platitude = $info['latitude'];
$plongitude = $info['longitude'];
$pswimmingpool = $info['swimmingpool'];;

/*Property Loop & Array Ends Here*/	

	$image = "<a href='#'><img src='property_pics/$ppic' class='popupimg' /></a>";		
	
	$popup = "<div class='ppopup' style='background-image:url(images/Orange-price-tab1.png)'><span class='ppoptitle'>$ptitle</span><span class='ppopprice'><img src='images/rupee_symbol.png' class='popuprupee'> $pprice <span class='ppopupper'>Per Night</span></span></div>";
	
	
	$price = "<span class='popupprice'><span class='popupinr'><img src='images/rupee_symbol_black.png' class='popup1rupee'></span>$pprice<span class='popupper'>Per Night</span></span>";
	
	$button = "";
	
	$propertydata[] = array("latitude" => "$platitude","longitude" => "$plongitude","city" => "$ptitle","desc" => "$ppdesc","image" => "$image","price" => "$price","button" => "$button","popup" => "$popup");

$finaldata = array("countryList" => $propertydata);
echo json_encode($finaldata);
?>