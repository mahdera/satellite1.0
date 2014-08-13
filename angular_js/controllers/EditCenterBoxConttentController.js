'use strict';

adminDashboardApp.controller('EditCenterBoxConttentController', function EditCenterBoxConttentController($scope,$routeParams){
	$scope.centerBoxForm = {};//defining the formObject is very crucial...
    
    angular.element(document).ready(function () {        
        $scope.centerBoxForm.cId = $routeParams.cId;
        //alert($routeParams.cId);
    });//end document.ready function
});//end controller