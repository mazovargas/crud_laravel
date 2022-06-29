<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::all(); //Obtener todos los productos
        return view('paciente.index')
        ->with('pacientes',$pacientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = new paciente([
            'Documento' => $request->get('Documento'),
            'TipoDocumento' =>$request->get('TipoDocumento'),
            'Nombres' =>$request->get('Nombres'),
            'Apellidos' =>$request->get('Apellidos'),
            'Direccion' =>$request->get('Direccion'),
            'Telefono' =>$request->get('Telefono'),
            'Genero' =>$request->get('Genero'),
            'FechaNacimiento' =>$request->get('FechaNacimiento'),
            'EstadoCivil' =>$request->get('EstadoCivil')
            ]);
    
            $paciente->save();
            return redirect('/paciente')
            ->with('success','El paciente ha sido guardado');
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
        $paciente = paciente::findOrFail($id);
        return view('paciente/editar',compact('paciente'));
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
        $paciente = paciente::findOrFail($id);
        $paciente->Documento = $request->Documento;
        $paciente->TipoDocumento = $request->TipoDocumento;
        $paciente->Nombres = $request->Nombres;
        $paciente->Apellidos = $request->Apellidos;
        $paciente->Direccion = $request->Direccion;
        $paciente->Telefono = $request->Telefono;
        $paciente->Genero = $request->Genero;
        $paciente->FechaNacimiento = $request->FechaNacimiento;
        $paciente->EstadoCivil = $request->EstadoCivil;

        $paciente->update();

        return redirect('/paciente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
         //borrar fisicamente el registgro
         $paciente->delete();
         return redirect('/paciente');
    }
}
