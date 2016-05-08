app.controller('RepoController', ['$scope', '$routeParams', '$http', function($scope, $routeParams, $http) {
    $scope.contents = function() {
        var base = 'https://api.github.com/repos/marabesi/zcpe/contents/' + $routeParams.data;
        
        $http.get(base).then(function (response) {
            var content = response.data.content;
            
            $scope.content = atob(content);
        })
    }
}])