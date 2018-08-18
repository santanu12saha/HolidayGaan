var vkationapp1 = angular.module('exploreapp',['gm','ui.bootstrap'])
vkationapp1.controller('explorecontroller', ['$scope', '$http', '$location', '$window', '$compile', function ($scope, $http, $location, $window, $compile)
{
	var printContents = document.getElementById('activityconfirm').style.display='block';document.getElementById('fade').style.display='block';
    var arr_activities = [];
	$scope.prophide = false;
	$scope.pid = document.getElementById("pid").value;
	
	$http.post('demo.php').success(function (data, status, headers, config)
	{
		$scope.guest = data['guests'];		
		if($scope.guest== "1 Guest")
		{
			$scope.guest = "1";
		}
		if($scope.guest== "2 Guest")
		{
			$scope.guest = "2";
		}
		if($scope.guest== "3 Guest")
		{
			$scope.guest = "3";
		}
		if($scope.guest== "4 Guest")
		{
			$scope.guest = "4";
		}
		if($scope.guest== "5 Guest")
		{
			$scope.guest = "5";
		}
		if($scope.guest== "6 Guest")
		{
			$scope.guest = "6";
		}
		if($scope.guest== "7 Guest")
		{
			$scope.guest = "7";
		}
		if($scope.guest== "8 Guest")
		{
			$scope.guest = "8";
		}
		if($scope.guest== "9 Guest")
		{
			$scope.guest = "9";
		}
		if($scope.guest== "10 Guest")
		{
			$scope.guest = "10";
		}		
	})
	
	.error(function(data, status, headers, config)
	{
		
	});
	
	$scope.placeArray = [];
	$http({method: 'GET',url: 'getplace.php',data: { applicationId: 3 }})
	.success(function (data) {
		$scope.placeArray = data;
	});
	$scope.explore = true;
	
	//Dropdwon for Guests
	$scope.guestsArray = ["1","2","3","4","5","6","7","8","9","10"]; /* this is dropdown option option means option not value thats why it is not multiply with INR  you are using ng-option not ng-repeat */
    $scope.guestsArrayValue = ["1","2","3","4","5","6","7","8","9","10"];
    
	$scope.details_activity = [];
	$scope.len_details_activity="";
	$scope.finalDate = [];
	$scope.transportValueChoose = [];
	$scope.transportValueChoose.push({minicab:"MiniCab",sedan:"Sedan",seater:"7 Seater",minibus:"MiniBus",usertimes:6,cabprice:1000,sedanprice:2000,seater_price:4000,minibus_price:6000});
	$scope.timeForTransport = 6;
	var fullhour = $scope.timeForTransport;
	
	
    $scope.activityidd = [];
	$scope.len_activitydata =0;
	var index1;
	arr_activity_time_start = [];
	arr_activity_time_end = [];
	arr_activity_date_pick = [];
	$scope.len1 =0;
    $scope.len2 =0;
	$scope.len3 =0;
	var index,len;
	
	var infoWindow = new google.maps.InfoWindow();
	var ibMain;
	var ibinfoMain;
	var ibSearch;
	var ibinfoSearch;
   
	
	$http.post('checkexplore.php',{"pid": $scope.pid})
	.success(function (data, status, headers, config)
	{
		
		$scope.propertyid = data['propertydata'][0]['ppid'];
		$scope.propertytitle = data['propertydata'][0]['ptitle'];
		$scope.propertypdesc = data['propertydata'][0]['ppdesc'];
		$scope.propertylocation = data['propertydata'][0]['plocation'];
		$scope.propertypic = data['propertydata'][0]['ppic'];
		$scope.propertyprice = data['propertydata'][0]['pprice'];
		$scope.propertytripadvisorrating = data['propertydata'][0]['ptripadvisorrating'];
		$scope.propertyrating = data['propertydata'][0]['prating'];
		$scope.propertylatitude = data['propertydata'][0]['platitude'];
		$scope.propertylongitude = data['propertydata'][0]['plongitude'];
		$scope.propertyswimmingpool = data['propertydata'][0]['pswimmingpool'];
		$scope.propertyspa = data['propertydata'][0]['pspa'];
		$scope.propertyjacuzzi = data['propertydata'][0]['pjacuzzi'];
		$scope.propertyfinedinig = data['propertydata'][0]['pfinedinig'];
		$scope.propertycaffe = data['propertydata'][0]['pcaffe'];
		$scope.propertytax = data['propertydata'][0]['ptax'];
		$scope.propertypimgheader = data['propertydata'][0]['pimgheader'];
		$scope.propertypimg1 = data['propertydata'][0]['pimg1'];
		$scope.propertypimg2 = data['propertydata'][0]['pimg2'];
		$scope.propertypimg3 = data['propertydata'][0]['pimg3'];
		$scope.propertypimg4 = data['propertydata'][0]['pimg4'];
      
		$scope.activitydata = data['activitydata'];	
			
		$scope.reviewdata = data['reviewdata'];
		$scope.reviewcount = data['reviewcount'];
		$scope.similardata = data['similardata'];		
		$scope.place = data['sessiondata'][0]['place'];
		$scope.guests = data['sessiondata'][0]['guests'];
		$scope.fromd = data['sessiondata'][0]['fromd'];
		$scope.tod = data['sessiondata'][0]['tod'];
	     
		ffromd = $scope.fromd.toString();
		$scope.ffromd_d = (ffromd.split('-')[0]);
		
		ftod = $scope.tod.toString();
		$scope.ftod_d = (ftod.split('-')[0]);
		
		//$scope.totaln = $scope.ftod_d - $scope.ffromd_d;
		
		//Date calculation starts by Santanu Saha
		
		var form_date = $scope.fromd;
		form_date = form_date.split("-");
		var form_date_refine = form_date[1]+"/"+form_date[0]+"/"+form_date[2];
		var new_form_date_refine = new Date(form_date_refine).getTime();
		
		var to_date = $scope.tod ;
		to_date = to_date.split("-");
		var to_date_refine = to_date[1]+"/"+to_date[0]+"/"+to_date[2];
		var new_to_date_refine = new Date(to_date_refine).getTime();
		
		var diff_of_dates = Math.abs(new_form_date_refine - new_to_date_refine);
		
		$scope.totaln = diff_of_dates/(24 * 60 * 60 * 1000);
		
		
		
		var price_tot = $scope.propertyprice;
		$scope.pricetot = price_tot.replace(',','');
		$scope.pricess = Number($scope.pricetot);
		$scope.ntc = $scope.pricess * $scope.totaln;
		
		$scope.act_title="";
		$scope.act_price ="";
		$scope.act_id="";
		$scope.act_alt="";
		$scope.act_long="";
		$scope.act_type="";
		$scope.addToCart = function(acti_title,acti_price,acti_id,acti_alt,acti_long,acti_type)
		{
			$scope.cartt1 = true;
			$scope.cartt2 = false;
			var printContents = document.getElementById('activityconfirm1').style.display='block';document.getElementById('fade').style.display='block';
			$scope.prophide = false;
			$scope.act_title = acti_title;
			$scope.act_price = acti_price;
			$scope.act_id = acti_id;
			$scope.act_alt=acti_alt;
			$scope.act_long =acti_long;
			$scope.act_type = acti_type;
			
			len=arr_activities.length;		
			if(len>=1)
			{				
					index=0;					
					for(i=0;i<len;i++)
					{						
						if(arr_activities[i].nameactivity == $scope.act_title)
						{
							index=1;
						}
					}
					
					
					if(index)
					{
						alert("Activity Already Added");
					}
					else
					{
						$scope.nodatesAgain = [];
						arr_activities.push({nameactivity:$scope.act_title});	
						var startAgainDate = $scope.fromd;		
						startAgainDate =  startAgainDate.split("-");
						var endAgainDate = $scope.tod;
						endAgainDate = endAgainDate.split("-");
						var startAgainDate1=startAgainDate[1]+"/"+startAgainDate[0]+"/"+startAgainDate[2];		
						var endAgainDate1=endAgainDate[1]+"/"+endAgainDate[0]+"/"+endAgainDate[2];		
						var sAgain = new Date(startAgainDate1);
						var eAgain = new Date(endAgainDate1);
						var mmAgain,ddAgain,yyyyAgain;
						$scope.datepickAgain="";
						while(sAgain <= eAgain)
						{
						
							mmAgain = sAgain.getMonth() + 1;
							ddAgain =sAgain.getDate();
							yyyyAgain = sAgain.getFullYear();
							sdateAgain = ddAgain + '-' + mmAgain + '-' + yyyyAgain;	
							this.nodatesAgain.push({datesAgain:sdateAgain});
							sAgain = new Date(sAgain.setDate(sAgain.getDate()+1));	
						}
					}
			}				
			else
			{
				$scope.nodatesAgain = [];
				arr_activities.push({nameactivity:$scope.act_title});
				var startAgainDate = $scope.fromd;		
				startAgainDate =  startAgainDate.split("-");
				var endAgainDate = $scope.tod;
				endAgainDate = endAgainDate.split("-");
				var startAgainDate1=startAgainDate[1]+"/"+startAgainDate[0]+"/"+startAgainDate[2];		
				var endAgainDate1=endAgainDate[1]+"/"+endAgainDate[0]+"/"+endAgainDate[2];		
				var sAgain = new Date(startAgainDate1);
				var eAgain = new Date(endAgainDate1);
				var mmAgain,ddAgain,yyyyAgain;
				$scope.datepickAgain="";
				while(sAgain <= eAgain)
				{
						
						mmAgain = sAgain.getMonth() + 1;
						ddAgain =sAgain.getDate();
						yyyyAgain = sAgain.getFullYear();
						sdateAgain = ddAgain + '-' + mmAgain + '-' + yyyyAgain;	
						this.nodatesAgain.push({datesAgain:sdateAgain});
						sAgain = new Date(sAgain.setDate(sAgain.getDate()+1));	
				}
			}	
			
		}
		$scope.durationAgain="";
		$scope.selectedvaluesAgain = "";
		$scope.showthirdAgain = function(datepickAgain,timeAgain,time1Again)
		{
			if ($scope.datepickAgain.length==0 || $scope.timeAgain.length==0 || $scope.time1Again.length==0)
			{
			
				alert("Please Select Values ");
			
			}
			else
			{
					len1 = arr_activity_time_start.length;
					len2 = arr_activity_time_end.length;
					len3 = arr_activity_date_pick.length;
					if(len1>=1)
					{   
						index1=0;
					
						for(p=0;p<len1;p++)
						{
						
							if(arr_activity_time_end[p].end_time > $('#timeAgain').val() && arr_activity_date_pick[p].start_date == $('#datepickAgain').val())
							{
								index1=1;
							}
						}
						if(index1)
						{
							alert("Time already book for activity");
						}
						else
						{
							arr_activity_time_start.push({start_time:$('#timeAgain').val()});
							arr_activity_time_end.push({end_time: $('#time1Again').val()});
							arr_activity_date_pick.push({start_date: $('#datepickAgain').val()});
							$scope.cartt1=false;
							$scope.cartt2=true;
							$scope.selectedvaluesAgain=$scope.datepickAgain;
							$scope.selectedvalues1Again=$scope.timeAgain;
							$scope.selectedvalues2Again=$scope.time1Again;
							if(timeAgain>time1Again)
							{	
								$scope.durationAgain = (timeAgain - time1Again);
							}
							else
							{
								$scope.durationAgain = (time1Again - timeAgain);
							}
						}
					}
					else
					{
						arr_activity_time_start.push({start_time:$('#timeAgain').val()});
						arr_activity_time_end.push({end_time: $('#time1Again').val()});
						arr_activity_date_pick.push({start_date: $('#datepickAgain').val()});
						$scope.cartt1=false;
						$scope.cartt2=true;
						$scope.selectedvaluesAgain=$scope.datepickAgain;
						$scope.selectedvalues1Again=$scope.timeAgain;
						$scope.selectedvalues2Again=$scope.time1Again;
						if(timeAgain>time1Again)
						{	
							$scope.durationAgain = (timeAgain - time1Again);
						}
						else
						{
							$scope.durationAgain = (time1Again - timeAgain);
						}			
					}	
				}			
		}
		$scope.len_details_activityAgain="";
		$scope.details_activityAgain = [];
		$scope.activities = [];
		$scope.activitieslatlon = [];
		$scope.activitiesid = [];
		$scope.suffix ="";
		$scope.continueBookingAgain = function()
		{			
			this.activitieslatlon.push({activitylat:$('#activityalt1').val(),activitylon:$('#activitylong1').val()});
			this.activitiesid.push({activityid:$('#activity_id1').val()});
			$scope.suffix = $('#GuestAgain').val().match(/\d+/);
			var number_of_guest1 = Number($scope.suffix);
			this.activities.push({nameactivity:$('#activitytitle1').val(),priceactivity:$('#activityprice1').val(),guestactivitynumber:number_of_guest1});
			$scope.details_activity.push({activityid:$('#activity_id1').val(),activitytype:$('#activitytype1').val(),activity_title:$('#activitytitle1').val(),activity_price:$('#activityprice1').val(),activity_altitude:$('#activityalt1').val(),activity_longitude:$('#activitylong1').val(),activity_datepick:$('#datepickAgain').val(),activity_guest:$('#GuestAgain').val(),activity_starttiming:$('#timeAgain').val(),activity_endtiming:$('#time1Again').val(),noOfGuest:number_of_guest1});
			$scope.len_details_activity = $scope.details_activity.length;
			$scope.cartt2 = false;
			$scope.cart =true;
			$scope.datepickAgain="";
			$scope.GuestAgain="";
			$scope.timeAgain="";
			$scope.time1Again="";   
			for(i=0;i<$scope.len_details_activity;i++)
			{
				$scope.avtivity_name =$scope.details_activity[i]['activity_title'];
				document.getElementById($scope.avtivity_name).value="Added into Cart";
				document.getElementById($scope.avtivity_name).disabled=true;
				document.getElementById($scope.avtivity_name).className = "tc-cr-btn-add";
			}
			
			$scope.finalDate.push({at_date1:$('#datepickAgain').val(),at_name:$('#activitytitle1').val(),at_sttime:$('#timeAgain').val(),at_entime:$('#time1Again').val()});
			if($scope.durationAgain!="")
			{
				$scope.usertime = $scope.durationAgain;
				$scope.durationAgain="";
			}	
			if($scope.usertime=="")
			{
				$scope.usertime = 6;
				$scope.cab_price = 1000;
				$scope.sedan_price = 2000;
				$scope.seater_price = 4000;
				$scope.minibus_price = 6000;
			}
			else if($scope.usertime<=fullhour)
			{
				$scope.cab_price = 1000;
				$scope.sedan_price = 2000;
				$scope.seater_price = 4000;
				$scope.minibus_price = 6000;
				
			}
			else
			{
		
				$scope.cab_price = 2000;
				$scope.sedan_price = 4000;
				$scope.seater_price = 8000;
				$scope.minibus_price = 12000;
				
		
			}
			$scope.transportValueChoose.push({minicab:"MiniCab",sedan:"Sedan",seater:"7 Seater",minibus:"MiniBus",usertimes:$scope.usertime,cabprice:$scope.cab_price,sedanprice:$scope.sedan_price,seater_price:$scope.seater_price,minibus_price:$scope.minibus_price});
				
		}
	var len = Object.keys(data['activitydata']).length;
	
					$scope.markers = [];
				    $scope.cities = [];
					$scope.markers1= [];
					$scope.markers2= [];
					$scope.ibMainArray = [];
					$scope.ibSearchArray = [];
					var source = "";
					var distance = "";
					var duration = "";
					var distance1 ="";
					var duration1 ="";
					var service = new google.maps.DistanceMatrixService();
					var service1 = new google.maps.DistanceMatrixService();
					
					var activeInfoWindow;
					var activeInfoWindow2;
					
					var icon = new google.maps.MarkerImage("images/Address-Icon.png");
					
					$scope.addActivities = function()
					{
						$http.post('checkexploreproperty.php',{"pid": $scope.pid}).
				        success(function (data) {
				
				            $scope.cities = data.countryList;
				            $scope.cities.forEach(function(city) {
							
							var mapOptions =
							{
										zoom: 9,
										center: new google.maps.LatLng(city.latitude, city.longitude),
										mapTypeId: google.maps.MapTypeId.ROADMAP
							}
										$scope.map = new google.maps.Map(document.getElementById('map'), mapOptions);
							
				                createMarkerProperty(city);
				            });        
				        });
						
						$http.post('checkexplorecity.php',{"pid": $scope.pid}).
				        success(function (data) {
				
				            $scope.cities = data.countryList;
				            $scope.cities.forEach(function(city) {
				                createMarker(city);
				            });        
				     	 });
					
						
					}
					
					$scope.add = function()
					{
						$http.post('checkexploreproperty.php',{"pid": $scope.pid}).
				        success(function (data) {
				
				            $scope.cities = data.countryList;
				            $scope.cities.forEach(function(city) {
							
							var mapOptions =
							{
										zoom: 9,
										center: new google.maps.LatLng(city.latitude, city.longitude),
										mapTypeId: google.maps.MapTypeId.ROADMAP
							}
										$scope.map = new google.maps.Map(document.getElementById('map'), mapOptions);
							
				                createMarkerProperty(city);
				            });        
				        });
					}
					
					var createMarkerProperty = function(city)
					{
						var Property_marker = new google.maps.Marker({
				            map: $scope.map,
				            position: new google.maps.LatLng(city.latitude, city.longitude),
				            icon:'http://maps.google.com/mapfiles/ms/icons/red-dot.png'
				        });
				        
						source =  new google.maps.LatLng(city.latitude, city.longitude);
						
						
				        
						var boxText = document.createElement("div");				
						boxText.innerHTML = city.popup;
						
						var boxTextLabel = document.createElement("div");
						boxTextLabel.innerHTML = '<div class="prophighlight">'+ city.city +'</div>';
						
						var boxTextinfo = document.createElement("div");	
						boxTextinfo.style.cssText = "background: #FFFFFF; padding: 3px;";
						
						var myOptions = {
											content: boxText,
											disableAutoPan: false,
											maxWidth: 0,
											pixelOffset: new google.maps.Size(-105, -35),
											zIndex: null,
											boxStyle: {
														opacity: 1,
														width: "150px"				  
														},
											closeBoxURL: "",
											infoBoxClearance: new google.maps.Size(1, 1),
											alignBottom: true
										};
					    var myOptionsLabel ={
												content: boxTextLabel,
												disableAutoPan: false,
												maxWidth: 0,
												pixelOffset: new google.maps.Size(10, 30),
												zIndex: null,
												boxStyle: {
														opacity: 1,
														width: "150px"				  
														},
												closeBoxURL: "",
												infoBoxClearance: new google.maps.Size(1, 1),
												alignBottom: true
											};				
										
						var myOptionsinfo = {
											content: boxTextinfo,
											disableAutoPan: false,
											maxWidth: 0,
											pixelOffset: new google.maps.Size(-140, -105),
											zIndex: null,
											boxStyle: {
														opacity: 1,			  
														},
											closeBoxMargin: "1px 1px 1px 1px",
											closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
											infoBoxClearance: new google.maps.Size(1, 1),
											alignBottom: true
										};				
						var ib = new InfoBox(myOptions);
						var ibLabel = new InfoBox(myOptionsLabel);
						var ibinfo = new InfoBox(myOptionsinfo);
						
						// Add circle overlay and bind to marker
								var circle = new google.maps.Circle
								(
									{
									  location:new google.maps.LatLng(city.latitude, city.longitude),
									  map: $scope.map,
									  radius: 100000,    // metres	
									  fillColor: '#AA0000',
									  strokeOpacity:0.1,
									  strokeWeight:2
									  
									}
								);
								
						circle.bindTo('center', Property_marker, 'position');
						
						google.maps.event.addListener(
		                    Property_marker,
		                    'onload', (function(Property_marker, $scope) {
								ib.open($scope.map, Property_marker);
								
		                    })(Property_marker, $scope)
		                );
						
						google.maps.event.addListener(
		                    Property_marker,
		                    'onload', (function(Property_marker, $scope) {
								ibLabel.open($scope.map, Property_marker);
								
		                    })(Property_marker, $scope)
		                );
						
						google.maps.event.addListener(
		                    Property_marker,
		                    'click', (function(Property_marker, $scope) {
								
		                        return function() {
								boxTextinfo.innerHTML = '<div  class="propinfowindow">' + city.image +'<span class="popuptitle">' + city.city + '</span>' + city.price + '' + city.button + '</div>';
								ibinfo.open($scope.map, Property_marker);
								};
		                    })(Property_marker, $scope)
		                );
						
						$scope.markers.push(Property_marker);
						
				    };
					
					// Property Marker ends
					
					// Activity Marker starts
					
				    var createMarker = function(city)
					{
				        var marker = new google.maps.Marker({
				            map: $scope.map,
				            position: new google.maps.LatLng(city.latitude, city.longitude),
							icon:'images/Address-Icon.png'
				        });
				        
						marker.id = city.city;
						$scope.markers1.push({marker:marker,markers_id1:marker.id});
						
						var destination = new google.maps.LatLng(city.latitude, city.longitude);
						
						
						
						 service.getDistanceMatrix({
									origins: [source],
									destinations: [destination],
									travelMode: google.maps.TravelMode.DRIVING,
									unitSystem: google.maps.UnitSystem.METRIC,
									avoidHighways: false,
									avoidTolls: false
									}, function (response, status) {
												if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
														distance = response.rows[0].elements[0].distance.text;
														duration = response.rows[0].elements[0].duration.text;
														
														 marker.content = '<div  class="propinfowindow" style="height:520px;overflow-y: scroll;overflow-x: hidden;">' + city.image +'<span class="popuptitle">' + city.city + '</span>' + city.price +'<div class="distanceCal">'+'<strong>Distance from Resort</strong>'+distance+' ('+duration+')'+'</div>'+ city.button + '</div>';
	
														
														//alert(distance);
														//alert(duration);
												}
												else 
												{
														alert("Unable to find the distance via road.");
												}
							});
					
						
						
						
						var boxText = document.createElement("div");				
						boxText.innerHTML = city.popup;
						
						boxText.id ="boxText";
				
						var boxTextinfo = document.createElement("div");				
						//boxTextinfo.innerHTML = '<html ng-app="exploreapp"><head><script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script><script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.9.0/ui-bootstrap-tpls.min.js"></script><script src="js/angularjs/explore-script.js"></script></head><body ng-controller="explorecontroller"><div style="background:white;" class="propinfowindow">' + city.image +'<span class="popuptitle">' + city.city + '</span>' + city.price + '' + city.button + '</div></body></html>';
						
						var myOptions = {
											content: boxText,
											disableAutoPan: false,
											maxWidth: 0,
											//pixelOffset: new google.maps.Size(-140, 0),
											pixelOffset: new google.maps.Size(-112, -40),
											zIndex: null,
											boxStyle: {
														opacity: 1,
														width: "150px"				  
														},
											//closeBoxMargin: "2px 2px 2px 2px",
											closeBoxURL: "",
											infoBoxClearance: new google.maps.Size(1, 1),
											alignBottom: true
											//	isHidden: false,
											//pane: "floatPane",
											//	enableEventPropagation: false
										};
										
						var myOptionsinfo = {
										    content: boxTextinfo,
											disableAutoPan: false,
											maxWidth: 220,
											//pixelOffset: new google.maps.Size(-140, 0),
											pixelOffset: new google.maps.Size(-113, -115),
											zIndex: null,
											boxStyle: {
														opacity: 1,
														width: "150px"				  
														},
											closeBoxMargin: "2px -126px 2px 2px",
											//enableEventPropagation: false,
											closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
											infoBoxClearance: new google.maps.Size(1, 1),
											alignBottom: true
											//isHidden: false,
											//pane: "floatPane",
											//	enableEventPropagation: false
										};				
						ibMain = new InfoBox(myOptions);
						
						$scope.ibMainArray.push({ibMainId:city.city,boxMain:ibMain});
						
					    ibinfoMain = new InfoBox(myOptionsinfo);
						
						google.maps.event.addListener(
		                    marker,
		                    'onload', (function(marker, $scope) {
								ibMain.open($scope.map, marker);
								
		                    })(marker, $scope)
		                );
						
				      
				              	 
				    /*   google.maps.event.addListener(
				                    marker,
				                    'click', (function(marker, $scope) {
				                        return function() {
				                            var compiled = $compile(marker.content)($scope);
				                            $scope.$apply();
				                            ibinfoMain.setContent(compiled[0]);
				                            ibinfoMain.open($scope.map, marker);
				                        };
				                    })(marker, $scope)
				                );*/
						
                        google.maps.event.addDomListener(
				                    boxText,
				                    'click', (function(marker, $scope) {
				                        return function() {
				                            var compiled = $compile(marker.content)($scope);
				                            $scope.$apply();
				                            ibinfoMain.setContent(compiled[0]);
				                            ibinfoMain.open($scope.map, marker);
				                        };
				                    })(marker, $scope)
				                );
							
				        
						};	 
					// Activity Marker ends
					
					/*Map Search Starts Here*/
					$scope.activitiesdata = [];
							
					$http({method: 'GET',url: 'getactivities.php',data: { applicationId: 3 }}).success(function (data) 
						{
							$scope.activitiesdata = data;
						});
							
					$scope.getact = function(site) 
					{
						$scope.city = site.name;
						//alert($scope.city);
						$http.post('mapsearch_activity.php',{ 'place':$scope.city }).success(function (data, status, headers, config)
						{
							//alert(data['countryList']);
							if(data['countryList'])
							{
								$scope.cities = data.countryList;
								$scope.cities.forEach(function(city) {
									createActMarker(city);
								});
									//alert("Hey");
							}
							else
							{
									//alert("Bye");
									var mapOptions = { zoom: 8, center: new google.maps.LatLng($scope.lat,$scope.lng), mapTypeId: google.maps.MapTypeId.ROADMAP }
									$scope.map = new google.maps.Map(document.getElementById('map'), mapOptions);
							}
						});
					};
					
					var createActMarker = function(city)
					{						
				        var marker = new google.maps.Marker({
				            map: $scope.map,
				            position: new google.maps.LatLng(city.latitude, city.longitude),
							icon:'http://maps.google.com/mapfiles/ms/icons/purple-dot.png'
				        });
						
						marker.id = city.city;
					    $scope.markers2.push({marker:marker,markers_id2:marker.id});
						
						
						var destination1 = new google.maps.LatLng(city.latitude, city.longitude);
						
						
						
						 service1.getDistanceMatrix({
									origins: [source],
									destinations: [destination1],
									travelMode: google.maps.TravelMode.DRIVING,
									unitSystem: google.maps.UnitSystem.METRIC,
									avoidHighways: false,
									avoidTolls: false
									}, function (response, status) {
												if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
														distance1 = response.rows[0].elements[0].distance.text;
														duration1 = response.rows[0].elements[0].duration.text;
														
														 marker.content = '<div  class="propinfowindow" style="height:520px;overflow-y: scroll;overflow-x: hidden;">' + city.image +'<span class="popuptitle">' + city.city + '</span>' + city.price +'<div class="distanceCal">'+'<strong>Distance from Resort</strong>'+distance1+' ('+duration1+')'+'</div>'+ city.button + '</div>';
	
														
														//alert(distance);
														//alert(duration);
												}
												else 
												{
														alert("Unable to find the distance via road.");
												}
							});
						
						
						var boxText = document.createElement("div");				
						boxText.innerHTML = city.popup;
						
						boxText.id ="boxText";
						
						var boxTextinfo = document.createElement("div");				
						boxTextinfo.innerHTML = '<html ng-app="exploreapp"><head><script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script><script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.9.0/ui-bootstrap-tpls.min.js"></script><script src="js/angularjs/explore-script.js"></script></head><body ng-controller="explorecontroller"><div style="background:white;" class="propinfowindow">' + city.image +'<span class="popuptitle">' + city.city + '</span>' + city.price + '' + city.button + '</div></body></html>';
						
						var myOptions = {
											content: boxText,
											disableAutoPan: false,
											maxWidth: 0,
											//pixelOffset: new google.maps.Size(-140, 0),
											pixelOffset: new google.maps.Size(-114, -40),
											zIndex: null,
											boxStyle: {
														opacity: 1,
														width: "150px"				  
														},
											//closeBoxMargin: "2px 2px 2px 2px",
											closeBoxURL: "",
											infoBoxClearance: new google.maps.Size(1, 1),
											alignBottom: true
										};
										
						var myOptionsinfo = {
											content: boxTextinfo,
											disableAutoPan: false,
											maxWidth: 0,
											//pixelOffset: new google.maps.Size(-140, 0),
											pixelOffset: new google.maps.Size(-113, -115),
											zIndex: null,
											boxStyle: {
														opacity: 1,
														width: "150px"				  
														},
											closeBoxMargin: "2px -126px 2px 2px",
											closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
											infoBoxClearance: new google.maps.Size(1, 1),
											alignBottom: true
											//	isHidden: false,
											//pane: "floatPane",
											//	enableEventPropagation: false
										};	

						ibSearch = new InfoBox(myOptions);
						
						$scope.ibSearchArray.push({ibSearchId:city.city,boxSearch:ibSearch});	

						for(k=0;k<$scope.ibSearchArray.length;k++)
						{
							for(m=0;m<$scope.ibMainArray.length;m++)
							{
								if($scope.ibMainArray[m]['ibMainId']==$scope.ibSearchArray[k]['ibSearchId'])
								{
									var mybox = $scope.ibMainArray[m].boxMain;
									 mybox.close();
								}
							}
						}
						
						for(i=0;i<$scope.markers2.length;i++)
							{
								for(j=0;j<$scope.markers1.length;j++)
								{
									if($scope.markers2[i]['markers_id2']==$scope.markers1[j]['markers_id1'])
									{
										
										$scope.markers1[j]['marker'].setMap(null);
										$scope.markers1.splice(j, 1);
										
									}
								}
							}
							
					    ibinfoSearch = new InfoBox(myOptionsinfo);
						
						
						google.maps.event.addListener(
		                    marker,
		                    'onload', (function(marker, $scope) {
								ibSearch.open($scope.map, marker);
								
		                    })(marker, $scope)
		                );
						
				        
				           	 
				      /*  google.maps.event.addListener(
				                    marker,
				                    'click', (function(marker, $scope) {
				                        return function() {
				                            var compiled = $compile(marker.content)($scope);
				                            $scope.$apply();
				                            ibinfoSearch.setContent(compiled[0]);
				                            ibinfoSearch.open($scope.map, marker);
				                        };
				                    })(marker, $scope)
				                );*/
						
						google.maps.event.addDomListener(
				                    boxText,
				                    'click', (function(marker, $scope) {
				                        return function() {
				                            var compiled = $compile(marker.content)($scope);
				                            $scope.$apply();
				                            ibinfoMain.setContent(compiled[0]);
				                            ibinfoMain.open($scope.map, marker);
				                        };
				                    })(marker, $scope)
				                );
						
							
				       
						};
						/*Map Search Ends Here*/
						
						
						
		}
	)
	
	.error(function (data, status, headers, config)
	{
		
	});
	 
	 
	
	/*Add-To-Cart Form Starts Here*/
		$scope.cart1=true;	
		$scope.cart2="";
		$scope.cart3="";
		
		
		$scope.noOfDates = function()
		{
			len=arr_activities.length;		
			if(len>=1)
			{				
					index=0;					
					for(i=0;i<len;i++)
					{						
						if(arr_activities[i].nameactivity == $('#atitle').val())
						{
							index=1;
						}
					}
					
					
					if(index)
					{
						alert("Activity Already Added");
					}
					else
					{
						$scope.nodates = [];
						arr_activities.push({nameactivity:$('#atitle').val()});	
						$scope.cart1=false;
						$scope.cart2=true;
						$scope.cart3=false;
						
						var startdate = $scope.fromd;		
						startdate = startdate.split("-");
						
						var enddate = $scope.tod;
						enddate = enddate.split("-");
						
						var startDate1=startdate[1]+"/"+startdate[0]+"/"+startdate[2];		
						var enddate1=enddate[1]+"/"+enddate[0]+"/"+enddate[2];		
						s = new Date(startDate1);
						var e = new Date(enddate1);
						var mm,dd,yyyy;
						$scope.datepick="";
						while(s <= e)
						{
						
							mm = s.getMonth() + 1;
							dd = s.getDate();
							yyyy = s.getFullYear();
							
							sdate = dd + '-' + mm + '-' + yyyy;	
							
								this.nodates.push({dates:sdate});
								s = new Date(s.setDate(s.getDate()+1));	
						}	
					}
			}				
			else
			{
				$scope.nodates = [];
				arr_activities.push({nameactivity:$('#atitle').val()});
				$scope.cart1=false;
				$scope.cart2=true;
				$scope.cart3=false;
				
				var startdate = $scope.fromd;		
				startdate = startdate.split("-");
				
				var enddate = $scope.tod;
				enddate = enddate.split("-");
				
				var startDate1=startdate[1]+"/"+startdate[0]+"/"+startdate[2];		
				var enddate1=enddate[1]+"/"+enddate[0]+"/"+enddate[2];		
				s = new Date(startDate1);
				var e = new Date(enddate1);
				var mm,dd,yyyy;
				$scope.datepick="";
				while(s <= e)
				{
				
					mm = s.getMonth() + 1;
					dd = s.getDate();
					yyyy = s.getFullYear();
					
					sdate = dd + '-' + mm + '-' + yyyy;	
					
						this.nodates.push({dates:sdate});
						s = new Date(s.setDate(s.getDate()+1));					
				}
			}	
			
		}		
		$scope.selectedvalues = "";
		$scope.duration="";
		$scope.showthird = function(datepick,time,time1)
		{
			if ($scope.datepick.length==0 || $scope.time.length==0 || $scope.time1.length==0)
			{
			
				alert("Please Select Values ");
			
			}
			else
			{
					len1 = arr_activity_time_start.length;
					len2 = arr_activity_time_end.length;
					len3 = arr_activity_date_pick.length;
					if(len1>=1)
					{   
						index1=0;
					
						for(p=0;p<len1;p++)
						{
						
							if(arr_activity_time_end[p].end_time > $('#time').val() && arr_activity_date_pick[p].start_date == $('#datepick').val())
							{
								index1=1;
							}
						}
						if(index1)
						{
							alert("Time already book for activity");
						}
						else
						{
							arr_activity_time_start.push({start_time:$('#time').val()});
							arr_activity_time_end.push({end_time: $('#time1').val()});
							arr_activity_date_pick.push({start_date: $('#datepick').val()});
							$scope.cart1=false;
							$scope.cart2=false;
							$scope.cart3=true;
							$scope.selectedvalues=$scope.datepick;
							$scope.selectedvalues1=$scope.time;
							$scope.selectedvalues2=$scope.time1
							if(time>time1)
							{	
								$scope.duration = (time - time1);
							}
							else
							{
								$scope.duration = (time1 - time);
							}
						}
					}
					else
					{
						arr_activity_time_start.push({start_time:$('#time').val()});
						arr_activity_time_end.push({end_time: $('#time1').val()});
						arr_activity_date_pick.push({start_date: $('#datepick').val()});
						$scope.cart1=false;
						$scope.cart2=false;
						$scope.cart3=true;
						$scope.selectedvalues=$scope.datepick;
						$scope.selectedvalues1=$scope.time;
						$scope.selectedvalues2=$scope.time1
						if(time>time1)
						{	
							$scope.duration = (time - time1);
						}
						else
						{
							$scope.duration = (time1 - time);
						}			
					}	
				}			
		}
        
		$scope.activities = [];
		$scope.activitieslatlon = [];
		$scope.activitiesid = [];
		$scope.suffix1 ="";
		$scope.continueBooking = function()
		{			
			this.activitieslatlon.push({activitylat:$('#activityaltitude').val(),activitylon:$('#activitylongitude').val()});
			this.activitiesid.push({activityid:$('#activity_id').val()});
			$scope.suffix1 = $('#Guest').val().match(/\d+/);
			var number_of_guest = Number($scope.suffix1);
			this.activities.push({nameactivity:$('#activitytitle').val(),priceactivity:$('#activityprice').val(),guestactivitynumber:number_of_guest});
			$scope.details_activity.push({activityid:$('#activity_id').val(),activitytype:$('#activitytp').val(),activity_title:$('#activitytitle').val(),activity_price:$('#activityprice').val(),activity_altitude:$('#activityaltitude').val(),activity_longitude:$('#activitylongitude').val(),activity_datepick:$('#datepick').val(),activity_guest:$('#Guest').val(),activity_starttiming:$('#time').val(),activity_endtiming:$('#time1').val(),noOfGuest:number_of_guest});
			$scope.finalDate.push({at_date1:$('#datepick').val(),at_name:$('#activitytitle').val(),at_sttime:$('#time').val(),at_entime:$('#time1').val()});
			$scope.len_details_activity = $scope.details_activity.length;
			$scope.cart = true;
			$scope.cart3=false;
			$scope.cart1=true;
			$scope.datepick="";
			$scope.Guest="";
			$scope.time="";
			$scope.time1="";
			if(ibinfoMain instanceof InfoBox)
			{
				ibinfoMain.close();  
			}
			if(ibinfoSearch instanceof InfoBox)
			{
				ibinfoSearch.close();
			}
			for(i=0;i<$scope.len_details_activity;i++)
			{
				
				$scope.avtivity_name =$scope.details_activity[i]['activity_title'];
				document.getElementById($scope.avtivity_name).value="Added into Cart";
				document.getElementById($scope.avtivity_name).disabled=true;
				document.getElementById($scope.avtivity_name).className = "tc-cr-btn-add";
				
				
			}
			if($scope.duration!="")
			{
				$scope.usertime = $scope.duration;
				$scope.duration="";
			}
			if($scope.usertime=="")
			{
				$scope.usertime = 6;
				$scope.cab_price = 1000;
				$scope.sedan_price = 2000;
				$scope.seater_price = 4000;
				$scope.minibus_price = 6000;
			}
			else if($scope.usertime<=fullhour)
			{
				$scope.cab_price = 1000;
				$scope.sedan_price = 2000;
				$scope.seater_price = 4000;
				$scope.minibus_price = 6000;
				
			}
			else
			{
		
				$scope.cab_price = 2000;
				$scope.sedan_price = 4000;
				$scope.seater_price = 8000;
				$scope.minibus_price = 12000;
				
		
			}
			$scope.transportValueChoose.push({minicab:"MiniCab",sedan:"Sedan",seater:"7 Seater",minibus:"MiniBus",usertimes:$scope.usertime,cabprice:$scope.cab_price,sedanprice:$scope.sedan_price,seater_price:$scope.seater_price,minibus_price:$scope.minibus_price});
			
		}
		$scope.limit = 4;
		$scope.downArrow = function()
		{
			$scope.limit = $scope.limit+ 4;
			
		}	
		$scope.removeItem = function(index)
		{
			
			len=arr_activities.length;			
			arr_activities.splice([index]['nameactivity']);
			arr_activity_time_start.splice([index]['start_time']);
			arr_activity_time_end.splice([index]['end_time']);
			arr_activity_date_pick.splice([index]['start_date']);
			$scope.activities.splice(index,1);
			$scope.finalDate.splice(index,1);
			var indexes = index +1;
			$scope.transportValueChoose.splice(indexes,1);
			$scope.avtivity_name =$scope.details_activity[index]['activity_title'];
			document.getElementById($scope.avtivity_name).value="Add to Cart";
			document.getElementById($scope.avtivity_name).disabled=false;
			document.getElementById($scope.avtivity_name).className = "tc-cr-btn";
			$scope.details_activity.splice(index,1);
			$scope.len_details_activity = $scope.details_activity.length;
			
		}
		
	 $scope.similarLimit = 2;
	 $scope.similarListingShow = function()
	 {
		 $scope.similarLimit = $scope.similarLimit + 2;
	 }
	 $scope.reviewlimit = 2;
	 $scope.reviewOthershow = function()
	 {
		 $scope.reviewlimit = $scope.reviewlimit + 2;
	 }
	 
	 $scope.popup = function()
		{
			var printContents = document.getElementById('transconfirm').style.display='block';document.getElementById('fade').style.display='block';
			$scope.prophide = false;
		}	
		
	
	
	$scope.transportyes = false;
	$scope.tranportDate = [];
	$scope.lentransdate = 0;
	
	$scope.index1=0;
	$scope.transport = function()
	{
		
		$scope.transportyes =true;
			
	}
	
	$scope.onCategoryChange1 = function()
	{
		
		var index = document.getElementById("datepick1").selectedIndex;
		$scope.index1 = index;
		
	}
	
	
	
	activitytransport = [];
	$scope.activities = [];
	$scope.activitiestrans = [];	
	$scope.activitiestrans1 = [];	
	$scope.activitiestransports = [];
	$scope.details_transport = [];
	$scope.len_details_transport="";
	$scope.details_days = [];
	$scope.transport_activity_sum = "";
	var transport_pricesum = 0;
	var transport_prices=0;
	$scope.dateerror = false;
	$scope.checkerror = false;
	var index_transport ;
	$scope.transportadded = function(datepick1,checked)
	{
		
		if($scope.datepick1.length==0)
		{
			$scope.dateerror = true;
			$scope.checkerror = false;
		}
		else
		{
			if($scope.checked==null)
			{
				alert($scope.checked);
				$scope.checkerror = true;
				$scope.dateerror = false;
			}
			else
			{
				$scope.dateerror = false;
				$scope.checkerror = false;
				len2 = activitytransport.length;
				if(len2>=1)
				{
					index2 = 0;
					for(z=0;z<len2;z++)
					{
						if(activitytransport[z].nameactivitytrans_date == $('#datepick1').val())
						{
							index2 = 1;
						}
					}
					if(index2)
					{
						alert("Date already booked for Transport");
					}
					else
					{
						activitytransport.push({nameactivitytrans_date:$('#datepick1').val()});
						if($scope.checked == "MiniCab")
						{
							var cab_price = $scope.cab_price;
							this.activitiestrans.push({transtype:"MiniCab",nameactivitytrans_date:$('#datepick1').val(),nameactivitytrans:'Mini-Cab.png',priceactivitytrans:cab_price});
							$scope.activitiestrans1.push({transtype1:"MiniCab",nameactivitytrans_date1:$('#datepick1').val(),nameactivitytrans1:'Mini-Cab.png',priceactivitytrans1:cab_price});
							$scope.activitiestransports.push({transtype1:"Mini Cab",priceactivitytrans1:cab_price});
							$scope.details_transport.push({transport_date:$('#datepick1').val(),transport_type:"Mini Cab",transport_price:cab_price});
						}
						if($scope.checked == "Sedan")
						{
							var sedan_price = $scope.sedan_price;
							this.activitiestrans.push({transtype:"Sedan",nameactivitytrans_date:$('#datepick1').val(),nameactivitytrans:'Sedan-Car.png',priceactivitytrans:sedan_price});
							$scope.activitiestrans1.push({transtype1:"Sedan",nameactivitytrans_date1:$('#datepick1').val(),nameactivitytrans1:'Sedan-Car.png',priceactivitytrans1:sedan_price});
							$scope.activitiestransports.push({transtype1:"Sedan",priceactivitytrans1:sedan_price});
							$scope.details_transport.push({transport_date:$('#datepick1').val(),transport_type:"Sedan",transport_price:sedan_price});
						}
						if($scope.checked == "7 Seater")
						{
							var seater_price = $scope.seater_price;
							this.activitiestrans.push({transtype:"7 Seater",nameactivitytrans_date:$('#datepick1').val(),nameactivitytrans:'Innova.png',priceactivitytrans:seater_price});
							$scope.activitiestrans1.push({transtype1:"7 Seater",nameactivitytrans_date1:$('#datepick1').val(),nameactivitytrans1:'Innova.png',priceactivitytrans1:seater_price});
							$scope.activitiestransports.push({transtype1:"7 Seater",priceactivitytrans1:seater_price});
							$scope.details_transport.push({transport_date:$('#datepick1').val(),transport_type:"7 Seater",transport_price:seater_price});
						}
						if($scope.checked == "MiniBus")
						{
							var minibus_price = $scope.minibus_price;
							this.activitiestrans.push({transtype:"MiniBus",nameactivitytrans_date:$('#datepick1').val(),nameactivitytrans:'Mini-Bus.png',priceactivitytrans:minibus_price});
							$scope.activitiestrans1.push({transtype1:"MiniBus",nameactivitytrans_date1:$('#datepick1').val(),nameactivitytrans1:'Mini-Bus.png',priceactivitytrans1:minibus_price});
							$scope.activitiestransports.push({transtype1:"Mini Bus",priceactivitytrans1:minibus_price});
							$scope.details_transport.push({transport_date:$('#datepick1').val(),transport_type:"Mini Bus",transport_price:minibus_price});
						}		
						$scope.datepick1="";
				
					}
				}
				else
				{
						activitytransport.push({nameactivitytrans_date:$('#datepick1').val()});
						if($scope.checked == "MiniCab")
						{
							var cab_price = $scope.cab_price;
							this.activitiestrans.push({transtype:"MiniCab",nameactivitytrans_date:$('#datepick1').val(),nameactivitytrans:'Mini-Cab.png',priceactivitytrans:cab_price});
							$scope.activitiestrans1.push({transtype1:"MiniCab",nameactivitytrans_date1:$('#datepick1').val(),nameactivitytrans1:'Mini-Cab.png',priceactivitytrans1:cab_price});
							$scope.activitiestransports.push({transtype1:"Mini Cab",priceactivitytrans1:cab_price});
							$scope.details_transport.push({transport_date:$('#datepick1').val(),transport_type:"Mini Cab",transport_price:cab_price});
							
						}
						if($scope.checked == "Sedan")
						{
							var sedan_price = $scope.sedan_price;
							this.activitiestrans.push({transtype:"Sedan",nameactivitytrans_date:$('#datepick1').val(),nameactivitytrans:'Sedan-Car.png',priceactivitytrans:sedan_price});
							$scope.activitiestrans1.push({transtype1:"Sedan",nameactivitytrans_date1:$('#datepick1').val(),nameactivitytrans1:'Sedan-Car.png',priceactivitytrans1:sedan_price});
							$scope.activitiestransports.push({transtype1:"Sedan",priceactivitytrans1:sedan_price});
							$scope.details_transport.push({transport_date:$('#datepick1').val(),transport_type:"Sedan",transport_price:sedan_price});
						}
						if($scope.checked == "7 Seater")
						{
							var seater_price = $scope.seater_price;
							this.activitiestrans.push({transtype:"7 Seater",nameactivitytrans_date:$('#datepick1').val(),nameactivitytrans:'Innova.png',priceactivitytrans:seater_price});
							$scope.activitiestrans1.push({transtype1:"7 Seater",nameactivitytrans_date1:$('#datepick1').val(),nameactivitytrans1:'Innova.png',priceactivitytrans1:seater_price});
							$scope.activitiestransports.push({transtype1:"7 Seater",priceactivitytrans1:seater_price});
							$scope.details_transport.push({transport_date:$('#datepick1').val(),transport_type:"7 Seater",transport_price:seater_price});
						}
						if($scope.checked == "MiniBus")
						{
							var minibus_price = $scope.minibus_price;
							this.activitiestrans.push({transtype:"MiniBus",nameactivitytrans_date:$('#datepick1').val(),nameactivitytrans:'Mini-Bus.png',priceactivitytrans:minibus_price});
							$scope.activitiestrans1.push({transtype1:"MiniBus",nameactivitytrans_date1:$('#datepick1').val(),nameactivitytrans1:'Mini-Bus.png',priceactivitytrans1:minibus_price});
							$scope.activitiestransports.push({transtype1:"Mini Bus",priceactivitytrans1:minibus_price});
							$scope.details_transport.push({transport_date:$('#datepick1').val(),transport_type:"Mini Bus",transport_price:minibus_price});
							
						}		
						$scope.datepick1="";
				}
			   $scope.len_details_transport= $scope.details_transport.length;
			   for(l=0;l< $scope.len_details_transport;l++)
			   {
				   transport_prices =$scope.details_transport[l]['transport_price'];
			   }
			   transport_pricesum = transport_pricesum + Number(transport_prices);
			   $scope.transport_activity_sum =transport_pricesum ;
			  // $scope.transportyes = false;
			}
			
		}
		
	}
	$scope.removeItemTransport = function(index1)
	{
		activitytransport.splice([index1]['nameactivitytrans_date']);
		$scope.activitiestrans.splice(index1,1);
		$scope.activitiestrans1.splice(index1,1);
		$scope.activitiestransports.splice(index1,1);
		$scope.details_transport.splice(index1,1);
		
	}
	
	$scope.total_amount_before_del="";
	$scope.total_amount_after_del ="";
	$scope.pr="";
	$scope.noOfdays="";
	$scope.finalData = [];
	
	$scope.finalactivitytitle = [];
	$scope.finalactivitydates = [];
	var indees;
	$scope.transportno = function()
	{
		$scope.ItineraryData = [];
		$scope.propid = $scope.propertyid;
		$scope.proptitle = $scope.propertytitle;
		$scope.propprice = $scope.propertyprice;
		$scope.proplatitude = $scope.propertylatitude;
		$scope.proplongitude = $scope.propertylongitude;
		
		$scope.propactivities = $scope.activities;		
		$scope.propactivitieslatlon = $scope.activitieslatlon;
		$scope.propactivitiesid = $scope.activitiesid;
		
		$scope.proptransport = $scope.activitiestrans1;
		$scope.proptransport = $scope.activitiestrans1;
		$scope.propactivitiestransports = [];
		index_transport = $scope.details_transport.length;
		indees = index_transport;
		
		for(d=0;d<$scope.len_details_activity;d++)
		{
				$scope.at_id = $scope.details_activity[d]['activityid'];
				$scope.at_type = $scope.details_activity[d]['activitytype'];
				$scope.at_title = $scope.details_activity[d]['activity_title'];
				$scope.at_price = $scope.details_activity[d]['activity_price'];
				$scope.at_altitude = $scope.details_activity[d]['activity_altitude'];
				$scope.at_longitude = $scope.details_activity[d]['activity_longitude'];
				$scope.at_date = $scope.details_activity[d]['activity_datepick'];
				$scope.at_guest = $scope.details_activity[d]['activity_guest'];
				$scope.at_start_time = $scope.details_activity[d]['activity_starttiming'];
				$scope.at_end_time = $scope.details_activity[d]['activity_endtiming'];
				if(indees == 0)
				{
					$scope.finalData.push({at_id:$scope.at_id,at_type:$scope.at_type,at_title:$scope.at_title,at_price:$scope.at_price,at_altitude:$scope.at_altitude,at_longitude:$scope.at_longitude,at_date:$scope.at_date,at_guest:$scope.at_guest,at_start_time:$scope.at_start_time,at_end_time:$scope.at_end_time,at_trans_name:""});
					$scope.ItineraryData.push({at_title:$scope.at_title,at_date:$scope.at_date,at_guest:$scope.at_guest,at_start_time:$scope.at_start_time,at_end_time:$scope.at_end_time,at_trans_name:""});
                    $scope.propactivitiestransports.push({at_date:$scope.at_date,at_trans_name:"",at_trans_price:""});
				}
				else	
				{
					    if($scope.details_transport[index_transport-1] == undefined)
						{
							$scope.finalData.push({at_id:$scope.at_id,at_type:$scope.at_type,at_title:$scope.at_title,at_price:$scope.at_price,at_altitude:$scope.at_altitude,at_longitude:$scope.at_longitude,at_date:$scope.at_date,at_guest:$scope.at_guest,at_start_time:$scope.at_start_time,at_end_time:$scope.at_end_time,at_trans_name:""});
							$scope.ItineraryData.push({at_title:$scope.at_title,at_date:$scope.at_date,at_guest:$scope.at_guest,at_start_time:$scope.at_start_time,at_end_time:$scope.at_end_time,at_trans_name:""});
							$scope.propactivitiestransports.push({at_date:$scope.at_date,at_trans_name:"",at_trans_price:""});

						}
						else
						{
							$scope.trandate = $scope.details_transport[index_transport-indees]['transport_date'];
							$scope.transport_name = $scope.details_transport[index_transport-indees]['transport_type'];
							$scope.transport_price = $scope.details_transport[index_transport-indees]['transport_price'];
							if($scope.at_date == $scope.trandate)
							{
								$scope.finalData.push({at_id:$scope.at_id,at_type:$scope.at_type,at_title:$scope.at_title,at_price:$scope.at_price,at_altitude:$scope.at_altitude,at_longitude:$scope.at_longitude,at_date:$scope.at_date,at_guest:$scope.at_guest,at_start_time:$scope.at_start_time,at_end_time:$scope.at_end_time,at_trans_name:$scope.transport_name});
								$scope.ItineraryData.push({at_title:$scope.at_title,at_date:$scope.at_date,at_guest:$scope.at_guest,at_start_time:$scope.at_start_time,at_end_time:$scope.at_end_time,at_trans_name:$scope.transport_name});
						        $scope.propactivitiestransports.push({at_date:$scope.at_date,at_trans_name:$scope.transport_name,at_trans_price:$scope.transport_price});

								indees--;
							}
							else
							{
								$scope.finalData.push({at_id:$scope.at_id,at_type:$scope.at_type,at_title:$scope.at_title,at_price:$scope.at_price,at_altitude:$scope.at_altitude,at_longitude:$scope.at_longitude,at_date:$scope.at_date,at_guest:$scope.at_guest,at_start_time:$scope.at_start_time,at_end_time:$scope.at_end_time,at_trans_name:""});
								$scope.ItineraryData.push({at_title:$scope.at_title,at_date:$scope.at_date,at_guest:$scope.at_guest,at_start_time:$scope.at_start_time,at_end_time:$scope.at_end_time,at_trans_name:""});
								$scope.propactivitiestransports.push({at_date:$scope.at_date,at_trans_name:"",at_trans_price:""});

	
							}
							
						}
						
				}
				
				
				$scope.finalactivitytitle.push({finalactititle:$scope.at_title});
				$scope.finalactivitydates.push({finalactdate:$scope.at_date});
				console.log($scope.ItineraryData[d]);
				console.log($scope.propactivitiestransports[d]);
				
		}
		$http.post('checkreq.php',{"propid": $scope.propid,"proptitle": $scope.proptitle,"propprice": $scope.propprice,"proplatitude": $scope.proplatitude,"proplongitude": $scope.proplongitude,"propactivities": $scope.propactivities,"propactivitieslatlon": $scope.propactivitieslatlon,"propactivitiesid": $scope.propactivitiesid,"proptransport": $scope.proptransport,"propactivitiestransports": $scope.propactivitiestransports,"propactivitydetails": $scope.ItineraryData,"propactivityfulldetails": $scope.finalData,"propactivitytitle": $scope.finalactivitytitle,"propactivitydates": $scope.finalactivitydates,"propnodates": $scope.nodates})
		.success(function (data, status, headers, config)
		{
			window.location.href="booking.php";
		})
		
		.error(function (data, status, headers, config)
		{
			
		});
	}
	$scope.class = "cbtn";
	$scope.class1 = "cbtn";
	$scope.summary = true;
	if($scope.summary == true)
	{
			$scope.class = "cbtna";
			
	}
	$scope.summaryShow = function()
	{
		$scope.summary = true;
		$scope.accommadation = false;
		if($scope.summary == true)
		{
			$scope.class = "cbtna";
			$scope.class1 = "cbtn";
		}
		
		
	}
}]);
