<div id="header_wrapper">
	<div class="container-fluid">
		<div id="video-container">
		    <video autoplay loop poster="images/headerv.png" id="bgvid">
			    <source src="images/Paris.mp4" type="video/mp4">
			</video>
			<div class="row"style="margin:0px;">
				<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="margin:0px; padding:0px;">
					<div class="col-lg-3 col-xm-3 col-md-3 col-sm-3 header_left">
						<a href="#" data-ng-click="home()"><img src="images/logo-holidayGaan.jpg" width="185px" height="165px" /></a>
					</div>
					<div class="col-lg-9 col-xm-9 col-md-9 col-sm-9 header_right text-right">
						<ul>
							<li class="last"><a href="#">Become a Host</a></li>
							<li><a href="#">Help</a></li>
							<li><a href="#">Sign Up</a></li>
							<?php
								if($_SESSION['usernameFB']!="")
								{
							?>
									<li><a href="<?php echo $logoutURL; ?>"><?php echo $_SESSION['usernameFB']; ?> <img src="<?php echo $_SESSION['picFB']; ?>" style="width: 29px;height: 29px;border-radius: 100%;border: 2px solid #484848;" /></a></li>
									<input type="hidden" id="Fbuid" name="Fbuid" required value="<?php echo $_SESSION['useridFB']; ?>">
							<?php
								}
								else
								{
							?>
									<li><a href="#">Login</a></li>
							<?php
								}
							?>
						</ul>
					</div>
				</div>
				<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="margin:0px; padding:0px;">
					<div class="header_content" data-ng-show="headertitle">
						<h1>START YOUR HOLIDAY NOW !</h1>
						<span class="gap-one">&nbsp;</span>
						<h2>What are you looking for ?</h2>
						<span class="gap-two">&nbsp;</span>
					</div>
				</div>
				<div class="maxwidth">
					<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" data-ng-show="headerimg">
						<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2">&nbsp;</div>
						<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4">
							<a href="#" data-ng-click="accommodation()"><img src="images/cp.jpg" class="img-response" alt="Accommodation" /></a>
						</div>
						<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4">
							<a href="#" data-ng-click="bestdeals()"><img src="images/bd.jpg" class="img-response" alt="Best Deails" /></a>
						</div>
						<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2">&nbsp;</div>
					</div>
				</div>
				
				<form method="post" autocomplete="off" enctype="multipart/form-data" name="recommendForm" id="recommendForm" data-ng-model="recommendForm" novalidate>
				<!-- Resort Form display START-->
					<div class="maxwidth" data-ng-show="resort">
						<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12">
							<div class="resort-from">
									<div>
										<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12 header_container">
											<h1 class="col-lg-12 col-xm-12 col-md-12 col-sm-12">Customised Packages</h1>
											<p class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding: 10px 15px 10px 15px;">&nbsp;</p>
										</div>
										<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12">
											<select id="place" name="place" data-ng-model="place" data-ng-options="place.location as place.location for place in placeArray" class="col-xs-3 col-sm-3 custom-select" required>
												<option value="">Place</option>
											</select>
											<input type="text" name="fromd" id="fromd" data-ng-model="fromd" placeholder="Check In" class="col-xs-3 col-sm-3 custom-input" />
											<input type="text" name="tod" id="tod" data-ng-model="tod" placeholder="Check Out" class="col-xs-3 col-sm-3 custom-input" />	
											<select id="guests" name="guests"	data-ng-model="guests" data-ng-options="guests for guests in guestsArray" required class="col-xs-3 col-sm-3 custom-select">										
												<option value="">Guest</option>
											</select>
										</div>
										<span class="gapt" style="clear:both;">&nbsp;</span>
										<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12">
											<label class="col-lg-2 col-xm-2 col-md-2 col-sm-2 custom-label"><span>Budget<output></output></span></label>
											<select id="budget" name="budget"	data-ng-model="budget" data-ng-options="budget for budget in budgetArray" required class="col-xs-4 col-sm-4 custom-select">										
												<option value="">Select</option>
											</select>
											<div class="col-lg-6 col-xm-6 col-md-6 col-sm-6 column-cell-rt" style="padding: 0px 0px 0px 0px;">
												<div class="col-lg-6 col-xm-6 col-md-6 col-sm-6 text-left">
													<label class="starlabel"><span>Resort</span>&nbsp;<input type="radio" name="star" id="star" data-ng-model="star" value="Resort" /></label>
												</div>
												<div class="col-lg-6 col-xm-6 col-md-6 col-sm-6 text-left">
													<label class="starlabel"><span>Home Stay</span>&nbsp;<input type="radio" name="star" id="star" data-ng-model="star" value="Home Stay" /></label>
												</div>
											</div>
										</div>
										<span class="gapt" style="clear:both;">&nbsp;</span>
										<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12">
											<input type="button" class="col-xs-12 col-sm-12 orn-btn-active text-center" name="cyvp" id="cyvp" data-ng-click="cfcyvp()" data-ng-disabled="recommendForm.$invalid" value="CREATE YOUR VACATION PACKAGE" />
										</div>
									</div>							
								<div class="clear">&nbsp;</div>
							</div>
						</div>	
					</div>
				<!-- Resort Form display END-->
				<?php include "swcyvp.php"; ?>
				</form>
				
				<!--Best Deals Starts Here-->
					<form method="post" autocomplete="off" enctype="multipart/form-data" name="BestDealsForm" id="BestDealsForm" data-ng-model="BestDealsForm" novalidate>
						<div class="maxwidth" data-ng-show="bestD">
							<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12">
								<div class="resort-from">
										<div>
											<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12 header_container">
												<h1 class="col-lg-12 col-xm-12 col-md-12 col-sm-12">Best Deals</h1>
												<p class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding: 10px 15px 10px 15px;">&nbsp;</p>
											</div>
											<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12">
												<select id="place" name="place" data-ng-model="place" data-ng-options="place.location as place.location for place in placeArray" class="col-xs-3 col-sm-3 custom-select" required>
													<option value="">Place</option>
												</select>
												<input type="text" name="fromd" id="bfromd" data-ng-model="fromd" placeholder="Check In" class="col-xs-3 col-sm-3 custom-input" />
												<input type="text" name="tod" id="btod" data-ng-model="tod" placeholder="Check Out" class="col-xs-3 col-sm-3 custom-input" />	
												<select id="guests" name="guests"	data-ng-model="guests" data-ng-options="guests for guests in guestsArray" required class="col-xs-3 col-sm-3 custom-select">										
													<option value="">Guest</option>
												</select>
											</div>
											<span class="gapt" style="clear:both;">&nbsp;</span>
											<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12">
												<label class="col-lg-2 col-xm-2 col-md-2 col-sm-2 custom-label"><span>Budget<output></output></span></label>
												<select id="budget" name="budget"	data-ng-model="budget" data-ng-options="budget for budget in budgetArray" required class="col-xs-4 col-sm-4 custom-select">										
												<option value="">Select</option>
											</select>
												<div class="col-lg-6 col-xm-6 col-md-6 col-sm-6 column-cell-rt" style="padding: 0px 0px 0px 0px;">
													<div class="col-lg-6 col-xm-6 col-md-6 col-sm-6 text-left">
														<label class="starlabel"><span>Resort</span>&nbsp;<input type="radio" name="star" id="star" data-ng-model="star" value="Resort" /></label>
													</div>
													<div class="col-lg-6 col-xm-6 col-md-6 col-sm-6 text-left">
														<label class="starlabel"><span>Home Stay</span>&nbsp;<input type="radio" name="star" id="star" data-ng-model="star" value="Home Stay" /></label>
													</div>
												</div>
											</div>
											<span class="gapt" style="clear:both;">&nbsp;</span>
											<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12">
												<input type="button" class="col-xs-12 col-sm-12 orn-btn-active text-center" name="bcfcyvp" id="bcfcyvp" data-ng-click="bcfcyvp()" data-ng-disabled="BestDealsForm.$invalid" value="CREATE YOUR VACATION PACKAGE" />
											</div>
										</div>							
									<div class="clear">&nbsp;</div>
								</div>
							</div>	
						</div>
					</form>
				<!--Best Deals Ends Here-->
			</div>
		</div>
	</div>
</div>