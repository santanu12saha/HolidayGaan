var app=angular.module('myApp', ['angularUtils.directives.dirPagination']);
app.controller('formCtrl', function($scope,$http) 
{
	$scope.editform=false;
	$scope.view=false;
	$scope.url='adddb_property';
	
	//load property type start here
	$scope.getptype= function()
	{
		$scope.list=true;
      
		$http.get("load_property_type").success(function(data)
		{  
			$scope.propertyType = data;
			//alert(data);
		});
    }
	//load property type end here
	
	$scope.add = function()
	{
		//alert("sdf");
		var answer = confirm("Do you want to Submit?")
		if (!answer)
		{               
		}
		else
		{	
			//amenities
			$scope.wifi = document.getElementById("wifi").checked;
			$scope.tv = document.getElementById("tv").checked;
			$scope.kitchen = document.getElementById("kitchen").checked;
			$scope.checkin = document.getElementById("checkin").checked;
			$scope.safetycard = document.getElementById("safetycard").checked;
			$scope.indoorgame = document.getElementById("indoorgame").checked;
			$scope.cabletv = document.getElementById("cabletv").checked;
			$scope.smokingallowed = document.getElementById("smokingallowed").checked;
			$scope.outdoorgame = document.getElementById("outdoorgame").checked;
			$scope.gym = document.getElementById("gym").checked;
			$scope.wheelchair = document.getElementById("wheelchair").checked;
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
			$scope.busscenter = document.getElementById("busscenter").checked;
			$scope.lounge = document.getElementById("lounge").checked;
			$scope.conferencehall = document.getElementById("conferencehall").checked;
			$scope.shopping = document.getElementById("shopping").checked;
			$scope.ayurvedacenter = document.getElementById("ayurvedacenter").checked;
			$scope.laundry = document.getElementById("laundry").checked;
			$scope.security = document.getElementById("security").checked;
			$scope.airporttrasport = document.getElementById("airporttrasport").checked;
			$scope.atminresort = document.getElementById("atminresort").checked;
			$scope.hotcoldwater = document.getElementById("hotcoldwater").checked;
			$scope.firstaidkit = document.getElementById("firstaidkit").checked;
			$scope.hairdryer = document.getElementById("hairdryer").checked;
			$scope.hottub = document.getElementById("hottub").checked;
			$scope.suitableforwvent = document.getElementById("suitableforwvent").checked;
			
			$scope.spa = document.getElementById("spa").checked;
			$scope.jacuzzi = document.getElementById("jacuzzi").checked;
			$scope.finedinig = document.getElementById("finedinig").checked;
			$scope.caffe = document.getElementById("caffe").checked;
			
			
			//best for
			
			$scope.ecotourism = document.getElementById("ecotourism").checked;
			$scope.wellness_n_care = document.getElementById("wellness_n_care").checked;
			$scope.heritage_n_spirituality = document.getElementById("heritage_n_spirituality").checked;
			$scope.family_n_kids = document.getElementById("family_n_kids").checked;
			$scope.adventure_n_explore = document.getElementById("adventure_n_explore").checked;
			$scope.romantic_holiday = document.getElementById("romantic_holiday").checked;
			
			//instance booking
			$scope.instantbooking = document.getElementById("instantbooking").checked;
			
			
			$http.post($scope.url,{
			
			"pname":$scope.pname,
			"paddress":$scope.paddress,
			"conno":$scope.conno,
			"location":$scope.location,
			"description":$scope.description,
			"latitude":$scope.latitude,
			"longitude":$scope.longitude,
			
			"rating":$scope.rating,
			"tripaddrating":$scope.tripaddrating,
			"extraperson":$scope.extraperson,
			"child":$scope.child,
			
			"cancellingpolicy":$scope.cancellingpolicy,
			"wifi":$scope.wifi,
			"tv":$scope.tv,
			"kitchen":$scope.kitchen,
			"checkin":$scope.checkin,
			"safetycard":$scope.safetycard,
			"indoorgame":$scope.indoorgame,
			"cabletv":$scope.cabletv,
			"smokingallowed":$scope.smokingallowed,
			"outdoorgame":$scope.outdoorgame,
			"gym":$scope.gym,
			"wheelchair":$scope.wheelchair,
			"kidsplayarea":$scope.kidsplayarea,
			"heating":$scope.heating,
			"breakfast":$scope.breakfast,
			"yoga":$scope.yoga,
			"internet":$scope.internet,
			"wiintercom":$scope.wiintercom,
			"ac":$scope.ac,
			"freeparking":$scope.freeparking,
			"swimmingpool":$scope.swimmingpool,
			"petsallowed":$scope.petsallowed,
			"barnrestro":$scope.barnrestro,
			"roomservice":$scope.roomservice,
			"busscenter":$scope.busscenter,
			"lounge":$scope.lounge,
			"conferencehall":$scope.conferencehall,
			"shopping":$scope.shopping,
			"ayurvedacenter":$scope.ayurvedacenter,
			"laundry":$scope.laundry,
			"security":$scope.security,
			"airporttrasport":$scope.airporttrasport,
			"atminresort":$scope.atminresort,
			"hotcoldwater":$scope.hotcoldwater,
			"firstaidkit":$scope.firstaidkit,
			"hairdryer":$scope.hairdryer,
			"hottub":$scope.hottub,
			"suitableforwvent":$scope.suitableforwvent,
			
			"spa":$scope.spa,
			"jacuzzi":$scope.jacuzzi,
			"finedinig":$scope.finedinig,
			"caffe":$scope.caffe,
			"ecotourism":$scope.ecotourism,
			"wellness_n_care":$scope.wellness_n_care,
			"heritage_n_spirituality":$scope.heritage_n_spirituality,
			"family_n_kids":$scope.family_n_kids,
			"adventure_n_explore":$scope.adventure_n_explore,
			"romantic_holiday":$scope.romantic_holiday,
			"instantbooking":$scope.instantbooking,
			
			"property_type":$scope.property_type,
			"busstation":$scope.busstation,
			"railwaystation":$scope.railwaystation,
			"airport":$scope.airport,
			
			})
			.success(function(data, status) 
			{                       
				alert("Data has been Added Successfully");
				window.location.href = "list_property";
			})
		}
	}
	
	$scope.get_preop= function()
	{
		$scope.list=true;
      
		$http.get("load_property").success(function(data)
		{  
			$scope.pagedItems = data;
			//alert(data);
		});
    }
		
	$scope.edit_tproperty=function(id)
	{
		//alert(id);
		$scope.list=false;
		$scope.editform=true;
		$scope.view=false;
			
		$http.post('editdb_property', { 'id':id }) 
		.success(function (data, status, headers, config) 
		{ 
			$scope.id=data[0]["property_id"];
			$scope.pname=data[0]["property_name"];
			$scope.paddress=data[0]["property_address"];
			$scope.conno=data[0]["property_contact_no"];
			$scope.location=data[0]["property_location"];
			$scope.description=data[0]["property_description"];
			$scope.latitude=data[0]["latitude"];
			$scope.longitude=data[0]["longitude"];
			$scope.rating=data[0]["rating"];
			$scope.tripaddrating=data[0]["tripadvisorrating"];
			$scope.extraperson=data[0]["extra_person"];
			$scope.child=data[0]["child"];
			$scope.propertypicture=data[0]["property_picture"];
			$scope.cancellingpolicy=data[0]["cancelling_policy"];
			
			$scope.property_type=data[0]["property_type"];
			$scope.busstation=data[0]["busstation"];
			$scope.railwaystation=data[0]["railwaystation"];
			$scope.airport=data[0]["airport"];
			
			
			
			//$scope.wifi=data[0]["wifi"];
			$scope.c_wifi=function ()
			{
			    var checked = false;
			    if(data[0]["wifi"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.tv=data[0]["tv"];
			$scope.c_tv=function ()
			{
			    var checked = false;
			    if(data[0]["tv"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.kitchen=data[0]["kitchen"];
			$scope.c_kitchen=function ()
			{
			    var checked = false;
			    if(data[0]["kitchen"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.checkin=data[0]["checkin"];
			$scope.c_checkin=function ()
			{
			    var checked = false;
			    if(data[0]["checkin"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.safetycard=data[0]["safetycard"];
			$scope.c_safetycard=function ()
			{
			    var checked = false;
			    if(data[0]["safetycard"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.indoorgame=data[0]["indoorgame"];
			$scope.c_indoorgame=function ()
			{
			    var checked = false;
			    if(data[0]["indoorgame"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.cabletv=data[0]["cabletv"];
			$scope.c_cabletv=function ()
			{
			    var checked = false;
			    if(data[0]["cabletv"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.smokingallowed=data[0]["smokingallowed"];
			$scope.c_smokingallowed=function ()
			{
			    var checked = false;
			    if(data[0]["smokingallowed"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.outdoorgame=data[0]["outdoorgame"];
			$scope.c_outdoorgame=function ()
			{
			    var checked = false;
			    if(data[0]["outdoorgame"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.gym=data[0]["gym"];
			$scope.c_gym=function ()
			{
			    var checked = false;
			    if(data[0]["gym"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.wheelchair=data[0]["wheelchair"];
			$scope.c_wheelchair=function ()
			{
			    var checked = false;
			    if(data[0]["wheelchair"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.kidsplayarea=data[0]["kidsplayarea"];
			$scope.c_kidsplayarea=function ()
			{
			    var checked = false;
			    if(data[0]["kidsplayarea"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.heating=data[0]["heating"];
			$scope.c_heating=function ()
			{
			    var checked = false;
			    if(data[0]["heating"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.breakfast=data[0]["breakfast"];
			$scope.c_breakfast=function ()
			{
			    var checked = false;
			    if(data[0]["breakfast"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.yoga=data[0]["yoga"];
			$scope.c_yoga=function ()
			{
			    var checked = false;
			    if(data[0]["yoga"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.internet=data[0]["internet"];
			$scope.c_internet=function ()
			{
			    var checked = false;
			    if(data[0]["internet"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.wiintercom=data[0]["wiintercom"];
			$scope.c_wiintercom=function ()
			{
			    var checked = false;
			    if(data[0]["wiintercom"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.ac=data[0]["ac"];
			$scope.c_ac=function ()
			{
			    var checked = false;
			    if(data[0]["ac"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.freeparking=data[0]["freeparking"];
			$scope.c_freeparking=function ()
			{
			    var checked = false;
			    if(data[0]["freeparking"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.swimmingpool=data[0]["swimmingpool"];
			$scope.c_swimmingpool=function ()
			{
			    var checked = false;
			    if(data[0]["swimmingpool"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.petsallowed=data[0]["petsallowed"];
			$scope.c_petsallowed=function ()
			{
			    var checked = false;
			    if(data[0]["petsallowed"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.barnrestro=data[0]["barnrestro"];
			$scope.c_barnrestro=function ()
			{
			    var checked = false;
			    if(data[0]["barnrestro"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.roomservice=data[0]["roomservice"];
			$scope.c_roomservice=function ()
			{
			    var checked = false;
			    if(data[0]["roomservice"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.busscenter=data[0]["busscenter"];
			$scope.c_busscenter=function ()
			{
			    var checked = false;
			    if(data[0]["busscenter"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.lounge=data[0]["lounge"];
			$scope.c_lounge=function ()
			{
			    var checked = false;
			    if(data[0]["lounge"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.conferencehall=data[0]["conferencehall"];
			$scope.c_conferencehall=function ()
			{
			    var checked = false;
			    if(data[0]["conferencehall"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.shopping=data[0]["shopping"];
			$scope.c_shopping=function ()
			{
			    var checked = false;
			    if(data[0]["shopping"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.ayurvedacenter=data[0]["ayurvedacenter"];
			$scope.c_ayurvedacenter=function ()
			{
			    var checked = false;
			    if(data[0]["ayurvedacenter"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.laundry=data[0]["laundry"];
			$scope.c_laundry=function ()
			{
			    var checked = false;
			    if(data[0]["laundry"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.security=data[0]["security"];
			$scope.c_security=function ()
			{
			    var checked = false;
			    if(data[0]["security"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.airporttrasport=data[0]["airporttrasport"];
			$scope.c_airporttrasport=function ()
			{
			    var checked = false;
			    if(data[0]["airporttrasport"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.atminresort=data[0]["atminresort"];
			$scope.c_atminresort=function ()
			{
			    var checked = false;
			    if(data[0]["atminresort"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.hotcoldwater=data[0]["hotcoldwater"];
			$scope.c_hotcoldwater=function ()
			{
			    var checked = false;
			    if(data[0]["hotcoldwater"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.firstaidkit=data[0]["firstaidkit"];
			$scope.c_firstaidkit=function ()
			{
			    var checked = false;
			    if(data[0]["firstaidkit"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.hairdryer=data[0]["hairdryer"];
			$scope.c_hairdryer=function ()
			{
			    var checked = false;
			    if(data[0]["hairdryer"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.hottub=data[0]["hottub"];
			$scope.c_hottub=function ()
			{
			    var checked = false;
			    if(data[0]["hottub"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.suitableforwvent=data[0]["suitableforwvent"];
			$scope.c_suitableforwvent=function ()
			{
			    var checked = false;
			    if(data[0]["suitableforwvent"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			
			
			//spa
			$scope.c_spa=function ()
			{
			    var checked = false;
			    if(data[0]["spa"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			
			//jacuzzi
			$scope.c_jacuzzi=function ()
			{
			    var checked = false;
			    if(data[0]["jacuzzi"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			
			//finedinig
			$scope.c_finedinig=function ()
			{
			    var checked = false;
			    if(data[0]["finedinig"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			
			//caffe
			$scope.c_caffe=function ()
			{
			    var checked = false;
			    if(data[0]["caffe"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			
			//ecotourism
			$scope.c_ecotourism=function ()
			{
			    var checked = false;
			    if(data[0]["ecotourism"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			
			//wellness_n_care
			$scope.c_wellness_n_care=function ()
			{
			    var checked = false;
			    if(data[0]["wellness_n_care"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			
			//heritage_n_spirituality
			$scope.c_heritage_n_spirituality=function ()
			{
			    var checked = false;
			    if(data[0]["spa"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			
			//family_n_kids
			$scope.c_family_n_kids=function ()
			{
			    var checked = false;
			    if(data[0]["family_n_kids"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			
			//adventure_n_explore
			$scope.c_adventure_n_explore=function ()
			{
			    var checked = false;
			    if(data[0]["adventure_n_explore"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			
			//romantic_holiday
			$scope.c_romantic_holiday=function ()
			{
			    var checked = false;
			    if(data[0]["romantic_holiday"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			
			//instantbooking
			$scope.c_instantbooking=function ()
			{
			    var checked = false;
			    if(data[0]["instantbooking"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
		}); 
			
	}		
			
	$scope.view_tproperty=function(id)
	{
		//alert(id);
		$scope.list=false;
		$scope.editform=false;
		$scope.view=true;
			
		$http.post('editdb_property', { 'id':id }) 
		.success(function (data, status, headers, config) 
		{ 
			$scope.id=data[0]["property_id"];
			$scope.pname=data[0]["property_name"];
			$scope.paddress=data[0]["property_address"];
			$scope.conno=data[0]["property_contact_no"];
			$scope.location=data[0]["property_location"];
			$scope.description=data[0]["property_description"];
			$scope.latitude=data[0]["latitude"];
			$scope.longitude=data[0]["longitude"];
			$scope.rating=data[0]["rating"];
			$scope.tripaddrating=data[0]["tripadvisorrating"];
			$scope.extraperson=data[0]["extra_person"];
			$scope.child=data[0]["child"];
			$scope.propertypicture=data[0]["property_picture"];
			$scope.cancellingpolicy=data[0]["cancelling_policy"];
			
			$scope.property_type=data[0]["property_type"];
			$scope.busstation=data[0]["busstation"];
			$scope.railwaystation=data[0]["railwaystation"];
			$scope.airport=data[0]["airport"];
			
			
			
			//$scope.wifi=data[0]["wifi"];
			$scope.c_wifi=function ()
			{
			    var checked = false;
			    if(data[0]["wifi"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.tv=data[0]["tv"];
			$scope.c_tv=function ()
			{
			    var checked = false;
			    if(data[0]["tv"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.kitchen=data[0]["kitchen"];
			$scope.c_kitchen=function ()
			{
			    var checked = false;
			    if(data[0]["kitchen"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.checkin=data[0]["checkin"];
			$scope.c_checkin=function ()
			{
			    var checked = false;
			    if(data[0]["checkin"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.safetycard=data[0]["safetycard"];
			$scope.c_safetycard=function ()
			{
			    var checked = false;
			    if(data[0]["safetycard"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.indoorgame=data[0]["indoorgame"];
			$scope.c_indoorgame=function ()
			{
			    var checked = false;
			    if(data[0]["indoorgame"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.cabletv=data[0]["cabletv"];
			$scope.c_cabletv=function ()
			{
			    var checked = false;
			    if(data[0]["cabletv"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.smokingallowed=data[0]["smokingallowed"];
			$scope.c_smokingallowed=function ()
			{
			    var checked = false;
			    if(data[0]["smokingallowed"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.outdoorgame=data[0]["outdoorgame"];
			$scope.c_outdoorgame=function ()
			{
			    var checked = false;
			    if(data[0]["outdoorgame"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.gym=data[0]["gym"];
			$scope.c_gym=function ()
			{
			    var checked = false;
			    if(data[0]["gym"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.wheelchair=data[0]["wheelchair"];
			$scope.c_wheelchair=function ()
			{
			    var checked = false;
			    if(data[0]["wheelchair"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.kidsplayarea=data[0]["kidsplayarea"];
			$scope.c_kidsplayarea=function ()
			{
			    var checked = false;
			    if(data[0]["kidsplayarea"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.heating=data[0]["heating"];
			$scope.c_heating=function ()
			{
			    var checked = false;
			    if(data[0]["heating"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.breakfast=data[0]["breakfast"];
			$scope.c_breakfast=function ()
			{
			    var checked = false;
			    if(data[0]["breakfast"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.yoga=data[0]["yoga"];
			$scope.c_yoga=function ()
			{
			    var checked = false;
			    if(data[0]["yoga"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.internet=data[0]["internet"];
			$scope.c_internet=function ()
			{
			    var checked = false;
			    if(data[0]["internet"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.wiintercom=data[0]["wiintercom"];
			$scope.c_wiintercom=function ()
			{
			    var checked = false;
			    if(data[0]["wiintercom"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.ac=data[0]["ac"];
			$scope.c_ac=function ()
			{
			    var checked = false;
			    if(data[0]["ac"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.freeparking=data[0]["freeparking"];
			$scope.c_freeparking=function ()
			{
			    var checked = false;
			    if(data[0]["freeparking"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.swimmingpool=data[0]["swimmingpool"];
			$scope.c_swimmingpool=function ()
			{
			    var checked = false;
			    if(data[0]["swimmingpool"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.petsallowed=data[0]["petsallowed"];
			$scope.c_petsallowed=function ()
			{
			    var checked = false;
			    if(data[0]["petsallowed"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.barnrestro=data[0]["barnrestro"];
			$scope.c_barnrestro=function ()
			{
			    var checked = false;
			    if(data[0]["barnrestro"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.roomservice=data[0]["roomservice"];
			$scope.c_roomservice=function ()
			{
			    var checked = false;
			    if(data[0]["roomservice"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.busscenter=data[0]["busscenter"];
			$scope.c_busscenter=function ()
			{
			    var checked = false;
			    if(data[0]["busscenter"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.lounge=data[0]["lounge"];
			$scope.c_lounge=function ()
			{
			    var checked = false;
			    if(data[0]["lounge"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.conferencehall=data[0]["conferencehall"];
			$scope.c_conferencehall=function ()
			{
			    var checked = false;
			    if(data[0]["conferencehall"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.shopping=data[0]["shopping"];
			$scope.c_shopping=function ()
			{
			    var checked = false;
			    if(data[0]["shopping"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.ayurvedacenter=data[0]["ayurvedacenter"];
			$scope.c_ayurvedacenter=function ()
			{
			    var checked = false;
			    if(data[0]["ayurvedacenter"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.laundry=data[0]["laundry"];
			$scope.c_laundry=function ()
			{
			    var checked = false;
			    if(data[0]["laundry"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.security=data[0]["security"];
			$scope.c_security=function ()
			{
			    var checked = false;
			    if(data[0]["security"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.airporttrasport=data[0]["airporttrasport"];
			$scope.c_airporttrasport=function ()
			{
			    var checked = false;
			    if(data[0]["airporttrasport"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.atminresort=data[0]["atminresort"];
			$scope.c_atminresort=function ()
			{
			    var checked = false;
			    if(data[0]["atminresort"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.hotcoldwater=data[0]["hotcoldwater"];
			$scope.c_hotcoldwater=function ()
			{
			    var checked = false;
			    if(data[0]["hotcoldwater"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.firstaidkit=data[0]["firstaidkit"];
			$scope.c_firstaidkit=function ()
			{
			    var checked = false;
			    if(data[0]["firstaidkit"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.hairdryer=data[0]["hairdryer"];
			$scope.c_hairdryer=function ()
			{
			    var checked = false;
			    if(data[0]["hairdryer"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.hottub=data[0]["hottub"];
			$scope.c_hottub=function ()
			{
			    var checked = false;
			    if(data[0]["hottub"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			//$scope.suitableforwvent=data[0]["suitableforwvent"];
			$scope.c_suitableforwvent=function ()
			{
			    var checked = false;
			    if(data[0]["suitableforwvent"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			
			
			//spa
			$scope.c_spa=function ()
			{
			    var checked = false;
			    if(data[0]["spa"])
			    {
			    	checked = true;
			    }
			    return checked;
			};	
			
			//jacuzzi
			$scope.c_jacuzzi=function ()
			{
			    var checked = false;
			    if(data[0]["jacuzzi"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			
			//finedinig
			$scope.c_finedinig=function ()
			{
			    var checked = false;
			    if(data[0]["finedinig"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			
			//caffe
			$scope.c_caffe=function ()
			{
			    var checked = false;
			    if(data[0]["caffe"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			
			//ecotourism
			$scope.c_ecotourism=function ()
			{
			    var checked = false;
			    if(data[0]["ecotourism"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			
			//wellness_n_care
			$scope.c_wellness_n_care=function ()
			{
			    var checked = false;
			    if(data[0]["wellness_n_care"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			
			//heritage_n_spirituality
			$scope.c_heritage_n_spirituality=function ()
			{
			    var checked = false;
			    if(data[0]["spa"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			
			//family_n_kids
			$scope.c_family_n_kids=function ()
			{
			    var checked = false;
			    if(data[0]["family_n_kids"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			
			//adventure_n_explore
			$scope.c_adventure_n_explore=function ()
			{
			    var checked = false;
			    if(data[0]["adventure_n_explore"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			
			//romantic_holiday
			$scope.c_romantic_holiday=function ()
			{
			    var checked = false;
			    if(data[0]["romantic_holiday"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			
			//instantbooking
			$scope.c_instantbooking=function ()
			{
			    var checked = false;
			    if(data[0]["instantbooking"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
		}); 
			
	}
	
	$scope.update=function()
	{
		//alert("sdfsdf");
		var answer = confirm("Do you want to Update?")
		if (!answer)
		{               
		}
		else
		{

			$scope.wifi = document.getElementById("wifi").checked;
			$scope.tv = document.getElementById("tv").checked;
			$scope.kitchen = document.getElementById("kitchen").checked;
			$scope.checkin = document.getElementById("checkin").checked;
			$scope.safetycard = document.getElementById("safetycard").checked;
			$scope.indoorgame = document.getElementById("indoorgame").checked;
			$scope.cabletv = document.getElementById("cabletv").checked;
			$scope.smokingallowed = document.getElementById("smokingallowed").checked;
			$scope.outdoorgame = document.getElementById("outdoorgame").checked;
			$scope.gym = document.getElementById("gym").checked;
			$scope.wheelchair = document.getElementById("wheelchair").checked;
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
			$scope.busscenter = document.getElementById("busscenter").checked;
			$scope.lounge = document.getElementById("lounge").checked;
			$scope.conferencehall = document.getElementById("conferencehall").checked;
			$scope.shopping = document.getElementById("shopping").checked;
			$scope.ayurvedacenter = document.getElementById("ayurvedacenter").checked;
			$scope.laundry = document.getElementById("laundry").checked;
			$scope.security = document.getElementById("security").checked;
			$scope.airporttrasport = document.getElementById("airporttrasport").checked;
			$scope.atminresort = document.getElementById("atminresort").checked;
			$scope.hotcoldwater = document.getElementById("hotcoldwater").checked;
			$scope.firstaidkit = document.getElementById("firstaidkit").checked;
			$scope.hairdryer = document.getElementById("hairdryer").checked;
			$scope.hottub = document.getElementById("hottub").checked;
			$scope.suitableforwvent = document.getElementById("suitableforwvent").checked;
			
			$scope.spa = document.getElementById("spa").checked;
			$scope.jacuzzi = document.getElementById("jacuzzi").checked;
			$scope.finedinig = document.getElementById("finedinig").checked;
			$scope.caffe = document.getElementById("caffe").checked;
			
			
			//best for
			
			$scope.ecotourism = document.getElementById("ecotourism").checked;
			$scope.wellness_n_care = document.getElementById("wellness_n_care").checked;
			$scope.heritage_n_spirituality = document.getElementById("heritage_n_spirituality").checked;
			$scope.family_n_kids = document.getElementById("family_n_kids").checked;
			$scope.adventure_n_explore = document.getElementById("adventure_n_explore").checked;
			$scope.romantic_holiday = document.getElementById("romantic_holiday").checked;
			
			//instance booking
			$scope.instantbooking = document.getElementById("instantbooking").checked;
			
			
			//alert("asas");
			$http.post('updatedb_property',
			{
				"id":$scope.id,
				"pname":$scope.pname,
				"paddress":$scope.paddress,
				"conno":$scope.conno,
				"location":$scope.location,
				"description":$scope.description,
				"latitude":$scope.latitude,
				"longitude":$scope.longitude,
			
				"rating":$scope.rating,
				"tripaddrating":$scope.tripaddrating,
				"extraperson":$scope.extraperson,
				"child":$scope.child,
				"propertypicture":$scope.propertypicture,
				"cancellingpolicy":$scope.cancellingpolicy,
				"wifi":$scope.wifi,
				"tv":$scope.tv,
				"kitchen":$scope.kitchen,
				"checkin":$scope.checkin,
				"safetycard":$scope.safetycard,
				"indoorgame":$scope.indoorgame,
				"cabletv":$scope.cabletv,
				"smokingallowed":$scope.smokingallowed,
				"outdoorgame":$scope.outdoorgame,
				"gym":$scope.gym,
				"wheelchair":$scope.wheelchair,
				"kidsplayarea":$scope.kidsplayarea,
				"heating":$scope.heating,
				"breakfast":$scope.breakfast,
				"yoga":$scope.yoga,
				"internet":$scope.internet,
				"wiintercom":$scope.wiintercom,
				"ac":$scope.ac,
				"freeparking":$scope.freeparking,
				"swimmingpool":$scope.swimmingpool,
				"petsallowed":$scope.petsallowed,
				"barnrestro":$scope.barnrestro,
				"roomservice":$scope.roomservice,
				"busscenter":$scope.busscenter,
				"lounge":$scope.lounge,
				"conferencehall":$scope.conferencehall,
				"shopping":$scope.shopping,
				"ayurvedacenter":$scope.ayurvedacenter,
				"laundry":$scope.laundry,
				"security":$scope.security,
				"airporttrasport":$scope.airporttrasport,
				"atminresort":$scope.atminresort,
				"hotcoldwater":$scope.hotcoldwater,
				"firstaidkit":$scope.firstaidkit,
				"hairdryer":$scope.hairdryer,
				"hottub":$scope.hottub,
				"suitableforwvent":$scope.suitableforwvent,
				
				"spa":$scope.spa,
				"jacuzzi":$scope.jacuzzi,
				"finedinig":$scope.finedinig,
				"caffe":$scope.caffe,
				"ecotourism":$scope.ecotourism,
				"wellness_n_care":$scope.wellness_n_care,
				"heritage_n_spirituality":$scope.heritage_n_spirituality,
				"family_n_kids":$scope.family_n_kids,
				"adventure_n_explore":$scope.adventure_n_explore,
				"romantic_holiday":$scope.romantic_holiday,
				"instantbooking":$scope.instantbooking,
			
				"property_type":$scope.property_type,
				"busstation":$scope.busstation,
				"railwaystation":$scope.railwaystation,
				"airport":$scope.airport,
				
			})
			.success(function (data, status, headers, config)
			{
				//alert(JSON.stringify(data));
				alert("Data has been Update Successfully");
				window.location.href = "list_property";
			})
			
			.error(function(data, status, headers, config)
			{
				
			});
		}
	}	
	/*		
	$scope.delete_tpproperty=function(id)                                                                                                           =function(id)
	{
		//alert(id);
		var answer = confirm("Do you want to Delete?");
		if (!answer)
		{               
		}
		else
		{
			$http.post('deletedb_property', { 'id':id }) 
			.success(function (data, status, headers, config) 
			{
				alert("Data has been Delete Successfully");
				window.location.href = "list_property";
			}); 
		}
	}	
      */
	$scope.delete_tpproperty=function(id)
	{
		var answer=confirm("Do you want to delete?")		
		if (!answer)
		{               
		}
		else
		{
			$scope.list=true;
			$http.post('deletedb_property',{ 'id':id}) 
				.success(function (data, status, headers, config)
		{
				alert ("Data has been deleted Successfully");
				window.open("list_property","_self");
		});
		
		}
	}
					
	
	
});





	
