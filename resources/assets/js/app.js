var app = angular.module('loydaLahde', ['nemLogging', 'leaflet-directive', 'angucomplete-alt']);

app.config(function ($interpolateProvider) {

    // $interpolateProvider.startSymbol('<%');
    // $interpolateProvider.endSymbol('%>');

});

app.controller("FrontPageMapController", ['$scope', '$http', function ($scope, $http) {

    $scope.springList = {};
    var markerIcon = 'fa-check-circle-o';
    var markerColor = 'green';

    $http.get('/api/springs').then(function (resp) {
        console.log('Success', resp);
        // For JSON responses, resp.data contains the result

        resp.data.forEach(function (item, index) {

            switch (item.status) {
                case 'juomakelpoista':
                    markerIcon = 'fa-check-circle';
                    markerColor = 'green';
                    break;
                case 'ei tietoa':
                    markerIcon = 'fa-question-circle';
                    markerColor = 'orange';
                    break;
                case 'ei juomakelpoista':
                    markerIcon = 'fa-exclamation';
                    markerColor = 'red';
                    break;
            }

            $scope.springList[index] = {
                lat: item.location.coordinates[1],
                lng: item.location.coordinates[0],
                message: '<h4>' + item.title + '</h4><p>Lähteen tila: <strong>' + item.status + '</strong></p><p>Lähteen laatu analysoitu: <strong>' + item.tested_at + '</strong></p>',
                focus: false,
                draggable: false,
                icon: {
                    type: 'awesomeMarker',
                    prefix: 'fa',
                    icon: markerIcon,
                    markerColor: markerColor
                }

            }
        });


    }, function (err) {
        console.error('ERR', err);
        // err.status will contain the status code
    });

    angular.extend($scope, {
        finlandCenter: {
            lat: 64.96,
            lng: 27.59,
            zoom: 5
        },
        markers: $scope.springList,
        defaults: {
            scrollWheelZoom: false
        }/*,
        legend: {
            position: 'bottomleft',
            colors: ['#D53E2A', '#F49630', '#72AF26'],
            labels: ['Ei juomakelpoista', 'Ei testattua tietoa', 'Juomakelpoista']
        }*/
    });
}]);

app.controller("SingleSpringController",['$scope', '$http', function($scope, $http){
    angular.extend($scope, {
        defaults: {
            scrollWheelZoom: false
        }
    });
}]);