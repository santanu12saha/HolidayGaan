<?php
error_reporting(0);
session_start();

	$post_data = file_get_contents("php://input");
	$data = json_decode($post_data);

	$placeimg = $data->placeimg;
	$place = $data->place;
 	$fromd = $data->fromd;
	$tod = $data->tod;
	$guests = $data->guests;
	$fbudget = $data->budget;
	$star = $data->star;
	$ecotourism = $data->ecotourism;
	$wellness = $data->wellness;
	$heritage = $data->heritage;
	$family = $data->family;
	$adventure = $data->adventure;
	$romantic = $data->romantic;
	$kayaking = $data->kayaking;
	$scuba = $data->scuba;
	$paragliding = $data->paragliding;
	$nature = $data->nature;
	$golf = $data->golf;
	$others = $data->others;
	$spa = $data->spa;
	$jakuzzi = $data->jakuzzi;
	$swimming = $data->swimming;
	$candle = $data->candle;
	$cafe = $data->cafe;
	$othersone = $data->othersone;
	
	
	if($fbudget == "upto 10,000")
	{
		$budget=10000;
	}	
	elseif($fbudget == "10,000  to  20,000")
	{
		$budget=20000;
	}
	elseif($fbudget == "20,000  to  30,000")
	{
		$budget=30000;
	}
	elseif($fbudget == "30,000  to  40,000")
	{
		$budget=40000;
	}
	elseif($fbudget == "40,000  to  50,000")
	{
		$budget=50000;
	}
	elseif($fbudget == "50,000  to  60,000")
	{
		$budget=60000;
	}
	elseif($fbudget == "60,000  to  70,000")
	{
		$budget=70000;
	}
	elseif($fbudget == "70,000  to  80,000")
	{
		$budget=80000;
	}
	elseif($fbudget == "80,000  to  90,000")
	{
		$budget=90000;
	}
	elseif($fbudget == "90,000  to  10,0000")
	{
		$budget=100000;
	}
	elseif($fbudget == "Above  1,00,000")
	{
		$budget=1000000;
	}
		
	$_SESSION['place'] = $place;
	$_SESSION['fromd'] = $fromd;
	$_SESSION['tod'] = $tod;
	$_SESSION['guests'] = $guests;
	$_SESSION['budget'] = $budget;
	$_SESSION['star'] = $star;
	$_SESSION['ecotourism'] = $ecotourism;
	$_SESSION['wellness'] = $wellness;
	$_SESSION['heritage'] = $heritage;
	$_SESSION['family'] = $family;
	$_SESSION['adventure'] = $adventure;
	$_SESSION['romantic'] = $romantic;
	$_SESSION['kayaking'] = $kayaking;
	$_SESSION['scuba'] = $scuba;
	$_SESSION['paragliding'] = $paragliding;
	$_SESSION['nature'] = $nature;
	$_SESSION['golf'] = $golf;
	$_SESSION['others'] = $others;
	$_SESSION['spa'] = $spa;
	$_SESSION['jakuzzi'] = $jakuzzi;
	$_SESSION['swimming'] = $swimming;
	$_SESSION['candle'] = $candle;
	$_SESSION['cafe'] = $cafe;
	$_SESSION['othersone'] = $othersone;
	
			
	$_SESSION['placeimg'] = $placeimg;	
	if($placeimg=="")
	{
		$_SESSION['place'] = $place;	
	}	
	else
	{
		$_SESSION['place'] = $placeimg;	
	}	
	
	$fplace = $_SESSION['place'];
 	$ffromd = $_SESSION['fromd'];
	$ftod = $_SESSION['tod'];
	$fguests = $_SESSION['guests'];
	$fbudget = $_SESSION['budget'];
	$fstar = $_SESSION['star'];	
	$fecotourism = $_SESSION['ecotourism'];
	$fwellness = $_SESSION['wellness'];
	$fheritage = $_SESSION['heritage'];
	$ffamily = $_SESSION['family'];
	$fadventure = $_SESSION['adventure'];
	$fromantic = $_SESSION['romantic'];
	$fkayaking = $_SESSION['kayaking'];
	$fscuba = $_SESSION['scuba'];
	$fparagliding = $_SESSION['paragliding'];
	$fnature = $_SESSION['nature'];
	$fgolf = $_SESSION['golf'];
	$fothers = $_SESSION['others'];
	$fspa = $_SESSION['spa'];
	$fjakuzzi = $_SESSION['jakuzzi'];
	$fswimming = $_SESSION['swimming'];
	$fcandle = $_SESSION['candle'];
	$fcafe = $_SESSION['cafe'];
	$fothersone = $_SESSION['othersone'];
	
	$arr = array("place" => "$fplace","fromd" => "$ffromd","tod" => "$ftod","guests" => "$fguests","budget" => "$fbudget","star" => "$fstar","fecotourism" => "$fecotourism","fwellness" => "$fwellness","fheritage" => "$fheritage","ffamily" => "$ffamily","fadventure" => "$fadventure","fromantic" => "$fromantic","fkayaking" => "$fkayaking","fscuba" => "$fscuba","fparagliding" => "$fparagliding","fnature" => "$fnature","fgolf" => "$fgolf","fothers" => "$fothers","fspa" => "$fspa","fjakuzzi" => "$fjakuzzi","fswimming" => "$fswimming","fcandle" => "$fcandle","fcafe" => "$fcafe","fothersone" => "$fothersone");
	
	if($_SESSION['usernameFB']!="")
	{
		$arr = array("Success");
		$jsn = json_encode($arr);
		echo $jsn;
	}
	else
	{
		$arr = array("Login");
		$jsn = json_encode($arr);
		echo $jsn;
	}	
?>