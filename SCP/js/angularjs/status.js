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
      
		$http.get("load_status").success(function(data)
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
			
		$http.post('edit_status', { 'id':id}) 
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
			$http.post('delete_status',{ 'id':id}) 
				.success(function (data, status, headers, config)
		{
				alert ("Data has been deleted Successfully");
				window.open("list_status_type","_self");
		});
		
		}
	}
				

		
	$scope.update_data= function()
	{
		
		$http.post('update_status', 
		{
				    'id':$scope.id,
					'name' :$scope.Name,
					'des' :$scope.Description,
	
		})
		.success(function (data, status, headers, config)
		{
				alert ("Data Updated Successfully");
				window.open("list_status_type","_self");
		});
		
		
	}
	
	
	
});





var statuss= angular.module('addStatus',[])
statuss.controller('addStatuscontroller', function ($scope, $http) 
{

	$scope.submitData = function ()
	{

		var answer = confirm("Do you want to Submit?")
		if (!answer)
		{               
		}
		else
		{
			$http.post('insertstatus',{ 
				
				'nm': $scope.Name,'ds':$scope.Description
				
				
			})
			.success(function (data, status, headers, config)
			{
				
				alert("Data has been added Successfully");
				window.open("list_status_type","_self");
			})
			
			.error(function(data, status, headers, config)
			{
				
			});
		}
	}
	
		
	
});
	
	
	
			
