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
	<body class="nav-md" ng-app="My" ng-cloak>
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
								<div class="x_content">
									<form class="form-horizontal form-label-left" id="PForm" name="PForm" ng-show="view_preop1" novalidate >
									
										<div class="form-group">
												<input type="hidden"  class="form-control" disabled="" ng-model="id" name="id" ng-options="patient.name as patient.name for patient in MRAccounts" ng-change="get(id)" />
											<div class="col-sm-6" >
												<label  for="Name">Package Name</label>
												<input  type="text"  class="form-control" placeholder="Package Name" required name="Name" id="Name" ng-model="Name"  />
												<div class="error" ng-show="PForm.Name.$dirty && PForm.bgroup.$invalid">
													<small class="error" ng-show="PForm.Name.$error.required">Name is required.</small>											
												</div>
											</div>

											
										</div>
	
										<div class="form-group">
											<div class="col-sm-6" >
											<button type="submit" class="btn btn-success" ng-click="update_data()"/>Update</button>	
											<button  class="btn btn-success" onclick="window.location.href='list_package_type';"/>Back</button>	
										</div>

										</div>
										</form>
							
								
									 <div ng-show="list">
								<p class="pull-right"><a class="btn btn-success btn-sm" href="package_type" ng-show='btn_pat' ng-click="add_cataract()"><i class="fa fa-plus"></i> Add</a>&nbsp;&nbsp;&nbsp;</p>
							  </p>	
							  <h4>List Of Package Type</h4>
											<table border=1 class="table table-striped table-condensed table-hover">
												<thead>
													<tr>
														<th>Sr.No</th>
														<th>Package Name</th>
														<th>Action</th>
													</tr> 
												</thead>
												<tbody ng-init="get()">
													<tr dir-paginate="Counseling in pagedItems|itemsPerPage:15">
														<td>{{ $index+1 }}</td>
														<td>{{ Counseling.package_name }}</td>
														<td><a ng-click="edit_id(Counseling.id)">Edit</a> | <a ng-click="del(Counseling.id)">Delete</a></td>
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
