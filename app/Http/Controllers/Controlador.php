<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelo;

class Controlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $modelo = Modelo::all();
        return view('modelo.index') -> with ('modelo',$modelo);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modelo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $modelo = new Modelo();
        $modelo->nombre = $request->get('nombres');
        $modelo->apellidos = $request->get('apellidos');
        $modelo->numero_identidad = $request->get('numero_identidad');
        $modelo->estado_civil = $request->get('estado_civil');
        $modelo->sexo = $request->get('sexo');
        $modelo->correo = $request->get('correo');
        $modelo->telefono = $request->get('telefono');
        $modelo->numero_movil = $request->get('numero_movil');
        $modelo->fecha_nacimiento = $request->get('fecha_nacimiento');
        $modelo->usuario_registro = $request->get('usuario_registro');
        $modelo->usuario_modifico = $request->get('usuario_modifico');
        $modelo->estado_empleado = $request->get('estado_empleado');

        $modelo->save();

        return redirect('/modelo');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $modelo = Modelo::find($id);
        return view('modelo.edit')->with('modelo',$modelo);

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
        
        $modelo = Modelo::find($id);        

        $modelo->nombre = $request->get('nombres');
        $modelo->apellidos = $request->get('apellidos');
        $modelo->numero_identidad = $request->get('numero_identidad');
        $modelo->estado_civil = $request->get('estado_civil');
        $modelo->sexo = $request->get('sexo');
        $modelo->correo = $request->get('correo');
        $modelo->telefono = $request->get('telefono');
        $modelo->numero_movil = $request->get('numero_movil');
        $modelo->fecha_nacimiento = $request->get('fecha_nacimiento');
        $modelo->usuario_registro = $request->get('usuario_registro');
        $modelo->usuario_modifico = $request->get('usuario_modifico');
        $modelo->estado_empleado = $request->get('estado_empleado');

        $modelo->save();

        return redirect('/modelo');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $modelo = Modelo::find($id);
        $modelo->delete();

        return redirect('/modelo');

    }
}
