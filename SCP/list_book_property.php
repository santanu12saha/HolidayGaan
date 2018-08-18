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
			<script src="js/angularjs/users.js"></script>
		<!-- AngularJS Script Ends Here -->
	</head>
	<body class="nav-md" ng-app="Myappusers" ng-cloak>
		<div class="container body" ng-controller="usersController">
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
									<form class="form-horizontal style-form" method="post" name="edituser" autocomplete="off" enctype="multipart/form-data" ng-show="edit_users">
										<h4 class="mb"><i class="fa fa-edit"></i> View User Details</h4>	
										<div class="form-group">
											<div class="col-sm-6">
												<label class="control-label">User-Id:</label> <input type="text" class="form-control" ng-readonly="true" ng-model="userid" name="userid" />
											</div>
										</div>
										<div class="form-group">
											<input type="hidden" ng-model="id" name="id"/>
											<div class="col-sm-6">
												<label class="control-label">First Name</label>
												<input type="text" class="form-control" ng-readonly="true" ng-model="fname" name="fname" />
											</div>
											<div class="col-sm-6">
												<label class="control-label">Last Name</label>
												<input type="text" class="form-control" ng-readonly="true" ng-model="lname" name="lname" />
											</div>
										</div>  
										
										<div class="form-group">
											<div class="col-sm-6">
												<label class="control-label">Email-Id</label>
												<input type="email" class="form-control" ng-readonly="true" ng-model="emailid" name="emailid<" />
											</div>
											<div class="col-sm-6">
												<label class="control-label">Mobile-No</label>
												<input type="text" class="form-control" ng-readonly="true" ng-model="mobileno" name="mobileno" />
											</div>
										</div>
									</form>
									
									<div ng-show="list">
										<h4>List Of Registered Users</h4>
										<table border=1 class="table table-striped table-condensed table-hover">
											<thead>
												<tr>
													<th>Sr.No</th>
													<th>User-Id</th>
													<th>Name</th>
													<th>Email-Id</th>
													<th>Mobile-No</th>
													<th>Action</th> 
												</tr> 
											</thead>
											<tbody ng-init="get()">
												<tr dir-paginate="users in pagedItems|itemsPerPage:15">
													<td>{{ users.srno }}</td>
													<td>{{ users.userid }}</td>
													<td>{{ users.name }}</td>
													<td>{{ users.emailid}}</td>
													<td>{{ users.mobileno}}</td>
													<td><a ng-click="edit_userdata(users.id)">View</a> | <a ng-click="delete_user(users.id)">Delete</a></td>
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
