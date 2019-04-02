var app=angular.module('app', ['ngRoute']);
app.controller('ctrl',function($scope, $http, $filter, $route, $window){
	$scope.persona={};
	$scope.showdevides={};

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

	$scope.pasar=function($name, $username, $phone){
		console.log($name, $username, $phone);
		$scope.showdevides.name = $name;
		$scope.showdevides.username = $username;
		$scope.showdevides.phone = $phone;
	}

	$scope.delete=function(id){
		if(confirm("Estas seguro que deseas eliminarlo?")){
			$http.delete('/admin/deleteCliente/'+id).then(
				function(response){
					$window.location.reload();
				},function(errorResponse){
					console.log(errorResponse);
				}
			);
		}
	}
});