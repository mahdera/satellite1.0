'use strict';

adminDashboardApp.controller('AddEventContentController', function AddEventContentController($scope, $routeParams, $http){
    
    $scope.eventContentForm = {};

    angular.element(document).ready(function() {        
        $scope.eventContentForm.userId = $routeParams.uId;
    });//end document.ready function

    $scope.saveEventContent = function() {
        var title = $scope.eventContentForm.title;
        var eventDetail = document.getElementById('eventDetail').value;
        //now check if the values are not empty
        if (title === "") {
            $scope.message = "Enter the title";
            document.getElementById('title').focus();
        } else if (eventDetail === "") {
            $scope.message = "Enter the event detail";
            document.getElementById('eventDetail').focus();
        } else {
            //is valid
            $scope.eventContentForm.eventDetail = document.getElementById('eventDetail').value;
            $http({
                method: 'POST',
                url: 'save_event_content.php',
                data: serializeData($scope.eventContentForm),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}  // set the headers so angular passing info as form data (not request payload)
            })
                    .success(function(data) {
                        //alert(data);
                        if (!data.success) {
                            document.getElementById('processStatusDiv').innerHTML = data.message;
                        } else {
                            //now clear the form for new insertion...that is the beauty of two-way-binding...
                            $scope.eventContentForm.title = "";
                            document.getElementById('eventDetail').value = "";
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