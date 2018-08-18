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
			<script src="js/angularjs/activities.js"></script>
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
								<div class="x_content">
									<form class="form-horizontal form-label-left" ng-show="editform" id="activities" autocomplete="off" enctype="multipart/form-data" name="activities" method="post">
										<input type="text" ng-show="false" ng-model="id">
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label>Activity Title</label><br />
												<input type="text" class="form-control" ng-model="activity_name" placeholder="Activity Title" id="activity_name" name="activity_name" required  />
											</div>
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;" >
												<label  for="conno">Activity Type</label>
												<select  class="form-control"  name="activity_type" id="activity_type" ng-model="activity_type" ng-init="getptype()" required>
													<option value="">Select Activity Type</option>
													<option ng-repeat="activityTypes in activityType" value="{{activityTypes.activity_name}}">{{activityTypes.activity_name}}</option>	
												</select>	
											</div>
										</div> 
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="location">Activity Location</label>
												<input  type="text"  class="form-control" placeholder="Activity Location" ng-model="location" required name="location" id="location"  />
											</div>
											
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label for="activity_img">Activity Image</label>
                                                <input type="file" id="activity_img" name="activity_img" ng-model="activity_img">
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="latitude">Latitude</label>
												<input  type="text"  class="form-control" placeholder="Latitude" ng-model="latitude" required name="latitude" id="latitude" />
											</div>	
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="longitude">Longitude</label>
												<input  type="text"  class="form-control" placeholder="Longitude" ng-model="longitude" required name="longitude" id="longitude" />
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label for="highlight_about">Highlight About</label>
												<textarea class="form-control" placeholder="Highlight About" ng-model="highlight_about" name="highlight_about" id="highlight_about" required></textarea>
											</div>
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label for="things_to_carry">Things to Carry</label>
												<textarea class="form-control" placeholder="Things to Carry" ng-model="things_to_carry" name="things_to_carry" id="things_to_carry" required></textarea>
											</div>	
										</div>
										
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="duration">Duration</label>
												<input  type="text"  class="form-control" placeholder="Duration" ng-model="duration" required name="duration" id="duration"  />
											</div>
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="price">Price</label>
												<input  type="text"  class="form-control" placeholder="Price" ng-model="price" required name="price" id="price"  />
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="time">Time</label>
												<input  type="text"  class="form-control" placeholder="Time" ng-model="time" required name="time" id="time"  />
											</div>
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label for="inclusions">Inclusions</label>
												<textarea class="form-control" placeholder="Inclusions" ng-model="inclusions" name="inclusions" id="inclusions" required></textarea>
											</div>	
										</div>
										
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="trip_add_rating">Trip addvisor rating</label>
												<input  type="text"  class="form-control" placeholder="Trip addvisor rating" ng-model="trip_add_rating" required name="trip_add_rating" id="trip_add_rating"  />
											</div>
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="out_rating">Our Rating</label>
												<input  type="text"  class="form-control" placeholder="Our Rating" ng-model="out_rating" required name="out_rating" id="out_rating"  />
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-12" style="padding: 0px 10px 0px 0px;">
												<label class="control-label" for="propbestfor" style="padding:3px 0;">Activity is Best for &nbsp;&nbsp;</label>
												<span style="display:block;height:0;">&nbsp;</span>
												<label><input type="checkbox" id="ecotourism" ng-checked="c_ecotourism()" ng-model="ecotourism" />&nbsp Ecotourism&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="wellness_n_care" ng-checked="c_wellness_n_care()" ng-model="wellness_n_care" />&nbsp Wellness & care&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="heritage_n_spirituality" ng-checked="c_heritage_n_spirituality()" ng-model="heritage_n_spirituality" />&nbsp Heritage & Spirituality&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="family_n_kids" ng-checked="c_family_n_kids()" ng-model="family_n_kids" />&nbsp Family & Kids&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="adventure_n_explore" ng-checked="c_adventure_n_explore()" ng-model="adventure_n_explore" />&nbsp Adventure & Explore&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="romantic_holiday" ng-checked="c_romantic_holiday()" ng-model="romantic_holiday" />&nbsp Romantic Holiday&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="couple" ng-checked="c_couple()" ng-model="couple" />&nbsp Couple&nbsp;</label>
												<label><input type="checkbox" id="group_activity" ng-checked="c_group_activity()" ng-model="group_activity" />&nbsp Group Activity&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="solo" ng-checked="c_solo()" ng-model="solo" />&nbsp solo&nbsp;</label>&nbsp;&nbsp;
											</div>
										</div>
										
										<p>&nbsp;</p>
										<div class="form-group">
											<div class="col-sm-6">
												<button class="btn btn-success" ng-click="update()">Update</button> 
												<button  class="btn btn-success" onclick="window.location.href='list_activities';"/>Back</button>	
											</div>
										</div>
									</form>
									
									<form class="form-horizontal form-label-left" ng-show="view" id="activities" autocomplete="off" enctype="multipart/form-data" name="activities" method="post">
										<input type="text" ng-show="false" ng-model="id">
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label>Activity Title</label><br />
												<input type="text" class="form-control" ng-readonly="true" ng-model="activity_name" placeholder="Activity Title" id="activity_name" name="activity_name" required  />
											</div>
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;" >
												<label  for="conno">Activity Type</label>
												<select  class="form-control"  name="activity_type" ng-readonly="true" id="activity_type" ng-model="activity_type" ng-init="getptype()" required>
													<option value="">Select Activity Type</option>
													<option ng-repeat="activityTypes in activityType" value="{{activityTypes.activity_name}}">{{activityTypes.activity_name}}</option>	
												</select>	
											</div>
										</div> 
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="location">Activity Location</label>
												<input  type="text"  class="form-control" ng-readonly="true" placeholder="Activity Location" ng-model="location" required name="location" id="location"  />
											</div>
											
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label for="activity_img">Activity Image</label>
                                                <input type="file" id="activity_img" ng-readonly="true" name="activity_img" ng-model="activity_img">
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="latitude">Latitude</label>
												<input  type="text"  class="form-control" ng-readonly="true" placeholder="Latitude" ng-model="latitude" required name="latitude" id="latitude" />
											</div>	
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="longitude">Longitude</label>
												<input  type="text"  class="form-control" ng-readonly="true" placeholder="Longitude" ng-model="longitude" required name="longitude" id="longitude" />
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label for="highlight_about">Highlight About</label>
												<textarea class="form-control" placeholder="Highlight About" ng-readonly="true" ng-model="highlight_about" name="highlight_about" id="highlight_about" required></textarea>
											</div>
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label for="things_to_carry">Things to Carry</label>
												<textarea class="form-control" placeholder="Things to Carry" ng-readonly="true" ng-model="things_to_carry" name="things_to_carry" id="things_to_carry" required></textarea>
											</div>	
										</div>
										
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="duration">Duration</label>
												<input  type="text"  class="form-control" placeholder="Duration" ng-readonly="true" ng-model="duration" required name="duration" id="duration"  />
											</div>
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="price">Price</label>
												<input  type="text"  class="form-control" placeholder="Price" ng-readonly="true" ng-model="price" required name="price" id="price"  />
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="time">Time</label>
												<input  type="text"  class="form-control" placeholder="Time" ng-readonly="true" ng-model="time" required name="time" id="time"  />
											</div>
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label for="inclusions">Inclusions</label>
												<textarea class="form-control" placeholder="Inclusions" ng-readonly="true" ng-model="inclusions" name="inclusions" id="inclusions" required></textarea>
											</div>	
										</div>
										
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="trip_add_rating">Trip addvisor rating</label>
												<input  type="text"  class="form-control" placeholder="Trip addvisor rating" ng-readonly="true" ng-model="trip_add_rating" required name="trip_add_rating" id="trip_add_rating"  />
											</div>
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="out_rating">Our Rating</label>
												<input  type="text"  class="form-control" placeholder="Our Rating" ng-readonly="true" ng-model="out_rating" required name="out_rating" id="out_rating"  />
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-12" style="padding: 0px 10px 0px 0px;">
												<label class="control-label" for="propbestfor" style="padding:3px 0;">Activity is Best for &nbsp;&nbsp;</label>
												<span style="display:block;height:0;">&nbsp;</span>
												<label><input type="checkbox" id="ecotourism" ng-disabled="true" ng-checked="c_ecotourism()" ng-model="ecotourism" />&nbsp Ecotourism&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="wellness_n_care" ng-disabled="true" ng-checked="c_wellness_n_care()" ng-model="wellness_n_care" />&nbsp Wellness & care&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="heritage_n_spirituality" ng-disabled="true" ng-checked="c_heritage_n_spirituality()" ng-model="heritage_n_spirituality" />&nbsp Heritage & Spirituality&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="family_n_kids" ng-disabled="true" ng-checked="c_family_n_kids()" ng-model="family_n_kids" />&nbsp Family & Kids&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="adventure_n_explore" ng-disabled="true" ng-checked="c_adventure_n_explore()" ng-model="adventure_n_explore" />&nbsp Adventure & Explore&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="romantic_holiday" ng-disabled="true" ng-checked="c_romantic_holiday()" ng-model="romantic_holiday" />&nbsp Romantic Holiday&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="couple" ng-disabled="true" ng-checked="c_couple()" ng-model="couple" />&nbsp Couple&nbsp;</label>
												<label><input type="checkbox" id="group_activity" ng-disabled="true" ng-checked="c_group_activity()" ng-model="group_activity" />&nbsp Group Activity&nbsp;</label>&nbsp;&nbsp;
												<label><input type="checkbox" id="solo" ng-disabled="true" ng-checked="c_solo()" ng-model="solo" />&nbsp solo&nbsp;</label>&nbsp;&nbsp;
											</div>
										</div>
										
										<p>&nbsp;</p>
										<div class="form-group">
											<div class="col-sm-6">
												<!--<button class="btn btn-success" ng-click="update()">Update</button> -->
												<button  class="btn btn-success" onclick="window.location.href='list_activities';"/>Back</button>	
											</div>
										</div>
									</form>

									<div ng-show="list">						 
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<h4>List Of Activities around</h4>
											</div>
											<div class="col-sm-3" style="padding: 0px 10px 0px 0px;">
												
											</div>
											<div class="col-sm-3" style="padding: 0px 10px 0px 0px;">
												 <p class="pull-right"><a class="btn btn-success btn-sm" href="addactivities" ><i class="fa fa-plus"></i> Add</a>&nbsp;&nbsp;&nbsp;</p>
											</div>
										</div>
										 
										<table border=1 class="table table-striped table-condensed table-hover">
											<thead>
												<tr>
													<th>Sr.No</th>														
													<th>Activity Name</th>
													<th>Activity Type</th> 
													<th>Action</th>
												</tr> 
											</thead>
											<tbody ng-init="get_preop()">
												<tr dir-paginate="Counseling in pagedItems|itemsPerPage:15">
													<td>{{ $index+1 }}</td>
													<td>{{ Counseling.activity_name }}</td>
													<td>{{ Counseling.activity_type}}</td>
													<td><a ng-click="edit_activiti(Counseling.id)">Edit</a> | <a ng-click="view_activiti(Counseling.id)">View</a> | <a ng-click="delete_activiti(Counseling.id)">Delete</a></td>
												</tr>
											</tbody>	
											<tfoot>
												<tr>
													<td colspan="9">
														<div class="pagination pull-right">
															<dir-pagination-controls max-size="7" direction-links="true" boundary-links="true"></dir-pagination-controls>
														</div>
													</td>
												</tr>
											</tfoot>
										</table>
									</div>
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
