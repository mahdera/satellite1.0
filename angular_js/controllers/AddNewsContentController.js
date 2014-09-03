'use strict';

adminDashboardApp.controller('AddNewsContentController', function AddNewsContentController($scope, $routeParams, $http){
    
    $scope.newsContentForm = {};

    angular.element(document).ready(function() {        
        $scope.newsContentForm.userId = $routeParams.uId;
    });//end document.ready function

    $scope.saveNewsContent = function() {
        var title = $scope.newsContentForm.title;
        var newsDetail = document.getElementById('newsDetail').value;
        //now check if the values are not empty
        if (title === "") {
            $scope.message = "Enter the title";
            document.getElementById('title').focus();
        } else if (newsDetail === "") {
            $scope.message = "Enter the news detail";
            document.getElementById('newsDetail').focus();
        } else {
            //is valid
            $scope.newsContentForm.newsDetail = document.getElementById('newsDetail').value;
            $http({
                method: 'POST',
                url: 'save_news_content.php',
                data: serializeData($scope.newsContentForm),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}  // set the headers so angular passing info as form data (not request payload)
            })
                    .success(function(data) {
                        //alert(data);
                        if (!data.success) {
                            document.getElementById('processStatusDiv').innerHTML = data.message;
                        } else {
                            //now clear the form for new insertion...that is the beauty of two-way-binding...
                            $scope.newsContentForm.title = "";
                            document.getElementById('newsDetail').value = "";
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