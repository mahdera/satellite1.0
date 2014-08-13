'use strict';

adminDashboardApp.controller('ListCenterBoxContentController', function ListCenterBoxContentController($scope, $http, $routeParams){
	$scope.showCenterBoxContentDetailForEdit = function(centerBoxContentId){
		alert(centerBoxContentId);
	};
});//end controller