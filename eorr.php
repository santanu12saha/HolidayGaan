<?php
error_reporting(0);
session_start();
include_once ("db/db_connection.php");

$place = $_SESSION['place'];
$fromd = $_SESSION['fromd'];
$tod = $_SESSION['tod'];
$guests = $_SESSION['guests'];
$budget = $_SESSION['budget'];
$star = $_SESSION['star'];	
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
?>
<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<?php include "title.php";?>
		<!-- Calendar Script Starts Here-->
			<link rel="icon" type="image/gif/png/jpg" href="images/red-dot.png"/>
			<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
			<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
			<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
			<script>
				$(function() {
					$("#fromd").datepicker({ dateFormat: 'd-m-yy', minDate: 0, numberOfMonths: 1,onSelect: function(selected) { showUser(); $("#tod").datepicker("option","minDate", selected) } });
					$("#tod").datepicker({ dateFormat: 'd-m-yy',  minDate: 0, numberOfMonths: 1,onSelect: function(selected) { showUser(); $("#fromd").datepicker("option","maxDate", selected) } });
				});				
					function showUser()
					{					
						angular.element(document.getElementById('searchForm')).scope().filterprop();		
					}	
			</script>
		<!--Calendar Script Ends Here-->
		
		<!--AngularJs Script Starts Here-->
			<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
			<script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.9.0/ui-bootstrap-tpls.min.js"></script>
			<script src="js/angularjs/vkationindex.js"></script>
		<!--AngularJs Script Ends Here-->
		
		<!--Google-Map Script Starts Here-->
    		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAyeEM2RowGhpCiszkU0qGwDHqaZPVjKgE&sensor=false&libraries=places"></script>
    		<script src="http://jvandemo.github.io/angularjs-google-maps/dist/angularjs-google-maps.js"></script>
			<!--<script src='http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox.js'></script>-->
			<script src="js/angularjs/infobox.js"></script>
		<!--Google-Map Script Ends Here-->
	</head>
	<body data-ng-cloak data-ng-app="vkationapp">	
		<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'\vkationdemo\fb-login\fbConfig.php'); include "eorr-header.php";?>
		<?php include "eorr-content.php";?>
	</body>
</html>