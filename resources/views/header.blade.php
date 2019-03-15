@section('header')
<!DOCTYPE html>
<html ng-app="app">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
	<title></title>
</head>
<body ng-controller="ctrl">
	<div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <!--<img src="{{asset('img/user.png')}}" height="100">-->
                <a href="/" style="color: white !important;"><i class="fas fa-map-marked-alt" style="font-size: 5em;"></i></a>
            </div>
            <ul class="list-unstyled components">
            	<li class="active">
                    <a href="/home">Inicio</a>
                </li>
                <li class="active">
                    <a href="#catalogos" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Dispositivos</a>
                    <ul class="collapse list-unstyled" id="catalogos">
                        <li><a href="/formulario">Agregar</a></li>
                        <li><a href="/ShowDevices">Mostrar</a></li>
                    </ul>
                </li>
            </ul>
            <div class="sidebar-logout">
                <a class="sidebar-logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </nav>
	    <div id="content">
	    	<nav class="navbar navbar-expand-lg navbar-inverse navbar-fixed-top navbar-light bg-light">
		        <div class="container-fluid">
		            <button type="button" id="sidebarCollapse" class="btn btn-info1 btn-light">
		                <i class="fas fa-align-left"></i>
		            </button>

		            <div>
		                <i class="fas fa-street-view" style="font-size: 2em;"></i>
		            </div>
		        </div>
		    </nav>
		  	<div class="container">
@show