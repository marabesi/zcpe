var app = angular.module('zcpe', ['ngRoute', 'hljs']);

app.config(['$routeProvider', function($routeProvider) {
    $routeProvider.when('/', {
        templateUrl: 'js/view/index.html',
        controller: 'RepoController'
    }).when('/repo/detail/:data', {
        templateUrl: 'js/view/detail.html',
        controller: 'RepoController'
    });
}]);

//app.config(function(hljsServiceProvider) {
//    hljsServiceProvider.setOptions({
//        tabReplace: '    '
//    });
//});