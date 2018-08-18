

var preop = angular.module('myApp',[])
preop.controller('signupCtrl', function ($scope, $http) 
{
	$scope.submitData=function(index)
	{
		var answer = confirm("Do you want to Submit?")
		if (!answer)
		{               
		}
		else
		{
			$http.post('package_resort_insert',{'pid1': $scope.pid})
			.success(function (data, status, headers, config)
			{
				//alert(JSON.stringify(data));
				alert("Data has been Added Successfully");
				//window.location.href = "list_durati";
			})
			
			.error(function(data, status, headers, config)
			{
				
			});
		}
	}
});





/***************************************************************************/



var preop1 = angular.module('Myappduration',['angularUtils.directives.dirPagination'])
preop1.controller('listdurationController', function ($scope, $http) 
{
	
	$scope.edit_preop=false;
	$scope.btn_pat=true;
	$scope.list=true;
	$scope.get=function(index)
	{
		$scope.list=true;
		$http.get("load_package_resort").success(function(data)
		{  
			$scope.pagedItems = data;
			//alert($scope.pagedItems);
		});
    }
	$scope.edit=function(index)
	{
		$scope.edit_preop=true;
	        $scope.list=false;
			   
			$http.post('edit_package_resort', { 'id' :index}) 
			.success(function (data, status, headers, config) { 
			$scope.pid=data[0]["p_id"];
			$scope.id=data[0]["id"];
			
		
			});
			
			
		
    }
	$scope.UpdateData=function()
	{
			var answer = confirm("Do you want to Update?")
		if (!answer)
		{               
		}
		else
		{
			$http.post('update_package_resort',{ 
				'id' :$scope.id,
				'pid' :$scope.pid})
			.success(function (data, status, headers, config)
			{
				//alert(JSON.stringify(data));
				alert("Data has been Updated Successfully");
				window.open("list_package_resort","_self");
			})
			
			.error(function(data, status, headers, config)
			{
				
			});
		}
			
		
    }
	$scope.delete=function(index)
	{
		var answer = confirm("Do you want to Delete?")
		if (!answer)
		{               
		}
		else
		{
	        $scope.list=true;
			$scopeedit_preop=false;   
			$http.post('delete_package_resort', { 'id' :index}) 
			.success(function (data, status, headers, config) { 
				alert("Data has been Deleted Successfully");
				
				window.open("list_package_resort","_self");
			});
			
			
		}
    }
});
