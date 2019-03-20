var app=angular.module('app', []);
app.controller('ctrl', function($scope, $http, $filter){
	$scope.persona={};
	console.log($scope.persona.localizadoid);

	$scope.guardar=function(){
		$scope.persona2=$scope.persona;
		$scope.persona={};
		$scope.form.$setPristine();
		$http.post('/localizado', $scope.persona2).then(
			function(response){
				alert("Agregado Correctamente");
			},function(errorResponse){

			}
		);
	}
});