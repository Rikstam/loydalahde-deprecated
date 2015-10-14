var app = angular.module('loydaLahde',['nemLogging','leaflet-directive']);

app.config(function ($interpolateProvider) {

   // $interpolateProvider.startSymbol('<%');
   // $interpolateProvider.endSymbol('%>');

});

app.controller("MarkerController", [ '$scope', function($scope) {
    angular.extend($scope, {
        finlandCenter: {
            lat: 61.303508,
            lng: 23.800786,
            zoom: 7
        },
        markers: {
            veljespirtti: {
                lat: 61.303508,
                lng: 23.800786,
                message: "I want to travel here!",
                focus: false,
                draggable: false
            }
        },
        defaults: {
            scrollWheelZoom: false
        }
    });
}]);