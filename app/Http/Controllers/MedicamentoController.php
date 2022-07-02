<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicamento;


class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicamentos = Medicamento::all(); //Obtener todos los productos
        return view('medicamento.index')
        ->with('medicamentos',$medicamentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicamento.registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medicamento = new medicamento([
            
            'Nombre' =>$request->get('Nombre'),
            'Precio' =>$request->get('Precio')
            ]);
    
            $medicamento->save();
            return redirect('/medicamento')
            ->with('success','El producto ha sido guardado');
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
        $medicamento = medicamento::findOrFail($id);
        return view('medicamento/editar',compact('medicamento'));
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
        $medicamento = medicamento::findOrFail($id);
        $medicamento->Nombre = $request->Nombre;
        $medicamento->Precio = $request->Precio;

        $medicamento->update();

        return redirect('/medicamento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicamento $medicamento)
    {
          //borrar fisicamente el registgro
          $medicamento->delete();
          return redirect('/medicamento');
    }
}
