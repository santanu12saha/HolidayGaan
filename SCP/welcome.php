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
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	</head>
	<body class="nav-md">
		<div class="container body">
			<!-- Sidebar Starts Here -->
				<?php include_once("sidebar.php"); ?>
			<!-- Sidebar Ends Here -->			
			
			<!-- Top Starts Here -->
				<?php include_once("top.php"); ?>
			<!-- Top Ends Here -->
		
			<div class="right_col" role="main">
				<p>&nbsp;</p>
				<div class="row tile_count">
					<div class="animated flipInY col-md-3 col-sm-12 col-xs-12 tile_stats_count">
						<div class="left"></div>
						<div class="right">&nbsp;</div>
					</div>
				</div>
				<div class="row tile_count">&nbsp;</div>
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
