(function () {
    angular.module('toursApp', [])
        .controller('ToursListController', function ($scope, $locale, $http) {
            $scope.formFields = {};


            $scope.toursList = {};


            //
            //
            $scope.GetToursList = function () {
                var fd = new FormData();
                $scope.formFields.loadProfile = true;
                fd.append("FirstName", $scope.formFields.FirstName);
                $http({
                    method: "POST",
                    url: "services/tourssvc/GetTours/",
                    data: fd,
                    headers: {"Content-Type": undefined}
                }).then(function successCallback(response) {

                    $scope.formFields.loadProfile = false;
                    $scope.toursList = response.data.Data;
                }, function errorCallback(response) {

                });
            }

            $scope.GetToursList();

        });
})();