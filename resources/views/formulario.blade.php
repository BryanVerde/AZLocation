@extends('footer')
@extends('header')

@section('header')
	@parent
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
		</form>		    
	@section('footer')
		@parent
	@endsection
@endsection