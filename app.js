var app = angular.module('ang-app', ['ngRoute']);
    app.controller('MainCtrl', function($scope){

    })

    .config([
        '$routeProvider', function($routeProvider){
            $routeProvider.
                when('/', {
                    template:'<h1>Template1</h1>',
                    controller: 'MainCtrl'
                })
                .when('/second', {
                    template:'<h1>Template2</h1>',
                    controller: 'SecondCtrl'
                })
                .when('/third', {
                    template:'<h1>Template3</h1>',
                    controller: 'ThirdCtrl'
                })
                .when('/fourth', {
                    template:'<h1>Template4</h1>',
                    controller: 'FourthCtrl'
                })
                .otherwise({
                    redirectTo: '/'
                })
        }
    ]);