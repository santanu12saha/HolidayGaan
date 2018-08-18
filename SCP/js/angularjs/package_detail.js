var addpackagedetails = angular.module('addpackagedetails',[])
addpackagedetails.controller('addpackagedetailscontroller', function ($scope, $http) 
{		
		//Add the  data
	$scope.submitData = function ()
	{
		var answer = confirm("Do you want to Submit?")
		if (!answer)
		{               
		}
		else
		{
			
			$http.post('adddb_package_detail',{
				'packageName': $scope.packageName,
				'detail': $scope.detail,
				'packagetype': $scope.packagetype,
				'duration': $scope.duration,
				'city': $scope.city,
				'state': $scope.state,
				'price': $scope.price,
				'img': $scope.img,	
				'report': $scope.report,
				'flight': $scope.flight,
				'mel': $scope.mel,
				'brk': $scope.brk,
				'trans': $scope.trns
				
			})
			.success(function (data, status, headers, config)
			{
				//alert(JSON.stringify(data));
				alert("Data has been Added Successfully");
				//window.location.href = "list_package_details";
			})
			
			.error(function(data, status, headers, config)
			{
				
			});
		}
	}

});


/***************************************************************************/

var listpackagedetails1 = angular.module('listpackagedetails',['angularUtils.directives.dirPagination'])
listpackagedetails1.controller('listpackagedetailscontroller', function ($scope, $http) 
{

	$scope.list=true;
	$scope.packageform=false;
	//$scope.list=true;
	$scope.get=function(index)
	{
		$scope.list=true;
		$http.get("load_package_detail").success(function(data)
		{  
			$scope.pagedItems = data;
			//alert($scope.pagedItems);
		});
    }
	
	$scope.edit_package=function(index)
	{
			$scope.packageform=true;
	        $scope.list=false;
			   
			$http.post('editdb_package_detail', { 'id' :index}) 
			.success(function (data, status, headers, config) { 
			$scope.id=data[0]["package_id"];
			$scope.packageName=data[0]["package_name"];
			$scope.detail=data[0]["package_details"];
			$scope.packagetype=data[0]["package_type"];
			$scope.duration=data[0]["duration"];
			$scope.city=data[0]["city_name"];
			$scope.state=data[0]["state_name"];
			$scope.price=data[0]["starting_price"];
			$scope.img=data[0]["image"];
			$scope.report=data[0]["resorts"];
			$scope.flight=data[0]["flight_included"];
			$scope.mel=data[0]["meals"];
			$scope.brk=data[0]["breakfast"];
			$scope.trns=data[0]["trans"];
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
			$http.post('updatedb_package',{ 
				'id' :$scope.id,
				'packageName': $scope.packageName,
				'detail': $scope.detail,
				'packagetype': $scope.packagetype,
				'duration': $scope.duration,
				'city': $scope.city,
				'state': $scope.state,
				'price': $scope.price,
				'img': $scope.img,	
				'report': $scope.report,
				'flight': $scope.flight,
				'mel': $scope.mel,
				'brk': $scope.brk,
				'trans': $scope.trns,
				})
			.success(function (data, status, headers, config)
			{
				//alert(JSON.stringify(data));
				alert("Data has been Updated Successfully");
				window.open("list_package_details","_self");
			})
			
			.error(function(data, status, headers, config)
			{
				
			});
		}
			
	}	
	
	$scope.delete_package=function(index)
	{
		var answer = confirm("Do you want to Delete?")
		if (!answer)
		{               
		}
		else
		{
	        $scope.list=true;
			$scopeedit_preop=false;   
			$http.post('deletedb_package', { 'id' :index}) 
			.success(function (data, status, headers, config) { 
				alert("Data has been Deleted Successfully");
				
				window.open("list_package_details","_self");
			});
			
			
		}
	}
});
