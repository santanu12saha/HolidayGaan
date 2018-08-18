<?php
error_reporting(0);
session_start();

	
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
	
		$jsn = json_encode($arr);
		echo $jsn;
		
?>