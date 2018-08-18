<div class="rbooking-fullcontentwrapper">
	<div class="row">
		<div class="col-lg-12">
			<div id="rbooking-content-wrapper">
				<div id="map" style="width: 100%;height:600px;"></div>
				<div class="rbooking-rt">
					<div class="rbooking-rt-bg">
						<img src="property_pics/<?php echo $picture;?>" width="363" height="198" />
						<h1 class="title"><?php echo $fproptitle; ?></h1>
						<p class="sub-title"><?php echo $address; ?></p>
						<div class="dtr">
							<div class="dtr-lt">
								<strong>FROM <span><?php echo $fromd; ?></span></strong>
							</div>
							<div class="dtr-rt">
								<strong>TO <span><?php echo $tod; ?></span></strong>
							</div>
						</div>
						<div class="cmtr">
							<div class="cmtr-lt">
								<strong>Cancellation Policy</strong>
							</div>
							<div class="cmtr-rt">
								<strong>Moderate</strong>
							</div>
						</div>
						<div class="cmtr">
							<div class="cmtr-lt-two">
								<strong>Nights</strong>
							</div>
							<div class="cmtr-rt-two">
								<strong><?php echo $totaln; ?></strong>
							</div>
						</div>
						<div class="pptr">
							<div class="pptr-lt">
								<strong>INR. <?php echo $fpropprice; ?> X <?php echo $totaln; ?> Nights</strong>
							</div>
							<div class="pptr-rt">
								<strong>INR. <?php echo number_format($sntc,2);?></strong>
							</div>
						</div>
						<div class="pptr">
							<div class="pptr-lt">
								<strong>INR. <?php echo $sntc; ?> X <?php echo $fguests; ?></strong>
							</div>
							<div class="pptr-rt">
								<strong>INR. <?php echo number_format($ntc,2);?></strong>
							</div>
						</div>
						
						<div class="cafdtr">
							<div class="cafdtr-lt"><strong>Service Fee</strong></div>
							<div class="cafdtr-lt"><strong>INR <?php echo $servicefee; ?></strong></div>
						</div>
						
						<div class="cafdtr">
							<div class="cafdtr-lt"><strong>Occupancy Taxes</strong></div>
							<div class="cafdtr-lt"><strong>INR <?php echo $occupancytaxes; ?></strong></div>
						</div>
						<?php
							$semact = sizeof($fpropactivities1);
							if($semact!=0)
							{
						?>
							<div class="caftr">
								<div class="caftr-td">
									<strong>CART ACTIVITY FEE</strong>
								</div>
							</div>
							<?php
							   $activity_sum = 0;
								$act_title = $fpropactivities1[0];
								$act_price = $fpropactivities1[1];
								$act_guest_no = $fpropactivities1[2];
								$arrsize = sizeof($fpropactivities1)/3;
								$arrsizemod = $arrsize - 1;
								$newarrrowend = 2;
								$activity_sum = $activity_sum + $act_price*$act_guest_no;
							?>
							<div class="cafdtr">
								<div class="cafdtr-lt"><strong><?php echo $act_title; ?></strong></div>
								<div class="cafdtr-lt"><strong>INR <?php echo $act_price*$act_guest_no; ?></strong></div>
							</div>
							<?php	
								for($i=0;$i<$arrsizemod;$i++)
								{
								   $oldarrrowend = $newarrrowend;
									$newarrrowend = $oldarrrowend + 3;
									$acttitleMinus2 = $newarrrowend - 2;
									$actpriceMinus1 = $newarrrowend - 1;
									$act_title1 = $fpropactivities1[$acttitleMinus2];
									$act_price1 = $fpropactivities1[$actpriceMinus1];
									$sct_guest_no1 = $fpropactivities1[$newarrrowend];
									$activity_sum = $activity_sum + $act_price1*$sct_guest_no1;
							?>	
									<div class="cafdtr">
										<div class='cafdtr-rt'><strong><?php echo $act_title1; ?></strong></div>
										<div class='cafdtr-rt'><strong>INR <?php echo $act_price1*$sct_guest_no1; ?></strong></div>
									</div>
							<?php
								}
							?>
							<div class="pptr">
								<div class="pptr-lt">
									<strong>TOTAL</strong>
								</div>
								<div class="pptr-rt">
									<strong>INR <?php echo number_format($activity_sum,2);?></strong>
								</div>
							</div>
						<?php
							}
							$semacttrans = sizeof($fpropactivitiestransports1);
							if($semacttrans!=0)
							{
						?>				
								<div class="caftr">
									<div class="caftr-td">
										<strong>COMMUTE FEE</strong>
									</div>
								</div>	
								<div class="cafdtr">					
									<?php
									    $transport_sum = 0;
									    $acttrans = $semacttrans/3;
										$arrtrans = $acttrans - 1;
										$newDatetrans = 0;
										$trans_Old_date = $fpropactivitiestransports1[0];
										$trans_name = $fpropactivitiestransports1[1];
										$trans_price = $fpropactivitiestransports1[2];
										$transport_sum = $transport_sum + $trans_price;	
										if($trans_name == "")
										{
											$styletrans1 = false;
										}
										else
										{
											$styletrans1 = true;
										}
								        
									?>
									    <div  data-ng-show="<?php echo $styletrans1; ?>" class="cafdtr">
										<div class="cafdtr-lt"><strong><?php echo $trans_name; ?>&nbsp;DAY 1</strong></div>
										<div class="cafdtr-rt"><strong>INR <?php echo number_format($trans_price); ?></strong></div>
										</div>
									<?php
									    $leotrans1 = 1;
										for($k=0;$k<$arrtrans;$k++)		
										{
											 $oldDatetrans = $newDatetrans;
											 $newDatetrans = $oldDatetrans + 3;
											 $trans_name_plus1 =  $newDatetrans + 1;
											 $trans_price_plus2 = $newDatetrans + 2;
											 $trans_New_date = $fpropactivitiestransports1[$newDatetrans];
											 $trans_name = $fpropactivitiestransports1[$trans_name_plus1];
											 $trans_price = $fpropactivitiestransports1[$trans_price_plus2];
											 $transport_sum = $transport_sum + $trans_price;
											 if($trans_name=="")
											 {
												$styletrans2 = false;
											 }
											 else
											 {
												$styletrans2 = true;
											 }
											 if($trans_Old_date == $trans_New_date) 
											 {
									?>
												<div data-ng-show="<?php echo $styletrans2; ?>" class="cafdtr">
												<div class="cafdtr-lt"><strong><?php echo $trans_name; ?>&nbsp;DAY <?php echo $leotrans1; ?></strong></div>
												<div class="cafdtr-rt"><strong>INR <?php echo number_format($trans_price); ?></strong></div>
												</div>
												
									<?php
										    }
											else if($trans_Old_date != $trans_New_date)
											{
												 $leotrans2 = $leotrans1 + 1;
									?>	
												<div data-ng-show="<?php echo $styletrans2; ?>" class="cafdtr">
												<div class="cafdtr-lt"><strong><?php echo $trans_name; ?>&nbsp;DAY <?php echo $leotrans2; ?></strong></div>
												<div class="cafdtr-rt"><strong>INR <?php echo number_format($trans_price); ?></strong></div>
												</div>
									<?php
												$trans_Old_date = $fpropactivitydetails1[$newDatetrans];
												$leotrans1++;
										
											}
										}
								
							?>	
									<div class="pptr">
									<div class="pptr-lt">
										<strong>TOTAL</strong>
									</div>
									<div class="pptr-rt">
										<strong>INR <?php echo number_format($transport_sum, 2);?></strong>
									</div>
								</div>
						<?php
							}
						?>
						<div class="ttr">
							<?php
								 /*Total*/
								 $total = $ntc + $activity_sum + $transport_sum + $servicefee + $occupancytaxes;
								 $tot = round($total,2);
							?>
							<div class="ttr-lt">
								<strong>TOTAL</strong>
							</div>
							<div class="ttr-rt">
								<strong>INR <?php echo number_format($total,2);?></strong>
							</div>
						</div>
						<div class="pptr" data-ng-click="showitinerary()" data-ng-show="<?php echo $hide; ?>">
							<div class="pptr-lt">
								<strong  >ITINERARY</strong>
							</div>
							<div class="pptr-rt" style="padding-left:160px;" >
								<span class="glyphicon glyphicon-triangle-bottom"></span>
							</div>
						</div>
												
						<div data-ng-show="itinerary_reveal">
							<?php	
								$semarr = sizeof($fpropactivitydetails1); 
								if($semarr==0)
								{
									$style = false;
								}
								else
								{
									$style = true;
								}				
								$arr = $semarr/6;
								$farr = $arr-1;
								$newDate=1;
								
								$ActTitle = $fpropactivitydetails1[0];
								$OldDate = $fpropactivitydetails1[1];
								$ActGuests = $fpropactivitydetails1[2];
								$ActStartTime = $fpropactivitydetails1[3];
								$ActEndTime = $fpropactivitydetails1[4];
								$ActTransport = $fpropactivitydetails1[5];
								if($ActTransport == "")
								{
									$style1 = false;
								}
								else
								{
									$style1 = true;
								}
							?>
							<div data-ng-show="<?php echo $style ?>">
								<div class="rktr">
									<div class="rktr-lt"  >
										<strong >DAY 1</strong>
									</div>
								</div>
								<p><strong><?php echo $ActTitle; ?> X <?php echo $ActGuests; ?></strong></p>
								<p><strong>Date of Activity:</strong> <?php echo $OldDate; ?></p>
								<p><strong>Start Time:</strong> <?php echo $ActStartTime; ?></p>
								<p><strong>End Time:</strong> <?php echo $ActEndTime; ?></p>
								<p><strong>Guest:</strong> <?php echo $ActGuests; ?></p>
								<p data-ng-show="<?php echo $style1 ?>"><strong>Transport:</strong> <?php echo $ActTransport; ?></p>
							</div>
							<?php
								//echo "<br /><br />$ActTitle---$OldDate---$ActGuests---$ActStartTime---$ActEndTime<br /><br />";
								$leo1 = 1;
								for($i=0;$i<$farr;$i++)
								{
									
									$oldDate = $newDate;
									$newDate = $oldDate+6;
									
									$minus1 = $newDate-1;
									$plus1 = $newDate+1;
									$plus2 = $newDate+2;
									$plus3 = $newDate+3;
									$plus4 = $newDate+4;
									
									$ActTitle = $fpropactivitydetails1[$minus1];
									$ActDate = $fpropactivitydetails1[$newDate];
									$ActGuests = $fpropactivitydetails1[$plus1];
									$ActStartTime = $fpropactivitydetails1[$plus2];
									$ActEndTime = $fpropactivitydetails1[$plus3];
									$ActTransport = $fpropactivitydetails1[$plus4];
									if($ActTransport == "")
									{
										$style2 = false;
									}
									else
									{
										$style2 = true;
									}
									
									//echo "$OldDate==$ActDate";
									if($OldDate==$ActDate)
									{
										
										
							?>
										<p><strong><?php echo $ActTitle; ?>  X <?php echo $ActGuests; ?></strong></p>
										<p><strong>Date of Activity:</strong> <?php echo $ActDate; ?></p>
										<p><strong>Start Time:</strong> <?php echo $ActStartTime; ?></p>
										<p><strong>End Time:</strong> <?php echo $ActEndTime; ?></p>
										<p><strong>Guest:</strong> <?php echo $ActGuests; ?></p>
										<p data-ng-show="<?php echo $style2 ?>"><strong>Transport:</strong> <?php echo $ActTransport; ?></p>

							<?php
										//echo "Date Matches---$i---$ActTitle---$OldDate---$ActDate---$ActGuests---$ActStartTime---$ActEndTime<br /><br />";
									}
									elseif($OldDate!=$ActDate)
									{
										
										$leo = 1 + $leo1;
							?>			
										<div class="rktr">
											<div class="rktr-lt">
												<strong >DAY <?php echo $leo; ?></strong>
											</div>
										</div>							
										<p><strong><?php echo $ActTitle; ?>  X <?php echo $ActGuests; ?></strong></p>
										<p><strong>Date of Activity:</strong> <?php echo $ActDate; ?></p>
										<p><strong>Start Time:</strong> <?php echo $ActStartTime; ?></p>
										<p><strong>End Time:</strong> <?php echo $ActEndTime; ?></p>
										<p><strong>Guest:</strong> <?php echo $ActGuests; ?></p>
									    <p data-ng-show="<?php echo $style2 ?>"><strong>Transport:</strong> <?php echo $ActTransport; ?></p>

							<?php
										$OldDate = $fpropactivitydetails1[$newDate];
										$leo1++;
										//echo "Date Not Matches---$i---$ActTitle---$ActDate---$ActGuests---$ActStartTime---$ActEndTime<br /><br />";
									}
								}
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="rbooking-bg">
				<form class="form-horizontal style-form" method="post" name="payment" autocomplete="off" enctype="multipart/form-data" >
					<div class="row">
						<div class="form-group">
							<div class=" col-xs-7 col-sm-7">
								<h1 class=" title">Payment</h1>
							</div>
						</div>	
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-xs-4 col-sm-4">
								<label class="sub-title">Country</label>
								<select class="custom-select" style="width:100%;" name="country" id="country" data-ng-model="country" required>
									<option value="India">India</option>
								</select>
							</div>
						</div>
					</div>  
					<div class="row">
						<div class="form-group">
							<div class="col-xs-4 col-sm-4">
								<input type="text" name="" id="" data-ng-model="" style="width:100%;" placeholder="Credit Card" class="custom-input" />
							</div>	
						</div>
					</div>	
					<div class="row">
						<div class="form-group">
							<div class="col-xs-4 col-sm-4">
								<label class="sub-title">Card number</label>
								<input type="text" name="" id="" data-ng-model="" style="width:100%" placeholder="" class="custom-input" />
							</div>
						</div>
					</div>   
					<div class="row">
						<div class="form-group">
							<div class="col-xs-2 col-sm-2 ">
								<label class="sub-title">Expires on</label>
								<select class="custom-select" style="width:100%;" name="mm" id="mm" data-ng-model="mm" required>
									<option value="">MM</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
							<div class="col-xs-2 col-sm-2 ">
								<label class="sub-title">&nbsp;</label>
								<select class="custom-select" style="width:100%;" name="yy" id="yy" data-ng-model="yy" required>
									<option value="">YYYY</option>
									<option value="2015">2015</option>
									<option value="2016">2016</option>
									<option value="2017">2017</option>
									<option value="2018">2018</option>
									<option value="2019">2019</option>
								</select>
							</div>	
							<div class="col-xs-3 col-sm-3 ">
								<label class="sub-title">Expires on</label>
								<input type="text" name="" id="" data-ng-model="" style="width:100%;" placeholder="" class="custom-input" />
							</div>	
						</div>
					</div> 
					<div class="row">
						<div class="form-group">
							<div class="col-xs-7 col-sm-7 " style="padding-right:0px padding-top:0px;">
								<label class="sub-title" style="padding-top:0px;"><input type="checkbox" class="custom-input" style="width:20px;margin-right:0px; height:20px;padding-left:0px" id="check" data-ng-checked="check()" data-ng-model="check" />&nbsp;Please save my credit card for future transaction</label>
							</div>
						</div>
					</div>		
					<div class="row">
						<div class="form-group">
							<div class="col-xs-7 col-sm-7 " style="padding-right:0px padding-top:0px;">
								<hr style=" border: solid 2px #D3D3D3;"/>
							</div>
						</div>
					</div>	
					<div class="row">
						<div class="form-group">
							<div class=" col-xs-7 col-sm-7">
								<h1 class=" title">Billing Address</h1>
							</div>
						</div>	
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-xs-4 col-sm-4">
								<label class="sub-title">First Name</label>
								<input type="text" name="" id="" data-ng-model="" style="width:100%" placeholder="" class="custom-input" />
							</div>
							<div class="col-xs-3 col-sm-3">
								<label class="sub-title">Last Name</label>
								<input type="text" name="" id="" data-ng-model="" style="width:100%" placeholder="" class="custom-input" />
							</div>
						</div>
					</div>  
					<div class="row">
						<div class="form-group">
							<div class="col-xs-4 col-sm-4">
								<label class="sub-title">Street Address</label>
								<input type="text" name="" id="" data-ng-model="" style="width:100%" placeholder="" class="custom-input" />
							</div>
							<div class="col-xs-2 col-sm-2">
								<label class="sub-title">Apt#</label>
								<input type="text" name="" id="" data-ng-model="" style="width:100%" placeholder="" class="custom-input" />
							</div>
						</div>
					</div>  
					<div class="row">
						<div class="form-group">
							<div class="col-xs-2 col-sm-2">
								<label class="sub-title">City</label>
								<input type="text" name="" id ="" data-ng-model="" style="width:100%" placeholder="" class="custom-input" />
							</div>
							<div class="col-xs-2 col-sm-2">
								<label class="sub-title">State</label>
								<input type="text" name="" id="" data-ng-model="" style="width:100%" placeholder="" class="custom-input" />
							</div>
							<div class="col-xs-2 col-sm-2">
								<label class="sub-title">Postal code</label>
								<input type="text" name="" id="" data-ng-model="" style="width:100%" placeholder="" class="custom-input" />
							</div>
							<div class="col-xs-2 col-sm-2">
								<label class="sub-title">&nbsp;</label>
								<label class="sub-title">India</label>
							</div>
						</div>
					</div>  	
					<div class="row" style="padding-top:25px;">
						<div class="form-group">
							<div class="col-xs-2 col-sm-2">
								<a href="#" class="custom-button" >Continue</a>
								<a href="eorr.php" class="sub-title" style="padding-top:10px;"><span class="glyphicon glyphicon-arrow-left"></span> &nbsp;GO BACK</a>
							</div>
						</div>
					</div>		
				</form>
				<div>
					<form action="/purchase" method="POST">
						<script src="https://checkout.razorpay.com/v1/checkout.js" data-key="rzp_test_2E6tu6udSgqqPt" data-amount="<?php echo $tot*100;?>" data-buttontext="Pay with Razorpay" data-name="Vkation" data-description="Personalize your vkation Deals" data-image="http://localhost/vKationdemo/images/logo-A.jpg" data-prefill.name="" data-prefill.email="" data-theme.color="#F37254"></script>
						<input type="hidden" value="Hidden Element" name="hidden">
					</form>
				</div>
			</div>
		</div>
	</div>	
</div>