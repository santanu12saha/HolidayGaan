<?php
if($_SESSION['bpid']=="")
{
	echo "<script language=\"javascript\">window.location=\"index?status=2\";</script>";
}
else
{
	include "../db/db_connection.php";	
	$bpid = $_SESSION['bpid'];
?>
<div class="main_container">
	<div class="col-md-3 left_col">
		<div class="left_col scroll-view">
			<div class="navbar nav_title" style="border: 0;">
				<a href="index" class="site_title"><span>vKation</span></a>
			</div>
			<div class="clearfix"></div>
			<!-- sidebar menu -->
				<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
					<div class="menu_section">
						<ul class="nav side-menu">
							<li><a href="index"><i class="fa fa-home"></i>Dashboard</a></li>
							<li><a href="list_users"><i class="fa fa-home"></i>List of Registered Users</a></li>
							<!--<li><a href="list_duration"><i class="fa fa-home"></i>List of Duration</a></li>-->
							<!--<li><a href="list_package_type"><i class="fa fa-home"></i>List of Package Type</a></li>-->
							<li><a href="list_property_type"><i class="fa fa-home"></i>List of Property Type</a></li>
							<!--<li><a href="list_status_type"><i class="fa fa-home"></i>List of Status</a></li>-->
							<!--<li><a href="list_package_details"><i class="fa fa-home"></i>List of Package</a></li>-->
							<li><a href="list_property"><i class="fa fa-home"></i>List of Properties</a></li>
							<li><a href="list_activities_type"><i class="fa fa-home"></i>List of Activities Type</a></li>
							<li><a href="list_activities"><i class="fa fa-home"></i>List of Activities</a></li>
							<li><a href="list_availability"><i class="fa fa-home"></i>List of Availability Properties</a></li>
							
							<!--<li><a href="list_package_resorts"><i class="fa fa-home"></i>List of Package Resorts</a></li>-->
						</ul>
					</div>
				</div>
			<!-- sidebar menu -->
		</div>
	</div>
</div>
<?php
}
?>
