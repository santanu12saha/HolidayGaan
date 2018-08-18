var vkationapp1 = angular.module('vkationapp', ['gm','ui.bootstrap'])
vkationapp1.controller('vkationcontroller', ['$scope', '$http', '$location', '$window', '$compile', function ($scope, $http, $location, $window, $compile)
{
	$scope.home = function () {
		window.location.href="index.php";
	}	
		
	$scope.placeArray = [];
	$http({method: 'GET',url: 'getplace.php',data: { applicationId: 3 }}).success(function (data)
	{
		$scope.placeArray = data;
	});
	
	//Dropdwon for Guests
	$scope.guestsArray = ["1 Guest","2 Guest","3 Guest","4 Guest","5 Guest","6 Guest","7 Guest","8 Guest","9 Guest","10 Guest"];
	
	$scope.budgetArray = ["upto 10,000","10,000  to  20,000","20,000  to  30,000","30,000  to  40,000","40,000  to  50,000","50,000  to  60,000","60,000  to  70,000","70,000  to  80,000","80,000  to  90,000","90,000  to  10,0000","Above  1,00,000"];
		
	$scope.headertitle=true;
	$scope.headerimg=true;
	$scope.resort=false;
	$scope.bestD=false;
	$scope.swcyvp = false;
	$scope.swcyvp_one = false;
	$scope.swcyvp_two = false;
	$scope.swcyvp_three = false;
	$scope.swcyvp_four = false;
	$scope.wellness = false;
	$scope.ecotourism = false;
	$scope.ew = false;
	$scope.accommodation = function() 
	{
		$scope.headertitle=false;
		$scope.headerimg=false;
		$scope.resort=true;
		$scope.bestD=false;
		$scope.wellness = false;
		$scope.ecotourism = false;
		$scope.ew = false;
	}
		
	$scope.cfcyvp = function() 
	{			
		$scope.headertitle = false;
		$scope.headerimg = false;
		$scope.resort = true;
		$scope.bestD=false;
		$scope.swcyvp = true;
		$scope.swcyvp_one = true;
		$scope.swcyvp_two = false;
		$scope.swcyvp_three = false;
		$scope.swcyvp_four = false;
		$scope.wellness = false;
		$scope.ecotourism = false;
		$scope.ew = false;
		$scope.ecotourism = document.getElementById("ecotourism").checked;
		$scope.wellness = document.getElementById("wellness").checked;
		$scope.heritage = document.getElementById("heritage").checked;
		$scope.family = document.getElementById("family").checked;
		$scope.adventure = document.getElementById("adventure").checked;
		$scope.romantic = document.getElementById("romantic").checked;		
		
		$scope.ecotourismvalue=function ()
		{
		    if($scope.ecotourism==true && $scope.wellness==false)
		    {
		    	$scope.ev = true;
		    	$scope.ewv = false;
		    	$scope.wev = false;
		    	$scope.wv = false;
		    }
		    else if($scope.ecotourism==true && $scope.wellness==true)
		    {
		    	$scope.ewv = true;
		    	$scope.wev = false;
		    	$scope.wv = false;
		    	$scope.ev = false;
		    }
		    else if($scope.ecotourism==false && $scope.wellness==false)
		    {
		    	$scope.ewv = false;
		    	$scope.wev = false;
		    	$scope.wv = false;
		    	$scope.ev = false;
		    }
		};
		
		$scope.wellnessvalue=function ()
		{
		    if($scope.wellness==true && $scope.ecotourism==false)
		    {
		    	$scope.wv = true;
		    	$scope.ewv = false;
		    	$scope.wev = false;
		    	$scope.ev = false;
		    }
		    else if($scope.wellness==true && $scope.ecotourism==true)
		    {
		    	$scope.wev = true;
		    	$scope.ewv = false;
		    	$scope.wv = false;
		    	$scope.ev = false;
		    }
		    else if($scope.wellness==false && $scope.ecotourism==false)
		    {
		    	$scope.wev = false;
		    	$scope.ewv = false;
		    	$scope.wv = false;
		    	$scope.ev = false;
		    }
		};
		
		$scope.heritagevalue=function ()
		{
		    var checked = false;
		    if($scope.heritage)
		    {
		    	checked = true;
		    }
		    return checked;
		};
				
		$scope.familyvalue=function ()
		{
		    var checked = false;
		    if($scope.family)
		    {
		    	checked = true;
		    }
		    return checked;
		};
				
		$scope.adventurevalue=function ()
		{
		    var checked = false;
		    if($scope.adventure)
		    {
		    	checked = true;
		    }
		    return checked;
		};
				
		$scope.romanticvalue=function ()
		{
		    var checked = false;
		    if($scope.romantic)
		    {
		    	checked = true;
		    }
		    return checked;
		};
	}
			
	
			
	$scope.cfcyvp_two = function() 
	{
		$scope.ecotourism = document.getElementById("ecotourism").checked;
		$scope.wellness = document.getElementById("wellness").checked;
		$scope.heritage = document.getElementById("heritage").checked;
		$scope.family = document.getElementById("family").checked;
		$scope.adventure = document.getElementById("adventure").checked;
		$scope.romantic = document.getElementById("romantic").checked;
		
		$scope.kayaking = document.getElementById("kayaking").checked;
		$scope.scuba = document.getElementById("scuba").checked;
		$scope.paragliding = document.getElementById("paragliding").checked;
		$scope.nature = document.getElementById("nature").checked;
		$scope.golf = document.getElementById("golf").checked;
		$scope.others = document.getElementById("others").checked;
		
		var echocount=0;
		$scope.ecotourismvalue=function ()
		{
			
			if(echocount==0)
			{
				$scope.scrollWin = function(x,y)
				{
					window.scrollBy(x,y);
				}
				
			}
			echocount=echocount+1;
			var checked = false;
			if($scope.ecotourism)
			{
				//alert($scope.ecotourism);
		    	checked = true;
				
					$scope.scrollWin = function(x,y)
					{
						if(echocount==1)
						{
							window.scrollBy(x,y);
						}
						
					}   
				
				
		    }
		    return checked;
		};
		
		
		var wellnesscount=0;
		$scope.wellnessvalue=function ()
		{
			if(wellnesscount==0)
			{
				$scope.scrollWin = function(x,y)
				{
					window.scrollBy(x,y);
				}
			}
			wellnesscount=wellnesscount+1;
			
		    var checked = false;
		    if($scope.wellness)
			
		    {
		    	checked = true;
				
					$scope.scrollWin = function(x,y)
					{
						if(wellnesscount==1)
						{
							window.scrollBy(x,y);
						}
					}  
				
				
		    }
		    return checked;
		};
		
		var hericount=0;
		$scope.heritagevalue=function ()
		{
			if(hericount==0)
			{
				$scope.scrollWin = function(x,y)
				{
					window.scrollBy(x,y);
				}
				
			}
			hericount=hericount+1;
		    var checked = false;
		    if($scope.heritage)
		    {
		    	checked = true;
				$scope.scrollWin = function(x,y)
				{
					if(hericount==1)
					{
						window.scrollBy(x,y);
					}
				
		
				}
		    }
		    return checked;
		};
				
		var familycount=0;		
		$scope.familyvalue=function ()
		{
			if(familycount==0)
			{
				$scope.scrollWin = function(x,y)
				{
					window.scrollBy(x,y);
				}
			}
			familycount=familycount+1;
		    var checked = false;
		    if($scope.family)
		    {
		    	checked = true;
				$scope.scrollWin = function(x,y)
				{
		
					if(familycount==1)
					{
						window.scrollBy(x,y);
					}
				
		
				}
		    }
		    return checked;
		};
				
		var advcount=0;	
		$scope.adventurevalue=function ()
		{
			if(advcount==0)
			{
				$scope.scrollWin = function(x,y)
				{
					window.scrollBy(x,y);
				}
			}
			advcount=advcount+1;
			var checked = false;
			if($scope.adventure)
			{
				checked = true;
				$scope.scrollWin = function(x,y)
				{
					if(advcount==1)
					{
						window.scrollBy(x,y);
					}
				}
			}
			return checked;
		};
				
		var romancount=0;	
		$scope.romanticvalue=function ()
		{
			if(romancount==0)
			{
				$scope.scrollWin = function(x,y)
				{
					window.scrollBy(x,y);
				}
			}

			romancount=romancount+1;
			var checked = false;
			if($scope.romantic)
			{
				checked = true;
				$scope.scrollWin = function(x,y)
				{

					if(romancount==1)
					{
						window.scrollBy(x,y);
					}
				}
			}
			return checked;
		};
		
		$scope.kayakingvalue=function ()
		{
		    var checked = false;
		    if($scope.kayaking)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.scubavalue=function ()
		{
		    var checked = false;
		    if($scope.scuba)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.paraglidingvalue=function ()
		{
		    var checked = false;
		    if($scope.paragliding)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.naturevalue=function ()
		{
		    var checked = false;
		    if($scope.nature)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.golfvalue=function ()
		{
		    var checked = false;
		    if($scope.golf)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.othersvalue=function ()
		{
		    var checked = false;
		    if($scope.others)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.headertitle = false;
		$scope.headerimg = false;
		$scope.resort = true;
		$scope.bestD=false;
		$scope.swcyvp = true;
		$scope.swcyvp_one = false;
		$scope.swcyvp_two = true;
		$scope.swcyvp_three = false;
		$scope.swcyvp_four = false;
	}
	
	$scope.cfcyvp_three = function() 
	{
		$scope.ecotourism = document.getElementById("ecotourism").checked;
		$scope.wellness = document.getElementById("wellness").checked;
		$scope.heritage = document.getElementById("heritage").checked;
		$scope.family = document.getElementById("family").checked;
		$scope.adventure = document.getElementById("adventure").checked;
		$scope.romantic = document.getElementById("romantic").checked;
		
		$scope.kayaking = document.getElementById("kayaking").checked;
		$scope.scuba = document.getElementById("scuba").checked;
		$scope.paragliding = document.getElementById("paragliding").checked;
		$scope.nature = document.getElementById("nature").checked;
		$scope.golf = document.getElementById("golf").checked;
		$scope.others = document.getElementById("others").checked;
		
		$scope.spa = document.getElementById("spa").checked;
		$scope.jakuzzi = document.getElementById("jakuzzi").checked;
		$scope.swimming = document.getElementById("swimming").checked;
		$scope.candle = document.getElementById("candle").checked;
		$scope.cafe = document.getElementById("cafe").checked;
		$scope.othersone = document.getElementById("othersone").checked;
				
		$scope.ecotourismvalue=function ()
		{
		    var checked = false;
		    if($scope.ecotourism)
		    {
		    	checked = true;
		    }
		    return checked;
		};	
		$scope.wellnessvalue=function ()
		{
		    var checked = false;
		    if($scope.wellness)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.heritagevalue=function ()
		{
		    var checked = false;
		    if($scope.heritage)
		    {
		    	checked = true;
		    }
		    return checked;
		};				
		$scope.familyvalue=function ()
		{
		    var checked = false;
		    if($scope.family)
		    {
		    	checked = true;
		    }
		    return checked;
		};				
		$scope.adventurevalue=function ()
		{
		    var checked = false;
		    if($scope.adventure)
		    {
		    	checked = true;
		    }
		    return checked;
		};				
		$scope.romanticvalue=function ()
		{
		    var checked = false;
		    if($scope.romantic)
		    {
		    	checked = true;
		    }
		    return checked;
		};	


		
		var kayacount=0;
		$scope.kayakingvalue=function ()
		{
			if(kayacount==0)
			{
				$scope.scrollWin = function(x,y)
				{
					window.scrollBy(x,y);
				}
			}
			kayacount=kayacount+1;
			var checked = false;
			if($scope.kayaking)
			{
				checked = true;
				$scope.scrollWin = function(x,y)
				{
					if(kayacount==1)
					{
						window.scrollBy(x,y);
					}
				}
			}
			return checked;
		};
		
		var scubacount=0;
		$scope.scubavalue=function ()
		{
			if(scubacount==0)
			{
				$scope.scrollWin = function(x,y)
				{
					window.scrollBy(x,y);
				}
			}
			scubacount=scubacount+1;
			var checked = false;
			if($scope.scuba)
			{
				checked = true;
				$scope.scrollWin = function(x,y)
				{

					if(scubacount==1)
					{
						window.scrollBy(x,y);
					}
				}
			}
			return checked;
		};
		
		var paracount=0;
		$scope.paraglidingvalue=function ()
		{
			if(paracount==0)
			{
				$scope.scrollWin = function(x,y)
				{
					window.scrollBy(x,y);
				}
			}
			paracount=paracount+1;
			var checked = false;
			if($scope.paragliding)
			{
				checked = true;
				$scope.scrollWin = function(x,y)
				{
					if(paracount==1)
					{
						window.scrollBy(x,y);

					}
				}
			}
			return checked;
		};
		
		var naturecount=0;
		$scope.naturevalue=function ()
		{
			if(naturecount==0)
			{
				$scope.scrollWin = function(x,y)
				{
					window.scrollBy(x,y);
				}
			}
			naturecount=naturecount+1;
			var checked = false;
			if($scope.nature)
			{
				checked = true;
				$scope.scrollWin = function(x,y)
				{
					if(naturecount==1)
					{
						window.scrollBy(x,y);
					}
				}
			}
			return checked;
		};
		
		
		var golfcount=0;
		$scope.golfvalue=function ()
		{
			if(golfcount==0)
			{
				$scope.scrollWin = function(x,y)
				{
					window.scrollBy(x,y);
				}
			}
			golfcount=golfcount+1;
			var checked = false;
			if($scope.golf)
			{
				checked = true;
				$scope.scrollWin = function(x,y)
				{
					if(golfcount==1)
					{
						window.scrollBy(x,y);
					}
				}
			}
			return checked;
		};
		
		var otherscount=0;
		$scope.othersvalue=function ()
		{
			if(otherscount==0)
			{
				$scope.scrollWin = function(x,y)
				{
					window.scrollBy(x,y);
				}
			}
			otherscount=otherscount+1;
			var checked = false;
			if($scope.others)
			{
				checked = true;
				$scope.scrollWin = function(x,y)
				{
					if(otherscount==1)
					{
						window.scrollBy(x,y);
					}
				}
			}
			return checked;
		};


		$scope.spavalue=function ()
		{
		    var checked = false;
		    if($scope.spa)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.jakuzzivalue=function ()
		{
		    var checked = false;
		    if($scope.jakuzzi)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.swimmingvalue=function ()
		{
		    var checked = false;
		    if($scope.swimming)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.candlevalue=function ()
		{
		    var checked = false;
		    if($scope.candle)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.cafevalue=function ()
		{
		    var checked = false;
		    if($scope.cafe)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.othersonevalue=function ()
		{
		    var checked = false;
		    if($scope.othersone)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.headertitle = false;
		$scope.headerimg = false;
		$scope.resort = true;
		$scope.bestD=false;
		$scope.swcyvp = true;
		$scope.swcyvp_one = false;
		$scope.swcyvp_two = false;
		$scope.swcyvp_three = true;
		$scope.swcyvp_four = false;
	}
	
	$scope.cfcyvp_four = function() 
	{
		$scope.ecotourism = document.getElementById("ecotourism").checked;
		$scope.wellness = document.getElementById("wellness").checked;
		$scope.heritage = document.getElementById("heritage").checked;
		$scope.family = document.getElementById("family").checked;
		$scope.adventure = document.getElementById("adventure").checked;
		$scope.romantic = document.getElementById("romantic").checked;
		
		$scope.kayaking = document.getElementById("kayaking").checked;
		$scope.scuba = document.getElementById("scuba").checked;
		$scope.paragliding = document.getElementById("paragliding").checked;
		$scope.nature = document.getElementById("nature").checked;
		$scope.golf = document.getElementById("golf").checked;
		$scope.others = document.getElementById("others").checked;
		
		$scope.spa = document.getElementById("spa").checked;
		$scope.jakuzzi = document.getElementById("jakuzzi").checked;
		$scope.swimming = document.getElementById("swimming").checked;
		$scope.candle = document.getElementById("candle").checked;
		$scope.cafe = document.getElementById("cafe").checked;
		$scope.othersone = document.getElementById("othersone").checked;
				
		$scope.ecotourismvalue=function ()
		{
		    var checked = false;
		    if($scope.ecotourism)
		    {
		    	checked = true;
		    }
		    return checked;
		};	
		$scope.wellnessvalue=function ()
		{
		    var checked = false;
		    if($scope.wellness)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.heritagevalue=function ()
		{
		    var checked = false;
		    if($scope.heritage)
		    {
		    	checked = true;
		    }
		    return checked;
		};	
		$scope.familyvalue=function ()
		{
		    var checked = false;
		    if($scope.family)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.adventurevalue=function ()
		{
		    var checked = false;
		    if($scope.adventure)
		    {
		    	checked = true;
		    }
		    return checked;
		};	
		$scope.romanticvalue=function ()
		{
		    var checked = false;
		    if($scope.romantic)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.kayakingvalue=function ()
		{
		    var checked = false;
		    if($scope.kayaking)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.scubavalue=function ()
		{
		    var checked = false;
		    if($scope.scuba)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.paraglidingvalue=function ()
		{
		    var checked = false;
		    if($scope.paragliding)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.naturevalue=function ()
		{
		    var checked = false;
		    if($scope.nature)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.golfvalue=function ()
		{
		    var checked = false;
		    if($scope.golf)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.othersvalue=function ()
		{
		    var checked = false;
		    if($scope.others)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.spavalue=function ()
		{
		    var checked = false;
		    if($scope.spa)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.jakuzzivalue=function ()
		{
		    var checked = false;
		    if($scope.jakuzzi)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.swimmingvalue=function ()
		{
		    var checked = false;
		    if($scope.swimming)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.candlevalue=function ()
		{
		    var checked = false;
		    if($scope.candle)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.cafevalue=function ()
		{
		    var checked = false;
		    if($scope.cafe)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.othersonevalue=function ()
		{
		    var checked = false;
		    if($scope.othersone)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.headertitle = false;
		$scope.headerimg = false;
		$scope.resort = true;
		$scope.bestD=false;
		$scope.swcyvp = true;
		$scope.swcyvp_one = false;
		$scope.swcyvp_two = false;
		$scope.swcyvp_three = false;
		$scope.swcyvp_four = true;
	}
	
	
	$scope.submit_recommend=function()
	{
		$scope.ecotourism = document.getElementById("ecotourism").checked;
		$scope.wellness = document.getElementById("wellness").checked;
		$scope.heritage = document.getElementById("heritage").checked;
		$scope.family = document.getElementById("family").checked;
		$scope.adventure = document.getElementById("adventure").checked;
		$scope.romantic = document.getElementById("romantic").checked;
		$scope.kayaking = document.getElementById("kayaking").checked;
		$scope.scuba = document.getElementById("scuba").checked;
		$scope.paragliding = document.getElementById("paragliding").checked;
		$scope.nature = document.getElementById("nature").checked;
		$scope.golf = document.getElementById("golf").checked;
		$scope.others = document.getElementById("others").checked;
		$scope.spa = document.getElementById("spa").checked;
		$scope.jakuzzi = document.getElementById("jakuzzi").checked;
		$scope.swimming = document.getElementById("swimming").checked;
		$scope.candle = document.getElementById("candle").checked;
		$scope.cafe = document.getElementById("cafe").checked;
		$scope.othersone = document.getElementById("othersone").checked;
				
		$scope.ecotourismvalue=function ()
		{
		    var checked = false;
		    if($scope.ecotourism)
		    {
		    	checked = true;
		    }
		    return checked;
		};	
		$scope.wellnessvalue=function ()
		{
		    var checked = false;
		    if($scope.wellness)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.heritagevalue=function ()
		{
		    var checked = false;
		    if($scope.heritage)
		    {
		    	checked = true;
		    }
		    return checked;
		};	
		$scope.familyvalue=function ()
		{
		    var checked = false;
		    if($scope.family)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.adventurevalue=function ()
		{
		    var checked = false;
		    if($scope.adventure)
		    {
		    	checked = true;
		    }
		    return checked;
		};	
		$scope.romanticvalue=function ()
		{
		    var checked = false;
		    if($scope.romantic)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.kayakingvalue=function ()
		{
		    var checked = false;
		    if($scope.kayaking)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.scubavalue=function ()
		{
		    var checked = false;
		    if($scope.scuba)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.paraglidingvalue=function ()
		{
		    var checked = false;
		    if($scope.paragliding)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.naturevalue=function ()
		{
		    var checked = false;
		    if($scope.nature)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.golfvalue=function ()
		{
		    var checked = false;
		    if($scope.golf)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.othersvalue=function ()
		{
		    var checked = false;
		    if($scope.others)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.spavalue=function ()
		{
		    var checked = false;
		    if($scope.spa)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.jakuzzivalue=function ()
		{
		    var checked = false;
		    if($scope.jakuzzi)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.swimmingvalue=function ()
		{
		    var checked = false;
		    if($scope.swimming)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.candlevalue=function ()
		{
		    var checked = false;
		    if($scope.candle)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.cafevalue=function ()
		{
		    var checked = false;
		    if($scope.cafe)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.othersonevalue=function ()
		{
		    var checked = false;
		    if($scope.othersone)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		$scope.fromd = document.getElementById("fromd").value;
		$scope.tod = document.getElementById("tod").value;
		$http.post('checklog.php',{"place": $scope.place, "fromd": $scope.fromd, "tod": $scope.tod, "guests": $scope.guests, "budget": $scope.budget, "star": $scope.star,"ecotourism": $scope.ecotourism,"wellness": $scope.wellness,"heritage": $scope.heritage,"family": $scope.family,"adventure": $scope.adventure,"romantic": $scope.romantic,"kayaking": $scope.kayaking,"scuba": $scope.scuba,"paragliding": $scope.paragliding,"nature": $scope.nature,"golf": $scope.golf,"others": $scope.others,"spa": $scope.spa,"jakuzzi": $scope.jakuzzi,"swimming": $scope.swimming,"candle": $scope.candle,"cafe": $scope.cafe,"othersone": $scope.othersone})
		.success(function (data, status, headers, config)
		{
			if(data=="Login")
			{
				//window.location.href="FBLogin.php";
    			var printContents = document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';
			}
			else
			{
				window.location.href="eorr.php";
			}
		})
		
		.error(function (data, status, headers, config)
		{
			
		});		
	}
	
	$scope.imgclickprop=function(a)
	{
		$scope.image = a;
		$http.post('checkpropimage.php',{'placeimg':$scope.image})
		.success(function (data, status, headers, config)
		{
			$scope.guest = data['guests'];
			//alert($scope.guest);
			window.location.href="eorr.php";
		})
		
		.error(function (data, status, headers, config)
		{
			
		});
		
	}
	
	/*Best Deals Starts Here*/		
		$scope.bestdeals = function() 
		{
			$scope.headertitle=false;
			$scope.headerimg=false;
			$scope.wellness = false;
			$scope.ecotourism = false;
			$scope.ew = false;
			$scope.resort=false;
			$scope.bestD=true;
		}
		$scope.bcfcyvp = function() 
		{
			$scope.fromd = document.getElementById("bfromd").value;
			$scope.tod = document.getElementById("btod").value;
			$http.post('checkbestlog.php',{"place": $scope.place, "fromd": $scope.fromd, "tod": $scope.tod, "guests": $scope.guests, "budget": $scope.budget, "star": $scope.star}) .success(function (data, status, headers, config)
			{
				if(data=="Login")
				{
	    			var printContents = document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';
				}
				else
				{
					window.location.href="eorr.php";
				}
			})
			
			.error(function (data, status, headers, config)
			{
			});
		}
	/*Best Deals Ends Here*/
	
	/* checkbox filter start*/
	$scope.getproperty = function() 
	{
		$http.post('demo.php')
		.success(function (data, status, headers, config)
		{
			$scope.fecotourism=data['fecotourism'];
			$scope.fwellness=data['fwellness'];
			$scope.fheritage=data['fheritage'];
			$scope.ffamily=data['ffamily'];
			$scope.fadventure=data['fadventure'];
			$scope.fromantic=data['fromantic'];
			$scope.fswimming=data['fswimming'];
			$scope.guest=data['guests'];
			$scope.budget=data['budget'];
			
			$scope.fspa=data['fspa'];
			$scope.fjakuzzi=data['fjakuzzi'];
			$scope.fcafe=data['fcafe'];
			
			$http.post('get_property.php',{ 
				'fecotourism':$scope.fecotourism,
				'fwellness':$scope.fwellness,
				'fheritage':$scope.fheritage,
				'ffamily':$scope.ffamily,
				'fadventure':$scope.fadventure,
				'fromantic':$scope.fromantic,
				'fswimming':$scope.fswimming,
				'fspa':$scope.fspa,
				'fjakuzzi':$scope.fjakuzzi,
				'fcafe':$scope.fcafe,
			})
			.success(function (data, status, headers, config)
			{
				//change
				if(data!="null")
				{
					//alert("true");
					$scope.pagedItems = data;
					$scope.Empty=false;
				}
				else
				{
					//alert("false");
					$scope.propertylist1=false;
					$scope.Empty=true;
				}
			});
			
			
		/*Map on load start*/		
		    $scope.markers = [];
		    $scope.cities = [];
		   
		    var infoWindow = new google.maps.InfoWindow({pixelOffset: new google.maps.Size(0,60)});
			
			var activeInfoWindow;
			var activeInfoWindow2;
		    
            $scope.inst="";	
		
		    $http.post('filterpropmap.php',{ 
				'fecotourism':$scope.fecotourism,
				'fwellness':$scope.fwellness,
				'fheritage':$scope.fheritage,
				'ffamily':$scope.ffamily,
				'fadventure':$scope.fadventure,
				'fromantic':$scope.fromantic,
				'fswimming':$scope.fswimming,
				'fspa':$scope.fspa,
				'fjakuzzi':$scope.fjakuzzi,
				'fcafe':$scope.fcafe,
			}).
		        success(function (data) {
		
		            $scope.cities = data.countryList;
			var mapOptions = {
		        zoom: 10,
		        center: new google.maps.LatLng($scope.cities[0]['latitude'],$scope.cities[0]['longitude']),
		        mapTypeId: google.maps.MapTypeId.ROADMAP
		    }
		
		    $scope.map = new google.maps.Map(document.getElementById('map'), mapOptions);
		    
		            $scope.cities.forEach(function(city) {
		                createMarker(city);
		            });        
		        });
		
		    var createMarker = function(city)
			{
			
			    var boxText = document.createElement("div");				
				boxText.innerHTML = city.popup;
			
				var boxTextinfo = document.createElement("div");				
				boxTextinfo.innerHTML = '<div class="eorrinfowindow">' + city.image + '<span class="popuptitle">' + city.city + '</span>' + city.ratings + city.price + city.amenities + city.activities + city.airport + city.railwaystation + city.busstation + city.button + '</div>';
				
				var myOptions = {
				content: boxText,
				disableAutoPan: false,
				maxWidth: 0,
				//pixelOffset: new google.maps.Size(-140, 0),
				pixelOffset: new google.maps.Size(-41, -38),
				zIndex: null,
				boxStyle: {
				  opacity: 1,				  
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
				pixelOffset: new google.maps.Size(-100, -50),
				zIndex: null,
				boxStyle: {
				  opacity: 1,
				  //width: "220px"				  
				 },
				closeBoxMargin: "2px 2px 2px 2px",
				closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
				infoBoxClearance: new google.maps.Size(1, 1),
				alignBottom: true
			//	isHidden: false,
				//pane: "floatPane",
			//	enableEventPropagation: false
			};
				
			
				var ib = new InfoBox(myOptions);
				var ibinfo = new InfoBox(myOptionsinfo);
				if(city.pinstantbooking==1)
				{
					$scope.inst='images/Address-Icon.png';		
				}	
				else
				{
					$scope.inst='images/Orange-ICon-1.png';
				}
			    var marker = new google.maps.Marker({
		            map: $scope.map,
					icon: $scope.inst,
		            position: new google.maps.LatLng(city.latitude, city.longitude),
		        });
		        
		       		 
		        google.maps.event.addListener(
		                    marker,
		                    'click', (function(marker, $scope) {
								ib.open($scope.map, marker);
		                        return function() {
		                        };
		                    })(marker, $scope)
		                );
		
		                $scope.markers.push(marker);
				  google.maps.event.addListener(
		                    marker,
		                    'click', (function(marker, $scope) {
								
		                        return function() {
		                        ibinfo.open($scope.map, marker);
								};
		                    })(marker, $scope)
		                );
		
		                $scope.markers.push(marker);		
						
		    };
		/*Map on load start*/
			
			
			
			
			
			//ecotourism
			if(data['fecotourism']==1)
			{
				document.getElementById("ecotourism").checked = true;
			}
			else
			{
				document.getElementById("ecotourism").checked = false;
			}
				
			//wellness_n_care
			if(data['fwellness']==1)
			{
				document.getElementById("wellness_n_care").checked = true;
			}
			else
			{
				document.getElementById("wellness_n_care").checked = false;
			}
				
			//heritage_n_spirituality
			if(data['fheritage']==1)
			{
				document.getElementById("heritage_n_spirituality").checked = true;
			}
			else
			{
				document.getElementById("heritage_n_spirituality").checked = false;
			}
			
			//family_n_kids
			if(data['ffamily']==1)
			{
				document.getElementById("family_n_kids").checked = true;
			}
			else
			{
				document.getElementById("family_n_kids").checked = false;
			}
			
			//adventure_n_explore
			if(data['fadventure']==1)
			{
				document.getElementById("adventure_n_explore").checked = true;
			}
			else
			{
				document.getElementById("adventure_n_explore").checked = false;
			}
				
			//romantic_holiday
			if(data['fromantic']==1)
			{
				document.getElementById("romantic_holiday").checked = true;
			}
			else
			{
				document.getElementById("romantic_holiday").checked = false;
			}
				
			
			//romantic_holiday
			if(data['fswimming']==1)
			{
				document.getElementById("swimmingpool").checked = true;
			}
			else
			{
				document.getElementById("swimmingpool").checked = false;
			}
			
			//fspa
			if(data['fspa']==1)
			{
				document.getElementById("spa").checked = true;
			}
			else
			{
				document.getElementById("spa").checked = false;
			}
			
			//fjakuzzi
			if(data['fjakuzzi']==1)
			{
				document.getElementById("jacuzzi").checked = true;
			}
			else
			{
				document.getElementById("jacuzzi").checked = false;
			}
			
			//fcafe
			if(data['fcafe']==1)
			{
				document.getElementById("cafe").checked = true;
			}
			else
			{
				document.getElementById("cafe").checked = false;
			}
				
		})
		.error(function(data, status, headers, config)
		{
			
		});
	}
	
	$scope.dwonarrow=false;
	$scope.uparrow=true;
	$scope.moreoption=false;
	$scope.showmore=true;
	$scope.aminities=false;
	$scope.propertylist=true;
	$scope.propertylist1=false;
	$scope.Empty=false;
	
	$scope.showfilter = function() 
	{
		$scope.propertylist=false;
		$scope.moreoption =true;
		$scope.showmore=false;
		$scope.propertylist1=false;
		$scope.Empty=false;
	}
	$scope.cancle = function() 
	{
		$scope.moreoption =false;
		$scope.showmore=true;
		$scope.aminities=false;
		$scope.dwonarrow=false;
		$scope.uparrow=true;
		$scope.propertylist=true;
		$scope.propertylist1=false;
		$scope.propertylist2=false;
		$scope.Empty=false;
	}
	
	$scope.filterprop = function() 
	{
		
		
		
		
		$scope.moreoption =false;
		$scope.showmore=true;
		$scope.aminities=false;
		$scope.dwonarrow=false;
		$scope.uparrow=true;
		$scope.propertylist=false;
		$scope.propertylist1=true;
		$scope.propertylist2=false;
		$scope.Empty=false;
		
		$scope.place = document.getElementById("place").value;
		$scope.fromd = document.getElementById("fromd").value;
		$scope.tod = document.getElementById("tod").value;		
		$scope.budget = document.getElementById("budget").value;
		$scope.guest = document.getElementById("guest").value;
		
		
		$http.post('datelog.php',{"fromd":$scope.fromd,"tod":$scope.tod,"guest":$scope.guest})
						.success(function (data, status, headers, config)
						{
								
						})
		
						.error(function (data, status, headers, config)
						{
			
						});
		
		
		
		//alert($scope.place + $scope.fromd + $scope.tod + $scope.budget + $scope.guests);
		
		//choice
		$scope.ecotourism = document.getElementById("ecotourism").checked;
		$scope.wellness_n_care = document.getElementById("wellness_n_care").checked;
		$scope.heritage_n_spirituality = document.getElementById("heritage_n_spirituality").checked;
		$scope.family_n_kids = document.getElementById("family_n_kids").checked;
		$scope.adventure_n_explore = document.getElementById("adventure_n_explore").checked;
		$scope.romantic_holiday = document.getElementById("romantic_holiday").checked;
		
		
		//aminities
		$scope.wireless_internet = document.getElementById("wireless_internet").checked;
		$scope.tv = document.getElementById("tv").checked;
		$scope.kitchen = document.getElementById("kitchen").checked;
		$scope.check_in = document.getElementById("check_in").checked;
		$scope.saftycard = document.getElementById("saftycard").checked;
		$scope.indoorgame = document.getElementById("indoorgame").checked;
		$scope.cabletv = document.getElementById("cabletv").checked;
		$scope.smokingallowed = document.getElementById("smokingallowed").checked;
		$scope.outdoorgame = document.getElementById("outdoorgame").checked;
		$scope.gym = document.getElementById("gym").checked;
		$scope.wheelchairaccess = document.getElementById("wheelchairaccess").checked;
		$scope.kidsplayarea = document.getElementById("kidsplayarea").checked;
		$scope.heating = document.getElementById("heating").checked;	
		$scope.breakfast = document.getElementById("breakfast").checked;	
		$scope.yoga = document.getElementById("yoga").checked;	
		$scope.internet = document.getElementById("internet").checked;	
		$scope.wiintercom = document.getElementById("wiintercom").checked;	
		$scope.ac = document.getElementById("ac").checked;	
		$scope.freeparking = document.getElementById("freeparking").checked;	
		$scope.swimmingpool = document.getElementById("swimmingpool").checked;	
		$scope.petsallowed = document.getElementById("petsallowed").checked;	
		$scope.barnrestro = document.getElementById("barnrestro").checked;	
		$scope.roomservice = document.getElementById("roomservice").checked;	
		$scope.businesscentre = document.getElementById("businesscentre").checked;
		$scope.lounge = document.getElementById("lounge").checked;
		$scope.conferencehall = document.getElementById("conferencehall").checked;
		$scope.shopping = document.getElementById("shopping").checked;
		$scope.ayurvedacentre = document.getElementById("ayurvedacentre").checked;
		$scope.laundry = document.getElementById("laundry").checked;
		$scope.security = document.getElementById("security").checked;
		$scope.airtrans = document.getElementById("airtrans").checked;
		$scope.atmbank = document.getElementById("atmbank").checked;
		$scope.hotcold = document.getElementById("hotcold").checked;
		$scope.firstaidkit = document.getElementById("firstaidkit").checked;
		$scope.hairdryer = document.getElementById("hairdryer").checked;
		$scope.hottub = document.getElementById("hottub").checked;
		$scope.suitableforevents = document.getElementById("suitableforevents").checked;
		
		$scope.spa = document.getElementById("spa").checked;
		$scope.jacuzzi = document.getElementById("jacuzzi").checked;
		$scope.cafe = document.getElementById("cafe").checked;
		
		
		$scope.wellnessvalue=function ()
		{
		    var checked = false;
		    if($scope.wellness)
		    {
		    	checked = true;
		    }
		    return checked;
		};
		
		
		
		
		$http.post('filterproerty.php',{
		'place':$scope.place,
		'fromd':$scope.fromd,
		'tod':$scope.tod,
		'budget':$scope.budget,
		'guests':$scope.guest,
		'ecotourism':$scope.ecotourism,
		'wellness_n_care':$scope.wellness_n_care,
		'heritage_n_spirituality':$scope.heritage_n_spirituality,
		'family_n_kids':$scope.family_n_kids,
		'adventure_n_explore':$scope.adventure_n_explore,
		'romantic_holiday':$scope.romantic_holiday,
		'wireless_internet':$scope.wireless_internet,
		'tv':$scope.tv,
		'kitchen':$scope.kitchen,
		'check_in':$scope.check_in,
		'saftycard':$scope.saftycard,
		'indoorgame':$scope.indoorgame,
		'cabletv':$scope.cabletv,
		'smokingallowed':$scope.smokingallowed,
		'outdoorgame':$scope.outdoorgame,
		'gym':$scope.gym,
		'wheelchairaccess':$scope.wheelchairaccess,
		'kidsplayarea':$scope.kidsplayarea,
		'heating':$scope.heating,
		'breakfast':$scope.breakfast,
		'yoga':$scope.yoga,
		'internet':$scope.internet,
		'wiintercom':$scope.wiintercom,
		'ac':$scope.ac,
		'freeparking':$scope.freeparking,
		'swimmingpool':$scope.swimmingpool,
		'petsallowed':$scope.petsallowed,
		'barnrestro':$scope.barnrestro,
		'roomservice':$scope.roomservice,
		'businesscentre':$scope.businesscentre,
		'lounge':$scope.lounge,
		'conferencehall':$scope.conferencehall,
		'shopping':$scope.shopping,
		'ayurvedacentre':$scope.ayurvedacentre,
		'laundry':$scope.laundry,
		'security':$scope.security,
		'airtrans':$scope.airtrans,
		'atmbank':$scope.atmbank,
		'hotcold':$scope.hotcold,
		'firstaidkit':$scope.firstaidkit,
		'hairdryer':$scope.hairdryer,
		'hottub':$scope.hottub,
		'suitableforevents':$scope.suitableforevents,
		'spa':$scope.spa,
		'jacuzzi':$scope.jacuzzi,
		'cafe':$scope.cafe,
		}) 
		.success(function (data, status, headers, config)
		{
			
			//change
			if(data!="")
			{	
				$scope.pagedItems1 = data;
				$scope.Empty=false;
			}
			else
			{
				$scope.propertylist1=false;
				$scope.Empty=true;
			}
		});
		
		/* map filter start */

    $scope.markers = [];
    $scope.cities = [];
   
    var infoWindow = new google.maps.InfoWindow({maxWidth:500,maxHeight:500});
	
	var activeInfoWindow;
	var activeInfoWindow2;
	
       $http.post('filterpropmapchek.php',{ 
		'place':$scope.place,
		'fromd':$scope.fromd,
		'tod':$scope.tod,
		'budget':$scope.budget,
		'guests':$scope.guest,
		'ecotourism':$scope.ecotourism,
		'wellness_n_care':$scope.wellness_n_care,
		'heritage_n_spirituality':$scope.heritage_n_spirituality,
		'family_n_kids':$scope.family_n_kids,
		'adventure_n_explore':$scope.adventure_n_explore,
		'romantic_holiday':$scope.romantic_holiday,
		'wireless_internet':$scope.wireless_internet,
		'tv':$scope.tv,
		'kitchen':$scope.kitchen,
		'check_in':$scope.check_in,
		'saftycard':$scope.saftycard,
		'indoorgame':$scope.indoorgame,
		'cabletv':$scope.cabletv,
		'smokingallowed':$scope.smokingallowed,
		'outdoorgame':$scope.outdoorgame,
		'gym':$scope.gym,
		'wheelchairaccess':$scope.wheelchairaccess,
		'kidsplayarea':$scope.kidsplayarea,
		'heating':$scope.heating,
		'breakfast':$scope.breakfast,
		'yoga':$scope.yoga,
		'internet':$scope.internet,
		'wiintercom':$scope.wiintercom,
		'ac':$scope.ac,
		'freeparking':$scope.freeparking,
		'swimmingpool':$scope.swimmingpool,
		'petsallowed':$scope.petsallowed,
		'barnrestro':$scope.barnrestro,
		'roomservice':$scope.roomservice,
		'businesscentre':$scope.businesscentre,
		'lounge':$scope.lounge,
		'conferencehall':$scope.conferencehall,
		'shopping':$scope.shopping,
		'ayurvedacentre':$scope.ayurvedacentre,
		'laundry':$scope.laundry,
		'security':$scope.security,
		'airtrans':$scope.airtrans,
		'atmbank':$scope.atmbank,
		'hotcold':$scope.hotcold,
		'firstaidkit':$scope.firstaidkit,
		'hairdryer':$scope.hairdryer,
		'hottub':$scope.hottub,
		'suitableforevents':$scope.suitableforevents,
		'spa':$scope.spa,
		'jacuzzi':$scope.jacuzzi,
		'cafe':$scope.cafe,
		}).
        success(function (data) {        	
			if(data['countryList']!="")
			{
	            $scope.cities = data.countryList;
	            
				var mapOptions = {
			        zoom: 10,
			        center: new google.maps.LatLng($scope.cities[0]['latitude'],$scope.cities[0]['longitude']),
			        mapTypeId: google.maps.MapTypeId.ROADMAP
			    }
			
			    $scope.map = new google.maps.Map(document.getElementById('map'), mapOptions);
	            $scope.cities.forEach(function(city) {
	                createMarker(city);
	            });  
            }
            else
            {
            	var mapOptions = { zoom: 8, center: new google.maps.LatLng($scope.lat,$scope.lng), mapTypeId: google.maps.MapTypeId.ROADMAP }
						$scope.map = new google.maps.Map(document.getElementById('map'), mapOptions);
            }      
        }); 
		
    var createMarker = function(city)
			{
			
			    var boxText = document.createElement("div");				
				boxText.innerHTML = city.popup;
			
				var boxTextinfo = document.createElement("div");				
				boxTextinfo.innerHTML = '<div class="eorrinfowindow">' + city.image + '<span class="popuptitle">' + city.city + '</span>' + city.ratings + city.price + city.amenities + city.activities + city.airport + city.railwaystation + city.busstation + city.button + '</div>';
				
				var myOptions = {
				content: boxText,
				disableAutoPan: false,
				maxWidth: 0,
				//pixelOffset: new google.maps.Size(-140, 0),
				pixelOffset: new google.maps.Size(-41, -38),
				zIndex: null,
				boxStyle: {
				  opacity: 1,			  
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
				pixelOffset: new google.maps.Size(-100, -30),
				zIndex: null,
				boxStyle: {
				  opacity: 1,
				  //width: "220px"				  
				 },
				closeBoxMargin: "2px 2px 2px 2px",
				closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
				infoBoxClearance: new google.maps.Size(1, 1),
				alignBottom: true
			//	isHidden: false,
				//pane: "floatPane",
			//	enableEventPropagation: false
			};
				
			
				var ib = new InfoBox(myOptions);
				var ibinfo = new InfoBox(myOptionsinfo);
				if(city.pinstantbooking==1)
				{
					$scope.inst='images/Address-Icon.png';		
				}	
				else
				{
					$scope.inst='images/Orange-ICon-1.png';
				}
			    var marker = new google.maps.Marker({
		            map: $scope.map,
					icon: $scope.inst,
		            position: new google.maps.LatLng(city.latitude, city.longitude),
		        });
		        
		       		 
		        google.maps.event.addListener(
		                    marker,
		                    'click', (function(marker, $scope) {
								ib.open($scope.map, marker);
		                        return function() {
		                        };
		                    })(marker, $scope)
		                );
		
		                $scope.markers.push(marker);
				  google.maps.event.addListener(
		                    marker,
		                    'click', (function(marker, $scope) {
								
		                        return function() {
		                        ibinfo.open($scope.map, marker);
								};
		                    })(marker, $scope)
		                );
		
		                $scope.markers.push(marker);		
						
		    };
		
	/* map filter end */	
	}
	/*Map Search Starts Here*/ 
		$scope.propertiesdata = [];
		
		$http({method: 'GET',url: 'getproperties.php',data: { applicationId: 3 }}).success(function (data) 
		{
			$scope.propertiesdata = data;
		});
		
		$scope.getprop = function(site) 
		{
			$scope.city = site.name;
			//alert($scope.city); 						
			/*Search Listing Starts Here*/
				$scope.moreoption=false;
				$scope.showmore=true;
				$scope.aminities=false;
				$scope.dwonarrow=false;
				$scope.uparrow=false;
				$scope.propertylist=false;
				$scope.propertylist1=false;
				$scope.propertylist2=true;
				
				$http.post('mapsearch_filterproerty.php',{ 'place':$scope.city }) 
				.success(function (data, status, headers, config)
				{
					$scope.pagedItems2 = data;	
					if(data[0])
					{
						$scope.Empty=false;
						$scope.lat = data[0]['latitude'];
						$scope.lng = data[0]['longitude'];
						$scope.loca = data[0]['ftitle'];
						$scope.markers = [];
						$scope.cities = [];
						
						var infoWindow = new google.maps.InfoWindow({pixelOffset: new google.maps.Size(0,15)});
						
						var activeInfoWindow;
						var activeInfoWindow2;
						
						$http.post('mapsearch.php',{'location':$scope.city,'lat':$scope.lat,'lng':$scope.lng}).success(function (data) {
								
							$scope.cities = data.countryList;
							
							var mapOptions = { zoom: 10, center: new google.maps.LatLng($scope.cities[0]['latitude'],$scope.cities[0]['longitude']), mapTypeId: google.maps.MapTypeId.ROADMAP }
							
							$scope.map = new google.maps.Map(document.getElementById('map'), mapOptions);
							$scope.cities.forEach(function(city) { createMarker(city); });
						});
						
						var createMarker = function(city)
						{
			
								if(city.pinstantbooking==1)
								{
										$scope.inst='images/Address-Icon.png';		
								}	
								else
								{
										$scope.inst='images/Orange-ICon-1.png';
								}
								var marker = new google.maps.Marker({
									map: $scope.map,
									icon: $scope.inst,
									position: new google.maps.LatLng(city.latitude, city.longitude),
								});
								var boxText = document.createElement("div");				
								boxText.innerHTML = city.popup;
			
								var boxTextinfo = document.createElement("div");				
								boxTextinfo.innerHTML = '<div class="eorrinfowindow">' + city.image + '<span class="popuptitle">' + city.city + '</span>' + city.ratings + city.price + city.amenities + city.activities + city.airport + city.railwaystation + city.busstation + city.button + '</div>';
				
								var myOptions = {
									content: boxText,
									disableAutoPan: false,
									maxWidth: 0,
									//pixelOffset: new google.maps.Size(-140, 0),
									pixelOffset: new google.maps.Size(-41, -38),
									zIndex: null,
									boxStyle: {
											opacity: 1,
										//	width: "150px"				  
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
											pixelOffset: new google.maps.Size(-100, -30),
											zIndex: null,
											boxStyle: {
												opacity: 1,
												//width: "220px"				  
											},
											closeBoxMargin: "2px 2px 2px 2px",
											closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
											infoBoxClearance: new google.maps.Size(1, 1),
											alignBottom: true
											//	isHidden: false,
											//pane: "floatPane",
											//	enableEventPropagation: false
								};
				
			
				var ib = new InfoBox(myOptions);
				var ibinfo = new InfoBox(myOptionsinfo);
				
		        
		       		 
		        google.maps.event.addListener(
		                    marker,
		                    'click', (function(marker, $scope) {
								ib.open($scope.map, marker);
		                        return function() {
		                        };
		                    })(marker, $scope)
		                );
		
		                $scope.markers.push(marker);
				  google.maps.event.addListener(
		                    marker,
		                    'click', (function(marker, $scope) {
								
		                        return function() {
		                        ibinfo.open($scope.map, marker);
								};
		                    })(marker, $scope)
		                );
		
		                $scope.markers.push(marker);		
						
		    };
						$scope.$apply();
					}
					else
					{
						var mapOptions = { zoom: 8, center: new google.maps.LatLng($scope.lat,$scope.lng), mapTypeId: google.maps.MapTypeId.ROADMAP }
						$scope.map = new google.maps.Map(document.getElementById('map'), mapOptions);
					}
				});
			/*Search Listing Ends Here*/
		};
	 /*Map Search Ends Here*/
	$scope.dwonarrowfun = function() 
	{
		$scope.dwonarrow=true;
		$scope.uparrow=false;
		$scope.aminities=true;
	}
	$scope.uparrowfun = function() 
	{
		$scope.dwonarrow=false;
		$scope.uparrow=true;
		$scope.aminities=false;
	}
	/*Check box filter end*/
	
	
	/*instent book label start*/
	$scope.showinstantlabel = function() 
	{
		$scope.instantlabel=true;
	}
	$scope.hideinstantlabel = function() 
	{
		$scope.instantlabel=false;
	}
	/*instent book label end*/
	
	/*Wish List Start*/
	
	$scope.dispwishlist = function() 
	{
		$scope.Fbuid = document.getElementById("Fbuid").value;
		$http.post("get_wishlist.php", {'fbid':$scope.Fbuid}).success(function(data)
		{  
			$scope.wishlistItems = data;
		});
		
	}
	$scope.addwishlist = function(id,fid) 
	{		
		if(fid!=null )
		{	
			$scope.Fbuid = document.getElementById("Fbuid").value;
			//alert($scope.Fbuid);
			$http.post('get_wishprop_check.php',{ 'pid':id})
			.success(function (data, status, headers, config)
			{
				$scope.property_id=data[0]["propid"];
				if(id==$scope.property_id)
				{
					$scope.Fbuid = document.getElementById("Fbuid").value;
					$http.post("get_wishlist.php", {'fbid':$scope.Fbuid}).success(function(data)
					{  
						$scope.wishlistItems = data;
					});
					
				}
				else
				{
					$scope.Fbuid = document.getElementById("Fbuid").value;
					$http.post('add_wishlist.php',{"pid":id,"fbid":$scope.Fbuid})
					.success(function (data, status, headers, config)
					{
						$scope.Fbuid = document.getElementById("Fbuid").value;
						$http.post("get_wishlist.php", {'fbid':$scope.Fbuid}).success(function(data)
						{  
							$scope.wishlistItems = data;
						});
					})
					.error(function (data, status, headers, config)
					{
				
					});					
				}					
			})
			.error(function(data, status, headers, config)
			{
			
			});
		}
		else
		{
			var printContents = document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';
		}			
	}
	/*Wish List Start*/
	
	$scope.id = function() 
	{		
  		$scope.pid = document.getElementById("pid").value;		
		$http.post('checkexplore.php',{"pid": $scope.pid})
		.success(function (data, status, headers, config)
		{
		})
		
		.error(function (data, status, headers, config)
		{
			
		});
	}
	
}]);