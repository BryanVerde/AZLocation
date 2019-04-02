@extends('footer')
@extends('header')

@section('header')
	@parent
	<div ng-controller="ctrl" class="container">
		<form name="form" ng-model-options="{ updateOn: 'blur'}">
			<h2 id="r">Add Device</h2>
			<div>
				<label>Name*</label>
				<input type="text" pattern="[A-Za-z]+" ng-model="persona.name" name="name" required>
				<span ng-show="form.name.$dirty && form.name.$error.required" style="color: red;">Campo Requerido</span>
			</div>
			<div>
				<label>Phone*</label>
				<input type="number" pattern="[0-9]+" maxlength="10" ng-model="persona.phone" name="phone" required>
				<span ng-show="form.phone.$dirty && form.phone.$error.required" style="color: red;">Campo Requerido</span>
			</div>
			<div>
				<label>Username*</label>
				<input type="text" ng-model="persona.username" name="username" required>
				<span ng-show="form.username.$dirty && form.username.$error.required" style="color: red;">Campo Requerido</span>
			</div>
			<div>
				<label>password*</label>
				<input type="password" maxlength="8" ng-model="persona.password" name="password" required>
				<span ng-show="form.password.$dirty && form.password.$error.required" style="color: red;">Campo Requerido</span>
			</div>
			<button class="btn btn-warning" type="button" ng-click="guardar()" ng-disabled="!form.$valid">Guardar</button>
			<button class="btn btn-warning" type="button" ng-click="guardar()" ng-disabled="!form.$valid">Cancelar</button>
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