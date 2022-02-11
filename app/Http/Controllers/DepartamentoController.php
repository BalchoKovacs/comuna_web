<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\TipoDepartamento;
use App\Models\TipoNumeracion;
use App\Models\Torre;

class DepartamentoController extends Controller
{
    
    public function index()
    {
        $data=Departamento::all();
        return view('departamento.index',compact('data'));
    }

   
    public function create()
    {
        $tipo_departamento=TipoDepartamento::all()->pluck('nombre','id')->prepend('Seleccione Tipo de Departamento','');
        $tipo_numeracion=TipoNumeracion::all()->pluck('nombre','id')->prepend('Seleccione Tipo de Numeracion','');
        $torre=Torre::all()->pluck('nombre','id')->prepend('Seleccione Torre','');
        return view('departamento.create',compact('tipo_departamento','tipo_numeracion','torre'));
    }

    public function store(Request $request)
    {
        $input=$request->all();
        Departamento::create($input);
        Alert::success('Departamento registrado exitosamente')->autoclose("2000");
        return redirect(route('departamento.index'));
    }

 
    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        $data=Departamento::find($id);
        $tipo_departamento=TipoDepartamento::all()->pluck('nombre','id')->prepend('Seleccione Tipo de Departamento','');
        $tipo_numeracion=TipoNumeracion::all()->pluck('nombre','id')->prepend('Seleccione Tipo de Numeracion','');
        $torre=Torre::all()->pluck('nombre','id')->prepend('Seleccione Torre','');
        return view('departamento.edit',compact('data','tipo_departamento','tipo_numeracion','torre'));
    }

    public function update(Request $request, $id)
    {
        $input=$request->all();
        unset($input['_method']);
        unset($input['_token']);
        Departamento::where('id',$id)->update($input);
        Alert::success('Departamento actualizado exitosamente')->autoclose("2000");
        return redirect(route('departamento.index'));
    }

    public function destroy($id)
    {
        Departamento::where('id',$id)->delete();
       toast('Eliminado con exito','success');
        return redirect(route('departamento.index'));
    }
}
