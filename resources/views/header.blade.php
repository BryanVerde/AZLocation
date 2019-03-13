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
                    <a href="#catalogos" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Catalogos</a>
                    <ul class="collapse list-unstyled" id="catalogos">
                        <li><a href="/formulario">formulario</a></li>
                        <li ng-click="Content = 'Libros.html'"><a>Libros</a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#prestamo" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Prestamos</a>
                    <ul class="collapse list-unstyled" id="prestamo">
                        <li><a ng-click="Content = 'Internos.html'">Internos</a></li>
                        <li><a ng-click="Content = 'Devoluciones.html'">Devoluciones</a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#Config" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Configuración</a>
                    <ul class="collapse list-unstyled" id="Config">
                        <li><a ng-click="Content = 'Prestamo.html'">Prestamo</a></li>
                        <li><a ng-click="Content = 'Recargos.html'">Recargos</a></li>
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