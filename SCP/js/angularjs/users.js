var lusers = angular.module('Myappusers',['angularUtils.directives.dirPagination'])
lusers.controller('usersController', function ($scope, $http) 
{
	
	$scope.edit_users = false;
	$scope.btn_pat = true;
	$scope.list = true;
	$scope.get = function(index)
	{
		$scope.list = true;
		$http.get("load_users").success(function(data)
		{  
			$scope.pagedItems = data;
		});
   }
   
	$scope.edit_userdata=function(index)
	{
		$scope.edit_users = true;
	   $scope.list = false;
	   $http.post('editdb_user', { 'id' :index})
	   .success(function (data, status, headers, config) {
	   	$scope.id = data[0]["id"];
	   	$scope.userid = data[0]["userid"];
	   	$scope.fname = data[0]["fname"];
	   	$scope.lname = data[0]["lname"];
	   	$scope.emailid = data[0]["emailid"];
	   	$scope.mobileno = data[0]["mobileno"];
	   });
   }
   
	$scope.delete_user=function(index)
	{
		var answer = confirm("Do you want to Delete?")
		if (!answer)
		{               
		}
		else
		{   
			$http.post('deletedb_user', { 'id' :index}) 
			.success(function (data, status, headers, config) {
				alert("Data has been Deleted Successfully");
				window.open("list_users","_self");
			});		
		}
    }
});
