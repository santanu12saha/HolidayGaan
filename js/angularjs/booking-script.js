var booking = angular.module('bookingapp', [])
booking.controller('bookingcontroller', function ($scope, $compile) {		
	$scope.itinerary_reveal = false;
	$scope.showitinerary = function()
	{
		//$scope.itinerary_reveal = true;
		$scope.itinerary_reveal = $scope.itinerary_reveal ? false : true;
	}
});