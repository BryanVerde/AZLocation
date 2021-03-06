<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('HomeUSer');
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function ShowDevices()
    {
        return view('ShowDevices');
    }

    public function add()
    {
        return view('ShowDevices');
    }
}
