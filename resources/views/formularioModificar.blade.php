@extends('footer')
@extends('header')

@section('header')
	@parent
	<div ng-controller="ctrl" class="container">
		<form>
			<h2 id="r">Modificar</h2>
			<div>
				<label>Nombre</label>
				<input type="text" ng-model="persona2.nombre">
			</div>
			<div>
				<label>Apellido</label>
				<input type="text" ng-model="persona2.apellidos">
			</div>
			<div>
				<label>Fecha de Nacimiento</label>
				<input type="date" ng-model="date2">
			</div>
			<div>
				<label>Edad</label>
				<input readonly type="number" ng-bind="edad()" ng-model="persona2.edad">
			</div>
			<div>
				<label>Fecha de la cita</label>
				<select type="text" ng-model="persona2.fechaCita" ng-options="i for i in fechaCita"></select>
			</div>
			<div>
				<label>Fecha Horario</label>
				<select type="text" ng-model="persona2.horario" ng-options="i for i in horario"></select>
			</div>
			<button class="btn btn-warning" type="button" ng-click="update(persona2.id)">Modificar</button>
			<!--<button class="btn btn-danger" type="button" ng-click="delete(persona2.id)">Eliminar</button>-->
			<button class="btn btn-success" type="button" ng-click="show()">Regresar</button>
		</form>
	</div>
	@section('footer')
		@parent
			app.controller('ctrl', function($scope, $http, $filter){
				$scope.fechaCita=['Lunes','Martes','Miercoles','Jueves','Viernes'];
				$scope.horario=['09:00','10:00','11:00','12:00','01:00','02:00','03:00','04:00','05:00'];
				$scope.persona2={!! json_encode($data->toArray()) !!};
				$scope.date2 = new Date($filter('date')($scope.persona2.fechaNac));
				$scope.mostrar=false;

				$scope.edad=function(){
					var today = new Date();
				    var birthDate = new Date($scope.date2);
				    var age = today.getFullYear() - birthDate.getFullYear();
				    var m = today.getMonth() - birthDate.getMonth();
				    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
				    {
				        age--;
				    }
				    $scope.persona2.edad = age;
				}

				$scope.show=function(){
					window.location.href = '{{url("/todos")}}';
				}

				$scope.update=function(id){
					$scope.todos = {!! json_encode($dato->toArray()) !!};
					$scope.modificando = {!! json_encode($data->toArray()) !!};
					console.log($scope.todos, $scope.modificando);
					var contenido = 0;
					var bandera = 0;
					if($scope.todos[0]!=null){
						for(contenido = $scope.todos.length - 1; contenido >= 0; contenido--){
							if($scope.persona2.fechaCita == $scope.todos[contenido].fechaCita && $scope.persona2.horario == $scope.todos[contenido].horario && $scope.modificando.id != $scope.todos[contenido].id){
								bandera = 1;
							}
						}
					}
					if(bandera == 0){
						$scope.persona2.fechaNac = $filter('date')($scope.date2,'yyyy-MM-d hh:mm:ss');
						$http.put('/formularioModificar/'+id, $scope.persona2).then(
							function(response){
								alert("Modificado Correctamente");
								window.location.href = '{{url("/todos")}}';
							},function(errorResponse){
								alert("petaste");
							}	
						);
					}else if(bandera == 1){
						alert("Esta hora ya esta tomada");
					}
				}

				/*$scope.delete=function(id){
					$http.delete('/formularioModificar/'+id, $scope.persona2).then(
						function(response){
							alert("Eliminado Correctamente");
							window.location.href = '{{url("/todos")}}';
						},function(errorResponse){

						}
					);
				}*/
			});
	</script>
		@endsection
@endsection