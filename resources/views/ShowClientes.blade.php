@extends('footer')
@extends('headerAdmin')

@section('headerAdmin')
@parent
<div ng-controller="ctrl" class="container" style="overflow-x: auto;">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>City</th>
                <th>Federal Entity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->city}}</td>
                <td>{{$user->state}}</td>
                <td><button class="btn btn-warning" type="button" ng-click="modificar({{$user->id}})">Modificar
                    </button>
                    <button class="btn btn-danger" type="button" ng-click="delete({{$user->id}})">Eliminar
                    </button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@section('footer')
@parent

@endsection
@endsection 