(function () {
    angular.module('toursApp', [])
        .controller('ToursListController', function ($scope, $locale, $http) {
            $scope.formFields = {};


            $scope.toursList = {};


            //
            //
            $scope.GetToursList = function () {
                var fd = new FormData();
                $scope.formFields.loadForm = true;
                fd.append("FirstName", $scope.formFields.FirstName);
                $http({
                    method: "POST",
                    url: "services/tourssvc/GetTours/",
                    data: fd,
                    headers: {"Content-Type": undefined}
                }).then(function successCallback(response) {

                    $scope.formFields.loadForm = false;
                    $scope.toursList = response.data.Data;
                }, function errorCallback(response) {

                });
            }

            $scope.GetToursList();


        })
        .controller('TourDetailsController', function ($scope, $locale, $http, $sce) {
            $scope.tourDetails = {};
           // $scope.tourId;

            $scope.formFields = {};
            $scope.GetTourDetails = function (tourId) {
                var fd = new FormData();
                //$scope.formFields.loadForm = true;
                fd.append("TourId", tourId);
                $http({
                    method: "POST",
                    url: "services/tourssvc/GetTourDetails/",
                    data: fd,
                    headers: {"Content-Type": undefined}
                }).then(function successCallback(response) {
                    console.log(response);
                    // $scope.formFields.loadForm = false;
                    $scope.tourDetails = response.data.Data;
                }, function errorCallback(response) {

                });
            }

            $scope.prepHtml = function (value) {
              return  $sce.trustAsHtml(value);
            }




            setTimeout(function () {
                $("#package_details_slider").owlCarousel({
                    items: 1,
                    nav: true,
                    auto: true,
                    dots: false,
                    navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
                    paginationSpeed: 1500,
                    slideSpeed: 3000,
                    smartSpeed: 1000,
                    singleItem: true,
                    transitionStyle: "fade",
                });

                //$( "#Travelite_middle_tabs" ).tabs();

            }, 2000);

        });
})();