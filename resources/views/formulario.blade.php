@extends('footer')
@extends('header')

@section('header')
	@parent
		<form>
			<h2 id="r">Guardar</h2>
			<div>
				<label>Nombre</label>
				<input type="text" ng-model="persona.nombre">
			</div>
			<div>
				<label>Apellido</label>
				<input type="text" ng-model="persona.apellidos">
			</div>
			<div>
				<label>Fecha de Nacimiento</label>
				<input type="date" ng-model="date">
			</div>
			<div>
				<label>Edad</label>
				<input readonly type="number" ng-bind="edad()" ng-model="persona.edad">
			</div>
			<div>
				<label>Fecha de la cita</label>
				<select type="text" ng-model="persona.fechaCita" ng-options="i for i in fechaCita"></select>
			</div>
			<div>
				<label>Fecha Horario</label>
				<select type="text" ng-model="persona.horario" ng-options="i for i in horario"></select>
			</div>
			<button class="btn btn-warning" type="button" ng-click="guardar()">Guardar</button>
			<button class="btn btn-success" type="button" ng-click="show()">Regresar</button>
		</form>		    
	@section('footer')
		@parent
			document.getElementById("sidebarCollapse").addEventListener("click", function () {
				var menu = document.querySelector('#sidebar')
				menu.classList.toggle('active');

				var men = document.querySelector('#content')
				men.classList.toggle('active');

				/*var me = document.querySelector('#sidenavActivation')
				me.classList.toggle('active');*/

				//var me = document.querySelector('.collapse.in')
				//me.classList.toggle('in');

				//document.getElementStyle('a[aria-expanded=true]').getAttribute('aria-expanded', 'false');		
			});
		</script>
	@endsection
@endsection