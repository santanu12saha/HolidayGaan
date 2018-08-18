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
			<script src="js/angularjs/package_detail.js"></script>
		<!-- AngularJS Script Ends Here -->
		
	</head>
	<body class="nav-md" ng-app="addpackagedetails" ng-cloak>
		<div class="container body" ng-controller="addpackagedetailscontroller">
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
									<form class="form-horizontal form-label-left" id="myForm"  autocomplete="off" enctype="multipart/form-data" name="myForm" method="post">
									<h4 class="mb"><i class="fa fa-plus"></i> Add Package</h4>
										
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="MRNO">Package Name</label>
												<input  type="text"  class="form-control" placeholder="Package Name" ng-model="packageName" required name="packageName" id="packageName" />
											</div>
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="Name">Pakage Details</label>
												<textarea  class="form-control" placeholder="Pakage Details" ng-model="detail" required name="detail" id="detail"></textarea>
											</div>	
										</div>
										
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="Irrigation Solution">Package Type</label>
													
													<?php $query = "SELECT package_type_id,package_type_name FROM tble_packages_type WHERE delflag=?";
													$dflag='1';
													$stmt = $dbConnection->prepare($query);
													$stmt->execute(array($dflag));

													?>										
										
                                          <select class="form-control" name="packagetype" id="packagetype" ng-model="packagetype" required>
                                          <option value="">Select Package Type</option>
											  <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
												echo "<option value='" . $row['package_type_id'] . "'>" . $row['package_type_name'] . "</option>";
												}
											  ?>
												</select>
											</div>
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="Irrigation Solution">Duration</label>
												<?php $query1 = "SELECT duration_id,duration_name FROM tble_duration WHERE del_flag=?";
													$stmt1 = $dbConnection->prepare( $query1 );
													
													$stmt1->execute(array($dflag));
												?>										
										
                                          <select  class="form-control"  name="duration" id="duration" ng-model="duration" required>
                                          <option value="">Select Duration</option>
											  <?php while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)) {
												echo "<option value='" . $row['duration_id'] . "'>" . $row['duration_name'] . "</option>";
												}
											  ?>
												</select>
													
											
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="MRNO">City</label>
												<input  type="text"  class="form-control" placeholder="City" ng-model="city" required name="city" id="city"  />
											</div>
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="Name">State</label>
												<input  type="text"  class="form-control" placeholder="State" ng-model="state" required name="state" id="state" />
											</div>	
										</div>
										
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="MRNO">Starting Price</label>
												<input  type="text"  class="form-control" placeholder="Starting Price" ng-model="price" required name="price" id="price"  />
											</div>
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
                                                          <label for="exampleInputFile">Image</label>
                                                          <input type="file" id="img" name="img" ng-model="img">
                                                          
                                                      </div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-6" style="padding: 0px 10px 0px 0px;">
												<label  for="Irrigation Solution">Reports</label>
													<select required name="report" ng-model="report" id="report" class="form-control">
														<option value="">Select Report</option>
														<option value="3*">3*</option>
														<option value="4*">4*</option>
														<option value="5*">5*</option>
													</select>
											</div>
										
										<div class="col-lg-3">
											<label for="gen">Flight Include</label>
											<br />
											<label class="radio-inline"><input type="radio" name="flight"  id="flight" ng-model="flight" ng-checked="false" value="1">Yes</label>
											<label class="radio-inline"><input type="radio" name="flight"  id="flight" ng-model="flight" ng-checked="false" required value="0">No</label>
											
										</div>
										</div>
										
										<div class="form-group">
										
										<div class="col-lg-3">
											<label for="gen">Meals</label>
											<br />
											<label class="radio-inline"><input type="radio" name="mel"  id="mel" ng-model="mel" ng-checked="false" value="1">Yes</label>
											<label class="radio-inline"><input type="radio" name="mel"  id="mel" ng-model="mel" ng-checked="false" required value="0">No</label>
											
										</div>
										<div class="col-lg-3">
											<label for="gen">Breakfast</label>
											<br />
											<label class="radio-inline"><input type="radio" name="brk"  id="brk" ng-model="brk" ng-checked="false" value="1">Yes</label>
											<label class="radio-inline"><input type="radio" name="brk"  id="brk" ng-model="brk" ng-checked="false" required value="0">No</label>
											
										</div>
										<div class="col-lg-3">
											<label for="gen">Transfer</label><br />
											<label class="radio-inline"><input type="radio" name="trns"  id="trns" ng-model="trns" ng-checked="false" value="1">Yes</label>
											<label class="radio-inline"><input type="radio" name="trns"  id="trns" ng-model="trns" ng-checked="false" required value="0">No</label>
										</div>
										</div>
		
											<div class="form-group">
											<button class="btn btn-success" ng-click="submitData()">Submit</button> 
											
										<button  class="btn btn-success" onclick="window.location.href='list_package_details';"/>Back</button>	
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
