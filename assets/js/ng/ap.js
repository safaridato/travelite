(function () {
    angular.module('travelApp', ['toursApp'])
        .service('dateParse', function () {
            this.myDateParse = function (value) {
                var pattern = /Date\(([^)]+)\)/;
                var results = pattern.exec(value);
                var dt = new Date(parseFloat(results[1]));
                return dt;
            }
        })
        .filter('myDateFormat', [
            'dateParse', function (dateParse) {
                return function (x) {
                    return dateParse.myDateParse(x);
                };
            }
        ]);
})();

