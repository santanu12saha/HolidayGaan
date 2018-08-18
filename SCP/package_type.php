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
			<script src="js/angularjs/package_type.js"></script>
		<!-- AngularJS Script Ends Here -->
	</head>
	<body class="nav-md" ng-app="addhalk" ng-cloak>
		<div class="container body" ng-controller="adddalkcontroller">
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
								<h4 class="mb"><i class="fa fa-plus"></i> Add Package Type</h4>
								<div class="x_content">
									<form class="form-horizontal form-label-left" id="PForm" autocomplete="off" enctype="multipart/form-data" name="PForm" novalidate>
									
										<div class="form-group">
											<div class="col-sm-6" >
												<label  for="Name">Package Name</label>
												<input  type="text"  class="form-control" placeholder="Package Name" required name="Name" id="Name" ng-model="Name"  />
												<div class="error" ng-show="PForm.Name.$dirty && PForm.bgroup.$invalid">
													<small class="error" ng-show="PForm.Name.$error.required">Name is required.</small>											
												</div>
											</div>
										</div>
	
										<div class="form-group">
											<div class="col-sm-6">
											<button type="submit" class="btn btn-success" ng-click="submitData()"/>Submit</button>	
											<button  class="btn btn-success" onclick="window.location.href='list_package_type';"/>Back</button>	
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
