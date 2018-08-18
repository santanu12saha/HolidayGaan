<?php
error_reporting(0);
session_start();
unset($_SESSION['ecotourism']);
unset($_SESSION['wellness']);
unset($_SESSION['heritage']);
unset($_SESSION['family']);
unset($_SESSION['adventure']);
unset($_SESSION['romantic']);
unset($_SESSION['kayaking']);
unset($_SESSION['scuba']);
unset($_SESSION['paragliding']);
unset($_SESSION['nature']);
unset($_SESSION['golf']);
unset($_SESSION['others']);
unset($_SESSION['spa']);
unset($_SESSION['jakuzzi']);
unset($_SESSION['swimming']);
unset($_SESSION['candle']);
unset($_SESSION['cafe']);
unset($_SESSION['othersone']);


	$post_data = file_get_contents("php://input");
	$data = json_decode($post_data);

	$place = $data->place;
 	$fromd = $data->fromd;
	$tod = $data->tod;
	$guests = $data->guests;
	$fbudget = $data->budget;
	$star = $data->star;
	
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
	
	$fplace = $_SESSION['place'];
 	$ffromd = $_SESSION['fromd'];
	$ftod = $_SESSION['tod'];
	$fguests = $_SESSION['guests'];
	$fbudget = $_SESSION['budget'];
	$fstar = $_SESSION['star'];
	
	$arr = array("place" => "$fplace","fromd" => "$ffromd","tod" => "$ftod","guests" => "$fguests","budget" => "$fbudget","star" => "$fstar");
	
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