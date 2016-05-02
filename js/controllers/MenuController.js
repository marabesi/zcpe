app.controller('MenuController', ['$scope', '$http', function ($scope, $http) {
    var base = 'https://api.github.com/repos/marabesi/zcpe/contents';

    $scope.previous = "/";

    $http.get(base).then(function (response) {
        $scope.folders = response.data;
    })

    $scope.navigate = function (path) {

        $http.get(base + '/' + path).then(function (response) {
            $scope.folders = response.data;
        });
    }
}])