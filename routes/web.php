<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/formulario', 'HomeController@formulario')->name('formulario');
Route::get('/ShowDevices', 'localizados@index')->name('ShowDevices');
Route::post('/localizado', 'localizados@store')->name('localizado');



Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@loginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/ShowClientes', 'AdminController@ShowClientes')->name('admin.clientes');
    Route::get('/addClientes', 'AdminController@addform')->name('admin.addclientes');
    Route::post('/addClientesa', 'AdminController@createuser')->name('admin.addclientespost');
    Route::get('/modClientes/{id}', 'AdminController@showmodcliente')->name('admin.modclientesshow');
    Route::post('/modClientessave/{id}', 'AdminController@updateCliente')->name('admin.modclientessave');
    Route::delete('/deleteCliente/{id}', 'AdminController@deleteCliente')->name('admin.delete');
});
