<div data-ng-show="explore">
	<div id="activityconfirm" class="white-content">
		<div class="orange-popup">
			<div class="orange-bg-text">
				Would Like To Add Activities & Attractions In Your Vacation
					<form action="#" method="post">
						<div class="text-center activity-label" style="padding:0;margin: 0 auto;width: 75%;">
							<div style="width: 20%;display: table-cell;text-align: right;">
								<input type="button" value="Yes" name="yes" id="yes" data-ng-model="yes" data-ng-click="addActivities()" class="cbtn" onclick="document.getElementById('activityconfirm').style.display='none';document.getElementById('fade').style.display='none'" /><label for="yes"></label>
							</div>
							<div style="width: 20%;display: table-cell;text-align: right;">
								<input type="button" value="No" name="no" id="no" data-ng-model="no" data-ng-click="add()" class="cbtn" onclick="document.getElementById('activityconfirm').style.display='none';document.getElementById('fade').style.display='none'" /><label for="no"></label>
							</div>
						</div>
					</form>
			</div>
		</div>
		<!--<a href="javascript:void(0)" onclick="document.getElementById('activityconfirm').style.display='none';document.getElementById('fade').style.display='none'"><img src="images/close.png" /></a>-->
		</div>
		<div id="transconfirm" class="white-contenter">
			<div class="orange-popup">
				<div class="orange-bg-text">
					Would Like To Add Transportation
						<form action="#" method="post">
							<div class="text-center activity-label" style="padding:0;margin: 0 auto;width: 75%;">
								<div style="width: 20%;display: table-cell;text-align: right;">
									<input type="button" value="Yes" name="yes" id="yes" data-ng-model="yes" data-ng-click="transport()" class="cbtn" onclick="document.getElementById('transconfirm').style.display='none';document.getElementById('fade').style.display='none'" /><label for="yes"></label>
								</div>
								<div style="width: 20%;display: table-cell;text-align: right;">
									<input type="button" value="No" name="no" id="no" data-ng-model="no" data-ng-click="transportno()" class="cbtn" onclick="document.getElementById('transconfirm').style.display='none';document.getElementById('fade').style.display='none'" /><label for="no"></label>
								</div>
							</div>
						</form>
				</div>
			</div>
				<!--<a href="javascript:void(0)" onclick="document.getElementById('activityconfirm').style.display='none';document.getElementById('fade').style.display='none'"><img src="images/close.png" /></a>-->
		</div>
		<div>
			<div id="activityconfirm1" class="white_cst">
				
				<div class="orange-popup-ac">
					<a class="abc" href="javascript:void(0)" onclick="document.getElementById('activityconfirm1').style.display='none';document.getElementById('fade').style.display='none'"><img src="images/close.png" /></a>	
					<div class="orange-bg-text-ac">
						<form>
							<div class="daytime" data-ng-show="cartt1">
								<strong>{{act_title}}</strong>
								<p class="row-one">
									<span class="cell-lt">Choose a day and time</span>
									<span class="cell-rt">
										<select name="category-group" id="datepickAgain" data-ng-model="datepickAgain" data-ng-change="onCategoryChange(datepickAgain)">
											<option value="">Select Day</option>
											<option data-ng-repeat="dateactivityAgain in nodatesAgain" value="{{dateactivityAgain.datesAgain}}" >{{dateactivityAgain.datesAgain}} </option>
										</select>
									</span>
								</p>
								<p class="row-two">
									<span class="cell-lt">
										<select name="category-group" id="GuestAgain" data-ng-model="GuestAgain">
											<option value="">Guest</option>
											<option value="1 Guest" name="GuestAgain">1 Guest</option>
											<option value="2 Guest" name="GuestAgain">2 Guest</option>
											<option value="3 Guest" name="GuestAgain">3 Guest</option>
											<option value="4 Guest" name="GuestAgain">4 Guest</option>
											<option value="5 Guest" name="GuestAgain">5 Guest</option>
											<option value="6 Guest" name="GuestAgain">6 Guest</option>
											<option value="7 Guest" name="GuestAgain">7 Guest</option>
											<option value="8 Guest" name="GuestAgain">8 Guest</option>
											<option value="9 Guest" name="GuestAgain">9 Guest</option>
											<option value="10 Guest" name="GuestAgain">10 Guest</option>
										</select>
									</span>
									<span class="cell-cr">
										<select name="category-group" id="timeAgain" data-ng-model="timeAgain">
											<option value="">Start</option>
											<option value="07.00" name="timeAgain"> 7 A.M</option>
											<option value="08.00" name="timeAgain"> 8 A.M</option>
											<option value="09.00" name="timeAgain"> 9 A.M</option>
											<option value="10.00" name="timeAgain">10 A.M</option>
											<option value="11.00" name="timeAgain">11 A.M</option>
											<option value="12.00" name="timeAgain">12 NOON</option>
											<option value="13.00" name="timeAgain">1 P.M</option>
											<option value="14.00" name="timeAgain">2 P.M</option>
											<option value="15.00" name="timeAgain">3 P.M</option>
											<option value="16.00" name="timeAgain">4 P.M</option>
											<option value="17.00" name="timeAgain">5 P.M</option>
											<option value="18.00" name="timeAgain">6 P.M</option>
											<option value="19.00" name="timeAgain">7 P.M</option>
											<option value="20.00" name="timeAgain">8 P.M</option>
											<option value="21.00" name="timeAgain">9 P.M</option>
											<option value="22.00" name="timeAgain">10 P.M</option>
											<option value="23.00" name="timeAgain">11 P.M</option>
											<option value="24.00" name="timeAgain">12 A.M</option>
										</select>
									</span>
									<span class="cell-rt">
										<select name="category-group" id="time1Again" data-ng-model="time1Again">
											<option value="">End</option>
											<option value="07.00" name="time1Again"> 7 A.M</option>
											<option value="08.00" name="time1Again"> 8 A.M</option>
											<option value="09.00" name="time1Again"> 9 A.M</option>
											<option value="10.00" name="time1Again">10 A.M</option>
											<option value="11.00" name="time1Again">11 A.M</option>
											<option value="12.00" name="time1Again">12 NOON</option>
											<option value="13.00" name="time1Again">1 P.M</option>
											<option value="14.00" name="time1Again">2 P.M</option>
											<option value="15.00" name="time1Again">3 P.M</option>
											<option value="16.00" name="time1Again">4 P.M</option>
											<option value="17.00" name="time1Again">5 P.M</option>
											<option value="18.00" name="time1Again">6 P.M</option>
											<option value="19.00" name="time1Again">7 P.M</option>
											<option value="20.00" name="time1Again">8 P.M</option>
											<option value="21.00" name="time1Again">9 P.M</option>
											<option value="22.00" name="time1Again">10 P.M</option>
											<option value="23.00" name="time1Again">11 P.M</option>
											<option value="24.00" name="time1Again">12 A.M</option>
										</select>
									</span>
								</p>
								<p style="height:0;">&nbsp;</p>
								<input type="submit" data-ng-click="showthirdAgain(datepickAgain,timeAgain,time1Again)" value="Book Now" class="org-btn" />
							</div>
							<div class="continue" data-ng-show="cartt2">
								<div class="row-one">
									<p class="cell-lt">
										<strong>{{act_title}}</strong>
										<span>Activity 1 for Day 1 at Mysore</span>
									</p>
									<p class="cell-rt">
									<strong>INR. {{act_price}}</strong>
									</p>	
								</div>
								<p class="row">
									<span class="cell-lt">Date</span>
										<span class="cell-rt">{{selectedvaluesAgain}}</span>
								</p>
								<p class="row"><span class="cell-lt">Time</span>
									<span class="cell-rt">{{selectedvalues1Again}}-{{selectedvalues2Again}}</span>
								</p>
								<p class="row">
									<span class="cell-lt">Duration</span><span class="cell-rt">{{durationAgain}} hrs</span>
								</p>
								<p style="height:0;">&nbsp;</p>
												<input type="hidden" data-ng-model="activity_id1" id="activity_id1" name="activity_id1" value="{{act_id}}">
												<input type="hidden" data-ng-model="activitytitle1" id="activitytitle1" name="activitytitle1" value="{{act_title}}">
												<input type="hidden" data-ng-model="activityprice1" id="activityprice1" name="activityprice1" value="{{act_price}}">
												<input type="hidden" data-ng-model="activityalt1" id="activityalt1" name="activityalt1" value="{{act_alt}}">
												<input type="hidden" data-ng-model="activitylong1" id="activitylong1" name="activitylong1" value="{{act_long}}">
												<input type="hidden" data-ng-model="activitytype1" id="activitytype1" name="activitytype1" value="{{act_type}}">
												<input type="submit" onclick="document.getElementById('activityconfirm1').style.display='none';document.getElementById('fade').style.display='none'" data-ng-click="continueBookingAgain()" value="Continue Booking" class="org-btn" />
							</div>
						</form>
							
					</div>
				</div>
			</div>
		</div>
		<div id="fade" class="black-overlay"></div>
			<div class="rooms-fullcontentwrapper">
				<div class="row" style="margin:0;">
					<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding:0;">
						<div id="rooms-content-wrapper">
							<div class="rooms-top">
								<div class="rooms-top-lt">
									<div class="rooms-top-lt-boxlt">
										<h1 class="title">{{propertytitle}}</h1>
									</div>
									<div class="rooms-top-lt-boxrt">
										<p class="reviews">
											<span class="reviews-rt">{{reviewcount}} Reviews</span>
											<div class="clear"></div>
										</p>
									</div>
							<div class="clear"></div>				
							<div class="rating">
								<div class="trip-rating">
									<span data-ng-if="propertytripadvisorrating == '1' || propertytripadvisorrating == '1.1' || propertytripadvisorrating == '1.2' || propertytripadvisorrating == '1.3' || propertytripadvisorrating == '1.4' || propertytripadvisorrating == '1.5'">
									 Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
								 </span>
									<span data-ng-if="propertytripadvisorrating == '2' || propertytripadvisorrating == '2.1' || propertytripadvisorrating == '2.2' || propertytripadvisorrating == '2.3' || propertytripadvisorrating == '2.4' || propertytripadvisorrating == '2.5'">
									 Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
								 </span>
									<span data-ng-if="propertytripadvisorrating == '3' || propertytripadvisorrating == '3.1' || propertytripadvisorrating == '3.2' || propertytripadvisorrating == '3.3' || propertytripadvisorrating == '3.4' || propertytripadvisorrating == '3.5'">
									 Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' />
								 </span>
									<span data-ng-if="propertytripadvisorrating == '4' || propertytripadvisorrating == '4.1' || propertytripadvisorrating == '4.2' || propertytripadvisorrating == '4.3' || propertytripadvisorrating == '4.4' || propertytripadvisorrating == '4.5'">
									 Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' />
								 </span>
									<span data-ng-if="propertytripadvisorrating == '5' || propertytripadvisorrating == '5.1' || propertytripadvisorrating == '5.2' || propertytripadvisorrating == '5.3' || propertytripadvisorrating == '5.4' || propertytripadvisorrating == '5.5'">
									 Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' />
								 </span>
								</div>
								<div class="our-rating">									
									<span data-ng-if="propertyrating == '1' || propertyrating == '1.1' || propertyrating == '1.2' || propertyrating == '1.3' || propertyrating == '1.4' || propertyrating == '1.5'">
									 Our rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
								 </span>
									<span data-ng-if="propertyrating == '2' || propertyrating == '2.1' || propertyrating == '2.2' || propertyrating == '2.3' || propertyrating == '2.4' || propertyrating == '2.5'">
									 Our rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
								 </span>
									<span data-ng-if="propertyrating == '3' || propertyrating == '3.1' || propertyrating == '3.2' || propertyrating == '3.3' || propertyrating == '3.4' || propertyrating == '3.5'">
									 Our rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' />
								 </span>
									<span data-ng-if="propertyrating == '4' || propertyrating == '4.1' || propertyrating == '4.2' || propertyrating == '4.3' || propertyrating == '4.4' || propertyrating == '4.5'">
									 Our rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' />
								 </span>
									<span data-ng-if="propertyrating == '5' || propertyrating == '5.1' || propertyrating == '5.2' || propertyrating == '5.3' || propertyrating == '5.4' || propertyrating == '5.5'">
									 Our rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' />
								 </span>
								</div>
							</div>
							<p class="content">{{propertypdesc}}</p>
													
							<div class="clear"></div>					
								
							<div class="map">
								<input type="text" typeahead="activity.name  for activity in activitiesdata | filter:$viewValue | limitTo:6" data-ng-model="activityautocomplete" typeahead-on-select="getact($item)" class="col-lg-12 col-xm-12 col-md-12 col-sm-12 eorr-custom-input"/>
								<div id="map" style="width: 100%;height:738px;"></div>
							</div>
							<div class="room-info">
								<a href="#" class="{{class}}" data-ng-click="summaryShow()">SUMMARY</a>
							</div>
							<div class="clear"></div>
						</div>
						<div class="rooms-top-rt">
							<p class="rooms-top-rt-bx">
								<strong class="rooms-top-rt-bx-lt">INR. {{propertyprice}}</strong>
								<span class="rooms-top-rt-bx-rt">Per Night</span>
							</p>
							<form action="#">
								<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding:0 0 10px 0;">
									<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4" style="padding:0 15px 0 10px;">
										<label>Check In</label>
										<input type="text" value="{{fromd}}" data-ng-model="fromd" name="fromd" id="fromd" readonly />
									</div>
									<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4" style="padding:0 15px 0 10px;">
										<label>Check Out</label>
										<input type="text" value="{{tod}}" data-ng-model="tod" name="tod" id="tod" readonly />
									</div>
									<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4" style="padding:0 15px 0 10px;">
										<label>Guests</label>
										<select name="guest" id="guest" data-ng-model="guest">
											<option data-ng-repeat="guestValue in guestsArrayValue" value="{{guestValue}}" >{{$index+1}}&nbsp;Guest</option>
										</select>
									</div>
								</div>
								<div class="clear"></div>
								<p class="table-row">
									<span class="table-cell-one">INR. {{propertyprice}} X {{totaln}} Nights</span>								
									
									<span class="table-cell-two">INR. {{ntc*guest | number:2}}</span>
								</p>
								
								<p class="table-row">
									<span class="table-cell-one">Service Fee</span>
									<span class="table-cell-two">INR. {{(propertytax/100)*(ntc*guest) | number:2}}
</span>
								</p>
								
								<p class="table-row">
									<span class="table-cell-one">Occupancy Taxes</span>
									<span class="table-cell-two">INR. 5500</span>
								</p>				
								
								<p class="table-row">
									<span class="table-cell-bottom-one">Total</span>
									<span class="table-cell-bottom-two">INR. {{(ntc*guest) + ((propertytax/100)*(ntc*guest)) + 5500 | number:2}}</span>
								</p>
								
								<p class="table-row-btn">
									<span class="table-cell-grey-btn-lt">Added in to Cart</span>
								</p>
								<!--Add-To-Cart Form Starts Here-->
									<p class="table-row-min-btn" data-ng-show="cart" data-ng-repeat="activity in details_activity">
										<span class="table-cell-lt-lt">{{activity.activity_datepick}}</span>
										<span class="table-cell-lt">{{activity.activity_title}} X {{activity.noOfGuest}}</span>
										<span class="table-cell-rt">INR. {{activity.activity_price*activity.noOfGuest | number:2}}&nbsp; <a href data-ng-click="removeItem($index)">X</a></span>
									</p>
									
								<!--Add-To-Cart Form Ends Here-->
								
								<p class="trans-table-row-min-btn" data-ng-repeat="activitytrans in activitiestrans">
									<span class="table-cell-lt">{{activitytrans.nameactivitytrans_date}}</span>
									<span class="table-cell-cr"><img src="images/{{activitytrans.nameactivitytrans}}" /></span>
									<span class="table-cell-rt">INR. {{activitytrans.priceactivitytrans}} <a href data-ng-click="removeItemTransport($index)">X</a></span>
								</p>

								<p class="table-row-main-btn">
									<a href="#" data-ng-click="popup()" class="table-cell-main-btn">Request to Book</a>
								</p>
							</form>
						</div>
						<div data-ng-show="transportyes"  class="rooms-bottom-rt">
							<form>
								<p class="title">On Ground Support</p>
								<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12">
									<select class="select" name="category-group" id="datepick1" data-ng-model="datepick1"  data-ng-change="onCategoryChange1()">
										<option value="">Select Details for Transport</option>
										<option data-ng-repeat="dateactivitytrans in finalDate" value="{{dateactivitytrans.at_date1}}">{{dateactivitytrans.at_date1}} {{dateactivitytrans.at_name}}  {{dateactivitytrans.at_sttime}}---{{dateactivitytrans.at_entime}}</option>
									</select>
									<span data-ng-show="dateerror" class="error">Please Select Details</span>
								</div >
								<div data-ng-repeat="transdata in transportValueChoose" ng-show="$index==index1">
								<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12">
									<span data-ng-show="checkerror" class="error">Please Select Transport Type</span>
									<label for="minicab" style="display:block;">
										<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12 check-block">
											<div class="col-lg-1 col-xm-1 col-md-1 col-sm-1 check-box">
												<input type="radio" value="{{transdata.minicab}}" id="minicab" name="minicab" data-ng-model="$parent.checked"/>
											</div>
											<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2 mincab-icon">
												<img src="images/Mini-Cab.png" />
											</div>
											<div class="col-lg-3 col-xm-3 col-md-3 col-sm-3 mincab-text">
												<span>Mini Cab</span>
											</div>
											<div class="col-lg-6 col-xm-6 col-md-6 col-sm-6 text-right mincab-text">
												<span>INR. {{transdata.cabprice}} for</span><span>{{transdata.usertimes}} hours/300KM</span>
											</div>
										</div>
									</label>
								</div>
								<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12">
									<label for="sedan" style="display:block;">
										<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12 check-block">
											<div class="col-lg-1 col-xm-1 col-md-1 col-sm-1 check-box">
												<input type="radio" value="{{transdata.sedan}}" id="sedan" name="sedan" data-ng-model="$parent.checked"/>
											</div>
											<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2 sedan-icon">
												<img src="images/Sedan-Car.png" />
											</div>
											<div class="col-lg-3 col-xm-3 col-md-3 col-sm-3 sedan-text">
												<span>Sedan</span>
											</div>
											<div class="col-lg-6 col-xm-6 col-md-6 col-sm-6 text-right sedan-text">
												<span>INR. {{transdata.sedanprice}} for</span><span>{{transdata.usertimes}} hours/300KM</span>
											</div>
										</div>
									</label>
								</div>						
								<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12">
									<label for="seater" style="display:block;">
										<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12 check-block">
											<div class="col-lg-1 col-xm-1 col-md-1 col-sm-1 check-box">
												<input type="radio" value="{{transdata.seater}}" id="seater" name="seater" data-ng-model="$parent.checked"/>
											</div>
											<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2 seater-icon">
												<img src="images/Innova.png" />
											</div>
											<div class="col-lg-3 col-xm-3 col-md-3 col-sm-3 seater-text">
												<span>7 Seater</span>
											</div>
											<div class="col-lg-6 col-xm-6 col-md-6 col-sm-6 text-right seater-text">
												<span>INR. {{transdata.seater_price}} for</span><span>{{transdata.usertimes}} hours/300KM</span>
											</div>
										</div>
									</label>
								</div>
								<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12">
									<label for="minibus" style="display:block;">
										<div class="col-lg-1 col-xm-1 col-md-1 col-sm-1 check-box">
											<input type="radio" value="{{transdata.minibus}}" id="minibus" name="minibus" data-ng-model="$parent.checked"/>
										</div>
										<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2 minibus-icon">
											<img src="images/Mini-Bus.png" />
										</div>
										<div class="col-lg-3 col-xm-3 col-md-3 col-sm-3 minibus-text">
											<span>Mini Bus</span>
										</div>
										<div class="col-lg-6 col-xm-6 col-md-6 col-sm-6 text-right minibus-text">
											<span>INR. {{transdata.minibus_price}} for</span><span>{{transdata.usertimes}} hours/300KM</span>
										</div>
									</label>
								</div>
								</div>
								<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12">
									<input style="width:100%;" type="button" data-ng-model="addtrans" class="grey-btn" value="Add to Cart" ng-click="transportadded(datepick1,checked)">
								</div>
								<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12">
									<span class="note">* For the extra km. and hours, the customers has to pay at the permises</span>
								</div>
							</form>
						
						</div>
						<div class="clear"></div>
					</div>
					<div class="rooms-bottom-wrapper" data-ng-show="summary">
						<div class="rooms-bottom">
							
							<div data-ng-if="propertyswimmingpool=='1' || propertyspa=='1' || propertyjacuzzi=='1' || propertyfinedinig=='1' || propertycaffe=='1'" class="bk-tp">
							<strong class="title">Amenities</strong>
								<p class="tr">
									<span class="tc-lt" data-ng-if="propertyswimmingpool == '1'"><img style="width:50px;" src="images/Swimming.png" /> Swimming Pool</span>
									<span class="tc-lt" data-ng-if="propertyspa == '1'"><img style="width:50px;" src="images/Spa.png" /> Spa</span>
									<span class="tc-lt" data-ng-if="propertyjacuzzi == '1'"><img style="width:50px;" src="images/Jacizzi.png" /> Jacuzzi</span>
									<span class="tc-lt" data-ng-if="propertyfinedinig == '1'"><img style="width:10%;" src="images/Dine.png" /> Fine dining</span>
									<span class="tc-lt" data-ng-if="propertycaffe == '1'"><img style="width:50px;" src="images/Cafe.png" /> Cafe</span>
								</p>
						 </div>
							<div class="aa-tp">
								<strong class="title">Activities Around</strong>
								<p class="tr-caption">
									<span class="tt-lt">&nbsp;</span>
									<span class="tt-rt">QUICK FACTS</span>
								</p>
								<div data-ng-repeat="list in activitydata" data-ng-show="$index<limit">
									<p class="tr-row">
										<span class="tc-img"><img style="width:100%;height:auto;paddidata-ng-right:0px;" src="Activities/{{ list.apic }}" /></span>
										<span class="tc-cr">
											<span class="tc-cr-title">
												{{ list.atitle }}
												<span class="tc-cr-title-price">INR. {{ list.aprice }}</span>	
											</span>
											
											{{ list.ahighlight }}
											<input type="submit" id="{{list.atitle}}" class="tc-cr-btn" data-ng-disabled="{{list.atitle}}" value="Add to Cart" data-ng-click="addToCart(list.atitle,list.aprice,list.apid,list.alat,list.along,list.activitytype)"></span>	
											
										</span>										
									</p>
								</div>
								<div class="downrow"><span data-ng-click="downArrow()">more activities&nbsp;&nbsp;&nbsp;</span><span class="glyphicon glyphicon-triangle-bottom" data-ng-click="downArrow()"></span></div>
							</div>
							<div class="acn-tp">
								<strong class="title">Accommodation</strong>
								<p class="tr-caption">
									<span class="tt-rt">Comfortable furnishings and colourful hues bring warmth to the design of the guestrooms at Hotel Caesius. With your comfort their main focus, you'll find individually controlled air conditioning, soundproofed walls, dressing gowns and slippers. Furnished balconies and terraces also make the most of the lake breeze and yours comes with an enviable lake view.</span>
								</p>
							</div>
							<div class="safetyf-tp">
								<strong class="title">Safety Features</strong>
								<p class="tr-caption">
									<span class="tt-rt">
										<span>Smoke Detector</span>
										<span>First Aid Kit</span>
										<span>Fire Extinguisher</span>
									</span>
								</p>
							</div>
							<div class="photos-tp">
								<strong class="title">Photos</strong>
								<p class="tr-caption">
									<span class="tt-lt">
										<img src="Resorts/{{propertypimgheader}}" />
									</span>
									<span class="tt-rt">
										<img src="Resorts/{{propertypimg1}}" />
									</span>
								</p>
								<p class="tr-three">
									<span class="tt-lt">
										<img src="Resorts/{{propertypimg2}}" />
									</span>
									<span class="tt-cr">
										<img src="Resorts/{{propertypimg3}}" />
									</span>
									<span class="tt-rt">
										<img src="Resorts/{{propertypimg4}}" />
									</span>
								</p>
							</div>
						</div>
					</div>					
					<div class="clear"></div>
					<div class="rooms-review-sy-wrapper">
						<div class="rooms-review-sy-bottom">
							<div class="rsy-tp">
								<strong class="title">Review summary</strong>
								<p class="tr">
									<span class="tc"><img src="images/rsyrk.png" /></span>
									<span class="ourrating">	
										<span data-ng-if="propertyrating == '1' || propertyrating == '1.1' || propertyrating == '1.2' || propertyrating == '1.3' || propertyrating == '1.4' || propertyrating == '1.5'">
										
											<span class='title'>{{propertyrating}}</span>
										<span class='imgstar'><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' /></span>
										<span class='rat'>Our rating</span>
									 </span>
										<span data-ng-if="propertyrating == '2' || propertyrating == '2.1' || propertyrating == '2.2' || propertyrating == '2.3' || propertyrating == '2.4' || propertyrating == '2.5'">
											<span class='title'>{{propertyrating}}</span>
										<span class='imgstar'><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' /></span>
										<span class='rat'>Our rating</span>
									 </span>
										<span data-ng-if="propertyrating == '3' || propertyrating == '3.1' || propertyrating == '3.2' || propertyrating == '3.3' || propertyrating == '3.4' || propertyrating == '3.5'">
											<span class='title'>{{propertyrating}}</span>
										<span class='imgstar'><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /></span>
										<span class='rat'>Our rating</span>
									 </span>
										<span data-ng-if="propertyrating == '4' || propertyrating == '4.1' || propertyrating == '4.2' || propertyrating == '4.3' || propertyrating == '4.4' || propertyrating == '4.5'">
											<span class='title'>{{propertyrating}}</span>
										<span class='imgstar'><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /></span>
										<span class='rat'>Our rating</span>
									 </span>
										<span data-ng-if="propertyrating == '5' || propertyrating == '5.1' || propertyrating == '5.2' || propertyrating == '5.3' || propertyrating == '5.4' || propertyrating == '5.5'">
											<span class='title'>{{propertyrating}}</span>
										<span class='imgstar'><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /></span>
										<span class='rat'>Our rating</span>
									 </span>
									</span>
									<span class="tripadvisor">
										<span data-ng-if="propertytripadvisorrating == '1' || propertytripadvisorrating == '1.1' || propertytripadvisorrating == '1.2' || propertytripadvisorrating == '1.3' || propertytripadvisorrating == '1.4' || propertytripadvisorrating == '1.5'">
											<span class='title'>{{propertytripadvisorrating}}</span>
										<span class='imgstar'><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' /></span>
										<span class='rat'>Tripadvisor</span>
									 </span>
										<span data-ng-if="propertytripadvisorrating == '2' || propertytripadvisorrating == '2.1' || propertytripadvisorrating == '2.2' || propertytripadvisorrating == '2.3' || propertytripadvisorrating == '2.4' || propertytripadvisorrating == '2.5'">
											<span class='title'>{{propertytripadvisorrating}}</span>
										<span class='imgstar'><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' /></span>
										<span class='rat'>Tripadvisor</span>
									 </span>
										<span data-ng-if="propertytripadvisorrating == '3' || propertytripadvisorrating == '3.1' || propertytripadvisorrating == '3.2' || propertytripadvisorrating == '3.3' || propertytripadvisorrating == '3.4' || propertytripadvisorrating == '3.5'">
											<span class='title'>{{propertytripadvisorrating}}</span>
										<span class='imgstar'><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /></span>
										<span class='rat'>Tripadvisor</span>
									 </span>
										<span data-ng-if="propertytripadvisorrating == '4' || propertytripadvisorrating == '4.1' || propertytripadvisorrating == '4.2' || propertytripadvisorrating == '4.3' || propertytripadvisorrating == '4.4' || propertytripadvisorrating == '4.5'">
											<span class='title'>{{propertytripadvisorrating}}</span>
										<span class='imgstar'><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /></span>
										<span class='rat'>Tripadvisor</span>
									 </span>
										<span data-ng-if="propertytripadvisorrating == '5' || propertytripadvisorrating == '5.1' || propertytripadvisorrating == '5.2' || propertytripadvisorrating == '5.3' || propertytripadvisorrating == '5.4' || propertytripadvisorrating == '5.5'">
											<span class='title'>{{propertytripadvisorrating}}</span>
										<span class='imgstar'><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /></span>
										<span class='rat'>Tripadvisor</span>
									 </span>
									</span>								
									<span class="total">{{reviewcount}} REVIEWS</span>
								</p>
								
							</div>
							<div class="cm-tp">
								<div data-ng-repeat="reviewlist in reviewdata" data-ng-show="$index<reviewlimit">
									<p class="tr">
										<span class="tc-lt"><img src="images/summary_image.jpg" /></span>
										<span class="tc-rt">"{{ reviewlist.rcomment }}"</span>
									</p>
								</div>
								<p class="tr">
									<span class="tc">
										<a href="#" data-ng-click="reviewOthershow()"class="btn">view other reviews</a>
									</span>
								</p>							
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="rooms-about-host-wrapper">
						<div class="rooms-about-host-bottom">
							<div class="ah-tp">
								<strong class="title">About the Host</strong>
								<p class="tr">
									<span class="tc-lt"><img src="images/about_host.png" /></span>
									<span class="tc-rt">Comfortable furnishings and colourful hues bring warmth to the design of the guestrooms at Hotel Caesius. With your comfort their main focus, you'll find individually controlled air conditioning, soundproofed walls, dressing gowns and slippers. Furnished balconies and terraces also make the most of the lake breeze and yours comes with an enviable lake view.</span>
								</p>
							</div>
							<div class="simlar-tp">
								<strong class="title">Similar Listings</strong>
								<div class="tr">
									<div class="tc-lt">
										<div class="box">										
									<div class="box-fix"  data-ng-repeat="similarlist in similardata" data-ng-show="$index<similarLimit">
									<div class="box-one">
										<form action="explore.php" method="get">
									       <input type="hidden" name="rooms" value="<?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?>"/>
												<button style="border:0;" type="submit" name="scroll" value="<?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?>{{ similarlist.sppid }}"><img src="property_pics/{{ similarlist.sppic }}" class="cover" /></button>
											</form>
													<a href="#" class="wishlist"><img src="images/love.png" /></a>
													<div class="price">
														<div class="price-lt">
															<img src="images/rupee_symbol.png" />
														</div>
														<div class="price-rt">
															<span class="amount">{{ similarlist.spprice3 }}</span>
															<span class="per">Per Night</span>
														</div>
													</div>
													
													<div class="off">
														<img src="images/40.png" />
													</div>
													
													<div class="title">
											<form action="explore.php" method="get">
													<input type="hidden" name="rooms" value="<?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?>"/>
													<button style="border:0;" type="submit" name="scroll" value="<?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?>{{ similarlist.sppid }}">{{ similarlist.sptitle3 }}</button>
												</form>
													</div>
													
													<div class="rating">
														<div class="trip-rating">
															<span data-ng-if="similarlist.sptripadvisorrating3 == '1' || similarlist.sptripadvisorrating3 == '1.1' || similarlist.sptripadvisorrating3 == '1.2' || similarlist.sptripadvisorrating3 == '1.3' || similarlist.sptripadvisorrating3 == '1.4' || similarlist.sptripadvisorrating3 == '1.5'">
															 Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
														 </span>
															<span data-ng-if="similarlist.sptripadvisorrating3 == '2' || similarlist.sptripadvisorrating3 == '2.1' || similarlist.sptripadvisorrating3 == '2.2' || similarlist.sptripadvisorrating3 == '2.3' || similarlist.sptripadvisorrating3 == '2.4' || similarlist.sptripadvisorrating3 == '2.5'">
															 Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
														 </span>
															<span data-ng-if="similarlist.sptripadvisorrating3 == '3' || similarlist.sptripadvisorrating3 == '3.1' || similarlist.sptripadvisorrating3 == '3.2' || similarlist.sptripadvisorrating3 == '3.3' || similarlist.sptripadvisorrating3 == '3.4' || similarlist.sptripadvisorrating3 == '3.5'">
															 Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' />
														 </span>
															<span data-ng-if="similarlist.sptripadvisorrating3 == '4' || similarlist.sptripadvisorrating3 == '4.1' || similarlist.sptripadvisorrating3 == '4.2' || similarlist.sptripadvisorrating3 == '4.3' || similarlist.sptripadvisorrating3 == '4.4' || similarlist.sptripadvisorrating3 == '4.5'">
															 Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' />
														 </span>
															<span data-ng-if="similarlist.sptripadvisorrating3 == '5' || similarlist.sptripadvisorrating3 == '5.1' || similarlist.sptripadvisorrating3 == '5.2' || similarlist.sptripadvisorrating3 == '5.3' || similarlist.sptripadvisorrating3 == '5.4' || similarlist.sptripadvisorrating3 == '5.5'">
															 Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' />
														 </span>
														</div>
														<div class="our-rating">
															<span data-ng-if="similarlist.sprating3 == '1' || similarlist.sprating3 == '1.1' || similarlist.sprating3 == '1.2' || similarlist.sprating3 == '1.3' || similarlist.sprating3 == '1.4' || similarlist.sprating3 == '1.5'">
															 Our rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
														 </span>
															<span data-ng-if="similarlist.sprating3 == '2' || similarlist.sprating3 == '2.1' || similarlist.sprating3 == '2.2' || similarlist.sprating3 == '2.3' || similarlist.sprating3 == '2.4' || similarlist.sprating3 == '2.5'">
															 Our rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
														 </span>
															<span data-ng-if="similarlist.sprating3 == '3' || similarlist.sprating3 == '3.1' || similarlist.sprating3 == '3.2' || similarlist.sprating3 == '3.3' || similarlist.sprating3 == '3.4' || similarlist.sprating3 == '3.5'">
															 Our rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' />
														 </span>
															<span data-ng-if="similarlist.sprating3 == '4' || similarlist.sprating3 == '4.1' || similarlist.sprating3 == '4.2' || similarlist.sprating3 == '4.3' || similarlist.sprating3 == '4.4' || similarlist.sprating3 == '4.5'">
															 Our rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' />
														 </span>
															<span data-ng-if="similarlist.sprating3 == '5' || similarlist.sprating3 == '5.1' || similarlist.sprating3 == '5.2' || similarlist.sprating3 == '5.3' || similarlist.sprating3 == '5.4' || similarlist.sprating3 == '5.5'">
															 Our rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' />
														 </span>
														</div>
														<div class="reviews">
															{{similarlist.reviewcount}} reviews
														</div>
													</div>
										</div>
									</div>
										</div>
									</div>
								</div>
								<div class="tr" style="margin-top:30px;">
									<div class="ptc">
										<a href="#" data-ng-click="similarListingShow()" class="btn">Show more listing</a>
									</div>
									<div class="ptc-text">
										<p class="text-tp">Explore other options in and around Karnataka. More places to stay in karnataka: Houses</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>	
	</div>
</div>