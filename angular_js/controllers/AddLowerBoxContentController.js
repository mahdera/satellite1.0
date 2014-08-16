'use strict';

adminDashboardApp.controller('AddLowerBoxContentController', function AddLowerBoxContentController($scope, $routeParams, $http) {
    $scope.lowerBoxForm = {};

    angular.element(document).ready(function() {        
        $scope.lowerBoxForm.userId = $routeParams.uId;
    });//end document.ready function

    $scope.saveLowerBoxContent = function() {
        var title = $scope.lowerBoxForm.title;
        var content = document.getElementById('content').value;
        var whichColumn = $scope.lowerBoxForm.whichColumn;
        //okay then i need to come back to this module when all is done.
        //valiation is not working as expected.
        //now check if the values are not empty
        if (title === "") {
            $scope.message = "Enter the title";
            document.getElementById('title').focus();
        } else if (content === "") {
            $scope.message = "Enter the content";
            document.getElementById('content').focus();
        } else if(whichColumn === ""){
            $scope.message = "Please select which column value";
            document.getElementById('whichColumn').focus();
        }else {
            //is valid
            $scope.lowerBoxForm.content = document.getElementById('content').value;
            $http({
                method: 'POST',
                url: 'save_lower_box_content.php',
                data: serializeData($scope.lowerBoxForm),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}  // set the headers so angular passing info as form data (not request payload)
            })
                    .success(function(data) {
                        //alert(data);
                        if (!data.success) {
                            document.getElementById('processStatusDiv').innerHTML = data.message;
                        } else {
                            //now clear the form for new insertion...that is the beauty of two-way-binding...
                            $scope.lowerBoxForm.title = "";
                            document.getElementById('content').innerHTML = "";
                            document.getElementById('processStatusDiv').innerHTML = data.message;
                        }
                    });
        }
    };

    function serializeData(data) {
        // If this is not an object, defer to native stringification.
        if (!angular.isObject(data)) {

            return((data === null) ? "" : data.toString());

        }

        var buffer = [];

        // Serialize each key in the object.
        for (var name in data) {

            if (!data.hasOwnProperty(name)) {

                continue;

            }

            var value = data[ name ];

            buffer.push(
                    encodeURIComponent(name) +
                    "=" +
                    encodeURIComponent((value === null) ? "" : value)
                    );

        }

        // Serialize the buffer and clean it up for transportation.
        var source = buffer
                .join("&")
                .replace(/%20/g, "+")
                ;

        return(source);

    }
});//end controller