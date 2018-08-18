var pre = angular.module('My',['angularUtils.directives.dirPagination'])
pre.controller('adddalkcontroller', function ($scope, $http) 
{
	$scope.view_preop=false;
	$scope.view=false;
	$scope.btn_pat=true;
	$scope.list=true;
	
	
	
	//**************list of Counseling starts**************
	$scope.get= function()
	{
     $scope.list=true;
      
		$http.get("load_availability").success(function(data)
		{  
			$scope.pagedItems = data;
			
		});
    }
	$scope.edit_id=function(id)
	{
		//alert(id);
		$scope.view_preop1=true;
		$scope.view=false;
		$scope.list=false;
			
		$http.post('edit_availability', { 'id':id}) 
		.success(function (data, status, headers, config) 
		{
			$scope.id=data[0]["id"];	
			$scope.property=data[0]["property_id"];
			$scope.pname=data[0]["property_name"];
			$scope.guest=data[0]["guest"];
			document.getElementById("adate").value=data[0]["available_date"];
			
		});
	}
	
	$scope.view_id=function(id)
	{
		//alert(id);
		$scope.view_preop1=false;
		$scope.view=true;
		$scope.list=false;
			
		$http.post('edit_availability', { 'id':id}) 
		.success(function (data, status, headers, config) 
		{
			//$scope.id=data[0]["id"];	
			$scope.property=data[0]["property_id"];
			$scope.pname=data[0]["property_name"];
			$scope.guest=data[0]["guest"];
			document.getElementById("adate1").value=data[0]["available_date"];
			
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
			$http.post('delete_availability',{ 'id':id}) 
			.success(function (data, status, headers, config)
			{
				alert ("Data has been deleted Successfully");
				window.open("list_availability","_self");
			});
		
		}
	}
				

		
	$scope.update_data= function()
	{
		var answer=confirm("Do you want to update?")		
		if (!answer)
		{               
		}
		else
		{
			var adate=document.getElementById("adate").value;
			$http.post('update_availability', 
			{
				'id': $scope.id,'pid': $scope.property,'adate':adate,'guest':$scope.guest
	
			})
			.success(function (data, status, headers, config)
			{
				alert ("Data Updated Successfully");
				window.open("list_availability","_self");
			});
		}
		
	}
	
	//load property type start here
	$scope.getprop= function(property)
	{
		$http.post('loadPropname', { 'id':property}) 
		.success(function (data, status, headers, config) 
		{ 
			if(data=="")
			{
				$scope.pname="";
				alert("Please enter valid Property ID..")
				$scope.property="";
			}
			else
			{		
				$scope.pname=data[0]["pname"];
			}
		});
	}
	//load property type end here
	
	
	
});





var femto= angular.module('addProperty',[])
femto.controller('addPropertycontroller', function ($scope, $http) 
{
	
	//load property type start here
	$scope.getprop= function(property)
	{
		$http.post('loadPropname', { 'id':property}) 
		.success(function (data, status, headers, config) 
		{ 
			if(data=="")
			{
				$scope.pname="";
				alert("Please enter valid Property ID..")
				$scope.property="";
			}
			else
			{		
				$scope.pname=data[0]["pname"];
			}
		});
	}
	//load property type end here
	
	/*Sumbit data start here */
	$scope.submitData = function ()
	{

		var answer = confirm("Do you want to Submit?")
		if (!answer)
		{               
		}
		else
		{	
			var adate=document.getElementById("adate").value;
			
			$http.post('add_availability',{ 
				'pid': $scope.property,'adate':adate,'guest':$scope.guest
			})
			.success(function (data, status, headers, config)
			{
				
				alert("Data has been added Successfully");
				window.open("list_availability","_self");
			})
			
			.error(function(data, status, headers, config)
			{
				
			});
		}
	}
	/*Sumbit data End here */
		
	
});
	
	
	
			
