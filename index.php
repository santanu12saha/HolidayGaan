<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<?php include "title.php";?>		
		<!-- Calendar Script Starts Here-->
			<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
			<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
			<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
			<script>
				$(function() {
					$("#fromd").datepicker({ dateFormat: 'd-m-yy', minDate: 0, numberOfMonths: 1,onSelect: function(selected) { $("#tod").datepicker("option","minDate", selected) } });
					$("#tod").datepicker({ dateFormat: 'd-m-yy',  minDate: 0, numberOfMonths: 1,onSelect:  function(selected) { $("#fromd").datepicker("option","maxDate", selected) } });
					
					$("#bfromd").datepicker({ dateFormat: 'd-m-yy', minDate: 0, numberOfMonths: 1,onSelect: function(selected) { $("#btod").datepicker("option","minDate", selected) } });
					$("#btod").datepicker({ dateFormat: 'd-m-yy',  minDate: 0, numberOfMonths: 1,onSelect: function(selected) { $("#bfromd").datepicker("option","maxDate", selected) } });
					
				});
			</script>
		<!--Calendar Script Ends Here-->
		
		<!--AngularJs Script Starts Here-->
			<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
			<script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.9.0/ui-bootstrap-tpls.min.js"></script>
			<script src="js/angularjs/vkationindex.js"></script>
		<!--AngularJs Script Ends Here-->
		
		<!-- Pop Up Script Starts Here -->	
			<script type="text/JavaScript">
				<!--
					function MM_openBrWindow(theURL,winName,features)
					{
  						window.open(theURL,winName,features);
					}
				//-->
			</script>
		<!-- Popup Script Ends Here -->
		
		<!--Google-Map Script Starts Here-->
    		<script src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
    		<script src="http://jvandemo.github.io/angularjs-google-maps/dist/angularjs-google-maps.js"></script>
		<!--Google-Map Script Ends Here-->
		<link rel="icon" type="image/gif/png/jpg" href="images/red-dot.png"/>
	</head>
	<body data-ng-cloak data-ng-app="vkationapp" data-ng-controller="vkationcontroller">
		<!-- Header Section Starts Here -->
			<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'\vkationdemo\fb-login\fbConfig.php'); include "home-header.php";?>
		<!-- Header Section Ends Here -->
		
		<!-- Content Section Starts Here -->
			<?php include "content.php";?>
		<!-- Content Section Ends Here -->
		
		<!-- Footer Section Starts Here -->
			<?php include "footer.php";?>
		<!-- Footer Section Ends Here -->
	</body>	
</html>
