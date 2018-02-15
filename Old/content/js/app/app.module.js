// var app = angular.module("myApp", ["ngRoute", "ui.router", "ngResource", "ngCookies", "ui.bootstrap"]);
var app = angular.module("myApp", ["ui.router"])
// app.config(function($routeProvider, $locationProvider) {
//     $locationProvider.hashPrefix('');
//     $locationProvider.html5Mode(true);
//     $routeProvider
//     .when('/', {
//         templateUrl: '/content/partials/main.html', controller: 'mainCtrl'
//     })
//     .when('/test', {
//         templateUrl: '/content/partials/test.html', controller: 'testCtrl'
//     });
// });
app.config(function($stateProvider, $urlRouterProvider, $locationProvider) {
	$locationProvider.hashPrefix('');
    $locationProvider.html5Mode({
        enabled: true
    });
    $urlRouterProvider.otherwise('/');
    $stateProvider
        .state('main', {
            url: '/',
            templateUrl: '/content/partials/main.html',
            controller: 'mainCtrl'
        })
        .state('test', {
            url: '/test',
            templateUrl: '/content/partials/test.html',
            controller: 'testCtrl'
        });
});
// app.run();
app.controller('mainCtrl', ['$scope', function($scope) {
	$scope.title = "Hello World from the MAIN partial!!";
}]);
app.controller('testCtrl', ['$scope', function($scope) {
    $scope.title = "Hello World from the TEST partial!!";
}]);