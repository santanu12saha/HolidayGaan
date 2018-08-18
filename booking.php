<?php
error_reporting(0);
session_start();
include_once ("db/db_connection.php");
$delflag = "1";	
$fpropid = $_SESSION['propid'];
$fproptitle = $_SESSION['proptitle'];
$fpropprice = $_SESSION['propprice'];
$fproplatitude = $_SESSION['proplatitude'];
$fproplongitude = $_SESSION['proplongitude'];
$fromd = $_SESSION['fromd'];
$tod = $_SESSION['tod'];
$fguests = $_SESSION['guests'];

$fpropactivities = json_decode(json_encode($_SESSION['propactivities']), true);
$fpropactivitieslatlon = json_decode(json_encode($_SESSION['propactivitieslatlon']), true);
$fpropactivitiesid = json_decode(json_encode($_SESSION['propactivitiesid']), true);
$fpropactivitydetails = json_decode(json_encode($_SESSION['propactivitydetails']), true);
$fpropactivityfulldetails = json_decode(json_encode($_SESSION['propactivityfulldetails']), true);

$fpropactivitytitle = json_decode(json_encode($_SESSION['propactivitytitle']), true);
$fpropnodates = json_decode(json_encode($_SESSION['propnodates']), true);
$fpropactivitydates = json_decode(json_encode($_SESSION['propactivitydates']), true);

$fproptransport = json_decode(json_encode($_SESSION['proptransport']), true);
$fpropactivitiestransports = json_decode(json_encode($_SESSION['propactivitiestransports']), true);
include_once ("functions.php");
$query = $dbConnection->prepare("SELECT * FROM tble_property WHERE delflag=? AND property_id=? ORDER BY property_id DESC");
$query->execute(array($delflag,$fpropid));	
$num = $query->rowCount();
$info = $query->fetch();
$address = $info['property_address'];
$picture = $info['property_picture'];
$tax = $info['tax'];
$formDate = strtotime($fromd);
$toDate = strtotime($tod);
$timeDiff = abs($toDate - $formDate);
$numberDays = $timeDiff/86400;
$totaln = intval($numberDays);
$price = str_replace(",", "",$fpropprice);
$sntc = $totaln * $price;
$ntc = $fguests * $sntc;
$servicefee = ($tax/100)*($sntc*$fguests);
$occupancytaxes = 5500;



$hide="";
$detail_arr = sizeof($fpropactivityfulldetails1); 
if($detail_arr==0)
{
	$hide = false;
	$hide1 = '<div class="bookdiv"><img src="property_pics/'."".$picture."".'" width="320px" /><p><strong>'."".$fproptitle."".'</strong></p></div>';

}
else
{
	$hide = true;
	$Propdetail_arr = sizeof($fpropactivityfulldetails1); 
	$arrprop_details = $Propdetail_arr/11; 
	$farrprop_details = $arrprop_details - 1; 
	$PropnewDate1=6; 
	$PropActID1 = $fpropactivityfulldetails1[0]; 
	$PropActType1 = $fpropactivityfulldetails1[1];  
	$PropActName1 = $fpropactivityfulldetails1[2]; 
	$PropActPrice1 = $fpropactivityfulldetails1[3]; 
	$PropActLatitude1 = $fpropactivityfulldetails1[4]; 
	$PropActLongitude1 = $fpropactivityfulldetails1[5];
	$PropOLDActDate1 = $fpropactivityfulldetails1[6]; 
	$PropActGuest1 = $fpropactivityfulldetails1[7]; 
	$PropActStartTime1 = $fpropactivityfulldetails1[8]; 
	$PropActEndTime1 = $fpropactivityfulldetails1[9]; 
	$PropActTransportType1 = $fpropactivityfulldetails1[10]; 
	if($PropActTransportType1 == "")
	{
		$transhide = "none";
	}
	else
	{
		$transhide = "block";
	}
	if($PropActStartTime1>$PropActEndTime1) 
	{ 
		$Propduration1 = $PropActStartTime1 - $PropActEndTime1; 
	} 
	else  
	{  

		$Propduration1 = $PropActEndTime1 - $PropActStartTime1; 
	}
	$hide1 = '<div class="bookdiv"><img src="property_pics/'."".$picture."".'" width="320px" /><p><strong style="text-transform: uppercase">'."".$fproptitle."".'</strong></p><div class="proppptr"><div class="proppptr-lt"><strong>ITINERARY</strong></div></div><div class="rktr"><strong >DAY 1</strong></div><p><strong> '."".$PropActName1."".' X '."".$PropActGuest1."".'</strong></p><p><strong>Date of Activity:</strong> '."".$PropOLDActDate1."".'</p><p><strong>Start Time:</strong> '."".$PropActStartTime1."".'</p><p><strong>End Time:</strong> '."".$PropActEndTime1."".'</p><p><strong>Duration:</strong> '."".$Propduration1."".'&nbsp;hrs</p><p><strong>Guest:</strong> '."".$PropActGuest1."".'</p><p style="display:'."".$transhide."".'"><strong>Transport:</strong> '."".$PropActTransportType1."".'</p>';
	$leoProp1 = 1; 
	for($k=0;$k<$farrprop_details;$k++) 
	{ 
		$PropoldDate1 = $PropnewDate1; 
		$PropnewDate1 = $PropoldDate1+11; 
		$Propminus6ActID1 = $PropnewDate1-6; 
		$Propminus5ActType1 = $PropnewDate1-5; 
		$Propminus4ActName1 = $PropnewDate1-4; 
		$Propminus3ActPrice1 = $PropnewDate1-3; 
		$Propminus2ActLatitude1 = $PropnewDate1-2; 
		$Propminus1ActLongitude1 = $PropnewDate1-1; 
		$Propplus1ActGuest1 = $PropnewDate1+1; 
		$Propplus2ActStartTime1 = $PropnewDate1+2; 
		$Propplus3ActEndTime1 = $PropnewDate1+3; 
		$Propplus4ActTransportType1 = $PropnewDate1+4; 
		$PropActID1 = $fpropactivityfulldetails1[$Propminus6ActID1]; 
		$PropActType1 = $fpropactivityfulldetails1[$Propminus5ActType1]; 
		$PropActName1 = $fpropactivityfulldetails1[$Propminus4ActName1]; 
		$PropActPrice1 = $fpropactivityfulldetails1[$Propminus3ActPrice1]; 
		$PropActLatitude1 = $fpropactivityfulldetails1[$Propminus2ActLatitude1]; 
		$PropActLongitude1 = $fpropactivityfulldetails1[$Propminus1ActLongitude1]; 
		$PropActDate1 = $fpropactivityfulldetails1[$PropnewDate1]; 
		$PropActGuest1 = $fpropactivityfulldetails1[$Propplus1ActGuest1]; 
		$PropActStartTime1 = $fpropactivityfulldetails1[$Propplus2ActStartTime1]; 
		$PropActEndTime1  = $fpropactivityfulldetails1[$Propplus3ActEndTime1]; 
		$PropActTransportType1 = $fpropactivityfulldetails1[$Propplus4ActTransportType1]; 
		if($PropActTransportType1 == "")
		{
			$transhide1 = "none";
		}
		else
		{
			$transhide1 = "block";
		}
		if($PropActStartTime1>$PropActEndTime1) 
		{ 
			$Propduration1 = $PropActStartTime1 - $PropActEndTime1; 
		} 
		else 
		{ 
			$Propduration1 = $PropActEndTime1 - $PropActStartTime1; 
		} 
		if($PropOLDActDate1==$PropActDate1) 
		{ 
	      $hide1 = $hide1.'<p><strong>'."".$PropActName1."".' X '."".$PropActGuest1."".'</strong></p><p><strong>Date of Activity:</strong> '."".$PropActDate1."".'</p><p><strong>Start Time:</strong> '."".$PropActStartTime1."".'</p><p><strong>End Time:</strong> '."".$PropActEndTime1."".'</p><p><strong>Duration:</strong> '."".$Propduration1."".'&nbsp;hrs</p><p><strong>Guest:</strong> '."".$PropActGuest1."".'</p><p style="display:'."".$transhide1."".'"><strong>Transport:</strong> '."".$PropActTransportType1."".'</p>';
		}
		elseif($PropOLDActDate1!=$PropActDate1) 
		{ 
			$leoProp = 1 + $leoProp1;
	   
			$hide1 = $hide1.'<div class="rktr"><strong >DAY '."".$leoProp."".'</strong></div><p><strong> '."".$PropActName1."".' X '."".$PropActGuest1."".'</strong></p><p><strong>Date of Activity:</strong> '."".$PropActDate1."".'</p><p><strong>Start Time:</strong> '."".$PropActStartTime1."".'</p><p><strong>End Time:</strong> '."".$PropActEndTime1."".'</p><p><strong>Duration:</strong> '."".$Propduration1."".'&nbsp;hrs</p><p><strong>Guest:</strong> '."".$PropActGuest1."".'</p><p style="display:'."".$transhide1."".'"><strong>Transport:</strong> '."".$PropActTransportType1."".'</p>';
	   
			$PropOLDActDate1 = $fpropactivityfulldetails1[$PropnewDate1]; 
			$leoProp1++; 
		} 
		
	}
	$hide1 = $hide1.'</div>';

}

?>
<!DOCTYPE html>
<html lang="en">
<html data-ng-cloak data-ng-app="bookingapp">
	<head>
		<?php include "title.php";?>					
		<link rel="icon" type="image/gif/png/jpg" href="images/red-dot.png"/>
		<!--AngularJs Script Starts Here-->
			<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
			<script src="js/angularjs/booking-script.js"></script>
		<!--AngularJs Script Ends Here-->
		
		<!--Google-Map Script Starts Here-->
			<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAyeEM2RowGhpCiszkU0qGwDHqaZPVjKgE&libraries=geometry"></script>
			<!--<script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox.js"></script>-->
			<script src="js/angularjs/infobox.js"></script>
         <script type="text/javascript" src="js/markerwithlabel.js"></script>
		<!--Google-Map Script Ends Here-->
	</head>
	<body data-ng-controller="bookingcontroller">
		<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'\vkationdemo\fb-login\fbConfig.php'); include "booking-header.php";?>
		<?php include "booking-content.php";?>
		<?php include "footer.php";?>
		<!--Google-Map Script Starts Here-->
		    <script type="text/javascript">
		        var markers = [
					{
		                "title": '<?php echo $fproptitle; ?>',
		                "lat": '<?php echo $fproplatitude; ?>',
		                "lng": '<?php echo $fproplongitude; ?>',
						"description":'<?php echo $hide1; ?>',
		                "highlight": '<div class="pophighlight"><p><?php echo $fproptitle; ?></p></div>',
						"datecount":''
						
		            },					
					<?php
						   $activity_count = 1;
		            	   $detail_arr = sizeof($fpropactivityfulldetails1); 
						   $arr_details = $detail_arr/11;
						   $farr_details = $arr_details - 1;
						   $newDate1=6;
						   $ActID1 = $fpropactivityfulldetails1[0];
						   $ActType1 = $fpropactivityfulldetails1[1];
						   $ActName1 = $fpropactivityfulldetails1[2];
						   $ActPrice1 = $fpropactivityfulldetails1[3];
						   $ActLatitude1 = $fpropactivityfulldetails1[4];
						   $ActLongitude1 = $fpropactivityfulldetails1[5];
						   $OLDActDate1 = $fpropactivityfulldetails1[6];
						   $ActGuest1 = $fpropactivityfulldetails1[7];
						   $ActStartTime1 = $fpropactivityfulldetails1[8];
						   $ActEndTime1 = $fpropactivityfulldetails1[9];
						   $ActTransportType1 = $fpropactivityfulldetails1[10];
						   if($ActTransportType1 == "")
						   {
							   $transhideActivities = "none";
						   }
						   else
						   {
							   $transhideActivities = "block";
						   }
						   if($ActStartTime1>$ActEndTime1)
						   {
								$duration1 = $ActStartTime1 - $ActEndTime1;
						   }
						   else
						   {
							   $duration1 = $ActEndTime1 - $ActStartTime1;
						   }
						   
							$query1 = $dbConnection->prepare("SELECT * FROM tble_activities WHERE delflg=? AND activities_id=? ORDER BY activities_id DESC");
							$query1->execute(array($delflag,$ActID1));	
							$num1 = $query1->rowCount();
							$info1 = $query1->fetch();
							$activity_img1 = $info1['activity_img'];
							/*if($_SESSION['kayaking']==1 && $ActType1=="kayaking")
							{
								$popupImage = "images/green1.png";
							}
							elseif($_SESSION['scuba']==1 && $ActType1=="scuba")
							{
								$popupImage = "images/green1.png";
							}
							elseif($_SESSION['paragliding']==1 && $ActType1=="paragliding")
							{
								$popupImage = "images/green1.png";
							}
							elseif($_SESSION['nature']==1 && $ActType1=="nature")
							{
								$popupImage = "images/green1.png";
							}
							elseif($_SESSION['golf']==1 && $ActType1=="golf")
							{
								$popupImage = "images/green1.png";
							}
							else
							{
								$popupImage = "images/maroon.png";
							}*/
							$popupImage = "images/Orange-price-tab1.png"; 
		            ?>
		           			{
				                "title": '<?php echo $ActName1; ?>',
				                "lat": '<?php echo $ActLatitude1; ?>',
				                "lng": '<?php echo $ActLongitude1; ?>',
				                "description": '<div class="bookdiv"><img src="Activities/<?php echo $activity_img1; ?>" width="320px" /><p><strong style="text-transform: uppercase"><?php echo $ActName1; ?></strong></p><div class="pptr"><div class="pptr-lt"><strong>ITINERARY</strong></div></div><p><strong>Date of Activity:</strong> <?php echo $OLDActDate1; ?></p><p><strong>Start Time:</strong> <?php echo $ActStartTime1; ?></p><p><strong>End Time:</strong> <?php echo $ActEndTime1; ?></p><p><strong>Duration:</strong> <?php echo $duration1; ?>&nbsp;hrs</p><p><strong>Guest:</strong> <?php echo $ActGuest1; ?></p><p style="display:<?php echo $transhideActivities; ?>"><strong>Transport:</strong> <?php echo $ActTransportType1; ?></p><div class="rktr"><strong >DAY 1</strong></div></div>',
				                "highlight": '<div class="popuplabel" style="background-image:url(<?php echo $popupImage; ?>)"><p class="popupinfo">DAY 1 - Activity <?php echo $activity_count; ?></p><p class="popactname"><?php echo $ActName1; ?></p></div>',
								"datecount":'1'
								
				            },
		            <?php
							$leos1 = 1;
							$leos = 1;
							for($i=0;$i<$farr_details;$i++)
							{
									
								$oldDate1 = $newDate1;
								$newDate1 = $oldDate1+11;
									
								$minus6ActID1 = $newDate1-6;
								$minus5ActType1 = $newDate1-5;
								$minus4ActName1 = $newDate1-4;
								$minus3ActPrice1 = $newDate1-3;
								$minus2ActLatitude1 = $newDate1-2;
								$minus1ActLongitude1 = $newDate1-1;
								$plus1ActGuest1 = $newDate1+1;
								$plus2ActStartTime1 = $newDate1+2;
								$plus3ActEndTime1 = $newDate1+3;
								$plus4ActTransport1 = $newDate1+4;
									
								$ActID1 = $fpropactivityfulldetails1[$minus6ActID1];
								$ActType1 = $fpropactivityfulldetails1[$minus5ActType1];
								$ActName1 = $fpropactivityfulldetails1[$minus4ActName1];
								$ActPrice1 = $fpropactivityfulldetails1[$minus3ActPrice1];
								$ActLatitude1 = $fpropactivityfulldetails1[$minus2ActLatitude1];
								$ActLongitude1 = $fpropactivityfulldetails1[$minus1ActLongitude1];
								$ActDate1 = $fpropactivityfulldetails1[$newDate1];
								$ActGuest1 = $fpropactivityfulldetails1[$plus1ActGuest1];
								$ActStartTime1 = $fpropactivityfulldetails1[$plus2ActStartTime1];
								$ActEndTime1 = $fpropactivityfulldetails1[$plus3ActEndTime1];
								$ActTransportType1 = $fpropactivityfulldetails1[$plus4ActTransport1];
								if($ActTransportType1 == "")
								{
									 $transhideActivities1 = "none";
								}
								else
								{
									$transhideActivities1 = "block";
								}
								
								 if($ActStartTime1>$ActEndTime1)
								 {
									 $duration1 = $ActStartTime1 - $ActEndTime1;
								 }
								 else
								 {
									 $duration1 = $ActEndTime1 - $ActStartTime1;
								 }
									
								 $query1 = $dbConnection->prepare("SELECT * FROM tble_activities WHERE delflg=? AND activities_id=? ORDER BY activities_id DESC");
								 $query1->execute(array($delflag,$ActID1));	
								 $num1 = $query1->rowCount();
								 $info1 = $query1->fetch();
								 $activity_img1 = $info1['activity_img'];
								 
									
									if($OLDActDate1==$ActDate1)
									{
										$activity_count = $activity_count + 1;
										/*if($_SESSION['kayaking']==1 && $ActType1=="kayaking")
										{
											$popupImage = "images/green1.png";
										}
										elseif($_SESSION['scuba']==1 && $ActType1=="scuba")
										{
											$popupImage = "images/green1.png";
										}
										elseif($_SESSION['paragliding']==1 && $ActType1=="paragliding")
										{
											$popupImage = "images/green1.png";
										}
										elseif($_SESSION['nature']==1 && $ActType1=="nature")
										{
											$popupImage = "images/green1.png";
										}
										elseif($_SESSION['golf']==1 && $ActType1=="golf")
										{
											$popupImage = "images/green1.png";
										}
										else
										{
											$popupImage = "images/maroon.png";
										}*/
										if($leos == 1)
										{
										$popupImage = "images/Orange-price-tab1.png";
										}
										if($leos == 2)
										{
										$popupImage = "images/maroon.png";
										}
										if($leos == 3)
										{
										$popupImage = "images/green1.png";
										}
										
				  ?> 
										{
											"title": '<?php echo $ActName1; ?>',
											"lat": '<?php echo $ActLatitude1; ?>',
											"lng": '<?php echo $ActLongitude1; ?>',
											"description": '<div class="bookdiv"><img src="Activities/<?php echo $activity_img1; ?>" width="320px" /><p><strong style="text-transform: uppercase"><?php echo $ActName1; ?></strong></p><div class="pptr"><div class="pptr-lt"><strong>ITINERARY</strong></div></div><p><strong>Date of Activity:</strong> <?php echo $OLDActDate1; ?></p><p><strong>Start Time:</strong> <?php echo $ActStartTime1; ?></p><p><strong>End Time:</strong> <?php echo $ActEndTime1; ?></p><p><strong>Duration:</strong> <?php echo $duration1; ?>&nbsp;hrs</p><p><strong>Guest:</strong> <?php echo $ActGuest1; ?></p><p style="display:<?php echo $transhideActivities1; ?>"><strong>Transport:</strong> <?php echo $ActTransportType1; ?></p><div class="rktr"><strong>DAY&nbsp;<?php echo $leos; ?></strong></div></div>',
											"highlight": '<div class="popuplabel" style="background-image:url(<?php echo $popupImage; ?>)"><p class="popupinfo">DAY&nbsp;<?php echo $leos; ?>&nbsp;-&nbsp;Activity&nbsp;<?php echo $activity_count; ?></p><p class="popactname"><?php echo $ActName1; ?></p></div>',
											"datecount":'<?php echo $leos; ?>'
											
										},
				<?php
										
									}
									elseif($OLDActDate1!=$ActDate1)
									{
											$activity_count = 1;
											$leos = 1 + $leos1;
											/*if($_SESSION['kayaking']==1 && $ActType1=="kayaking")
											{
												$popupImage = "images/green1.png";
											}
											elseif($_SESSION['scuba']==1 && $ActType1=="scuba")
											{
												$popupImage = "images/green1.png";
											}
											elseif($_SESSION['paragliding']==1 && $ActType1=="paragliding")
											{
												$popupImage = "images/green1.png";
											}
											elseif($_SESSION['nature']==1 && $ActType1=="nature")
											{
												$popupImage = "images/green1.png";
											}
											elseif($_SESSION['golf']==1 && $ActType1=="golf")
											{
												$popupImage = "images/green1.png";
											}
											else
											{
												$popupImage = "images/maroon.png";
											}*/
											
											if($leos == 1)
											{
											$popupImage = "images/Orange-price-tab1.png";
											}
											if($leos == 2)
											{
											$popupImage = "images/maroon.png";
											}
											if($leos == 3)
											{
											$popupImage = "images/green1.png";
											}
											
											$query1 = $dbConnection->prepare("SELECT * FROM tble_activities WHERE delflg=? AND activities_id=? ORDER BY activities_id DESC");
											$query1->execute(array($delflag,$ActID1));	
											$num1 = $query1->rowCount();
											$info1 = $query1->fetch();
											$activity_img1 = $info1['activity_img'];	
				?>		
												{
													"title": '<?php echo $ActName1; ?>',
													"lat": '<?php echo $ActLatitude1; ?>',
													"lng": '<?php echo $ActLongitude1; ?>',
													"description": '<div class="bookdiv"><img src="Activities/<?php echo $activity_img1; ?>" width="320px" /><p><strong style="text-transform: uppercase"><?php echo $ActName1; ?></strong></p><div class="pptr"><div class="pptr-lt"><strong>ITINERARY</strong></div></div><p><strong>Date of Activity:</strong> <?php echo $ActDate1; ?></p><p><strong>Start Time:</strong> <?php echo $ActStartTime1; ?></p><p><strong>End Time:</strong> <?php echo $ActEndTime1; ?></p><p><strong>Duration:</strong> <?php echo $duration1; ?>&nbsp;hrs</p><p><strong>Guest:</strong> <?php echo $ActGuest1; ?></p><p style="display:<?php echo $transhideActivities1; ?>"><strong>Transport:</strong> <?php echo $ActTransportType1; ?></p><div class="rktr"><strong>DAY&nbsp;<?php echo $leos; ?></strong></div></div>',
													"highlight": '<div class="popuplabel" style="background-image:url(<?php echo $popupImage; ?>)"><p class="popupinfo">DAY&nbsp;<?php echo $leos; ?>&nbsp;-&nbsp;Activity&nbsp;<?php echo $activity_count; ?></p><p class="popactname"><?php echo $ActName1; ?></p></div>',
													"datecount":'<?php echo $leos; ?>'
												},  
				<?php
									$OLDActDate1 = $fpropactivityfulldetails1[$newDate1];
									$leos1++;
										
						}
					}
				?>	
					
							
		];
		
// Setup the different icons and shadows
var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';
var icons = ['images/red-dot.png', 'images/Address-Icon.png','images/Address-Icon.png','images/Address-Icon.png','images/Address-Icon.png','images/Address-Icon.png', 'Address-Icon.png'];

var iconsLength = icons.length;
		        window.onload = function () {
					
					
					
					
					
		            var mapOptions = {
		                center: new google.maps.LatLng(markers[0].lat, markers[0].lng),
		                mapTypeId: google.maps.MapTypeId.ROADMAP,
		                zoom: 2,
		            };
		            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
					
					
					
					
					
				    var date_count = new Array();
					for(k=0;k<markers.length;k++)
					{
						
							date_count.push(markers[k]['datecount']);
							
						
					}
		            var lat_lng = new Array();
		            var latlngbounds = new google.maps.LatLngBounds();
	
	                var iconCounter = 0;
		            for (i = 0; i < markers.length; i++) {
		                
						if(markers[i]['lat']!="" && markers[i]['lng']!="")
						{	
								var data = markers[i];
								var myLatlng = new google.maps.LatLng(data.lat, data.lng);
								lat_lng.push(myLatlng);
								var marker = new google.maps.Marker({
								map:map,
								position: myLatlng,
								icon:icons[iconCounter],
							});	 
								latlngbounds.extend(marker.position);
						
						
								var boxText = document.createElement("div");
						
								var boxOptions = {
									content: boxText,
									disableAutoPan: false,
									maxWidth:0,
									pixelOffset: new google.maps.Size(-105, -43),
									zIndex: null,
									boxStyle: {
										opacity: 1,
									},
									closeBoxMargin: "2px 2px 2px 2px",
									closeBoxURL: "",
									infoBoxClearance: new google.maps.Size(1, 1),
									alignBottom: true
								};
							
							var ib = new InfoBox(boxOptions);
						
			
								google.maps.event.addListener(
								marker,
								'onload', (function(marker, data) {
									ib.setOptions(boxOptions);
									boxText.innerHTML = data.highlight;
									ib.open(map, marker);
								
								})(marker, data)
							);
					
						
							var boxTextInfo = document.createElement("div");
							boxTextInfo.style.cssText = "background: #FFFFFF; padding: 5px;";
							var boxOptionsInfo = {
									content: boxTextInfo,
									disableAutoPan: false,
									maxWidth:0,
									pixelOffset: new google.maps.Size(-150, -120),
									zIndex: null,
									boxStyle: {
										opacity: 1,
								},
								closeBoxMargin: "2px 2px 2px 2px",
								closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
								infoBoxClearance: new google.maps.Size(1, 1),
								alignBottom: true
							};
					
							var ibInfo = new InfoBox();
							
							
								(function (marker, data) {
								google.maps.event.addListener(marker, "click", function (e) {
									ibInfo.setOptions(boxOptionsInfo);
									boxTextInfo.innerHTML = data.description;
									ibInfo.open(map, marker);
								});
							})(marker, data);
								iconCounter++;					
						}
						else
						{
							break;
						}
		            }
		            map.setCenter(latlngbounds.getCenter());
		            map.fitBounds(latlngbounds);
		
		            //***********ROUTING****************//
		
					var  flightPlanCoordinates = new Array();
					var myLatlng1 = new google.maps.LatLng(markers[0]['lat'],markers[0]['lng']);
					flightPlanCoordinates.push(myLatlng1);
					for(p=1;p<=markers.length;p++)
					{
						if(date_count[p]==1)
						{
						
							myLatlng1 = new google.maps.LatLng(markers[p]['lat'],markers[p]['lng']);
							flightPlanCoordinates.push(myLatlng1);

						}
						else
						{
							/*var flightPath = new google.maps.Polyline({
									path:flightPlanCoordinates,
									geodesic: true,
									strokeColor: '#FFA500',
									 travelMode: 'google.maps.DirectionsTravelMode.DRIVING',
									strokeOpacity: 1.0,
									strokeWeight: 2,
									map:map
								});	*/
								
						}
						
					}
					var directionsService1 = new google.maps.DirectionsService;
					var directionsDisplay1 = new google.maps.DirectionsRenderer;
					directionsDisplay1.setMap(map);
					directionsDisplay1.setOptions( { suppressMarkers: true } );
					directionsDisplay1.setOptions( { preserveViewport: true } );			
				    directionsDisplay1.setOptions({
									polylineOptions: {
										    strokeWeight: 5,
											strokeOpacity: 1,
											geodesic: true,
											strokeColor:  '#EF7F1A' 
										}
								});
								
								
					var len1 = flightPlanCoordinates.length;
					var waypt1 = new Array();
					for(i=1;i<len1-1;i++)
					{
						waypt1.push({location:flightPlanCoordinates[i]})
					}
					var src = flightPlanCoordinates[0];
					var des = flightPlanCoordinates[len1-1];
					directionsService1.route({
												origin: src,
												destination: des, 
												waypoints: waypt1,
												optimizeWaypoints:true,
												provideRouteAlternatives:true,
												travelMode: google.maps.TravelMode.DRIVING
											 }, function(response, status) 
												{
													if (status == google.maps.DirectionsStatus.OK) 
													{
														directionsDisplay1.setDirections(response);
													} 
													else 
													{
														//window.alert('Directions request failed due to ' + status);
													}
												});
										
					var  flightPlanCoordinates1 = new Array();
					var myLatlng2 = new google.maps.LatLng(markers[0]['lat'],markers[0]['lng']);
					flightPlanCoordinates1.push(myLatlng2);
					for(k=1;k<=markers.length;k++)
					{
						
						if(date_count[k]==2)
						{
							
							myLatlng2 = new google.maps.LatLng(markers[k]['lat'],markers[k]['lng']);
							flightPlanCoordinates1.push(myLatlng2);
							var len0 = flightPlanCoordinates1.length;
							
							
						}
						else
						{
							/*var flightPath = new google.maps.Polyline({
									path:flightPlanCoordinates1,
									geodesic: true,
									strokeColor: '#800000',
									travelMode: 'driving',
									strokeOpacity: 1.0,
									strokeWeight: 2,
									map:map
								});	*/
								
										
											
								
						}
						
					}
					var directionsService2 = new google.maps.DirectionsService;
					var directionsDisplay2 = new google.maps.DirectionsRenderer;
					directionsDisplay2.setMap(map);
					directionsDisplay2.setOptions( { suppressMarkers: true } );
					directionsDisplay2.setOptions( { preserveViewport: true } );			
								
					directionsDisplay2.setOptions({
										polylineOptions: {
										strokeWeight: 5,
										strokeOpacity: 1,
										geodesic: true,
										strokeColor:  '#6B231C' 
									}
								}); 
							
								
					var len2 = flightPlanCoordinates1.length;
					var waypt2 = new Array();
					for(i=1;i<len2-1;i++)
					{
						waypt2.push({location:flightPlanCoordinates1[i]})
					}
					var src = flightPlanCoordinates1[0];
					var des = flightPlanCoordinates1[len2-1];
					directionsService2.route({
												origin: src,
												destination: des, 
												waypoints: waypt2,
												optimizeWaypoints:true,
												provideRouteAlternatives:true,
												travelMode: google.maps.TravelMode.DRIVING
											}, function(response, status) 
												{
													if (status == google.maps.DirectionsStatus.OK) 
													{
														directionsDisplay2.setDirections(response);
													} 
													else 
													{
														//window.alert('Directions request failed due to ' + status);
													}
												});
					
					
					var  flightPlanCoordinates2= new Array();
					var myLatlng3 = new google.maps.LatLng(markers[0]['lat'],markers[0]['lng']);
					flightPlanCoordinates2.push(myLatlng3);
					for(m=1;m<=markers.length;m++)
					{
						
						if(date_count[m]==3)
						{
							
							myLatlng3 = new google.maps.LatLng(markers[m]['lat'],markers[m]['lng']);
							flightPlanCoordinates2.push(myLatlng3);
							
							
						}
						else
						{
							/*var flightPath = new google.maps.Polyline({
									path:flightPlanCoordinates2,
									geodesic: true,
									strokeColor: '#bfff00',
									travelMode: 'driving',
									strokeOpacity: 1.0,
									strokeWeight: 2,
									map:map
								});	*/
								
								
						}
						
					}
					var directionsService3 = new google.maps.DirectionsService;
					var directionsDisplay3 = new google.maps.DirectionsRenderer;
					directionsDisplay3.setMap(map);
					directionsDisplay3.setOptions( { suppressMarkers: true } );
					directionsDisplay3.setOptions( { preserveViewport: true } );			
					directionsDisplay3.setOptions({
									polylineOptions: {
										strokeWeight: 5,
										strokeOpacity: 1,
										geodesic: true,
										strokeColor:  '#B0CB1F' 
									}
								}); 
							
								
					var len3 = flightPlanCoordinates2.length;
					var waypt3 = new Array();
					for(i=1;i<len3-1;i++)
					{
							waypt3.push({location:flightPlanCoordinates2[i]})
					}
					var src = flightPlanCoordinates2[0];
					var des = flightPlanCoordinates2[len3-1];
					directionsService3.route({
												origin: src,
												destination: des, 
												waypoints: waypt3,
												optimizeWaypoints:true,
												provideRouteAlternatives:true,
												travelMode: google.maps.TravelMode.DRIVING
											}, function(response, status) 
												{
													if (status == google.maps.DirectionsStatus.OK) 
													{
														directionsDisplay3.setDirections(response);
													} 
													else 
													{
														//window.alert('Directions request failed due to ' + status);
													}
												});
					
					
					
					
					var  flightPlanCoordinates3= new Array();
					var myLatlng4 = new google.maps.LatLng(markers[0]['lat'],markers[0]['lng']);
					flightPlanCoordinates3.push(myLatlng4);
					for(n=1;n<=markers.length;n++)
					{
						
						if(date_count[n]==4)
						{
						
							myLatlng4 = new google.maps.LatLng(markers[n]['lat'],markers[n]['lng']);
							flightPlanCoordinates3.push(myLatlng4);
							
							
						}
						else
						{
							/*var flightPath = new google.maps.Polyline({
									path:flightPlanCoordinates3,
									geodesic: true,
									strokeColor: '#a6a6a6',
									travelMode: 'driving',
									strokeOpacity: 1.0,
									strokeWeight: 2,
									map:map
								});	*/
								
								
						}
						
					}
					var directionsService4 = new google.maps.DirectionsService;
					var directionsDisplay4 = new google.maps.DirectionsRenderer;
					directionsDisplay4.setMap(map);
					directionsDisplay4.setOptions( { suppressMarkers: true } );
					directionsDisplay4.setOptions( { preserveViewport: true } );			
								
					directionsDisplay4.setOptions({
									polylineOptions: {
										strokeWeight: 5,
										strokeOpacity: 1,
										geodesic: true,
										strokeColor:  'green' 
									}
								}); 
							
								
					var len4 = flightPlanCoordinates3.length;
					var waypt4 = new Array();
					for(i=1;i<len4-1;i++)
					{
							waypt4.push({location:flightPlanCoordinates3[i]})
					}
					var src = flightPlanCoordinates3[0];
					var des = flightPlanCoordinates3[len4-1];
					directionsService4.route({
												origin: src,
												destination: des, 
												waypoints: waypt4,
												optimizeWaypoints:true,
												provideRouteAlternatives:true,
												travelMode: google.maps.TravelMode.DRIVING
											}, function(response, status) 
												{
													if (status == google.maps.DirectionsStatus.OK) 
													{
														directionsDisplay4.setDirections(response);
													} 
													else 
													{
														//window.alert('Directions request failed due to ' + status);
													}
												});
					
					
					
					var  flightPlanCoordinates4= new Array();
					var myLatlng5 = new google.maps.LatLng(markers[0]['lat'],markers[0]['lng']);
					flightPlanCoordinates4.push(myLatlng5);
					for(o=1;o<=markers.length;o++)
					{
						
						if(date_count[o]==5)
						{
						
							myLatlng5 = new google.maps.LatLng(markers[o]['lat'],markers[o]['lng']);
							flightPlanCoordinates4.push(myLatlng5);
							
							
						}
						else
						{
							/*var flightPath = new google.maps.Polyline({
									path:flightPlanCoordinates4,
									geodesic: true,
									strokeColor: '#bf00ff',
									travelMode: 'driving',
									strokeOpacity: 1.0,
									strokeWeight: 2,
									map:map
								});	*/
						}
						
					}
					var directionsService5 = new google.maps.DirectionsService;
					var directionsDisplay5 = new google.maps.DirectionsRenderer;
					directionsDisplay5.setMap(map);
					directionsDisplay5.setOptions( { suppressMarkers: true } );
					directionsDisplay5.setOptions( { preserveViewport: true } );			
								
					directionsDisplay5.setOptions({
									polylineOptions: {
										strokeWeight: 5,
										strokeOpacity: 1,
										geodesic: true,
										strokeColor:  'grey' 
									}
								}); 
							
								
					var len5 = flightPlanCoordinates4.length;
					var waypt5 = new Array();
					for(i=1;i<len5-1;i++)
					{
							waypt5.push({location:flightPlanCoordinates4[i]})
					}
					var src = flightPlanCoordinates4[0];
					var des = flightPlanCoordinates4[len5-1];
					directionsService5.route({
												origin: src,
												destination: des, 
												waypoints: waypt5,
												optimizeWaypoints:true,
												provideRouteAlternatives:true,
												travelMode: google.maps.TravelMode.DRIVING
											}, function(response, status) 
												{
													if (status == google.maps.DirectionsStatus.OK) 
													{
														directionsDisplay5.setDirections(response);
													} 
													else 
													{
														//window.alert('Directions request failed due to ' + status);
													}
												});
				}
		        
		    </script>
		<!--Google-Map Script Ends Here-->
	</body>
</html>