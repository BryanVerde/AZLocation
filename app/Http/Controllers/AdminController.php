<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('HomeAdmin');
    }

    public function ShowClientes()
    {
        $Users=new User();
        $data=$Users::all();
        return view('ShowClientes', compact('data'));
    }

    public function addform()
    {
        return view('addcliente');
    }

    public function showmodcliente($id)
    {
        $data = User::find($id);
        return view('modcliente', compact('data'));
    }

    public function updateCliente(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
        ]);

        $data = User::find($id);
        $data->name = $request->name;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->state = $request->state;
        $data->city = $request->city;
        $data->save();
        return redirect()->route('admin.clientes');
    }

    public function deleteCliente($id)
    {
        $data = DB::table('localizados')->where('localizadoid', $id);
        $data->delete();
        User::find($id)->delete();
    }

    protected function createuser(Request $data)
    {
        $this->validate($data, [
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'name' => $data->name,
            'address' => $data->address,
            'phone' => $data->phone,
            'state' => $data->state,
            'city' => $data->city,
            'username' => $data->username,
            'email' => $data->email,
            'password' => Hash::make($data->password),
        ]);

        return redirect()->route('admin.addclientes');
    }
}
