<?php
session_start();
if($_SESSION['bpid']=="")
{
	echo "<script language=\"javascript\">window.location=\"index?status=2\";</script>";
}
else
{
	include "../db/db_connection.php";	
	$bpid = $_SESSION['bpid'];	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once ("title.php"); ?>
		<!-- AngularJS Script Starts Here -->
        	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
			<script src="lib/dirPagination.js"></script>
			<script src="js/angularjs/property.js"></script>
		<!-- AngularJS Script Ends Here -->
		
	</head>

	<body class="nav-md" ng-app="myApp" ng-cloak>
		<div class="container body" ng-controller="formCtrl">
			<!-- Sidebar Starts Here -->
			<?php include_once("sidebar.php"); ?>
			<!-- Sidebar Ends Here -->			
			
			<!-- Top Starts Here -->
			<?php include_once("top.php"); ?>
			<!-- Top Ends Here -->
			
			<!-- page content -->
			<div class="right_col">
				<div class="">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
								<h2><i class="fa fa-plus"></i> Add Property</h2>
								<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<form class="form-horizontal form-label-left" id="PatientForm" autocomplete="off" enctype="multipart/form-data" name="PropertyForm" method="post">
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label for="pname">Property Name</label><br />
												<input type="text" class="form-control" ng-model="pname" placeholder="Property Name" id="pname" name="pname" required  />
												<div class="error" ng-show="PropertyForm.pname.$dirty && PropertyForm.pname.$invalid">
														<small class="error" ng-show="PropertyForm.pname.$error.required">Name is required.</small>											
												</div>
											</div>
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;" >
												<label for="paddress">Address</label>
												<textarea class="form-control" placeholder="Property Address" ng-model="paddress" name="paddress" id="paddress" required></textarea>
												<div class="error" ng-show="PropertyForm.paddress.$dirty && PropertyForm.paddress.$invalid">
														<small class="error" ng-show="PropertyForm.paddress.$error.required">Property Address is required.</small>											
												</div>
											</div>
										</div> 
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="conno">Contact Number</label>
												<input type="text" class="form-control" ng-model="conno" placeholder="Contact Number" id="conno" name="conno" required  />
												<div class="error" ng-show="PropertyForm.conno.$dirty && PropertyForm.conno.$invalid">
														<small class="error" ng-show="PropertyForm.conno.$error.required">Contact number is required.</small>											
												</div>	
											</div>
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="location">Location</label>
												<input type="text" class="form-control" ng-model="location" placeholder="Location" id="location" name="location" required  />
												<div class="error" ng-show="PropertyForm.location.$dirty && PropertyForm.location.$invalid">
														<small class="error" ng-show="PropertyForm.location.$error.required">Location is required.</small>											
												</div>	
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="conno">Property Type</label>
												<select  class="form-control"  name="property_type" id="property_type" ng-model="property_type" ng-init="getptype()" required>
													<option value="">Select Property Type</option>
													<option ng-repeat="propertyTypes in propertyType" value="{{propertyTypes.package_name}}">{{propertyTypes.package_name}}</option>	
												</select>	
											</div>
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="busstation">Bus Station (Distance)</label>
												<input type="text" class="form-control" ng-model="busstation" placeholder="Bus Station" id="busstation" name="busstation" required  />
												<div class="error" ng-show="PropertyForm.busstation.$dirty && PropertyForm.busstation.$invalid">
														<small class="error" ng-show="PropertyForm.busstation.$error.required">Bus Station is required.</small>											
												</div>	
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="railwaystation">Railway Station (Distance)</label>
												<input type="text" class="form-control" ng-model="railwaystation" placeholder="Railway Station" id="railwaystation" name="railwaystation" required  />
												<div class="error" ng-show="PropertyForm.railwaystation.$dirty && PropertyForm.railwaystation.$invalid">
														<small class="error" ng-show="PropertyForm.railwaystation.$error.required">Railway Station is required.</small>											
												</div>	
											</div>
											
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="airport">Airport(Distance)</label>
												<input type="text" class="form-control" ng-model="airport" placeholder="Airport" id="airport" name="airport" required  />
												<div class="error" ng-show="PropertyForm.airport.$dirty && PropertyForm.airport.$invalid">
														<small class="error" ng-show="PropertyForm.airport.$error.required">Airport Station is required.</small>											
												</div>	
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="description">Description</label>
												<textarea class="form-control" placeholder="Description" ng-model="description" name="description" id="description" required></textarea>
												<div class="error" ng-show="PropertyForm.description.$dirty && PropertyForm.description.$invalid">
													<small class="error" ng-show="PropertyForm.description.$error.required">Description is required.</small>											
												</div>
											</div>
												
										</div>
										
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="latitude">Latitude</label>
												<input  type="text"  class="form-control" placeholder="Latitude" ng-model="latitude" required name="latitude" id="latitude"  />
												<div class="error" ng-show="PropertyForm.latitude.$dirty && PropertyForm.latitude.$invalid">
													<small class="error" ng-show="PropertyForm.latitude.$error.required">Latitude is required.</small>											
												</div>
											</div>
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="longitude">Longitude</label>
												<input  type="text"  class="form-control" placeholder="Longitude" ng-model="longitude" required name="longitude" id="longitude" />
												<div class="error" ng-show="PropertyForm.longitude.$dirty && PropertyForm.longitude.$invalid">
													<small class="error" ng-show="PropertyForm.longitude.$error.required">Longitude is required.</small>											
												</div>		
											</div>	
										</div>
										
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="rating">Rating</label>
												<input  type="text"  class="form-control" placeholder="Rating" ng-model="rating" required name="rating" id="rating" min="0" max="5"/>
												<div class="error" ng-show="PropertyForm.rating.$dirty && PropertyForm.rating.$invalid">
													<small class="error" ng-show="PropertyForm.rating.$error.required">Rating is required.</small>											
												</div>
											</div>
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="tripaddrating">Trip Advisor Rating</label>
												<input  type="text"  class="form-control" placeholder="Trip Advisor Rating" ng-model="tripaddrating" required name="tripaddrating" id="tripaddrating" min="0" max="5"/>
												<div class="error" ng-show="PropertyForm.tripaddrating.$dirty && PropertyForm.tripaddrating.$invalid">
													<small class="error" ng-show="PropertyForm.tripaddrating.$error.required">Trip Advisor Rating is required.</small>											
												</div>		
											</div>	
										</div>
										
										
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="extraperson">Extra Person</label>
												<input  type="text"  class="form-control" placeholder="Rate" ng-model="extraperson" required name="extraperson" id="extraperson"/>
												<div class="error" ng-show="PropertyForm.extraperson.$dirty && PropertyForm.extraperson.$invalid">
													<small class="error" ng-show="PropertyForm.extraperson.$error.required">Extra Person rate is Required</small>											
												</div>
											</div>
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="child">Child</label>
												<input  type="text"  class="form-control" placeholder="Rate" ng-model="child" required name="child" id="child" />
												<div class="error" ng-show="PropertyForm.child.$dirty && PropertyForm.child.$invalid">
													<small class="error" ng-show="PropertyForm.child.$error.required">Child rate is Required</small>											
												</div>		
											</div>	
										</div>
										
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label for="propertypicture">Property Pictures</label>
                                                <input type="file" id="propertypicture" name="propertypicture" ng-model="propertypicture" multiple >
												<div class="error" ng-show="PropertyForm.propertypicture.$dirty && PropertyForm.propertypicture.$invalid">
													<small class="error" ng-show="PropertyForm.propertypicture.$error.required">Property Pictures is Required</small>											
												</div>
											</div>
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="cancellingpolicy">Cancelling Policy</label>
												<textarea class="form-control" placeholder="Cancelling Policy" ng-model="cancellingpolicy" name="cancellingpolicy" id="cancellingpolicy" required></textarea>
												<div class="error" ng-show="PropertyForm.cancellingpolicy.$dirty && PropertyForm.cancellingpolicy.$invalid">
													<small class="error" ng-show="PropertyForm.cancellingpolicy.$error.required">Cancelling Policy is required.</small>											
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-12" style="padding: 0px 10px 0px 0px;">
												<label class="control-label" for="Instantbook" style="padding:3px 0;">Instant Booking &nbsp;&nbsp;</label>
												<span style="display:block;height:0;">&nbsp;</span>
												<label><input type="checkbox" id="instantbooking" ng-checked="c_instantbooking()" ng-model="instantbooking" />&nbsp Instant Booking&nbsp;</label>&nbsp;&nbsp;	
											</div>
										</div>	
										
										<div class="form-group">
											<div class="col-sm-12" style="padding: 0px 10px 0px 0px;">
												<label class="control-label" for="propbestfor" style="padding:3px 0;">Property is Best for &nbsp;&nbsp;</label>
												<span style="display:block;height:0;">&nbsp;</span>
												
												<label><input type="checkbox" id="ecotourism" ng-checked="c_ecotourism()" ng-model="ecotourism" />&nbsp Ecotourism&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="wellness_n_care" ng-checked="c_wellness_n_care()" ng-model="wellness_n_care" />&nbsp Wellness & care&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="heritage_n_spirituality" ng-checked="c_heritage_n_spirituality()" ng-model="heritage_n_spirituality" />&nbsp Heritage & Spirituality&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="family_n_kids" ng-checked="c_family_n_kids()" ng-model="family_n_kids" />&nbsp Family & Kids&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="adventure_n_explore" ng-checked="c_adventure_n_explore()" ng-model="adventure_n_explore" />&nbsp Adventure & Explore&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="romantic_holiday" ng-checked="c_romantic_holiday()" ng-model="romantic_holiday" />&nbsp Romantic Holiday&nbsp;</label>&nbsp;&nbsp;
												
											</div>
										</div>	
										
										<div class="form-group">
											<div class="col-sm-12" style="padding: 0px 10px 0px 0px;">
												<label class="control-label" for="Configuration" style="padding:3px 0;">Facilities/Amenities&nbsp;&nbsp;</label>
												<span style="display:block;height:0;">&nbsp;</span>
												<label><input type="checkbox" id="wifi" ng-checked="c_wifi()" ng-model="wifi" />&nbsp Wireless Internet&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="tv" ng-checked="c_tv()" ng-model="tv" />&nbsp TV &nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="kitchen" ng-checked="c_kitchen()" ng-model="kitchen" />&nbsp Kitchen &nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="checkin" ng-checked="c_checkin()" ng-model="checkin" />&nbsp 24 Hour Check - In &nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="safetycard" ng-checked="safetycard()" ng-model="safetycard" />&nbsp Safety Card &nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="indoorgame" ng-checked="c_indoorgame()" ng-model="indoorgame" />&nbsp Indoor Games &nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="cabletv" ng-checked="c_cabletv()" ng-model="cabletv" />&nbsp Cable TV &nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="smokingallowed" ng-checked="c_smokingallowed()" ng-model="smokingallowed" />&nbsp Smoking Allowed &nbsp;</label>
												<label><input type="checkbox" id="outdoorgame" ng-checked="c_outdoorgame()" ng-model="outdoorgame" />&nbsp Outdoor Games &nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="gym" ng-checked="c_gym()" ng-model="gym" />&nbsp Gym &nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="wheelchair" ng-checked="c_wheelchair()" ng-model="wheelchair" />&nbsp Wheelchair Accessible&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="kidsplayarea" ng-checked="c_kidsplayarea()" ng-model="kidsplayarea" />&nbsp Kids Play Area&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="heating" ng-checked="c_heating()" ng-model="heating" />&nbsp Heating&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="breakfast" ng-checked="c_breakfast()" ng-model="breakfast" />&nbsp Breakfast&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="yoga" ng-checked="c_yoga()" ng-model="yoga" />&nbsp Yoga&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="internet" ng-checked="c_internet()" ng-model="internet" />&nbsp Internet&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="wiintercom" ng-checked="c_wiintercom()" ng-model="wiintercom" />&nbsp Wireless Intercom&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="ac" ng-checked="c_ac()" ng-model="ac" />&nbsp Air Conditioning &nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="freeparking" ng-checked="c_freeparking()" ng-model="freeparking" />&nbsp Free Parking &nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="swimmingpool" ng-checked="c_swimmingpool()" ng-model="swimmingpool" />&nbsp Swimming Pool &nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="petsallowed" ng-checked="c_petsallowed()" ng-model="petsallowed" />&nbsp Pets Allowed &nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="barnrestro" ng-checked="c_barnrestro()" ng-model="barnrestro" />&nbsp Bar & Restaurant &nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="roomservice" ng-checked="c_roomservice()" ng-model="roomservice" />&nbsp Room Service &nbsp;</label>
												<label><input type="checkbox" id="busscenter" ng-checked="c_busscenter()" ng-model="busscenter" />&nbsp Business Centre &nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="lounge" ng-checked="c_lounge()" ng-model="lounge" />&nbsp Lounge &nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="conferencehall" ng-checked="c_conferencehall()" ng-model="conferencehall" />&nbsp Conference Hall &nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="shopping" ng-checked="c_shopping()" ng-model="shopping" />&nbsp Shopping&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="ayurvedacenter" ng-checked="c_ayurvedacenter()" ng-model="ayurvedacenter" />&nbsp Ayurveda Centre&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="laundry" ng-checked="c_laundry()" ng-model="laundry" />&nbsp Laundry &nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="security" ng-checked="c_security()" ng-model="security" />&nbsp 24 Hour Security &nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="airporttrasport" ng-checked="c_airporttrasport()" ng-model="airporttrasport" />&nbsp Airport Transport&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="atminresort" ng-checked="c_atminresort()" ng-model="atminresort" />&nbsp ATM / BANK in Resort&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="hotcoldwater" ng-checked="c_hotcoldwater()" ng-model="hotcoldwater" />&nbsp Hot / Cold Running Water&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="firstaidkit" ng-checked="c_firstaidkit()" ng-model="firstaidkit" />&nbsp First Aid Kit &nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="hairdryer" ng-checked="c_hairdryer()" ng-model="hairdryer" />&nbsp Hair Dryer&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="hottub" ng-checked="c_hottub()" ng-model="hottub" />&nbsp Hot Tub&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="suitableforwvent" ng-checked="c_suitableforwvent()" ng-model="suitableforwvent" />&nbsp Suitable for Events&nbsp;</label>&nbsp;&nbsp;
												
												<label><input type="checkbox" id="spa" ng-checked="c_spa()" ng-model="spa" />&nbsp spa&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="jacuzzi" ng-checked="c_jacuzzi()" ng-model="jacuzzi" />&nbsp Jacuzzi&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="finedinig" ng-checked="c_finedinig()" ng-model="finedinig" />&nbsp Fine Dinig&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="caffe" ng-checked="c_caffe()" ng-model="caffe" />&nbsp Caffe&nbsp;</label>&nbsp;&nbsp;
												
											</div>
										</div>	
										
										
										<p>&nbsp;</p>
										<div class="form-group">
											<div class="col-sm-6">
												<button class="btn btn-success" ng-click="add()">Submit</button> 
												<button  class="btn btn-success" onclick="window.location.href='list_property';"/>Back</button>	
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>	
				<!-- Footer Starts Here -->
					<?php include_once("footer.php"); ?>
				<!-- Footer Ends Here -->
			</div>
		</div>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>

		
	</body>
</html>
<?php
}
?>
