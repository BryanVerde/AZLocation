@extends('footer')
@extends('headerAdmin')

@section('headerAdmin')
	@parent
		<div class="card-header">{{ __('Modificar') }}</div>

            <div class="card-body">
                <form method="POST" action="/admin/modClientessave/{{$data->id}}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" pattern="[A-Za-z\s]+" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" ng-model="modcliente.name" required>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" ng-model="modcliente.address" required autofocus>

                            @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                        <div class="col-md-6">
                            <input id="phone" type="text" pattern="[0-9]+" maxlength="10" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" ng-model="modcliente.phone" required autofocus>

                            @if ($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('Federal entity') }}</label>

                        <div class="col-md-6">
                            <input id="state" type="text" pattern="[A-Za-z\s]+" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" ng-model="modcliente.state" required autofocus>

                            @if ($errors->has('state'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('state') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                        <div class="col-md-6">
                            <input id="city" type="text" pattern="[A-Za-z\s]+" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" ng-model="modcliente.city" required autofocus>

                            @if ($errors->has('city'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('modificar') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>		    
	@section('footer')
		@parent
        <script type="text/javascript">
            var app=angular.module('app', ['ngRoute']);
            app.controller('ctrl',function($scope, $http, $filter, $route, $window){
                $scope.modcliente={!! json_encode($data->toArray()) !!};
            });
        </script>
	@endsection
@endsection