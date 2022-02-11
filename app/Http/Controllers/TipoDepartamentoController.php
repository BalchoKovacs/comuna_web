<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoDepartamento;
use Alert;

class TipoDepartamentoController extends Controller
{
   
    public function index()
    {
        $data=TipoDepartamento::all();
       return view('tipo_departamento.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tipo_departamento.create');
    }

    public function store(Request $request)
    {
        $input=$request->all();
        TipoDepartamento::create($input);
        Alert::success('Tipo de Departamento registrado exitosamente')->autoclose("2000");
        return redirect(route('tipo_departamento.index'));
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
        $data=TipoDepartamento::find($id);
        return view('tipo_departamento.edit',compact('data'));
    }

    
    public function update(Request $request, $id)
    {
        $input=$request->all();
        unset($input['_method']);
        unset($input['_token']);
        TipoDepartamento::where('id',$id)->update($input);
        Alert::success('Tipo de Departamento actualizado exitosamente')->autoclose("2000");
        return redirect(route('tipo_departamento.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      TipoDepartamento::where('id',$id)->delete();
       toast('Eliminado con exito','success');
        return redirect(route('tipo_departamento.index'));
    }
}
