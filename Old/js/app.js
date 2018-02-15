var app = angular.module('app', ["ngRoute","ngAnimate","ui.bootstrap","ngAnimate","ngSanitize"]);
app.config(function ($routeProvider,$locationProvider) {
	"use strict";
    $locationProvider.hashPrefix('');
    $routeProvider
    .when("/", {
        templateUrl : ""
    })
    .when("/", {
        templateUrl : ""
    });
});
app.controller('mainCtrl', function($scope, $window, $http) { });