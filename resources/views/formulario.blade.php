@extends('footer')
@extends('header')

@section('header')
	@parent
		<form>
			<h2 id="r">Agregar Dispositivo</h2>
			<div>
				<label>Nombre del Portador</label>
				<input type="text" pattern="[A-Za-z\s]+" ng-model="persona.nombre">
			</div>
			<div>
				<label>Apellido del Portador</label>
				<input type="text" pattern="[A-Za-z\s]+" ng-model="persona.apellidos">
			</div>
			<div>
				<label>Entidad federal del Portador</label>
				<input type="text" pattern="[A-Za-z\s]+" ng-model="persona.nombre">
			</div>
			<div>
				<label>Ciudad del Portador</label>
				<input type="text" pattern="[A-Za-z\s]+" ng-model="persona.nombre">
			</div>
			<div>
				<label>Fecha de Nacimiento del Portador</label>
				<input type="date" ng-model="date">
			</div>
			<div>
				<label>Edad del Portador</label>
				<input readonly type="number" ng-bind="edad()" ng-model="persona.edad">
			</div>
			<div>
				<label>Usuario del Portador</label>
				<input type="text" ng-model="persona.Usuario">
			</div>
			<button class="btn btn-warning" type="button" ng-click="guardar()">Guardar</button>
		</form>		    
	@section('footer')
		@parent
	@endsection
@endsection