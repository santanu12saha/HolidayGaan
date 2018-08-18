

var preop = angular.module('Myapp',[])
preop.controller('durationController', function ($scope, $http) 
{
	$scope.submitData=function(index)
	{
		var answer = confirm("Do you want to Submit?")
		if (!answer)
		{               
		}
		else
		{
			$http.post('adddb_duration',{ 'name': $scope.name,'detail': $scope.detail})
			.success(function (data, status, headers, config)
			{
				//alert(JSON.stringify(data));
				alert("Data has been Added Successfully");
				window.location.href = "list_duration";
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
		$http.get("load_duration").success(function(data)
		{  
			$scope.pagedItems = data;
			//alert($scope.pagedItems);
		});
    }
	$scope.edit_duration=function(index)
	{
		$scope.edit_preop=true;
	        $scope.list=false;
			   
			$http.post('editdb_duration', { 'id' :index}) 
			.success(function (data, status, headers, config) { 
			$scope.id=data[0]["id"];
			$scope.name=data[0]["name"];
			$scope.detail=data[0]["detail"];
			});
			
			
		
    }
	$scope.UpdateData=function(index)
	{
			var answer = confirm("Do you want to Update?")
		if (!answer)
		{               
		}
		else
		{
			$http.post('updatedb_duration',{ 
				'id' :$scope.id,
				'name' :$scope.name,
				'detail': $scope.detail})
			.success(function (data, status, headers, config)
			{
				//alert(JSON.stringify(data));
				alert("Data has been Updated Successfully");
				window.open("list_duration","_self");
			})
			
			.error(function(data, status, headers, config)
			{
				
			});
		}
			
		
    }
	$scope.delete_duration=function(index)
	{
		var answer = confirm("Do you want to Delete?")
		if (!answer)
		{               
		}
		else
		{
	        $scope.list=true;
			$scopeedit_preop=false;   
			$http.post('deletedb_duration', { 'id' :index}) 
			.success(function (data, status, headers, config) { 
				alert("Data has been Deleted Successfully");
				
				window.open("list_duration","_self");
			});
			
			
		}
    }
});
