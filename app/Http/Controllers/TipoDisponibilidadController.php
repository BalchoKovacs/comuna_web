<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoDisponibilidad;
use Alert;

class TipoDisponibilidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $data = TipoDisponibilidad::all();
       return view('tipo_disponibilidad.index', compact ('data'));

    }

    public function create()
    {
        return ('tipo_disponibilidad.create');
    }

   
    public function store(Request $request)
    {
        $input=$request->all();
        TipoDisponibilidad::create($input);
        Alert::success('Tipo de Tipo de Disponibilidad registrado exitosamente')->autoclose("2000");
        return redirect(route('tipo_disponibilidad.index'));
    }

   
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
         $data=TipoDisponibilidad::find($id);
        return view('tipo_disponibilidad.edit',compact('data'));

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
        $input=$request->all();
        unset($input['_method']);
        unset($input['_token']);
        TipoDisponibilidad::where('id',$id)->update($input);
        Alert::success('Tipo de Disponibilidad actualizado exitosamente')->autoclose("2000");
        return redirect(route('tipo_disponibilidad.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TipoDisponibilidad::where('id',$id)->delete();
       toast('Eliminado con exito','success');
        return redirect(route('tipo_disponibilidad.index'));
    }
}
