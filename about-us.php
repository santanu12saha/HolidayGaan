<?php
error_reporting(0);
session_start();
include_once ("db/db_connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<?php include "title.php";?>
		<link rel="icon" type="image/gif/png/jpg" href="images/red-dot.png"/>
	</head>
	<body>
		<!--Header Starts Here-->
			<?php require_once '/fb-login/fbConfig.php'; include "inner-header.php";?>
		<!--Header Ends Here-->
	
		<!--Content Starts Here-->
			<div class="inner-fullcontentwrapper">
				<div class="row" style="margin:0;">
					<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding:0;">
					<div class="inner-content-wrapper">
						<h1 class="title">About Us</h1>
						<p>We all have that love and hate relationship with travel .While the thought of it enamors us, planning it seems like a herculean task. To make your planning  hassle free and pleasant , we at HolidayGaan tirelessly strive to give you the most desirable and convenient way of planning your travel. We value your time and the good news is that planning your own personalized vacation is just a matter of four clicks now!</p>
						
						<p>At HolidayGaan users can create a proper itinerary encompassing  all the activities , accommodation , transportation  that suits them the best using our personalized big data analytics engine and the geo spatial map based system in our platform. Any individual or travel agent can use our platform to suit their needs. You can share your customized package with your friends or relatives over social media , email and various other mediums to create a group package.</p>
						
						<p>So all your nightmares of tedious planning and budgeting is now our headache .All you got to do is decide the destination you want to explore . And the rest is a matter of few simplistic steps.</p>
						
						<p><strong>How are we different from others?</strong></p>
						<ol>
							<li>We enable customers to plan their customized package in maximum four clicks.</li>
							<li>We facilitate recommendation engine using advanced analytics.</li>
							<li>We make use of advanced pricing analytics.</li>
							<li>We welcome all individuals seeking personalized vacations as well as the travel agents.</li>
						</ol>
						
						<p><strong>How does it work?</strong></p>
						<ul>
							<li>Analytics engine proposes customers personalized recommendations on Accommodation & Activities.</li>
							<li>Customer chooses his choice of Accommodation ( Resorts, Home stays, etc) using the Map & Calendar based system.</li>
							<li>Customer adds his choice of Activities, Ground transport etc using the Map & Calendar based system.</li>
							<li>Customer shares his Customized package with his friends , relatives through social media, email, messenger etc and creates Group package.</li>
						</ul>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
					</div>
				</div>	
			</div>
		<!--Content Ends Here-->
		
		<!--Footer Starts Here-->
			<?php include "footer.php";?>
		<!--Footer Ends Here-->
	</body>
</html>