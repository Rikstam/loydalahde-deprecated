var app = angular.module('loydaLahde',['nemLogging','leaflet-directive']);

app.config(function ($interpolateProvider) {

   // $interpolateProvider.startSymbol('<%');
   // $interpolateProvider.endSymbol('%>');

});

app.controller("MarkerController", [ '$scope','$http', function($scope, $http) {

    var $springList = {};

    $http.get('http://loydalahde.app:8000/api/springs').then(function(resp) {
        console.log('Success', resp);
        // For JSON responses, resp.data contains the result

        resp.data.forEach(function(item, index){
            $springList[index] = {
                lat: item.location.coordinates[1],
                lng: item.location.coordinates[0],
                message: '<h4>' + item.title + '</h4><p>Lähteen laatu analysoitu ' +  item.tested_at + '</p>',
                focus: false,
                draggable: false
            }
        });


    }, function(err) {
        console.error('ERR', err);
        // err.status will contain the status code
    });

    angular.extend($scope, {
        finlandCenter: {
            lat: 64.96,
            lng: 27.59,
            zoom: 5
        },
        markers: $springList,
        defaults: {
            scrollWheelZoom: false
        }
    });
}]);