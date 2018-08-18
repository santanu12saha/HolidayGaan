<?php
error_reporting(0);
session_start();
include_once ("db/db_connection.php");

$data = json_decode(file_get_contents("php://input"));
$place = $data->place;
$dflag='1';

$fromd = $_SESSION['fromd'];
$tod = $_SESSION['tod'];
$budget = $_SESSION['budget'];
$guests = $_SESSION['guests'];
$star = $_SESSION['star'];	

$activitydata = array();
$count1 = "1";
$query = $dbConnection->prepare("SELECT * FROM tble_activities WHERE delflg=? AND activity_name=?");
$query->execute(array($dflag,$place));
$count = $query->rowCount();	
while ($info = $query->fetch())
{
	$apid = $info['activities_id'];
	$alatitude = $info['latitude'];
	$alongitude = $info['longitude'];
	$atitle = $info['activity_name'];
	$aprice = number_format($info['price']);	
	$faprice = $info['price'];
	$apic = $info['activity_img'];
	$alocation = $info['location'];
	$ahighlight = $info['highlight_about'];
	$time = $info['time'];
	$duration = $info['duration'];
	$inclusions = $info['inclusions'];
	$activity_type = $info['activity_type'];
	if(strlen($info['highlight_about'])>67)
	{
		$rest = substr($info['highlight_about'], 0, 67);
		$dots = "..."; 
		$highlight_about = $rest."".$dots;
	}
	else
	{
		$highlight_about = $info['highlight_about'];
	}
	
	if($info['couple']=="1")
	{
		$couple = '<span class="cell"><img src="images/Couple.png" /></span>';
	}
	else
	{
		$couple = '<span class="cell">&nbsp;</span>';
	}
	if($info['group_activity']=="1")
	{
		$group = '<span class="cell"><img src="images/Group.png" /></span>';
	}
	else
	{
		$group = '<span class="cell">&nbsp;</span>';
	}
	if($info['solo']=="1")
	{
		$solo = '<span class="cell"><img src="images/Solo.png" /></span>';
	}
	else
	{
		$solo = '<span class="cell">&nbsp;</span>';
	}
	
	if($info['couple']=="1" || $info['group_activity']=="1" || $info['solo']=="1")
	{
		$perfectfor = '<div class="perfectfor">Activity Perfect for<p class="row">'."".$couple."".$group."".$solo."".'</p></div>';
	}
	else
	{
		$perfectfor = '';
	}
	
	
	/*Review Loop & Array Starts Here*/	
		$query2 = $dbConnection->prepare("SELECT * FROM tble_activity_review WHERE activity_id=? AND delflag=? LIMIT 1");
		$query2->execute(array($apid,$dflag));
		$info2 = $query2->fetch();
		$rid = $info2['activity_id'];
		$rname = $info2['customer_name'];	
		$rcomment = $info2['review'];
		$rrating = $info2['rating'];
		$cts = date('d m Y', strtotime($info2['cts']));
		
		if($rrating=="1" || $rrating=="1.1" || $rrating=="1.2" || $rrating=="1.3" || $rrating=="1.4" || $rrating=="1.5")
		{
			$frrating = "*";
		}		
		if($rrating=="2" || $rrating=="2.1" || $rrating=="2.2" || $rrating=="2.3" || $rrating=="2.4" || $rrating=="2.5")
		{
			$frrating = "**";
		}		
		if($rrating=="3" || $rrating=="3.1" || $rrating=="3.2" || $rrating=="3.3" || $rrating=="3.4" || $rrating=="3.5")
		{
			$frrating = "***";
		}
		if($rrating=="4" || $rrating=="4.1" || $rrating=="4.2" || $rrating=="4.3" || $rrating=="4.4" || $rrating=="4.5")
		{
			$frrating = "****";
		}	
		if($rrating=="5" || $rrating=="5.1" || $rrating=="5.2" || $rrating=="5.3" || $rrating=="5.4" || $rrating=="5.5")
		{
			$frrating = "*****";
		}
	/*Review Loop & Array Ends Here*/
	
	
	$image = "<img class='popupimg' src='Activities/$info[activity_img]'/>";	
		
	$popup = "<div class='popup1' style='background-image:url(images/Nature-Trails.png);'><span class='poptitle'>$atitle</span><span class='popprice1'>INR. $aprice Per Person</span></div>";
	
	$price = "<span class='popupprice'><span class='popupinr'>INR. </span>$aprice<span class='popupper'>Per Person</span></span>";	
					
	/*Add-To-Cart Form Starts Here*/
	$button = '<form><div ng-show="cart1"><input type="hidden" ng-model="aid" id="aid" name="aid" value="'."".$apid."".'"/><input type="hidden" id="atitle" ng-model="atitle" value="'."".$atitle."".'"/><input type="hidden" id="aprice" ng-model="aprice" value="'."".$aprice."".'"/><input type="hidden" id="userid" ng-model="userid" value="'."".$userid."".'"/><input type="hidden" id="alatitude" ng-model="alatitude" value="'."".$alatitude."".'"/><input type="hidden" id="alongitude" ng-model="alongitude" value="'."".$alongitude."".'"/><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><input type="button" value="morning" class="min-org-btn" /><strong>at '."".$atitle."".'</strong><span class="timing">'."".$time."".'</span><span class="duration">Duration - '."".$duration."".'</span>'."".$perfectfor."".'<div class="pricing">Pricing<p class="row">INR.'."".$aprice."".'</p></div><div class="inclusions">Inclusions<p class="row">'."".$inclusions."".'</p></div><div class="about">About / Highlights<p class="row">'."".$highlight_about."".'</p><input type="button" value="readmore" class="min-grey-btn" /></div><div class="organised">Organised by<p class="row">simply dummy text</p></div><div class="reviews">Reviews<p class="row">'."".$rname."".'</p><p class="row">on '."".$cts."".'</p><p class="row">'."".$frrating."".'</p><p class="row"><span>'."".$rcomment."".'</span></p><input type="submit" ng-click="noOfDates()" value="Add to Cart" class="min-grey-btn" /></div></div><div class="daytime" ng-show="cart2"><strong>'."".$atitle."".'</strong><p class="row-one"><span class="cell-lt">Choose a day and time</span><span class="cell-rt"><select name="category-group" id="datepick" ng-model="datepick" ng-change="onCategoryChange(datepick)"><option value="">Select Day</option><option ng-repeat="dateactivity in nodates" value="{{dateactivity.dates}}" >{{dateactivity.dates}} </option></select></span></p><p class="row-two"><span class="cell-lt"><select name="category-group" id="Guest" ng-model="Guest"><option value="">Guest</option><option value="1 Guest"  name="Guest">1  Guest</option><option value="2 Guest"  name="Guest">2  Guest</option><option value="3 Guest" name="Guest">3  Guest</option><option value="4 Guest"  name="Guest">4  Guest</option><option value="5 Guest" name="Guest">5  Guest</option><option value="6 Guest" name="Guest">6  Guest</option><option value="7 Guest" name="Guest">7  Guest</option><option value="8 Guest" name="Guest">8  Guest</option><option value="9 Guest" name="Guest">9  Guest</option><option value="10 Guest" name="Guest">10 Guest</option></select></span><span class="cell-cr"><select name="category-group" id="time" ng-model="time"><option value="">Start</option><option value="07.00" ng-model="time" id="time" name="time"> 7 A.M</option><option value="08.00" ng-model="time" id="time" name="time"> 8 A.M</option><option value="09.00" ng-model="time" id="time" name="time"> 9 A.M</option><option value="10.00" ng-model="time" id="time" name="time">10 A.M</option><option value="11.00" ng-model="time" id="time" name="time">11 A.M</option><option value="12.00" ng-model="time" id="time" name="time">12 NOON</option><option value="13.00" ng-model="time" id="time" name="time">1 P.M</option><option value="14.00" ng-model="time" id="time" name="time">2 P.M</option><option value="15.00" ng-model="time" id="time" name="time">3 P.M</option><option value="16.00" ng-model="time" id="time" name="time">4 P.M</option><option value="17.00" ng-model="time" id="time" name="time">5 P.M</option><option value="18.00" ng-model="time" id="time" name="time">6 P.M</option><option value="19.00" ng-model="time" id="time" name="time">7 P.M</option><option value="20.00" ng-model="time" id="time" name="time">8 P.M</option><option value="21.00" ng-model="time" id="time" name="time">9 P.M</option><option value="22.00" ng-model="time" id="time" name="time">10 P.M</option><option value="23.00" ng-model="time" id="time" name="time">11 P.M</option><option value="24.00" ng-model="time" id="time" name="time">12 A.M</option></select></span><span class="cell-rt"><select name="category-group" id="time1" ng-model="time1"><option value="">End</option><option value="07.00" ng-model="time1" id=time1" name="time1"> 7 A.M</option><option value="08.00" ng-model="time1" id="time1" name="time1"> 8 A.M</option><option value="09.00" ng-model="time1" id="time1" name="time1"> 9 A.M</option><option value="10.00" ng-model="time1" id="time1" name="time1">10 A.M</option><option value="11.00" ng-model="time1" id="time1" name="time1">11 A.M</option><option value="12.00" ng-model="time1" id="time1" name="time1">12 NOON</option><option value="13.00" ng-model="time1" id="time1" name="time1">1 P.M</option><option value="14.00" ng-model="time1" id="time1" name="time1">2 P.M</option><option value="15.00" ng-model="time1" id="time1" name="time1">3 P.M</option><option value="16.00" ng-model="time1" id="time1" name="time1">4 P.M</option><option value="17.00" ng-model="time1" id="time1" name="time1">5 P.M</option><option value="18.00" ng-model="time1" id="time1" name="time1">6 P.M</option><option value="19.00" ng-model="time1" id="time1" name="time1">7 P.M</option><option value="20.00" ng-model="time1" id="time1" name="time1">8 P.M</option><option value="21.00" ng-model="time1" id="time1" name="time1">9 P.M</option><option value="22.00" ng-model="time1" id="time1" name="time1">10 P.M</option><option value="23.00" ng-model="time1" id="time1" name="time1">11 P.M</option><option value="24.00" ng-model="time1" id="time1" name="time1">12 A.M</option></select></span></p><p style="height:0;">&nbsp;</p><input type="submit" ng-click="showthird(dateactivity.dates,time,time1)" value="Book Now" class="org-btn" /></div><div class="continue" ng-show="cart3"><div class="row-one"><p class="cell-lt"><strong>'."".$atitle."".'</strong><span>Activity 1 for Day 1 at Mysore</span></p><p class="cell-rt"><strong>INR.'."".$aprice."".'</strong></p></div><p class="row"><span class="cell-lt">Date</span><span class="cell-rt">{{selectedvalues}}</span></p><p class="row"><span class="cell-lt">Time</span><span class="cell-rt">{{selectedvalues1}}-{{selectedvalues2}}</span></p><p class="row"><span class="cell-lt">Duration</span><span class="cell-rt">{{duration}} hrs</span></p><p style="height:0;">&nbsp;</p><input type="hidden" ng-model="startdate" name="startdate" id="startdate" value="'."".$fromd."".'"/><input type="hidden" ng-model="enddate" id="enddate" value="'."".$tod."".'"/><input type="hidden" ng-model="activity_id" id="activity_id" value="'."".$apid."".'"/><input type="hidden" ng-model="activitytitle" id="activitytitle" value="'."".$atitle."".'"/><input type="hidden" ng-model="activityprice" id="activityprice" value="'."".$faprice."".'"/><input type="hidden" ng-model="activityuserid" id="activityuserid" value="'."".$userid."".'"/><input type="hidden" ng-model="activityaltitude" id="activityaltitude" value="'."".$alatitude."".'"/><input type="hidden" ng-model="activitylongitude" id="activitylongitude" value="'."".$alongitude."".'"/><input type="hidden" ng-model="activitytp" id="activitytp"  value="'."".$activity_type."".'" /><input type="submit" ng-click="continueBooking(dateactivity.dates,time,time1,Guest)" value="Continue Booking" class="org-btn" /></div></form>';	
	/*Add-To-Cart Form Ends Here*/
	
	$activitydata[] = array("latitude" => "$alatitude","longitude" => "$alongitude","city" => "$atitle","image" => "$image","price" => "$price","button" => "$button","popup" => "$popup");
	$count1++;	
}
$finaldata = array("countryList" => $activitydata);
echo json_encode($finaldata);
?>