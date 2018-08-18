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
			<script src="js/angularjs/duration.js"></script>
		<!-- AngularJS Script Ends Here -->
	</head>
	<body class="nav-md" ng-app="Myappduration" ng-cloak>
		<div class="container body" ng-controller="listdurationController">
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
									<form class="form-horizontal style-form" method="post" name="addduration" autocomplete="off" enctype="multipart/form-data" ng-show="edit_preop" >
										<h4 class="mb"><i class="fa fa-edit"></i> Edit Duration</h4>	
										<div class="form-group">
												<input type="hidden" value="" class="form-control" required placeholder="Duration Name." ng-model="id" name="id" ng-readonly="true"/>
											<div class="col-sm-6">
												<label class="control-label">Duration Name</label>
												<input type="text" value="" class="form-control" required placeholder="Duration Name." ng-model="name" name="name" />
											</div>
											<div class="col-sm-6">
												<label>Duration Detail</label><br />
												<textarea class="form-control"  value="" placeholder="Duration Detail." ng-model="detail" name="detail"></textarea>
											</div>
										</div>  
										
										<div class="form-group">
											<div class="col-sm-6">
										<button  class="btn btn-success" ng-click="UpdateData()"/>Update</button>	
										
										<button  class="btn btn-success" ng-click="submitData()" onclick="window.location.href='list_duration';"/>Back</button>	
										</div>
										</div>
										
									</form>
									
									<div ng-show="list"> 
								<p class="pull-right"><a class="btn btn-success" href="add_duration" ng-show='btn_pat' ><i class="fa fa-plus"></i> Add</a>&nbsp;&nbsp;&nbsp;</p>
							 
                                		
                                        
											<h4>List Of Duration</h4>
											<table border=1 class="table table-striped table-condensed table-hover">
												<thead>
													<tr>
														<th>Sr.No</th>											
														<th>Duration Name</th>
														<th>Duration Detail</th> 
														
														<th>Action</th> 
													</tr> 
												</thead>
												<tbody ng-init="get()">
													<tr dir-paginate="Counseling in pagedItems|itemsPerPage:15">
														<td>{{ $index+1 }}</td>
														
														<td>{{ Counseling.name }}</td>
														<td>{{ Counseling.detail}}</td>
														
														<td><a ng-click="edit_duration(Counseling.ID)">Edit</a> | <a ng-click="delete_duration(Counseling.ID)">Delete</a></td>
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
