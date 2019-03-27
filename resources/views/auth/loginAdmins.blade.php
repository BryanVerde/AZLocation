@extends('layouts.appAdmin')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
<div class="container">
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active"> Sign In </h2>

            <!-- Icon -->
            <div class="fadeIn first">
                <!--<img src="assets/User.png" id="icon" alt="User Icon" />-->
                <i class="fas fa-id-badge" id="icon" style="text-align: center;"></i>
            </div>

            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf

                <div class="form-group">
                    <label for="email" class="text-md-right text-white">
                        {{ __('Email') }}
                    </label>

                    <div class="fadeIn second">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="text-white text-md-right">{{ __('Password') }}</label>

                    <div class="fadeIn third">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <!--<div class="form-group fadeIn third">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>-->

                <div class="form-group  mb-0">
                    <div>
                        <input type="submit" class="fadeIn fourth" value="Log In">

                        <!--@if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif-->
                    </div>
                </div>
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <i class="fas fa-arrow-left"></i>
                <a class="underlineHover" href="/">Regresar</a>
            </div>

        </div>
    </div>
</div>
@endsection 