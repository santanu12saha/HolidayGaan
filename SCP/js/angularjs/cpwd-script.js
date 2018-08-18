/*Change Password Module Starts Here*/
var ChangePwd = angular.module("ChangePwdModule", [])
ChangePwd.controller("ChangePwdController", function ($scope, $http, jsonFilter)
{	
	var logResult = function (data, status, headers, config)
	{
		return data;
	};
	
	$scope.submitData = function (UChangePwd)
	{		
		var answer = confirm("Do you want to change password?")
		if (!answer)
		{
			
		}
		else
		{
			var config = { params: { UChangePwd: UChangePwd } };

			$http.post("changepwd_proc", null, config)
			.success(function (data, status, headers, config)
			{			
				console.log(data);
				$scope.getChangePwdResult = logResult(data, status, headers, config);
				if(data == "Success")
				{
					window.location.href = "change-password";
					$scope.contentLoaded = true;
				}
			})
			
			.error(function (data, status, headers, config)
			{
				$scope.getChangePwdResult = logResult(data, status, headers, config);
			});
		}		
	};
});
/*Change Password Module Ends Here*/
