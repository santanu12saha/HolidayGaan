<div class="maxwidth" ng-show="swcyvp">
	<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12 white text-center" style="padding-top: 5px;">
		<label>Choose One, more or all</label>
	</div>
	<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding-top: 10px;" ng-show="swcyvp_one">
		<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2">
			<div class="background">
				<label for="ecotourism" ng-click="cfcyvp_two()"><input type="checkbox" id="ecotourism" ng-modal="ecotourism" ng-checked="false" ng-click="scrollWin(0,150)" /><span ng-if="ecotourism=='0'"><img src="images/Ecotourism.jpg" class="img-responsive" /></span><span ng-if="ecotourism=='1'"><img src="images/Ecotourism_MO.jpg" class="img-responsive" /></span></label>
			</div>
		</div>
		<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2">
			<div class="background">
				<label for="wellness" ng-click="cfcyvp_two()"><input type="checkbox" id="wellness" ng-modal="wellness" ng-checked="false" ng-click="scrollWin(0,150)" /><span ng-if="wellness=='0'"><img src="images/Wellness.jpg" class="img-responsive" /></span><span ng-if="wellness=='1'"><img src="images/Wellness_MO.jpg" class="img-responsive" /></span></label>
			</div>
		</div>
		<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2">
			<div class="background">
				<label for="heritage" ng-click="cfcyvp_two()"><input type="checkbox" id="heritage" ng-modal="heritage" ng-checked="false" ng-click="scrollWin(0,150)" /><span ng-if="heritage=='0'"><img src="images/Heritage.jpg" class="img-responsive" /></span><span ng-if="heritage=='1'"><img src="images/Heritage_MO.jpg" class="img-responsive" /></span></label>
			</div>
		</div>
		<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2">
			<div class="background">
				<label for="family" ng-click="cfcyvp_two()"><input type="checkbox" id="family" ng-modal="family" ng-checked="false" ng-click="scrollWin(0,150)" /><span ng-if="family=='0'"><img src="images/Family.jpg" class="img-responsive" /></span><span ng-if="family=='1'"><img src="images/Family_MO.jpg" class="img-responsive" /></span></label>
			</div>
		</div>
		<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2">
			<div class="background">
				<label for="adventure" ng-click="cfcyvp_two()"><input type="checkbox" id="adventure" ng-modal="adventure" ng-checked="false" ng-click="scrollWin(0,150)" /><span ng-if="adventure=='0'"><img src="images/Adventure.jpg" class="img-responsive" /></span><span ng-if="adventure=='1'"><img src="images/Adventure_MO.jpg" class="img-responsive" /></span></label>
			</div>
		</div>
		<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2">
			<div class="background">
				<label for="romantic" ng-click="cfcyvp_two()"><input type="checkbox" id="romantic" ng-modal="romantic" ng-checked="false" ng-click="scrollWin(0,150)" /><span ng-if="romantic=='0'"><img src="images/Romantic.jpg" class="img-responsive" /></span><span ng-if="romantic=='1'"><img src="images/Romantic_MO.jpg" class="img-responsive" /></span></label>
			</div>
		</div>
	</div>
</div>

<div class="maxwidth" ng-show="swcyvp_two">
	<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding-top: 10px;">
		<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding:0;">
			<div class="col-lg-3 col-xm-3 col-md-3 col-sm-3 white text-left">
				<label>YOUR CHOICES</label>
			</div>
			<div class="col-lg-9 col-xm-9 col-md-9 col-sm-9 text-right">
				<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding:0;">
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="ecotourism"><input type="checkbox" value="Ecotourism" id="ecotourismvalue" ng-modal="ecotourism" ng-checked="ecotourismvalue()" /><span ng-if="ecotourism=='0'"><img src="images/Ecotourism.jpg" class="img-responsive" /></span><span ng-if="ecotourism=='1'"><img src="images/Ecotourism_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="wellness"><input type="checkbox" value="Wellness" name="wellness" id="wellness" ng-modal="wellness" ng-checked="wellnessvalue()" /><span ng-if="wellness=='0'"><img src="images/Wellness.jpg" class="img-responsive" /></span><span ng-if="wellness=='1'"><img src="images/Wellness_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="heritage"><input type="checkbox" value="Heritage" name="heritage" id="heritage" ng-modal="heritage" ng-checked="heritagevalue()" /><span ng-if="heritage=='0'"><img src="images/Heritage.jpg" class="img-responsive" /></span><span ng-if="heritage=='1'"><img src="images/Heritage_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="family"><input type="checkbox" value="Family" name="family" id="family" ng-modal="family" ng-checked="familyvalue()" /><span ng-if="family=='0'"><img src="images/Family.jpg" class="img-responsive" /></span><span ng-if="family=='1'"><img src="images/Family_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="adventure"><input type="checkbox" value="Adventure" name="adventure" id="adventure" ng-modal="adventure" ng-checked="adventurevalue()" /><span ng-if="adventure=='0'"><img src="images/Adventure.jpg" class="img-responsive" /></span><span ng-if="adventure=='1'"><img src="images/Adventure_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="romantic"><input type="checkbox" value="Romantic" name="romantic" id="romantic" ng-modal="romantic" ng-checked="romanticvalue()" /><span ng-if="romantic=='0'"><img src="images/Romantic.jpg" class="img-responsive" /></span><span ng-if="romantic=='1'"><img src="images/Romantic_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding:0;">
			<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12 white text-center" style="padding: 5px 0px 5px 0px;">
				<label>CHOOSE YOUR ACTIVITIES</label>
			</div>
			<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12 cya-tr-to" style="padding: 0px;">
				<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2">
					<div class="background">
						<label for="kayaking" ng-click="cfcyvp_three()"><input type="checkbox" id="kayaking" ng-modal="kayaking" ng-checked="false" ng-click="scrollWin(0,150)" /><span ng-if="kayaking=='0'"><img src="images/Trekking.jpg" class="img-responsive" /></span><span ng-if="kayaking=='1'"><img src="images/Trekking_MO.jpg" class="img-responsive" /></span></label>
					</div>
				</div>
				<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2">
					<div class="background">
						<label for="scuba" ng-click="cfcyvp_three()"><input type="checkbox" id="scuba" ng-modal="scuba" ng-checked="false" ng-click="scrollWin(0,150)" /><span ng-if="scuba=='0'"><img src="images/Safari.jpg" class="img-responsive" /></span><span ng-if="scuba=='1'"><img src="images/Safari_MO.jpg" class="img-responsive" /></span></label>
					</div>
				</div>
				<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2">
					<div class="background">
						<label for="paragliding" ng-click="cfcyvp_three()"><input type="checkbox" id="paragliding" ng-modal="paragliding" ng-checked="false"  ng-click="scrollWin(0,150)"/><span ng-if="paragliding=='0'"><img src="images/Camping.jpg" class="img-responsive" /></span><span ng-if="paragliding=='1'"><img src="images/Camping_MO.jpg" class="img-responsive" /></span></label>
					</div>
				</div>
				<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2">
					<div class="background">
						<label for="nature" ng-click="cfcyvp_three()"><input type="checkbox" id="nature" ng-modal="nature" ng-checked="false" ng-click="scrollWin(0,150)" /><span ng-if="nature=='0'"><img src="images/Trekking.jpg" class="img-responsive" /></span><span ng-if="nature=='1'"><img src="images/Trekking_MO.jpg" class="img-responsive" /></span></label>
					</div>
				</div>
				<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2">
					<div class="background">
						<label for="golf" ng-click="cfcyvp_three()"><input type="checkbox" id="golf" ng-modal="golf" ng-checked="false" ng-click="scrollWin(0,150)" /><span ng-if="golf=='0'"><img src="images/Raftings.jpg" class="img-responsive" /></span><span ng-if="golf=='1'"><img src="images/Raftings_MO.jpg" class="img-responsive" /></span></label>
					</div>
				</div>
				<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2">
					<div class="background">
						<label for="others" ng-click="cfcyvp_three()"><input type="checkbox" id="others" ng-modal="others" ng-checked="false" ng-click="scrollWin(0,150)" /><span ng-if="others=='0'"><img src="images/Others.jpg" class="img-responsive" /></span><span ng-if="others=='1'"><img src="images/Others_MO.jpg" class="img-responsive" /></span></label>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="maxwidth" ng-show="swcyvp_three">
	<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding-top: 10px;">
		<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding:0;">
			<div class="col-lg-3 col-xm-3 col-md-3 col-sm-3 white text-left">
				<label>YOUR CHOICES</label>
			</div>
			<div class="col-lg-9 col-xm-9 col-md-9 col-sm-9 text-right">
				<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding:0;">
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="ecotourism"><input type="checkbox" value="Ecotourism" id="ecotourismvalue" ng-modal="ecotourism" ng-checked="ecotourismvalue()" /><span ng-if="ecotourism=='0'"><img src="images/Ecotourism.jpg" class="img-responsive" /></span><span ng-if="ecotourism=='1'"><img src="images/Ecotourism_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="wellness"><input type="checkbox" value="Wellness" name="wellness" id="wellness" ng-modal="wellness" ng-checked="wellnessvalue()" /><span ng-if="wellness=='0'"><img src="images/Wellness.jpg" class="img-responsive" /></span><span ng-if="wellness=='1'"><img src="images/Wellness_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="heritage"><input type="checkbox" value="Heritage" name="heritage" id="heritage" ng-modal="heritage" ng-checked="heritagevalue()" /><span ng-if="heritage=='0'"><img src="images/Heritage.jpg" class="img-responsive" /></span><span ng-if="heritage=='1'"><img src="images/Heritage_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="family"><input type="checkbox" value="Family" name="family" id="family" ng-modal="family" ng-checked="familyvalue()" /><span ng-if="family=='0'"><img src="images/Family.jpg" class="img-responsive" /></span><span ng-if="family=='1'"><img src="images/Family_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="adventure"><input type="checkbox" value="Adventure" name="adventure" id="adventure" ng-modal="adventure" ng-checked="adventurevalue()" /><span ng-if="adventure=='0'"><img src="images/Adventure.jpg" class="img-responsive" /></span><span ng-if="adventure=='1'"><img src="images/Adventure_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="romantic"><input type="checkbox" value="Romantic" name="romantic" id="romantic" ng-modal="romantic" ng-checked="romanticvalue()" /><span ng-if="romantic=='0'"><img src="images/Romantic.jpg" class="img-responsive" /></span><span ng-if="romantic=='1'"><img src="images/Romantic_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding: 10px 0px 0px 0px;">
			<div class="col-lg-3 col-xm-3 col-md-3 col-sm-3 white text-left">
				<label>YOUR ACTIVITIES</label>
			</div>
			<div class="col-lg-9 col-xm-9 col-md-9 col-sm-9 text-right">
				<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding:0;">
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="kayaking"><input type="checkbox" id="kayaking" ng-modal="kayaking" ng-checked="kayakingvalue()" /><span ng-if="kayaking=='0'"><img src="images/Trekking.jpg" class="img-responsive" /></span><span ng-if="kayaking=='1'"><img src="images/Trekking_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="scuba"><input type="checkbox" id="scuba" ng-modal="scuba" ng-checked="scubavalue()" /><span ng-if="scuba=='0'"><img src="images/Safari.jpg" class="img-responsive" /></span><span ng-if="scuba=='1'"><img src="images/Safari_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="paragliding"><input type="checkbox" id="paragliding" ng-modal="paragliding" ng-checked="paraglidingvalue()" /><span ng-if="paragliding=='0'"><img src="images/Camping.jpg" class="img-responsive" /></span><span ng-if="paragliding=='1'"><img src="images/Camping_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="nature"><input type="checkbox" id="nature" ng-modal="nature" ng-checked="naturevalue()" /><span ng-if="nature=='0'"><img src="images/Trekking.jpg" class="img-responsive" /></span><span ng-if="nature=='1'"><img src="images/Trekking_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="golf"><input type="checkbox" id="golf" ng-modal="golf" ng-checked="golfvalue()" /><span ng-if="golf=='0'"><img src="images/Raftings.jpg" class="img-responsive" /></span><span ng-if="golf=='1'"><img src="images/Raftings_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="others"><input type="checkbox" id="others" ng-modal="others" ng-checked="othersvalue()" /><span ng-if="others=='0'"><img src="images/Others.jpg" class="img-responsive" /></span><span ng-if="others=='1'"><img src="images/Others_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
				</div>
			</div>
		</div>	
		
		<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding:0;">
			<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12 white text-center">
				<label>CHOOSE YOUR AMENITIES</label>
			</div>
			<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12 cya-tr-to" style="padding: 0px;">
				<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2">
					<div class="background">
						<label for="spa" ng-click="cfcyvp_four()"><input type="checkbox" id="spa" ng-modal="spa" ng-checked="false" /><span ng-if="spa=='0'"><img src="images/SPA.jpg" class="img-responsive" /></span><span ng-if="spa=='1'"><img src="images/SPA_MO.jpg" class="img-responsive" /></span></label>
					</div>
				</div>
				<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2">
					<div class="background">
						<label for="jakuzzi" ng-click="cfcyvp_four()"><input type="checkbox" id="jakuzzi" ng-modal="jakuzzi" ng-checked="false" /><span ng-if="jakuzzi=='0'"><img src="images/Jakuzzi.jpg" class="img-responsive" /></span><span ng-if="jakuzzi=='1'"><img src="images/Jakuzzi_MO.jpg" class="img-responsive" /></span></label>
					</div>
				</div>
				<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2">
					<div class="background">
						<label for="swimming" ng-click="cfcyvp_four()"><input type="checkbox" id="swimming" ng-modal="swimming" ng-checked="false" /><span ng-if="swimming=='0'"><img src="images/Swimming-Pool.jpg" class="img-responsive" /></span><span ng-if="swimming=='1'"><img src="images/Swimming-Pool_MO.jpg" class="img-responsive" /></span></label>
					</div>
				</div>
				<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2">
					<div class="background">
						<label for="candle" ng-click="cfcyvp_four()"><input type="checkbox" id="candle" ng-modal="candle" ng-checked="false" /><span ng-if="candle=='0'"><img src="images/Candle.jpg" class="img-responsive" /></span><span ng-if="candle=='1'"><img src="images/Candle_MO.jpg" class="img-responsive" /></span></label>
					</div>
				</div>
				<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2">
					<div class="background">
						<label for="cafe" ng-click="cfcyvp_four()"><input type="checkbox" id="cafe" ng-modal="cafe" ng-checked="false" /><span ng-if="cafe=='0'"><img src="images/Cafe.jpg" class="img-responsive" /></span><span ng-if="cafe=='1'"><img src="images/Cafe_MO.jpg" class="img-responsive" /></span></label>
					</div>
				</div>
				<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2">
					<div class="background">
						<label for="othersone" ng-click="cfcyvp_four()"><input type="checkbox" id="othersone" ng-modal="othersone" ng-checked="false" /><span ng-if="othersone=='0'"><img src="images/Others_1.jpg" class="img-responsive" /></span><span ng-if="othersone=='1'"><img src="images/Others_1_MO.jpg" class="img-responsive" /></span></label>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="maxwidth" ng-show="swcyvp_four">
	<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding-top: 10px;">
		<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding:0;">
			<div class="col-lg-3 col-xm-3 col-md-3 col-sm-3 white text-left">
				<label>YOUR CHOICES</label>
			</div>
			<div class="col-lg-9 col-xm-9 col-md-9 col-sm-9 text-right">
				<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding:0;">
					
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="ecotourism"><input type="checkbox" value="Ecotourism" id="ecotourismvalue" ng-modal="ecotourism" ng-checked="ecotourismvalue()" /><span ng-if="ecotourism=='0'"><img src="images/Ecotourism.jpg" class="img-responsive" /></span><span ng-if="ecotourism=='1'"><img src="images/Ecotourism_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="wellness"><input type="checkbox" value="Wellness" name="wellness" id="wellness" ng-modal="wellness" ng-checked="wellnessvalue()" /><span ng-if="wellness=='0'"><img src="images/Wellness.jpg" class="img-responsive" /></span><span ng-if="wellness=='1'"><img src="images/Wellness_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="heritage"><input type="checkbox" value="Heritage" name="heritage" id="heritage" ng-modal="heritage" ng-checked="heritagevalue()" /><span ng-if="heritage=='0'"><img src="images/Heritage.jpg" class="img-responsive" /></span><span ng-if="heritage=='1'"><img src="images/Heritage_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="family"><input type="checkbox" value="Family" name="family" id="family" ng-modal="family" ng-checked="familyvalue()" /><span ng-if="family=='0'"><img src="images/Family.jpg" class="img-responsive" /></span><span ng-if="family=='1'"><img src="images/Family_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="adventure"><input type="checkbox" value="Adventure" name="adventure" id="adventure" ng-modal="adventure" ng-checked="adventurevalue()" /><span ng-if="adventure=='0'"><img src="images/Adventure.jpg" class="img-responsive" /></span><span ng-if="adventure=='1'"><img src="images/Adventure_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="romantic"><input type="checkbox" value="Romantic" name="romantic" id="romantic" ng-modal="romantic" ng-checked="romanticvalue()" /><span ng-if="romantic=='0'"><img src="images/Romantic.jpg" class="img-responsive" /></span><span ng-if="romantic=='1'"><img src="images/Romantic_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding: 10px 0px 0px 0px;">
			<div class="col-lg-3 col-xm-3 col-md-3 col-sm-3 white text-left">
				<label>YOUR ACTIVITIES</label>
			</div>
			<div class="col-lg-9 col-xm-9 col-md-9 col-sm-9 text-right">
				<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding:0;">
					
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="kayaking"><input type="checkbox" id="kayaking" ng-modal="kayaking" ng-checked="kayakingvalue()" /><span ng-if="kayaking=='0'"><img src="images/Trekking.jpg" class="img-responsive" /></span><span ng-if="kayaking=='1'"><img src="images/Trekking_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="scuba"><input type="checkbox" id="scuba" ng-modal="scuba" ng-checked="scubavalue()" /><span ng-if="scuba=='0'"><img src="images/Safari.jpg" class="img-responsive" /></span><span ng-if="scuba=='1'"><img src="images/Safari_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="paragliding"><input type="checkbox" id="paragliding" ng-modal="paragliding" ng-checked="paraglidingvalue()" /><span ng-if="paragliding=='0'"><img src="images/Camping.jpg" class="img-responsive" /></span><span ng-if="paragliding=='1'"><img src="images/Camping_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="nature"><input type="checkbox" id="nature" ng-modal="nature" ng-checked="naturevalue()" /><span ng-if="nature=='0'"><img src="images/Trekking.jpg" class="img-responsive" /></span><span ng-if="nature=='1'"><img src="images/Trekking_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="golf"><input type="checkbox" id="golf" ng-modal="golf" ng-checked="golfvalue()" /><span ng-if="golf=='0'"><img src="images/Raftings.jpg" class="img-responsive" /></span><span ng-if="golf=='1'"><img src="images/Raftings_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="others"><input type="checkbox" id="others" ng-modal="others" ng-checked="othersvalue()" /><span ng-if="others=='0'"><img src="images/Others.jpg" class="img-responsive" /></span><span ng-if="others=='1'"><img src="images/Others_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12 text-left" style="padding: 10px 0px 0px 0px;">
			<div class="col-lg-3 col-xm-3 col-md-3 col-sm-3 white text-left">
				<label>YOUR AMENITIES</label>
			</div>
			<div class="col-lg-9 col-xm-9 col-md-9 col-sm-9 text-right">
				<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="padding:0;">
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="spa"><input type="checkbox" id="spa" ng-modal="spa" ng-checked="spavalue()" /><span ng-if="spa=='0'"><img src="images/SPA.jpg" class="img-responsive" /></span><span ng-if="spa=='1'"><img src="images/SPA_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="jakuzzi"><input type="checkbox" id="jakuzzi" ng-modal="jakuzzi" ng-checked="jakuzzivalue()" /><span ng-if="jakuzzi=='0'"><img src="images/Jakuzzi.jpg" class="img-responsive" /></span><span ng-if="jakuzzi=='1'"><img src="images/Jakuzzi_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="swimming"><input type="checkbox" id="swimming" ng-modal="swimming" ng-checked="swimmingvalue()" /><span ng-if="swimming=='0'"><img src="images/Swimming-Pool.jpg" class="img-responsive" /></span><span ng-if="swimming=='1'"><img src="images/Swimming-Pool_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="candle"><input type="checkbox" id="candle" ng-modal="candle" ng-checked="candlevalue()" /><span ng-if="candle=='0'"><img src="images/Candle.jpg" class="img-responsive" /></span><span ng-if="candle=='1'"><img src="images/Candle_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="cafe"><input type="checkbox" id="cafe" ng-modal="cafe" ng-checked="cafevalue()" /><span ng-if="cafe=='0'"><img src="images/Cafe.jpg" class="img-responsive" /></span><span ng-if="cafe=='1'"><img src="images/Cafe_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
					<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2" style="padding: 0px 5px 0px 0px;">
						<div class="background-one">
							<label for="othersone"><input type="checkbox" id="othersone" ng-modal="othersone" ng-checked="othersonevalue()" /><span ng-if="othersone=='0'"><img src="images/Others_1.jpg" class="img-responsive" /></span><span ng-if="othersone=='1'"><img src="images/Others_1_MO.jpg" class="img-responsive" /></span></label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12 white text-center" style="padding-top: 10px;">
			<div class="col-lg-3 col-xm-3 col-md-3 col-sm-3">&nbsp;</div>
			<div class="col-lg-6 col-xm-6 col-md-6 col-sm-6 text-left" style="padding:0 0px 0 8px;">
				<input style="width:100%;" type="submit" class="orn-btn-active" name="explore" id="explore" value="EXPLORE OUR RECOMMENDATION" ng-click="submit_recommend()" />
			</div>
			<div class="col-lg-3 col-xm-3 col-md-3 col-sm-3">&nbsp;</div>
		</div>
	</div>
</div>
<div id="light" class="white_content">
 	<?php include "fb-login/FBLogin.php"; ?>
 	<a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"><img src="images/close.png" /></a>
</div>
<div id="fade" class="black_overlay"></div>