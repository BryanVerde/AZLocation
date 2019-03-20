<?php

namespace App\Http\Controllers;

use App\Http\Controllers\localizados;
use Illuminate\Http\Request;
use App\localizado;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class localizados extends Controller
{

    public function index()
    {
        $localizadoid=Auth()->user()->id;
        //$data = localizado::find('localizadoid');
        $data = DB::table('localizados')->where('localizadoid', $localizadoid)->pluck('name');
        //$data = $data;
        return view('ShowDevices', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new localizado();
        $data->localizadoid=Auth()->user()->id;
        $data->name=$request->input('name');
        $data->phone=$request->input('phone');
        $data->username=$request->input('username');
        $data->password=Hash::make($request->input('password'));
        $data->save();
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
