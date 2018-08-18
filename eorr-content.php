<div class="priorities-fullcontentwrapper" data-ng-init="getproperty()">
	<div class="priorities-container">
		<div class="row">
			<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12">
				<div id="priorities-content-wrapper">
					<div class="priorities-content">
						<div class="priorities-left">
								<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12 bg-white br" style="padding: 10px 0px 10px 0px;">
									<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2 text-left labell" style="padding:0;">
										<label>Date</label>
									</div>
									<div class="col-lg-3 col-xm-3 col-md-3 col-sm-3" style="padding:0;">
										<input type="text" id="fromd" name="fromd" data-ng-modal="fromd" placeholder="Check In" class="eorr-custom-input" readonly value="<?php echo $fromd; ?>" style="padding:10px 0 10px 10px;"/>
									</div>
									<div class="col-lg-1 col-xm-1 col-md-1 col-sm-1">&nbsp;</div>
									<div class="col-lg-3 col-xm-3 col-md-3 col-sm-3" style="padding:0;">
										<input type="text" id="tod" name="tod" data-ng-modal="tod" placeholder="Check Out" class="eorr-custom-input" readonly value="<?php echo $tod; ?>" style="padding:10px 0 10px 10px;"/>
									</div>								
									<div class="col-lg-1 col-xm-1 col-md-1 col-sm-1">&nbsp;</div>								
									<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding:0;">
										<select id="guest" name="guest" data-ng-model="guest" data-ng-change="filterprop()" required class="eorr-custom-select">	
											<option value="1 Guest">1 Guest</option>
											<option value="2 Guest">2 Guest</option>
											<option value="3 Guest">3 Guest</option>
											<option value="4 Guest">4 Guest</option>
											<option value="5 Guest">5 Guest</option>
											<option value="6 Guest">6 Guest</option>
											<option value="7 Guest">7 Guest</option>
											<option value="8 Guest">8 Guest</option>
											<option value="9 Guest">9 Guest</option>
											<option value="10 Guest">10 Guest</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12 bg-white br" style="padding: 10px 0px 10px 0px;">
									<div class="col-lg-3 col-xm-3 col-md-3 col-sm-3 text-left labell" style="padding:0;">
										<label><span>Budget<output></output></span></label>
									</div>
									<div class="col-lg-9 col-xm-9 col-md-9 col-sm-9" style="15px 15px 0 0;">
										<select id="budget" name="budget" data-ng-change="filterprop()" data-ng-model="budget" required class="col-xs-9 col-sm-9 eorr-custom-select">
											<option value="10000">upto 10,000</option>
											<option value="20000">10,000  to  20,000</option>
											<option value="30000">20,000  to  30,000</option>
											<option value="40000">30,000  to  40,000</option>
											<option value="50000">40,000  to  50,000</option>
											<option value="60000">50,000  to  60,000</option>
											<option value="70000">60,000  to  70,000</option>
											<option value="80000">70,000  to  80,000</option>
											<option value="90000">80,000  to  90,000</option>
											<option value="100000">90,000  to  10,0000</option>
											<option value="1000000">Above  1,00,000</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12 bg-white br" style="padding: 10px 0px 10px 0px;">
									<div class="col-lg-6 col-xm-6 col-md-6 col-sm-6 text-left checkboxlabel" style="padding:0;">
										<div data-ng-show="showmore" style="padding: 0 0 0 10px;">
											<input type="button" value="MORE FILTERS" data-ng-click="showfilter()" name="filters" id="filters" data-ng-model="filters" class="orn-btn-active" />
											<span class="text block">Addition fee apply. Taxes may be Added.</span>
										</div>
									</div>
									<div class="col-lg-6 col-xm-6 col-md-6 col-sm-6 text-right" style="padding:0 10px 0 0;">
										<select style="width:55%;" id="currency" name="currency" required class="eorr-custom-select">										
											<option value="">SELECT CURRENCY</option>
											<option value="INR">INR</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12 bg-white br" data-ng-show="moreoption" style="padding: 10px 0px 10px 10px;">
									<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12  " style="padding: 10px 0px 10px 10px;">
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" name="ecotourism" value="Ecotorism" id="ecotourism" data-ng-model="ecotourism1" class="regular-checkbox" /><label for="ecotourism"></label><label for="ecotourism" style="vertical-align: super;">ECOTOURISM</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="WELLNESS & CARE" name="wellness_n_care" id="wellness_n_care" data-ng-model="wellness_n_care" class="regular-checkbox" /><label for="wellness_n_care"></label><label for="wellness_n_care" style="vertical-align: super;">WELLNESS & CARE</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="HERITAGE & SPIRITUALITY" name="heritage_n_spirituality" id="heritage_n_spirituality" data-ng-model="heritage_n_spirituality" class="regular-checkbox" /><label for="heritage_n_spirituality"></label><label for="heritage_n_spirituality" style="vertical-align: super;">HERITAGE & SPIRITUALITY</label>
										</div>
									</div>
									<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12  " style="padding: 10px 0px 10px 10px;">
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="FAMILY & KIDS" name="family_n_kids" id="family_n_kids" data-ng-model="family_n_kids" class="regular-checkbox" /><label for="family_n_kids"></label><label for="family_n_kids" style="vertical-align: super;">FAMILY & KIDS</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="ADVENTURE & EXPLORE" name="adventure_n_explore" id="adventure_n_explore" data-ng-model="adventure_n_explore" class="regular-checkbox" /><label for="adventure_n_explore"></label><label for="adventure_n_explore" style="vertical-align: super;">ADVENTURE & EXPLORE</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="ROMANTIC HOLIDAY" name="romantic_holiday" id="romantic_holiday" data-ng-model="romantic_holiday" class="regular-checkbox" /><label for="romantic_holiday"></label><label for="romantic_holiday" style="vertical-align: super;">ROMANTIC HOLIDAY</label>
										</div>
									</div>
								</div>								
								
								<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12 bg-white br" data-ng-show="moreoption" style="padding: 10px 0px 10px 10px;">
										<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2 text-left checkboxlabel" style="padding:0;">
											<label style="vertical-align: super;">AMENITIES</label>
										</div>
										<div class="col-lg-3 col-xm-3 col-md-3 col-sm-3 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Wireless Internet" name="wireless_internet" id="wireless_internet" data-ng-model="wireless_internet" class="regular-checkbox" /><label for="wireless_internet"></label><label for="wireless_internet" style="vertical-align: super;">Wireless Internet </label>
										</div>
										<div class="col-lg-3 col-xm-3 col-md-3 col-sm-3 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Swimming Pool" name="swimmingpool" id="swimmingpool" data-ng-model="swimmingpool" class="regular-checkbox" /><label for="swimmingpool"></label><label for="swimmingpool" style="vertical-align: super;">Swimming Pool</label>
										</div>
										<div class="col-lg-3 col-xm-3 col-md-3 col-sm-3 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="24-Hour Check-in" name="check_in" id="check_in" data-ng-model="check_in" class="regular-checkbox" /><label for="check_in"></label><label for="check_in" style="vertical-align: super;">24-Hour Check-in</label>
										</div>
										<div class="col-lg-1 col-xm-1 col-md-1 col-sm-1 text-left checkboxlabel" style="paddidata-ng-top:13px;">
											<span class="glyphicon glyphicon-triangle-bottom" data-ng-click="dwonarrowfun()" data-ng-hide="dwonarrow"></span>
											<span class="glyphicon glyphicon-triangle-top" data-ng-click="uparrowfun()" data-ng-hide="uparrow" ></span>
										</div>
								</div>
								<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12 bg-white br" data-ng-show="aminities" style="padding: 10px 0px 10px 10px;">
									<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12  " style="padding: 10px 0px 0px 10px;">
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Kitchen" name="kitchen" id="kitchen" data-ng-model="kitchen" class="regular-checkbox" /><label for="kitchen"></label><label for="kitchen" style="vertical-align: super;">Kitchen</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Safty Card" name="saftycard" id="saftycard" data-ng-model="saftycard" class="regular-checkbox" /><label for="saftycard"></label><label for="saftycard" style="vertical-align: super;">Safty Card</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Indoor Games" name="indoorgame" id="indoorgame" data-ng-model="indoorgame" class="regular-checkbox" /><label for="indoorgame"></label><label for="indoorgame" style="vertical-align: super;">Indoor Games</label>
										</div>
										
									</div>
									<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12  " style="padding: 0px 0px 0px 10px;">
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Spa" name="spa" id="spa" data-ng-model="spa" class="regular-checkbox" /><label for="spa"></label><label for="spa" style="vertical-align: super;">Spa</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="jacuzzi" name="jacuzzi" id="jacuzzi" data-ng-model="jacuzzi" class="regular-checkbox" /><label for="jacuzzi"></label><label for="jacuzzi" style="vertical-align: super;">jacuzzi</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Cafe" name="cafe" id="cafe" data-ng-model="cafe" class="regular-checkbox" /><label for="cafe"></label><label for="cafe" style="vertical-align: super;">Cafe</label>
										</div>
									</div>
									<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12  " style="padding: 0px 0px 0px 10px;">
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Cable TV" name="cabletv" id="cabletv" data-ng-model="cabletv" class="regular-checkbox" /><label for="cabletv"></label><label for="cabletv" style="vertical-align: super;">Cable TV</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Smoking Allowed" name="smokingallowed" id="smokingallowed" data-ng-model="smokingallowed" class="regular-checkbox" /><label for="smokingallowed"></label><label for="smokingallowed" style="vertical-align: super;">Smoking Allowed</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Outdoor Games" name="outdoorgame" id="outdoorgame" data-ng-model="outdoorgame" class="regular-checkbox" /><label for="outdoorgame"></label><label for="outdoorgame" style="vertical-align: super;">Outdoor Games</label>
										</div>
										
									</div>
									<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12  " style="padding: 0px 0px 0px 10px;">
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Gym" name="gym" id="gym" data-ng-model="gym" class="regular-checkbox" /><label for="gym"></label><label for="gym" style="vertical-align: super;">Gym</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Wheelchair Accessible" name="wheelchairaccess" id="wheelchairaccess" data-ng-model="wheelchairaccess" class="regular-checkbox" /><label for="wheelchairaccess"></label><label for="wheelchairaccess" style="vertical-align: super;">Wheelchair Accessible</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Kids play area" name="kidsplayarea" id="kidsplayarea" data-ng-model="kidsplayarea" class="regular-checkbox" /><label for="kidsplayarea"></label><label for="kidsplayarea" style="vertical-align: super;">Kids play area</label>
										</div>
										
									</div>
									<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12  " style="padding: 0px 0px 0px 10px;">
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Heating" name="heating" id="heating" data-ng-model="heating" class="regular-checkbox" /><label for="heating"></label><label for="heating" style="vertical-align: super;">Heating</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Breakfast" name="breakfast" id="breakfast" data-ng-model="breakfast" class="regular-checkbox" /><label for="breakfast"></label><label for="breakfast" style="vertical-align: super;">Breakfast</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Yoga" name="yoga" id="yoga" data-ng-model="yoga" class="regular-checkbox" /><label for="yoga"></label><label for="yoga" style="vertical-align: super;">Yoga</label>
										</div>
										
									</div>
									<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12  " style="padding: 0px 0px 0px 10px;">
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Internet" name="internet" id="internet" data-ng-model="internet" class="regular-checkbox" /><label for="internet"></label><label for="internet" style="vertical-align: super;">Internet</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Wireless Intercom" name="wiintercom" id="wiintercom" data-ng-model="wiintercom" class="regular-checkbox" /><label for="wiintercom"></label><label for="wiintercom" style="vertical-align: super;">Wireless Intercom</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Air Conditioning" name="ac" id="ac" data-ng-model="ac" class="regular-checkbox" /><label for="ac"></label><label for="ac" style="vertical-align: super;">Air Conditioning</label>
										</div>
										
									</div>
									
									<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12  " style="padding: 0px 0px 0px 10px;">
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Free Parking" name="freeparking" id="freeparking" data-ng-model="freeparking" class="regular-checkbox" /><label for="freeparking"></label><label for="freeparking" style="vertical-align: super;">Free Parking</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="TV" name="tv" id="tv" data-ng-model="tv" class="regular-checkbox" /><label for="tv"></label><label for="tv" style="vertical-align: super;">TV</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Pets Allowed" name="petsallowed" id="petsallowed" data-ng-model="petsallowed" class="regular-checkbox" /><label for="petsallowed"></label><label for="petsallowed" style="vertical-align: super;">Pets Allowed</label>
										</div>
									</div>
									
									<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12  " style="padding: 0px 0px 0px 10px;">
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Bar & Restaurant" name="barnrestro" id="barnrestro" data-ng-model="barnrestro" class="regular-checkbox" /><label for="barnrestro"></label><label for="barnrestro" style="vertical-align: super;">Bar & Restaurant</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Room Service" name="roomservice" id="roomservice" data-ng-model="roomservice" class="regular-checkbox" /><label for="roomservice"></label><label for="roomservice" style="vertical-align: super;">Room Service</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Business Centre" name="businesscentre" id="businesscentre" data-ng-model="businesscentre" class="regular-checkbox" /><label for="businesscentre"></label><label for="businesscentre" style="vertical-align: super;">Business Centre</label>
										</div>
									</div>
									
									<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12  " style="padding: 0px 0px 0px 10px;">
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Lounge" name="lounge" id="lounge" data-ng-model="lounge" class="regular-checkbox" /><label for="lounge"></label><label for="lounge" style="vertical-align: super;">Lounge</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Conference Hall" name="conferencehall" id="conferencehall" data-ng-model="conferencehall" class="regular-checkbox" /><label for="conferencehall"></label><label for="conferencehall" style="vertical-align: super;">Conference Hall</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Shopping" name="shopping" id="shopping" data-ng-model="shopping" class="regular-checkbox" /><label for="shopping"></label><label for="shopping" style="vertical-align: super;">Shopping</label>
										</div>
									</div>

									
									<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12  " style="padding: 0px 0px 0px 10px;">
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Ayurveda Centre" name="ayurvedacentre" id="ayurvedacentre" data-ng-model="ayurvedacentre" class="regular-checkbox" /><label for="ayurvedacentre"></label><label for="ayurvedacentre" style="vertical-align: super;">Ayurveda Centre</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Laundry" name="laundry" id="laundry" data-ng-model="laundry" class="regular-checkbox" /><label for="laundry"></label><label for="laundry" style="vertical-align: super;">Laundry</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="24 Hour Security" name="security" id="security" data-ng-model="security" class="regular-checkbox" /><label for="security"></label><label for="security" style="vertical-align: super;">24 Hour Security</label>
										</div>
									</div>
									
									<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12  " style="padding: 0px 0px 0px 10px;">
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Airport Transport" name="airtrans" id="airtrans" data-ng-model="airtrans" class="regular-checkbox" /><label for="airtrans"></label><label for="airtrans" style="vertical-align: super;">Airport Transport</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="ATM / BANK in Resort" name="atmbank" id="atmbank" data-ng-model="atmbank" class="regular-checkbox" /><label for="atmbank"></label><label for="atmbank" style="vertical-align: super;">ATM / BANK in Resort</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Hot / Cold Running Water" name="hotcold" id="hotcold" data-ng-model="hotcold" class="regular-checkbox" /><label for="hotcold"></label><label for="hotcold" style="vertical-align: super;">Hot / Cold Running Water</label>
										</div>
									</div>
									
									<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12  " style="padding: 0px 0px 0px 10px;">
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="First Aid Kit" name="firstaidkit" id="firstaidkit" data-ng-model="firstaidkit" class="regular-checkbox" /><label for="firstaidkit"></label><label for="firstaidkit" style="vertical-align: super;">First Aid Kit</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Hair Dryer" name="hairdryer" id="hairdryer" data-ng-model="hairdryer" class="regular-checkbox" /><label for="hairdryer"></label><label for="hairdryer" style="vertical-align: super;">Hair Dryer</label>
										</div>
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Hot Tub" name="hottub" id="hottub" data-ng-model="hottub" class="regular-checkbox" /><label for="hottub"></label><label for="hottub" style="vertical-align: super;">Hot Tub</label>
										</div>
									</div>
									
									<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12  " style="padding: 0px 0px 0px 10px;">
										<div class="col-lg-4 col-xm-4 col-md-4 col-sm-4 text-left checkboxlabel" style="padding:0;">
											<input type="checkbox" value="Suitable for Events" name="suitableforevents" id="suitableforevents" data-ng-model="suitableforevents" class="regular-checkbox" /><label for="suitableforevents"></label><label for="suitableforevents" style="vertical-align: super;">Suitable for Events</label>
										</div>
									</div>							
								</div>
																
								<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12 bg-white br" data-ng-show="moreoption" style="padding: 10px 0px 10px 10px;">
										<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2 text-left checkboxlabel" style="padding:0;">
											<label for="options" style="vertical-align: super;">OPTIONS</label><input type="checkbox" value="Options" name="options" id="options" data-ng-model="options" class="regular-checkbox" /><label for="options"></label>
										</div>
										
										<div class="col-lg-5 col-xm-5 col-md-5 col-sm-5 text-left checkboxlabel" style="padding:0;">
											<label for="instant" style="vertical-align: super;" style="paddidata-ng-bottom:0px;margin-bottom:0px;"><img src="images/flash.png" style="width:25px;height:25px;" />
											INSTANT BOOKING </label>
											<label for="wireless_internet" style="vertical-align: super;paddidata-ng-top:0px;margin-left:25px;margin-top:-10px;">Secure a reservation instantly </label>
										</div>
								</div>
								
								<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12 bg-white br" data-ng-show="moreoption" style="padding: 10px 0px 10px 10px;">
										<div class="col-lg-6 col-xm-6 col-md-6 col-sm-6 text-left checkboxlabel" style="padding:0;">&nbsp;</div>
										
										<div class="col-lg-3 col-xm-3 col-md-3 col-sm-3 text-left checkboxlabel" style="padding:0;">
											<input type="button" class="custom-button" name="cancle" data-ng-click="cancle()" style="border:solid 1px;width:95%;"  data-ng-model="cancle" value="Cancel" />
										</div>
										<div class="col-lg-3 col-xm-3 col-md-3 col-sm-3 text-left checkboxlabel" style="padding:0;">
											<input type="button" class="custom-button" name="showlisting" data-ng-click="filterprop()" style="border:solid 1px;width:95%;"  data-ng-model="showlisting" value="Apply Filters" />
										</div>
								</div>
								
								<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" data-ng-show="showmore" style="padding: 10px 0px 10px 0px;">
									<div class="col-lg-5 col-xm-5 col-md-5 col-sm-5 text-left" style="padding:0px 10px 0px 10px;">&nbsp;</div>
									<div class="col-lg-7 col-xm-7 col-md-7 col-sm-7 text-right" style="padding:0 10px 0 0;">
										<div class="col-lg-10 col-xm-10 col-md-10 col-sm-10 text-right" style="padding:0;">
										<span class="texter inline">Look for the lightning flash for the faster booking.</span>
										</div>
										<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2 text-right" style="padding:0;">
											<img src="images/flash.png" />
										</div>
									</div>
								</div>
							</form>
							<!--change-->
							<div data-ng-show="Empty" class="box col-lg-12 col-xm-12 col-md-12 col-sm-12" >
								<div class="box-fix col-lg-12 col-xm-12 col-md-12 col-sm-12" style="margin: 6% 0 15px 0;padding:0;" >
										<p >We couldn’t find any results that matched your criteria, but tweaking your search may help. Here are some ideas:</p>
										<p style="margin-left:20px;"><span class="glyphicon glyphicon-filter"></span>&nbsp;&nbsp;Remove some filters.</p>
										<p style="margin-left:20px;"><span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Expand the area of your search.</p>
										<p style="margin-left:20px;"><span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp;Search for a city, address, or landmark.</p>
								</div>
								<div class='clear'>&nbsp;</div>
							</div>	
							<!--change-->
							<div data-ng-show="propertylist" class="box col-lg-12 col-xm-12 col-md-12 col-sm-12" >
							
								<div class="box-fix col-sm-12 row-space-2 col-md-6" style="margin: 6% 0 15px 0;padding:0;" data-ng-repeat="pop in pagedItems" data-ng-if="pop.id" >
									<div class="box-one">
										<form action="explore.php" method="get"> 
											<input type="hidden" name="rooms" value="<?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?>"/>
											<button style="border:0;" type="submit" name="scroll" value="<?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?>{{pop.id}}"><img src="property_pics/{{pop.fpic}}" class="cover"></button>
									    </form>
										<!--property wishlist -->
										<a data-toggle="modal" data-target="#{{pop.id}}" data-ng-click="addwishlist(pop.id,pop.fbid)" class="wishlist"><img  src="images/love.png" /></a>
											<!-- Modal -->
											<?php
												if($_SESSION['useridFB']!="")
												{	
											?>
													<div class="modal fade" id="{{pop.id}}" role="dialog" data-ng-init="dispwishlist()">
														<div class="modal-dialog modal-lg">
															<div class="modal-content">
																<div class="modal-body">
																	<div class="right-modal">
																		<img src="property_pics/{{pop.fpic}}" class="cover1" />
																	</div>
																	<div class="left-modal" >
																		<div class="save1" >
																			<button type="button" class="close" data-dismiss="modal">&times;</button>
																			<h3 style="paddidata-ng-bottom:5px;">Save to Wish List</h3>
																		</div>
																		<div class="middle" data-ng-init="dispwishlist()" >
																			<button class="custom-button1" name="" data-ng-repeat="wish in wishlistItems" style="width:100%;" data-ng-model="" value="{{wish.ftitle}}" />{{wish.ftitle}}</button>
																		</div>
																		<div class="modal-footer">
																			
																		</div>	
																	</div>
																</div>
															</div>
														</div>
													</div>
												<?php
													}												
												?>
												<!-- Modal -->
																					
										<div class="price">
											<div class="price-lt">
												<img src="images/rupee_symbol.png" />
											</div>
											<div class="price-rt">
												<span class="amount">
												{{pop.fprice}}
												</span>
												<span class="per">Per Night</span>
											</div>
											<div data-ng-if="pop.instantbooking=='1'" class="instant">
												<img src="images/flash.png" data-ng-mouseleave="hideinstantlabel()" data-ng-mouseover="showinstantlabel()" />
											</div>
										</div>
										
										<div data-ng-if="pop.instantbooking=='1'">
											<div class="instantlabel" data-ng-show="instantlabel">
												<span class="amount">
													Instant Book
												</span>
												<span class="per">Book without waiting for your reservation to be accepted</span>
											</div>
										</div>
												
										<div class="off">
											<img src="images/40.png" />
										</div>
											
										<div class="title">
											{{pop.ftitle}}
										</div>
												
										<div class="rating">
											<!--Tripadvisor rating start-->
												<div class="trip-rating" data-ng-if="pop.ftripadvisorrating=='1' || pop.ftripadvisorrating=='1.1' || pop.ftripadvisorrating=='1.2' || pop.ftripadvisorrating=='1.3' || pop.ftripadvisorrating=='1.4' || pop.ftripadvisorrating=='1.5'">
													Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.ftripadvisorrating=='2' || pop.ftripadvisorrating=='2.1' || pop.ftripadvisorrating=='2.2' || pop.ftripadvisorrating=='2.3' || pop.ftripadvisorrating=='2.4' || pop.ftripadvisorrating=='2.5'">
													Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.ftripadvisorrating=='3' || pop.ftripadvisorrating=='3.1' || pop.ftripadvisorrating=='3.2' || pop.ftripadvisorrating=='3.3' || pop.ftripadvisorrating=='3.4' || pop.ftripadvisorrating=='3.5'">
													Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.ftripadvisorrating=='4' || pop.ftripadvisorrating=='4.1' || pop.ftripadvisorrating=='4.2' || pop.ftripadvisorrating=='4.3' || pop.ftripadvisorrating=='4.4' || pop.ftripadvisorrating=='4.5'">
													Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.ftripadvisorrating=='5' || pop.ftripadvisorrating=='5.1' || pop.ftripadvisorrating=='5.2' || pop.ftripadvisorrating=='5.3' || pop.ftripadvisorrating=='5.4' || pop.ftripadvisorrating=='5.5'">
													Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /> <img class='starimg' src='images/star-yellow.png' />
												</div>
											<!--Tripadvisor rating End-->
											
											<!--Our rating start-->
												<div class="trip-rating" data-ng-if="pop.frating=='1' || pop.frating=='1.1' || pop.frating=='1.2' || pop.frating=='1.3' || pop.frating=='1.4' || pop.frating=='1.5'">
													Our Rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.frating=='2' || pop.frating=='2.1' || pop.frating=='2.2' || pop.frating=='2.3' || pop.frating=='2.4' || pop.frating=='2.5'">
													Our Rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.frating=='3' || pop.frating=='3.1' || pop.frating=='3.2' || pop.frating=='3.3' || pop.frating=='3.4' || pop.frating=='3.5'">
													Our Rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.frating=='4' || pop.frating=='4.1' || pop.frating=='4.2' || pop.frating=='4.3' || pop.frating=='4.4' || pop.frating=='4.5'">
													Our Rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.frating=='5' || pop.frating=='5.1' || pop.frating=='5.2' || pop.frating=='5.3' || pop.frating=='5.4' || pop.frating=='5.5'">
													Our Rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /> <img class='starimg' src='images/star-yellow.png' />
												</div>
												
											<!--Our rating End-->
											
											<div data-ng-if="pop.reviewcount!='0'" class="reviews">
												{{pop.reviewcount}} reviews
											</div>
										</div>
									</div>
                             	</div>
								
								<div class='clear'>&nbsp;</div>
	                     	</div>
							<div data-ng-show="propertylist1" class="box col-lg-12 col-xm-12 col-md-12 col-sm-12" >
							
								<div class="box-fix col-sm-12 row-space-2 col-md-6" style="margin: 6% 0 15px 0;padding:0;" data-ng-repeat="pop in pagedItems1" data-ng-if="pop.id" >
									<div class="box-one">
										
									    <form action="explore.php" method="get"> 
											<input type="hidden" name="rooms" value="<?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?>"/>
											<button style="border:0;" type="submit" name="scroll" value="<?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?>{{pop.id}}"><img src="property_pics/{{pop.fpic}}" class="cover"></button>
									    </form>
										<!--property wishlist start-->
										<a data-toggle="modal" data-target="#f{{pop.id}}" data-ng-click="addwishlist(pop.id,pop.fbid)" class="wishlist"><img  src="images/love.png" /></a>
											<!-- Modal -->											
											<?php
												if($_SESSION['useridFB']!="")
												{	
											?>
												<div class="modal fade" id="f{{pop.id}}" role="dialog" data-ng-init="dispwishlist()">
													<div class="modal-dialog modal-lg">
														<div class="modal-content">
															<div class="modal-body">
																<div class="right-modal">
																	<img src="property_pics/{{pop.fpic}}" class="cover1" />
																</div>
																<div class="left-modal">
																	
																	<div class="save1" >
																		<button type="button" class="close" data-dismiss="modal">&times;</button>
																		<h2 style="paddidata-ng-bottom:5px;">Save to Wish List</h2>
																	</div>
																	
																	<div class="middle" >
																		<button class="custom-button1" name="" data-ng-repeat="wish in wishlistItems" style="width:100%;" data-ng-model="" value="{{wish.ftitle}}" />{{wish.ftitle}}</button>
																	</div>
																		
																	<div class="modal-footer">
																				
																	</div>	
																</div>
															</div>
														</div>
													</div>
												</div>											
											<?php
												}
											?>
											<!-- Modal -->
										<!--property wishlist start-->
										
											
										<div class="price">
											<div class="price-lt">
												<img src="images/rupee_symbol.png" />
											</div>
											<div class="price-rt">
												<span class="amount">
												{{pop.fprice}}
												</span>
												<span class="per">Per Night</span>
											</div>
											<div data-ng-if="pop.instantbooking=='1'" class="instant">
												<img src="images/flash.png" data-ng-mouseleave="hideinstantlabel()" data-ng-mouseover="showinstantlabel()" />
											</div>
										</div>
										
										<div data-ng-if="pop.instantbooking=='1'">
											<div class="instantlabel" data-ng-show="instantlabel">
												<span class="amount">
													Instant Book
												</span>
												<span class="per">Book without waiting for your reservation to be accepted</span>
											</div>
										</div>
												
										<div class="off">
											<img src="images/40.png" />
										</div>
											
										<div class="title">
											{{pop.ftitle}}
										</div>
												
										<div class="rating">
											<!--Tripadvisor rating start-->
												<div class="trip-rating" data-ng-if="pop.ftripadvisorrating=='1' || pop.ftripadvisorrating=='1.1' || pop.ftripadvisorrating=='1.2' || pop.ftripadvisorrating=='1.3' || pop.ftripadvisorrating=='1.4' || pop.ftripadvisorrating=='1.5'">
													Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.ftripadvisorrating=='2' || pop.ftripadvisorrating=='2.1' || pop.ftripadvisorrating=='2.2' || pop.ftripadvisorrating=='2.3' || pop.ftripadvisorrating=='2.4' || pop.ftripadvisorrating=='2.5'">
													Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.ftripadvisorrating=='3' || pop.ftripadvisorrating=='3.1' || pop.ftripadvisorrating=='3.2' || pop.ftripadvisorrating=='3.3' || pop.ftripadvisorrating=='3.4' || pop.ftripadvisorrating=='3.5'">
													Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.ftripadvisorrating=='4' || pop.ftripadvisorrating=='4.1' || pop.ftripadvisorrating=='4.2' || pop.ftripadvisorrating=='4.3' || pop.ftripadvisorrating=='4.4' || pop.ftripadvisorrating=='4.5'">
													Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.ftripadvisorrating=='5' || pop.ftripadvisorrating=='5.1' || pop.ftripadvisorrating=='5.2' || pop.ftripadvisorrating=='5.3' || pop.ftripadvisorrating=='5.4' || pop.ftripadvisorrating=='5.5'">
													Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /> <img class='starimg' src='images/star-yellow.png' />
												</div>
											<!--Tripadvisor rating End-->
											
											<!--Our rating start-->
												<div class="trip-rating" data-ng-if="pop.frating=='1' || pop.frating=='1.1' || pop.frating=='1.2' || pop.frating=='1.3' || pop.frating=='1.4' || pop.frating=='1.5'">
													Our Rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.frating=='2' || pop.frating=='2.1' || pop.frating=='2.2' || pop.frating=='2.3' || pop.frating=='2.4' || pop.frating=='2.5'">
													Our Rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.frating=='3' || pop.frating=='3.1' || pop.frating=='3.2' || pop.frating=='3.3' || pop.frating=='3.4' || pop.frating=='3.5'">
													Our Rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.frating=='4' || pop.frating=='4.1' || pop.frating=='4.2' || pop.frating=='4.3' || pop.frating=='4.4' || pop.frating=='4.5'">
													Our Rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.frating=='5' || pop.frating=='5.1' || pop.frating=='5.2' || pop.frating=='5.3' || pop.frating=='5.4' || pop.frating=='5.5'">
													Our Rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /> <img class='starimg' src='images/star-yellow.png' />
												</div>
												
											<!--Our rating End-->
											
											<div data-ng-if="pop.reviewcount!='0'" class="reviews">
												{{pop.reviewcount}} reviews
											</div>
										</div>
									</div>
                             	</div>
								
								<div class='clear'>&nbsp;</div>
	                     	</div>
	                     	<div data-ng-show="propertylist2" class="box col-lg-12 col-xm-12 col-md-12 col-sm-12" >
							
								<div class="box-fix col-sm-12 row-space-2 col-md-6" style="margin: 6% 0 15px 0;padding:0;" data-ng-repeat="pop in pagedItems2" data-ng-if="pop.id" >
									<div class="box-one">
										
										<form action="explore.php" method="get"> 
											<input type="hidden" name="rooms" value="<?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?>"/>
											<button style="border:0;" type="submit" name="scroll" value="<?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?><?php echo rand(10000000, 99999999)?>{{pop.id}}"><img src="property_pics/{{pop.fpic}}" class="cover"></button>
									    </form>
										<!--property wishlist start-->
										<a data-toggle="modal" data-target="#f{{pop.id}}" data-ng-click="addwishlist(pop.id,pop.fbid)" class="wishlist"><img  src="images/love.png" /></a>
											<!-- Modal -->
											<?php
												if($_SESSION['useridFB']!="")
												{	
											?>
												<div class="modal fade" id="f{{pop.id}}" role="dialog" data-ng-init="dispwishlist()">
													<div class="modal-dialog modal-lg">
														<div class="modal-content">
															<div class="modal-body">
																<div class="right-modal">
																	<img src="property_pics/{{pop.fpic}}" class="cover1" />
																</div>
																<div class="left-modal">
																	
																	<div class="save1" >
																		<button type="button" class="close" data-dismiss="modal">&times;</button>
																		<h2 style="paddidata-ng-bottom:5px;">Save to Wish List</h2>
																	</div>
																	
																	<div class="middle" >
																		<button class="custom-button1" name="" data-ng-repeat="wish in wishlistItems" style="width:100%;" data-ng-model="" value="{{wish.ftitle}}" />{{wish.ftitle}}</button>
																	</div>
																		
																	<div class="modal-footer">
																				
																	</div>	
																</div>
															</div>
														</div>
													</div>
												</div>
											<?php
												}
											?>
											<!-- Modal -->
										<!--property wishlist start-->
										
											
										<div class="price">
											<div class="price-lt">
												<img src="images/rupee_symbol.png" />
											</div>
											<div class="price-rt">
												<span class="amount">
												{{pop.fprice}}
												</span>
												<span class="per">Per Night</span>
											</div>
											<div data-ng-if="pop.instantbooking=='1'" class="instant">
												<img src="images/flash.png" data-ng-mouseleave="hideinstantlabel()" data-ng-mouseover="showinstantlabel()" />
											</div>
										</div>
										
										<div data-ng-if="pop.instantbooking=='1'">
											<div class="instantlabel" data-ng-show="instantlabel">
												<span class="amount">
													Instant Book
												</span>
												<span class="per">Book without waiting for your reservation to be accepted</span>
											</div>
										</div>
												
										<div class="off">
											<img src="images/40.png" />
										</div>
											
										<div class="title">
											{{pop.ftitle}}
										</div>
												
										<div class="rating">
											<!--Tripadvisor rating start-->
												<div class="trip-rating" data-ng-if="pop.ftripadvisorrating=='1' || pop.ftripadvisorrating=='1.1' || pop.ftripadvisorrating=='1.2' || pop.ftripadvisorrating=='1.3' || pop.ftripadvisorrating=='1.4' || pop.ftripadvisorrating=='1.5'">
													Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.ftripadvisorrating=='2' || pop.ftripadvisorrating=='2.1' || pop.ftripadvisorrating=='2.2' || pop.ftripadvisorrating=='2.3' || pop.ftripadvisorrating=='2.4' || pop.ftripadvisorrating=='2.5'">
													Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.ftripadvisorrating=='3' || pop.ftripadvisorrating=='3.1' || pop.ftripadvisorrating=='3.2' || pop.ftripadvisorrating=='3.3' || pop.ftripadvisorrating=='3.4' || pop.ftripadvisorrating=='3.5'">
													Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.ftripadvisorrating=='4' || pop.ftripadvisorrating=='4.1' || pop.ftripadvisorrating=='4.2' || pop.ftripadvisorrating=='4.3' || pop.ftripadvisorrating=='4.4' || pop.ftripadvisorrating=='4.5'">
													Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.ftripadvisorrating=='5' || pop.ftripadvisorrating=='5.1' || pop.ftripadvisorrating=='5.2' || pop.ftripadvisorrating=='5.3' || pop.ftripadvisorrating=='5.4' || pop.ftripadvisorrating=='5.5'">
													Triadvisor <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /> <img class='starimg' src='images/star-yellow.png' />
												</div>
											<!--Tripadvisor rating End-->
											
											<!--Our rating start-->
												<div class="trip-rating" data-ng-if="pop.frating=='1' || pop.frating=='1.1' || pop.frating=='1.2' || pop.frating=='1.3' || pop.frating=='1.4' || pop.frating=='1.5'">
													Our Rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.frating=='2' || pop.frating=='2.1' || pop.frating=='2.2' || pop.frating=='2.3' || pop.frating=='2.4' || pop.frating=='2.5'">
													Our Rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.frating=='3' || pop.frating=='3.1' || pop.frating=='3.2' || pop.frating=='3.3' || pop.frating=='3.4' || pop.frating=='3.5'">
													Our Rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/grey-star.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.frating=='4' || pop.frating=='4.1' || pop.frating=='4.2' || pop.frating=='4.3' || pop.frating=='4.4' || pop.frating=='4.5'">
													Our Rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /> <img class='starimg' src='images/grey-star.png' />
												</div>
												<div class="trip-rating" data-ng-if="pop.frating=='5' || pop.frating=='5.1' || pop.frating=='5.2' || pop.frating=='5.3' || pop.frating=='5.4' || pop.frating=='5.5'">
													Our Rating <img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /><img class='starimg' src='images/star-yellow.png' /> <img class='starimg' src='images/star-yellow.png' />
												</div>
												
											<!--Our rating End-->
											
											<div data-ng-if="pop.reviewcount!='0'" class="reviews">
												{{pop.reviewcount}} reviews
											</div>
										</div>
									</div>
                             	</div>
								<div class='clear'>&nbsp;</div>
								</div>
							<div class="clear">&nbsp;</div>
						</div>
						<div class="priorities-right">
							<input type="text" typeahead="property.name for property in propertiesdata | filter:$viewValue | limitTo:6" data-ng-model="propertyautocomplete" typeahead-on-select="getprop($item)" class="col-lg-12 col-xm-12 col-md-12 col-sm-12 eorr-custom-input"/>
							<div id="map" style="width: 100%;height:655px;"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>				
				<div id="light" class="white_content">
					<?php include "fb-login/FBLogin1.php"; ?>
					<a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"><img src="images/close.png" /></a>
				</div>
				<div id="fade" class="black_overlay"></div>
			</div>
		</div>
	</div>	
</div>