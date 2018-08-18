<?php
error_reporting(0);
session_start();
include_once ("db/db_connection.php");
$id = $_GET['rooms'];
$id1 = $_GET['scroll'];
$len = strlen($id1 );
if($len == 25)
{
	$id2 = substr($id1,-1);
}
if($len == 26)
{
	$id2 = substr($id1,-2);
}
if($len == 27)
{
	$id2 = substr($id1,-3);
}
?>
<!DOCTYPE html>
<html lang="en">
<html data-ng-cloak data-ng-app="exploreapp">
	<head>
		<?php include "title.php";?>
		<link rel="icon" type="image/gif/png/jpg" href="images/red-dot.png"/>
		<link type="text/css" href="css/pslider.css" rel="stylesheet" />
		<!-- Calendar Script Starts Here-->
			<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
			<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
			<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
			<script>
				$(function() {
					$("#fromd").datepicker({ dateFormat: 'd-m-yy', minDate: 0, numberOfMonths: 1,onSelect: function(selected) { $("#tod").datepicker("option","minDate", selected) } });
					$("#tod").datepicker({ dateFormat: 'd-m-yy',  minDate: 0, numberOfMonths: 1,onSelect: function(selected) { $("#fromd").datepicker("option","maxDate", selected) } });
				});
			</script>
		<!--Calendar Script Ends Here-->
					
		<!--AngularJs Script Starts Here-->
			<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
			<script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.9.0/ui-bootstrap-tpls.min.js"></script>
			<script src="js/angularjs/explore-script.js"></script>
		<!--AngularJs Script Ends Here-->
		
		<!--Google-Map Script Starts Here-->
    		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAyeEM2RowGhpCiszkU0qGwDHqaZPVjKgE&sensor=false&libraries=places"></script>
    		<script src="http://jvandemo.github.io/angularjs-google-maps/dist/angularjs-google-maps.js"></script>
    		<!--<script src='http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox.js'></script>-->
			<script src="js/angularjs/infobox.js"></script>
		<!--Google-Map Script Ends Here-->
	</head>
	<body data-ng-controller="explorecontroller">
		<div data-ng-show="prophide">
		<input type="hidden" id="pid" name="pid" data-ng-model="pid" value="<?php echo $id2; ?>" />
		<input type="hidden" id="propertyid" name="propertyid" data-ng-model="propertyid" value="{{propertyid}}" />
		</div>
		<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'\vkationdemo\fb-login\fbConfig.php'); include "explore-header.php";?>
      <div class="sp-slideshow">
			<input id="button-1" type="radio" name="radio-set" class="sp-selector-1" checked="checked" />
			<label for="button-1" class="button-label-1"></label>
		
			<input id="button-2" type="radio" name="radio-set" class="sp-selector-2" />
			<label for="button-2" class="button-label-2"></label>
		
			<input id="button-3" type="radio" name="radio-set" class="sp-selector-3" />
			<label for="button-3" class="button-label-3"></label>
		
			<input id="button-4" type="radio" name="radio-set" class="sp-selector-4" />
			<label for="button-4" class="button-label-4"></label>
		
			<label for="button-1" class="sp-arrow sp-a1"></label>
			<label for="button-2" class="sp-arrow sp-a2"></label>
			<label for="button-3" class="sp-arrow sp-a3"></label>
			<label for="button-4" class="sp-arrow sp-a4"></label>
		
			<div class="sp-content">
				<ul class="sp-slider clearfix">
					<li><img src="Resorts/{{propertypimgheader}}" alt="image01" /></li>
					<li><img src="Resorts/{{propertypimg1}}" alt="image02" /></li>
					<li><img src="Resorts/{{propertypimg2}}" alt="image03" /></li>
					<li><img src="Resorts/{{propertypimg3}}" alt="image04" /></li>
				</ul>
			</div>
		</div>
		<?php include "explore-content.php";?>
		<?php include "footer.php";?>
	</body>
</html>