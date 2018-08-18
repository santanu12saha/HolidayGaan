var app=angular.module('myApp', ['angularUtils.directives.dirPagination']);
app.controller('formCtrl', function($scope,$http) 
{
	$scope.editform=false;
	$scope.view=false;
	
	//load property type start here
	$scope.getptype= function()
	{
		$scope.list=true;
      
		$http.get("load_activities_type").success(function(data)
		{  
			$scope.activityType = data;
			//alert(data);
		});
    }
	//load property type end here
	
	
	$scope.url='addb_activities';
	$scope.add = function()
	{
		//alert("sdf");
		var answer = confirm("Do you want to Submit?")
		if (!answer)
		{               
		}
		else
		{	
			$scope.ecotourism = document.getElementById("ecotourism").checked;
			$scope.wellness_n_care = document.getElementById("wellness_n_care").checked;
			$scope.heritage_n_spirituality = document.getElementById("heritage_n_spirituality").checked;
			$scope.family_n_kids = document.getElementById("family_n_kids").checked;
			$scope.adventure_n_explore = document.getElementById("adventure_n_explore").checked;
			$scope.romantic_holiday = document.getElementById("romantic_holiday").checked;
			$scope.couple = document.getElementById("couple").checked;
			$scope.group_activity = document.getElementById("group_activity").checked;
			$scope.solo = document.getElementById("solo").checked;
			
			
			$http.post($scope.url, {
				"activity_name":$scope.activity_name,
				"activity_type":$scope.activity_type,
				"location":$scope.location,
				//"aimg":$scope.aimg,
				"latitude":$scope.latitude,
				"longitude":$scope.longitude,
				"highlight_about":$scope.highlight_about,
				"things_to_carry":$scope.things_to_carry,
				"duration":$scope.duration,
				"price":$scope.price,
				"time":$scope.time,
				"inclusions":$scope.inclusions,
				"trip_add_rating":$scope.trip_add_rating,
				"out_rating":$scope.out_rating,
				"ecotourism":$scope.ecotourism,
				"wellness_n_care":$scope.wellness_n_care,
				"heritage_n_spirituality":$scope.heritage_n_spirituality,
				"family_n_kids":$scope.family_n_kids,
				"adventure_n_explore":$scope.adventure_n_explore,
				"romantic_holiday":$scope.romantic_holiday,
				"couple":$scope.couple,
				"group_activity":$scope.group_activity,
				"solo":$scope.solo,
				
				
			})
			.success(function(data, status) 
			{                       
				alert("Data has been Added Successfully");
				window.location.href = "list_activities";
			})
		}
	}
			
	$scope.get_preop= function()
	{
		//alert("hh");
		$scope.list=true;
      
		$http.get("load_activities").success(function(data)
		{  
			$scope.pagedItems = data;
			//alert(data);
		});
    }
		
	$scope.edit_activiti=function(id)
	{
		//alert(id);
		$scope.list=false;
		$scope.editform=true;
		$scope.view=false;
			
		$http.post('editdb_activiti', {'id':id }) 
		.success(function (data, status, headers, config) 
		{ 
			$scope.id=data[0]["activities_id"];
			$scope.activity_name=data[0]["activity_name"];
			$scope.activity_type=data[0]["activity_type"];
			$scope.location=data[0]["location"];
			
			$scope.latitude=data[0]["latitude"];
			$scope.longitude=data[0]["longitude"];
			$scope.highlight_about=data[0]["highlight_about"];
			$scope.things_to_carry=data[0]["things_to_carry"];
			$scope.duration=data[0]["duration"];
			$scope.price=data[0]["price"];
			$scope.time=data[0]["time"];
			
			$scope.inclusions=data[0]["inclusions"];
			$scope.trip_add_rating=data[0]["trip_add_rating"];
			$scope.out_rating=data[0]["out_rating"];
			
			//$scope.ecotourism=data[0]["ecotourism"];
			$scope.c_ecotourism=function ()
			{
			    var checked = false;
			    if(data[0]["ecotourism"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.wellness_n_care=data[0]["wellness_n_care"];
			$scope.c_wellness_n_care=function ()
			{
			    var checked = false;
			    if(data[0]["wellness_n_care"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.heritage_n_spirituality=data[0]["heritage_n_sprituality"];
			$scope.c_heritage_n_spirituality=function ()
			{
			    var checked = false;
			    if(data[0]["heritage_n_sprituality"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.family_n_kids=data[0]["family_n_kids"];
			$scope.c_family_n_kids=function ()
			{
			    var checked = false;
			    if(data[0]["family_n_kids"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.adventure_n_explore=data[0]["adventure_n_explore"];
			$scope.c_adventure_n_explore=function ()
			{
			    var checked = false;
			    if(data[0]["adventure_n_explore"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.romantic_holiday=data[0]["romantic_holiday"];
			$scope.c_romantic_holiday=function ()
			{
			    var checked = false;
			    if(data[0]["romantic_holiday"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.couple=data[0]["couple"];
			$scope.c_couple=function ()
			{
			    var checked = false;
			    if(data[0]["couple"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.group_activity=data[0]["group_activity"];
			$scope.c_group_activity=function ()
			{
			    var checked = false;
			    if(data[0]["group_activity"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.solo=data[0]["solo"];
			$scope.c_solo=function ()
			{
			    var checked = false;
			    if(data[0]["solo"])
			    {
			    	checked = true;
			    }
			    return checked;
			};

		}); 
			
	}	

	$scope.view_activiti=function(id)
	{
		//alert(id);
		$scope.list=false;
		$scope.editform=false;
		$scope.view=true;
			
		$http.post('editdb_activiti', {'id':id }) 
		.success(function (data, status, headers, config) 
		{ 
			$scope.id=data[0]["activities_id"];
			$scope.activity_name=data[0]["activity_name"];
			$scope.activity_type=data[0]["activity_type"];
			$scope.location=data[0]["location"];
			
			$scope.latitude=data[0]["latitude"];
			$scope.longitude=data[0]["longitude"];
			$scope.highlight_about=data[0]["highlight_about"];
			$scope.things_to_carry=data[0]["things_to_carry"];
			$scope.duration=data[0]["duration"];
			$scope.price=data[0]["price"];
			$scope.time=data[0]["time"];
			
			$scope.inclusions=data[0]["inclusions"];
			$scope.trip_add_rating=data[0]["trip_add_rating"];
			$scope.out_rating=data[0]["out_rating"];
			
			//$scope.ecotourism=data[0]["ecotourism"];
			$scope.c_ecotourism=function ()
			{
			    var checked = false;
			    if(data[0]["ecotourism"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.wellness_n_care=data[0]["wellness_n_care"];
			$scope.c_wellness_n_care=function ()
			{
			    var checked = false;
			    if(data[0]["wellness_n_care"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.heritage_n_spirituality=data[0]["heritage_n_sprituality"];
			$scope.c_heritage_n_spirituality=function ()
			{
			    var checked = false;
			    if(data[0]["heritage_n_sprituality"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.family_n_kids=data[0]["family_n_kids"];
			$scope.c_family_n_kids=function ()
			{
			    var checked = false;
			    if(data[0]["family_n_kids"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.adventure_n_explore=data[0]["adventure_n_explore"];
			$scope.c_adventure_n_explore=function ()
			{
			    var checked = false;
			    if(data[0]["adventure_n_explore"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.romantic_holiday=data[0]["romantic_holiday"];
			$scope.c_romantic_holiday=function ()
			{
			    var checked = false;
			    if(data[0]["romantic_holiday"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.couple=data[0]["couple"];
			$scope.c_couple=function ()
			{
			    var checked = false;
			    if(data[0]["couple"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.group_activity=data[0]["group_activity"];
			$scope.c_group_activity=function ()
			{
			    var checked = false;
			    if(data[0]["group_activity"])
			    {
			    	checked = true;
			    }
			    return checked;
			};
			//$scope.solo=data[0]["solo"];
			$scope.c_solo=function ()
			{
			    var checked = false;
			    if(data[0]["solo"])
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
			
			$scope.ecotourism = document.getElementById("ecotourism").checked;
			$scope.wellness_n_care = document.getElementById("wellness_n_care").checked;
			$scope.heritage_n_spirituality = document.getElementById("heritage_n_spirituality").checked;
			$scope.family_n_kids = document.getElementById("family_n_kids").checked;
			$scope.adventure_n_explore = document.getElementById("adventure_n_explore").checked;
			$scope.romantic_holiday = document.getElementById("romantic_holiday").checked;
			$scope.couple = document.getElementById("couple").checked;
			$scope.group_activity = document.getElementById("group_activity").checked;
			$scope.solo = document.getElementById("solo").checked;
			//alert("asas");
			$http.post('updatedb_activities',
			{
				"id":$scope.id,
				"activity_name":$scope.activity_name,
				"activity_type":$scope.activity_type,
				"location":$scope.location,
				//"aimg":$scope.aimg,
				"latitude":$scope.latitude,
				"longitude":$scope.longitude,
				"highlight_about":$scope.highlight_about,
				"things_to_carry":$scope.things_to_carry,
				"duration":$scope.duration,
				"price":$scope.price,
				"time":$scope.time,
				"inclusions":$scope.inclusions,
				"trip_add_rating":$scope.trip_add_rating,
				"out_rating":$scope.out_rating,
				"ecotourism":$scope.ecotourism,
				"wellness_n_care":$scope.wellness_n_care,
				"heritage_n_spirituality":$scope.heritage_n_spirituality,
				"family_n_kids":$scope.family_n_kids,
				"adventure_n_explore":$scope.adventure_n_explore,
				"romantic_holiday":$scope.romantic_holiday,
				"couple":$scope.couple,
				"group_activity":$scope.group_activity,
				"solo":$scope.solo,
			})
			.success(function (data, status, headers, config)
			{
				//alert(JSON.stringify(data));
				alert("Data has been Update Successfully");
				window.location.href = "list_activities";
			})
			
			.error(function(data, status, headers, config)
			{
				
			});
		}
	}	
	$scope.delete_activiti=function(id)
	{
		var answer=confirm("Do you want to delete?")		
		if (!answer)
		{               
		}
		else
		{
			$scope.list=true;
			$http.post('deletedb_activiti',{ 'id':id}) 
				.success(function (data, status, headers, config)
		{
				alert ("Data has been deleted Successfully");
				window.open("list_activities","_self");
		});
		
		}
	}
	
});





	
