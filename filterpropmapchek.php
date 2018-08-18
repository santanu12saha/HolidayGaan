<?php
error_reporting(0);
session_start();
include_once ("db/db_connection.php");

$data = json_decode(file_get_contents("php://input"));
 
//budget
		$place = $data->place;
		$fromd = $data->fromd;
		$tod = $data->tod;
		$budget = $data->budget;
		$guests = $data->guests;
		
		if(isset($budget))
		{
			$budget = 0+$budget;
			$_SESSION['budget']= $budget;
		}
			
		$placeimg = $_SESSION['placeimg'];
		
		if($budget == "10000")
		{
			$budgetmin=0;
			$budgetmax=10000;
		}	
		elseif($budget == "20000")
		{
			$budgetmin=10000;
			$budgetmax=20000;
		}
		elseif($budget == "30000")
		{
			$budgetmin=20000;
			$budgetmax=30000;
		}
		elseif($budget == "40000")
		{
			$budgetmin=30000;
			$budgetmax=40000;
		}
		elseif($budget == "50000")
		{
			$budgetmin=40000;
			$budgetmax=50000;
		}
		elseif($budget == "60000")
		{
			$budgetmin=50000;
			$budgetmax=60000;
		}
		elseif($budget == "70000")
		{
			$budgetmin=60000;
			$budgetmax=70000;
		}
		elseif($budget == "80000")
		{
			$budgetmin=70000;
			$budgetmax=80000;
		}
		elseif($budget == "90000")
		{
			$budgetmin=80000;
			$budgetmax=90000;
		}
		elseif($budget == "100000")
		{
			$budgetmin=90000;
			$budgetmax=100000;
		}
		elseif($budget == "100000")
		{
			$budgetmin=100000;
			$budgetmax=10000000;
		}
 
//Ecotourism check box...
		$ecotourism = $data->ecotourism;
		$flds="";
		if($ecotourism=='true')
		{
			$flds=$flds." AND ecotourism=1 ";
		}	
		
		//wellness n care check box...
		$wellness_n_care = $data->wellness_n_care;
		if($wellness_n_care=='true')
		{
			$flds=$flds." AND wellness_n_care=1 ";
		}	
				
		//heritage_n_spirituality check box.....
		$heritage_n_spirituality = $data->heritage_n_spirituality;
		if($heritage_n_spirituality=='true')
		{
			$flds=$flds." AND heritage_n_spirituality=1 ";
		}	
		
		//family_n_kids check box....
		$family_n_kids = $data->family_n_kids;
		if($family_n_kids=='true')
		{
			$flds=$flds." AND family_n_kids=1 ";
		}
			
		//adventure_n_explore check box....
		$adventure_n_explore = $data->adventure_n_explore;
		if($adventure_n_explore=='true')
		{
			$flds=$flds." AND adventure_n_explore=1 ";
		}
		
		//romantic_holiday check box....
		$romantic_holiday = $data->romantic_holiday;
		if($romantic_holiday=='true')
		{
			$flds=$flds." AND romantic_holiday=1 ";
		}
		
		//wireless_internet check box....
		$wireless_internet = $data->wireless_internet;
		if($wireless_internet=='true')
		{
			$flds=$flds." AND wifi=1 ";
		}
		
		//tv check box....
		$tv = $data->tv;
		if($tv=='true')
		{
			$flds=$flds." AND tv=1 ";
		}
		
		//kitchen check box....
		$kitchen = $data->kitchen;
		if($kitchen=='true')
		{
			$flds=$flds." AND kitchen=1 ";
		}
		
		//check_in check box....
		$check_in = $data->check_in;
		if($check_in=='true')
		{
			$flds=$flds." AND checkin=1 ";
		}
		
		//saftycard check box....
		$saftycard = $data->saftycard;
		if($check_in=='true')
		{
			$flds=$flds." AND safetycard=1 ";
		}
		
		//indoorgame check box....
		$indoorgame = $data->indoorgame;
		if($indoorgame=='true')
		{
			$flds=$flds." AND indoorgame=1 ";
		}
		
		//cabletv check box....
		$cabletv = $data->cabletv;
		if($cabletv=='true')
		{
			$flds=$flds." AND cabletv=1 ";
		}
		
		//smokingallowed check box....
		$smokingallowed = $data->smokingallowed;
		if($smokingallowed=='true')
		{
			$flds=$flds." AND smokingallowed=1 ";
		}
		
		//outdoorgame check box....
		$outdoorgame = $data->outdoorgame;
		if($outdoorgame=='true')
		{
			$flds=$flds." AND outdoorgame=1 ";
		}
		
		//gym check box....
		$gym = $data->gym;
		if($gym=='true')
		{
			$flds=$flds." AND gym=1 ";
		}
		
		//wheelchairaccess check box....
		$wheelchairaccess = $data->wheelchairaccess;
		if($wheelchairaccess=='true')
		{
			$flds=$flds." AND wheelchair=1 ";
		}
		
		//kidsplayarea check box....
		$kidsplayarea = $data->kidsplayarea;
		if($kidsplayarea=='true')
		{
			$flds=$flds." AND kidsplayarea=1 ";
		}
		
		//heating check box....
		$heating = $data->heating;
		if($heating=='true')
		{
			$flds=$flds." AND heating=1 ";
		}
		
		//breakfast check box....
		$breakfast = $data->breakfast;
		if($breakfast=='true')
		{
			$flds=$flds." AND breakfast=1 ";
		}
		
		//yoga check box....
		$yoga = $data->yoga;
		if($yoga=='true')
		{
			$flds=$flds." AND yoga=1 ";
		}
		
		//internet check box....
		$internet = $data->internet;
		if($internet=='true')
		{
			$flds=$flds." AND internet=1 ";
		}
		
		//wiintercom check box....
		$wiintercom = $data->wiintercom;
		if($wiintercom=='true')
		{
			$flds=$flds." AND wiintercom=1 ";
		}
		
		//ac check box....
		$ac = $data->ac;
		if($ac=='true')
		{
			$flds=$flds." AND ac=1 ";
		}
		
		//freeparking check box....
		$freeparking = $data->freeparking;
		if($freeparking=='true')
		{
			$flds=$flds." AND freeparking=1 ";
		}
		
		//swimmingpool check box....
		$swimmingpool = $data->swimmingpool;
		if($swimmingpool=='true')
		{
			$flds=$flds." AND swimmingpool=1 ";
		}
		
		//petsallowed check box....
		$petsallowed = $data->petsallowed;
		if($petsallowed=='true')
		{
			$flds=$flds." AND petsallowed=1 ";
		}

		//barnrestro check box....
		$barnrestro = $data->barnrestro;
		if($barnrestro=='true')
		{
			$flds=$flds." AND barnrestro=1 ";
		}
		
		//roomservice check box....
		$roomservice = $data->roomservice;
		if($roomservice=='true')
		{
			$flds=$flds." AND roomservice=1 ";
		}
		
		//businesscentre check box....
		$businesscentre = $data->businesscentre;
		if($businesscentre=='true')
		{
			$flds=$flds." AND busscenter=1 ";
		}
		
		//lounge check box....
		$lounge = $data->lounge;
		if($lounge=='true')
		{
			$flds=$flds." AND lounge=1 ";
		}
		
		//conferencehall check box....
		$conferencehall = $data->conferencehall;
		if($conferencehall=='true')
		{
			$flds=$flds." AND conferencehall=1 ";
		}
		
		//shopping check box....
		$shopping = $data->shopping;
		if($shopping=='true')
		{
			$flds=$flds." AND shopping=1 ";
		}
		
		//ayurvedacentre check box....
		$ayurvedacentre = $data->ayurvedacentre;
		if($ayurvedacentre=='true')
		{
			$flds=$flds." AND ayurvedacenter=1 ";
		}
		
		//laundry check box....
		$laundry = $data->laundry;
		if($laundry=='true')
		{
			$flds=$flds." AND laundry=1 ";
		}
		
		//security check box....
		$security = $data->security;
		if($security=='true')
		{
			$flds=$flds." AND security=1 ";
		}
		
		//airtrans check box....
		$airtrans = $data->airtrans;
		if($airtrans=='true')
		{
			$flds=$flds." AND airporttrasport=1 ";
		}
		
		//atmbank check box....
		$atmbank = $data->atmbank;
		if($atmbank=='true')
		{
			$flds=$flds." AND atminresort=1 ";
		}
		
		//hotcold check box....
		$hotcold = $data->hotcold;
		if($hotcold=='true')
		{
			$flds=$flds." AND hotcoldwater=1 ";
		}
		
		//firstaidkit check box....
		$firstaidkit = $data->firstaidkit;
		if($firstaidkit=='true')
		{
			$flds=$flds." AND firstaidkit=1 ";
		}

		//hairdryer check box....
		$hairdryer = $data->hairdryer;
		if($hairdryer=='true')
		{
			$flds=$flds." AND hairdryer=1 ";
		}

		//hottub check box....
		$hottub = $data->hottub;
		if($hottub=='true')
		{
			$flds=$flds." AND hottub=1 ";
		}

		//suitableforevents check box....
		$suitableforevents = $data->suitableforevents;
		if($suitableforevents=='true')
		{
			$flds=$flds." AND suitableforwvent=1 ";
		}

		//spa check box....
		$spa = $data->spa;
		if($spa=='true')
		{
			$flds=$flds." AND spa=1 ";
		}
		
		//jacuzzi check box....
		$jacuzzi = $data->jacuzzi;
		if($jacuzzi=='true')
		{
			$flds=$flds." AND jacuzzi=1 ";
		}

		//cafe check box....
		$cafe = $data->cafe;
		if($cafe=='true')
		{
			$flds=$flds." AND caffe=1 ";
		}


$delflag = "1";
$propertydata = array();
/*Property Loop & Array Starts Here*/
$date = date_create($fromd);
$fromdnew=date_format($date, 'Y-m-d');
	
$date1 = date_create($tod);
$todnew=date_format($date1, 'Y-m-d');
	
$guestsn=intval($guests);	

	if($placeimg=="")
	{	
		$star = $_SESSION['star'];
		if($star!="")
		{
			$query = $dbConnection->prepare("SELECT * FROM tble_property WHERE delflag=? AND property_location=? AND extra_person>=? AND extra_person<=? AND property_id IN (SELECT property_id FROM tble_prop_availability WHERE available_date BETWEEN '$fromdnew' AND '$todnew' AND guest>=$guestsn GROUP BY(property_id)) AND property_type=? " . $flds . " ORDER BY extra_person ASC");
			$query->execute(array($delflag,$place,$budgetmin,$budgetmax,$star));
		}
		else
		{
			$query = $dbConnection->prepare("SELECT * FROM tble_property WHERE delflag=? AND property_location=? AND extra_person>=? AND extra_person<=? AND property_id IN (SELECT property_id FROM tble_prop_availability WHERE available_date BETWEEN '$fromdnew' AND '$todnew' AND guest>=$guestsn GROUP BY(property_id)) AND property_type=? " . $flds . " ORDER BY extra_person ASC");
			$query->execute(array($delflag,$place,$budgetmin,$budgetmax));	
		}
	}
	else
	{
		if($budget!=0)
		{	
			
			$query = $dbConnection->prepare("SELECT * FROM tble_property WHERE delflag=? AND property_location=? AND extra_person>=? AND extra_person<=? AND property_id IN (SELECT property_id FROM tble_prop_availability WHERE available_date BETWEEN '$fromdnew' AND '$todnew' AND guest>=$guestsn GROUP BY(property_id)) " . $flds . " ORDER BY extra_person ASC");
			$query->execute(array($delflag,$placeimg,$budgetmin,$budgetmax));	
		}
		else if($budget==0)
		{
			$query = $dbConnection->prepare("SELECT * FROM tble_property WHERE delflag=? AND property_location=? AND property_id IN (SELECT property_id FROM tble_prop_availability WHERE available_date BETWEEN '$fromdnew' AND '$todnew' AND guest>=$guestsn GROUP BY(property_id)) " . $flds . " ORDER BY extra_person ASC");
			$query->execute(array($delflag,$placeimg));
		}
	}
$num = $query->rowCount();
$count = 0;
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
	
	$image = "<a href='#'><img src='property_pics/$ppic' class='popupimg' /></a>";		
	
	if($pinstantbooking=="1")
	{
		$popup = "<div class='popimg' style='background-image:url(images/Orange-price-tab.png)'><img style='width:8px;' src='images/rupee_symbol.png' /> $pprice&nbsp;&nbsp;<img style='width:13px; padding:0px 0px 3px 0px;' src='images/flash.png' /></div>";		
	}
	else
	{
		$popup = "<div class='popimg' style='background-image:url(images/Orange-price-tab.png)'><img style='width:8px;' src='images/rupee_symbol.png' /> $pprice</div>";	
	}
	
	$price = "<span class='popupprice'><span class='popupinr'><img src='images/rupee_symbol_black.png' /> </span>$pprice<span class='popupper'>Per Night</span></span>";
	
	//$button = "<form action='explore.php' method='post'><button type='submit' name='id' value='"."".$ppid.""."' style='padding: 10px 10px 10px 10px;margin: 0px 0px 0px 0px;border-right: 1px solid #F78320;border-left: 0px solid #F78320;border-top: 0px solid #F78320;border-bottom: 0px solid #F78320;background: #F78320;color: #FFFFFF;font-family: Circular Std Bold;font-weight: normal;font-size: 16.81px;display: inline-block;height: 48px;width: 100%;line-height: 30px;text-decoration: none;text-transform: uppercase;text-align: center;'>Explore Now</button></form>";
	
	$randvalue0 = rand(10000000, 99999999);
	$randvalue1 = rand(10000000, 99999999);
	$randvalue2 = rand(10000000, 99999999);
	$randvalue3 = rand(10000000, 99999999);
	$randvalue4 = rand(10000000, 99999999);
	$randvalue5 = rand(10000000, 99999999);
	$randvalue6 = rand(10000000, 99999999);
	$randvalue7 = rand(10000000, 99999999);
	$randvalue8 = rand(10000000, 99999999);
	
	$button = "<form action='explore.php' method='get'><input type='hidden' name='rooms' value='"."".$randvalue0."".""."".$randvalue1."".""."".$randvalue2."".""."".$randvalue3."".""."".$randvalue4."".""."".$randvalue5.""."'/><button type='submit' name='scroll' value='"."".$randvalue6."".""."".$randvalue7."".""."".$randvalue8."".""."".$ppid.""."' style='padding: 10px 10px 10px 10px;margin: 0px 0px 0px 0px;border-right: 1px solid #F78320;border-left: 0px solid #F78320;border-top: 0px solid #F78320;border-bottom: 0px solid #F78320;background: #F78320;color: #FFFFFF;font-family: Circular Std Bold;font-weight: normal;font-size: 16.81px;display: inline-block;height: 48px;width: 100%;line-height: 30px;text-decoration: none;text-transform: uppercase;text-align: center;'>Explore Now</button></form>";
	//echo "$image--$price--$button";
	
	/* bustation railway airport start*/
		$busstation="<p class='busstation'><span class='popupbus'>BUS STATION</span><span class='bus'>".$info['busstation']."KMS</span></p>";
		$railwaystation="<p class='busstation'><span class='popupbus'>RAILWAY STATION</span><span class='bus'>".$info['railwaystation']."KMS</span></p>";
		$airport="<p class='busstation'><span class='popupbus'>AIRPORT</span><span class='bus'>".$info['airport']."KMS</span></p>";
	/* bustation railway airport end*/
	
	$propertydata[] = array("latitude" => "$platitude","longitude" => "$plongitude","city" => "$ptitle","desc" => "$ppdesc","image" => "$image","price" => "$price","button" => "$button","popup" => "$popup","ratings" => "$ratings","amenities" => "$amenities","activities" => "$activities","pinstantbooking" => "$pinstantbooking","busstation" => "$busstation","railwaystation" => "$railwaystation","airport" => "$airport");
}
/*Property Loop & Array Ends Here*/	

$finaldata = array("countryList" => $propertydata);
echo json_encode($finaldata);
?>