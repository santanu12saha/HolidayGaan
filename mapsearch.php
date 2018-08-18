<?php
error_reporting(E_ALL);
session_start();
include_once ("db/db_connection.php");

$post_data = file_get_contents("php://input");
$data = json_decode($post_data);		
$location = $data->location;	
$lat = $data->lat;
$lng = $data->lng;	

$delflag = "1";
$place = $data->location;
	
	
$propertydata = array();
$activitydata = array();
/*Property Loop & Array Starts Here*/
$query = $dbConnection->prepare("SELECT * FROM tble_property WHERE delflag=? AND property_name=? ORDER BY property_id DESC");
$query->execute(array($delflag,$place));	
$num = $query->rowCount();
$count = 1;
//$info = $query->fetch();
while ($info = $query->fetch())
{
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
	
	$swimmingpool = $info['swimmingpool'];
	$spa = $info['spa'];
	$jacuzzi = $info['jacuzzi'];
	$finedinig = $info['finedinig'];
	$caffe = $info['caffe'];
	$pinstantbooking = $info['instantbooking'];
	
	
	if($pinstantbooking=="1")
	{
		$popup = "<div class='popimg' style='background-image:url(images/Orange-price-tab.png)'><img style='width:8px;' src='images/rupee_symbol.png' /> $pprice&nbsp;&nbsp;<img style='width:13px; padding:0px 0px 3px 0px;' src='images/flash.png' /></div>";		
	}
	else
	{
		$popup = "<div class='popimg' style='background-image:url(images/Orange-price-tab.png)'><img style='width:8px;' src='images/rupee_symbol.png' /> $pprice</div>";	
	}
	
	$image = "<a href='#'><img src='property_pics/$ppic' class='popupimg' /></a>";					
	$price = "<span class='popupprice'><span class='popupinr'><img src='images/rupee_symbol_black.png' /></span>$pprice<span class='popupper'>Per Night</span></span>";
		
	/*Ratings Starts Here*/
		if($ptripadvisorrating=="1" || $ptripadvisorrating=="1.1" || $ptripadvisorrating=="1.2" || $ptripadvisorrating=="1.3" || $ptripadvisorrating=="1.4" || $ptripadvisorrating=="1.5")
		{
			$tripadvisorrating = "Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' />";
		}
		elseif($ptripadvisorrating=="2" || $ptripadvisorrating=="2.1" || $ptripadvisorrating=="2.2" || $ptripadvisorrating=="2.3" || $ptripadvisorrating=="2.4" || $ptripadvisorrating=="2.5")
		{
			$tripadvisorrating = "Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' />";
		}
		elseif($ptripadvisorrating=="3" || $ptripadvisorrating=="3.1" || $ptripadvisorrating=="3.2" || $ptripadvisorrating=="3.3" || $ptripadvisorrating=="3.4" || $ptripadvisorrating=="3.5")
		{
			$tripadvisorrating = "Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' />";
		}
		elseif($ptripadvisorrating=="4" || $ptripadvisorrating=="4.1" || $ptripadvisorrating=="4.2" || $ptripadvisorrating=="4.3" || $ptripadvisorrating=="4.4" || $ptripadvisorrating=="4.5")
		{
			$tripadvisorrating = "Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' />";
		}
		elseif($ptripadvisorrating=="5" || $ptripadvisorrating=="5.1" || $ptripadvisorrating=="5.2" || $ptripadvisorrating=="5.3" || $ptripadvisorrating=="5.4" || $ptripadvisorrating=="5.5")
		{
			$tripadvisorrating = "<span class='popupprice'>Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' />";
		}
		else
		{
			$tripadvisorrating = "";
		}
		
		if($prating=="1" || $prating=="1.1" || $prating=="1.2" || $prating=="1.3" || $prating=="1.4" || $prating=="1.5")
		{
			$ourrating = "Our rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' />";
		}
		elseif($prating=="2" || $prating=="2.1" || $prating=="2.2" || $prating=="2.3" || $prating=="2.4" || $prating=="2.5")
		{
			$ourrating = "Our rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' />";
		}
		elseif($prating=="3" || $prating=="3.1" || $prating=="3.2" || $prating=="3.3" || $prating=="3.4" || $prating=="3.5")
		{
			$ourrating = "Our rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' />";
		}
		elseif($prating=="4" || $prating=="4.1" || $prating=="4.2" || $prating=="4.3" || $prating=="4.4" || $prating=="4.5")
		{
			$ourrating = "Our rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' />";
		}
		elseif($prating=="5" || $prating=="5.1" || $prating=="5.2" || $prating=="5.3" || $prating=="5.4" || $prating=="5.5")
		{
			$ourrating = "<span class='popupprice'>Our rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' />";
		}
		else
		{
			$ourrating = "";
		}
		
		$ratings = "<span class='popupratings'><span>$tripadvisorrating</span><span>$ourrating</span></span>";
	/*Ratings Ends Here*/
	
	/*Amenities Starts Here*/
	if($spa=="1" || $swimmingpool=="1" || $jacuzzi=="1" || $finedinig=="1" || $caffe=="1")
	{
		$amenities = "<p class='popupamenity'>Amenities</p><span class='amenity'>";
	}
	else
	{
		$amenities = "";
	}	
		
		if($spa=="1")
		{
			$amenities = $amenities." <img src='images/Spa.png' /> spa";
		}
		if($swimmingpool=="1")
		{
			$amenities = $amenities." <img src='images/Swimming.png' /> Swimming Pool";
		}
		
		if($jacuzzi=="1")
		{
			$amenities = $amenities." <img src='images/Jacizzi.png' /> jacuzzi";
		}
		if($finedinig=="1")
		{
			$amenities = $amenities." <img style='width:6%;' src='images/Dine.png' /> fine dining";
		}
		if($caffe=="1")
		{
			$amenities = $amenities." <img src='images/Cafe.png' /> caffe";
		}
		
	$amenities = $amenities."</span>";
	/*Amenities Ends Here*/
	
	
	/*Activity Loop & Array Starts Here*/	
		$query1 = $dbConnection->prepare("SELECT * FROM tble_activities WHERE location=? AND delflg=? ");
		$query1->execute(array($plocation,$delflag));	
		$num1 = $query1->rowCount();
		$info1 = $query1->fetch();
		$apid = $info1['activities_id'];
		$atitle = $info1['activity_name'];
		$activitydata[] = array("apid" => "$apid","atitle" => "$atitle");
		$activities = "<p class='popupamenity'>ACTIVITIES IN & AROUND RADIUS</p><span class='amenity'>";
		while ($info1 = $query1->fetch())
		{
			$activities = $activities. $info1['activity_name'] . " | ";	
		}
		$activities = $activities. "</span>";
		
	/*Activity Loop & Array Ends Here*/
	
	$button = "<form action='explore.php' method='post'><button type='submit' name='id' value='"."".$ppid.""."' style='padding: 10px 10px 10px 10px;margin: 0px 0px 0px 0px;border-right: 1px solid #F78320;border-left: 0px solid #F78320;border-top: 0px solid #F78320;border-bottom: 0px solid #F78320;background: #F78320;color: #FFFFFF;font-family: Circular Std Bold;font-weight: normal;font-size: 16.81px;display: inline-block;height: 48px;width: 100%;line-height: 30px;text-decoration: none;text-transform: uppercase;text-align: center;'>Explore Now</button></form>";
	//echo "$image--$price--$button";
	
	/* bustation railway airport start*/
		$busstation="<p class='busstation'><span class='popupbus'>BUS STATION</span><span class='bus'>".$info['busstation']."KMS</span></p>";
		$railwaystation="<p class='busstation'><span class='popupbus'>RAILWAY STATION</span><span class='bus'>".$info['railwaystation']."KMS</span></p>";
		$airport="<p class='busstation'><span class='popupbus'>AIRPORT</span><span class='bus'>".$info['airport']."KMS</span></p>";
	/* bustation railway airport end*/
	
	$propertydata[] = array("latitude" => "$platitude","longitude" => "$plongitude","city" => "$ptitle","desc" => "$ppdesc","image" => "$image","price" => "$price","button" => "$button","popup" => "$popup","ratings" => "$ratings","amenities" => "$amenities","activities" => "$activities","busstation" => "$busstation","railwaystation" => "$railwaystation","airport" => "$airport","pinstantbooking" => "$pinstantbooking");
	$count++;
}
/*Property Loop & Array Ends Here*/	
$finaldata = array("countryList" => $propertydata);
echo json_encode($finaldata);
?>