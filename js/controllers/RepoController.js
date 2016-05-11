app.controller('RepoController', ['$scope', '$routeParams', '$http', function($scope, $routeParams, $http) {
    $scope.loading = true;
    
    $scope.contents = function() {
        var base = 'https://api.github.com/repos/marabesi/zcpe/contents/' + $routeParams.data.replace('||', '/');
        
        $http.get(base).then(function (response) {
            var content = response.data.content;
            
            $scope.content = atob(content);
            
            $scope.loading = false;
        })
    }
}])