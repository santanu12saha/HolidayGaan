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
		<!-- Calendar Script Starts Here-->
			<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
			<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
			<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
			<script>
				$(function() {
					$("#adate").datepicker({ dateFormat: 'd-m-yy', minDate: 0, numberOfMonths: 1,onSelect: function(dateText) { $("#adate").datepicker("option","minDate", selected) }});
					
				});
			</script>
		<!--Calendar Script Ends Here-->
		<!-- AngularJS Script Starts Here -->
        	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
			<script src="lib/dirPagination.js"></script>
			<script src="js/angularjs/availability.js"></script>
		<!-- AngularJS Script Ends Here -->
	</head>
	<body class="nav-md" ng-app="addProperty" ng-cloak>
		<div class="container body" ng-controller="addPropertycontroller">
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
								<h4 class="mb"><i class="fa fa-plus"></i> Add Availability of Property</h4>
								<div class="x_content">
									<form class="form-horizontal form-label-left" id="ProForm" name="ProForm" novalidate >
										<div class="form-group">
											
											<div class="col-sm-6">
												<label  for="property">Property ID</label>
												<input  type="text"  class="form-control" placeholder="Property ID" required name="property" id="property" ng-model="property"  ng-change="getprop(property)" />
												<div class="error" ng-show="ProForm.property.$dirty && ProForm.property.$invalid">
													<small class="error" ng-show="ProForm.property.$error.required">Property ID is required.</small>											
												</div>
											</div>
											<div class="col-sm-6">
												<label  for="pname">Property Name</label>
												<input  type="text"  class="form-control" placeholder="Property Name" ng-readonly="true" required name="pname" id="pname" ng-model="pname"  />
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-6" >
												<label  for="guest">Number of Guest</label>
												<input  type="text"  class="form-control" placeholder="Guest" required name="guest" id="guest" ng-model="guest"  />
												<div class="error" ng-show="ProForm.guest.$dirty && ProForm.guest.$invalid">
													<small class="error" ng-show="ProForm.guest.$error.required">Guest is required.</small>											
												</div>
											</div>
											<div class="col-sm-6" >
												<label  for="Name">Select Date</label>
												<input type="text" id="adate" name="adate" ng-modal="adate" placeholder="Select Available Date" class="form-control" />
												<div class="error" ng-show="ProForm.adate.$dirty && ProForm.adate.$invalid">
													<small class="error" ng-show="ProForm.adate.$error.required">Available Date is required.</small>											
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-6" style="padding-top:10px;" >
												<button type="submit" class="btn btn-success" ng-disabled="ProForm.$invalid" ng-click="submitData()"/>Submit</button>	
												<button  class="btn btn-success" onclick="window.location.href='list_';"/>Back</button>	
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
