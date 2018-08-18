var pre = angular.module('My',['angularUtils.directives.dirPagination'])
pre.controller('adddalkcontroller', function ($scope, $http) 
{
	$scope.view_preop=false;
	$scope.view_preop1=false;
	$scope.btn_pat=true;
	$scope.list=true;
	//**************list of Counseling starts**************
	$scope.get= function()
	{
     $scope.list=true;
      
		$http.get("load_property_type").success(function(data)
		{  
			$scope.pagedItems = data;
			
		});
    }
	$scope.edit_id=function(id)
	{
		//alert(id);
		$scope.view_preop1=true;
		$scope.view_preop=false;
		$scope.list=false;
			
		$http.post('edit_propertytype', { 'id':id}) 
		.success(function (data, status, headers, config) 
		{ 
			$scope.id=data[0]["id"];
			$scope.Name=data[0]["name"];
			$scope.Description=data[0]["des"];
		});
	}
	
	$scope.view_id=function(id)
	{
		//alert(id);
		$scope.view_preop1=false;
		$scope.view=true;
		$scope.list=false;
			
		$http.post('edit_propertytype', { 'id':id}) 
		.success(function (data, status, headers, config) 
		{ 
			$scope.id=data[0]["id"];
			$scope.Name=data[0]["name"];
			$scope.Description=data[0]["des"];
		});
	}
	$scope.del=function(id)
	{
			var answer=confirm("Do you want to delete?")		
					if (!answer)
		{               
		}
		else
		{
			$scope.list=true;
			$http.post('delete_property_type',{ 'id':id}) 
				.success(function (data, status, headers, config)
		{
				alert ("Data has been deleted Successfully");
				window.open("list_property_type","_self");
		});
		
		}
	}
				

		
	$scope.update_data= function()
	{
		
		$http.post('update_property_type', 
		{
				    'id':$scope.id,
					'name' :$scope.Name,
					'des' :$scope.Description,
	
		})
		.success(function (data, status, headers, config)
		{
				alert ("Data Updated Successfully");
				window.open("list_property_type","_self");
		});
		
		
	}
	
	
	
});





var femto= angular.module('addProperty',[])
femto.controller('addPropertycontroller', function ($scope, $http) 
{

	$scope.submitData = function ()
	{

		var answer = confirm("Do you want to Submit?")
		if (!answer)
		{               
		}
		else
		{
			
	
			
			$http.post('addpropertytype',{ 
				
				'nm': $scope.Name,'ds':$scope.Description
				
				
			})
			.success(function (data, status, headers, config)
			{
				
				alert("Data has been added Successfully");
				window.open("list_property_type","_self");
			})
			
			.error(function(data, status, headers, config)
			{
				
			});
		}
	}
	
		
	
	});
	
	
	
			
