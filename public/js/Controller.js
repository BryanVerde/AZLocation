var app=angular.module('app', []);
app.controller('ctrl', function($scope, $http, $filter){
	$scope.Content='adios';
	$scope.pagina='hola';
	$scope.fechaCita=['Lunes','Martes','Miercoles','Jueves','Viernes'];
	$scope.horario=['09:00','10:00','11:00','12:00','01:00','02:00','03:00','04:00','05:00'];
	$scope.persona={};
	$scope.date;
	$scope.mostrar=false;

	$scope.guardar=function(){
		//$scope.todos = {!! json_encode($data->toArray()) !!}
		var contenido = 0;
		var bandera = 0;
		if($scope.todos[0]!=null){
			for(contenido = $scope.todos.length - 1; contenido >= 0; contenido--){
				if($scope.persona.fechaCita == $scope.todos[contenido].fechaCita && $scope.persona.horario == $scope.todos[contenido].horario){
					bandera = 1;
				}
			}
		}
		if(bandera == 0){
			$scope.persona.fechaNac = $filter('date')($scope.date,'yyyy-MM-d hh:mm:ss');
			$http.post('/savea', $scope.persona).then(
				function(response){
					alert("Agregado Correctamente");
					window.location.href = '{{url("/todos")}}';
				},function(errorResponse){

				}
			);
		}else if(bandera == 1){
			alert("Esta hora ya esta tomada");
		}	
	}

	$scope.edad=function(){
		var today = new Date();
	    var birthDate = new Date($scope.date);
	    var age = today.getFullYear() - birthDate.getFullYear();
	    var m = today.getMonth() - birthDate.getMonth();
	    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
	    {
	        age--;
	    }
	    $scope.persona.edad = age;
	}

	$scope.show=function(){
		window.location.href = '{{url("/todos")}}';
	}
});