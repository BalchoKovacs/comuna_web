<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoNumeracion;
use Alert;

class TipoNumeracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=TipoNumeracion::all();
       return view('tipo_numeracion.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tipo_numeracion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $input=$request->all();
        TipoNumeracion::create($input);
        Alert::success('Tipo de Numeracion registrado exitosamente')->autoclose("2000");
        return redirect(route('tipo_numeracion.index'));
    }

    
     
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
          $data=TipoNumeracion::find($id);
        return view('tipo_numeracion.edit',compact('data'));
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
        TipoNumeracion::where('id',$id)->update($input);
        Alert::success('Tipo de Numeracion actualizado exitosamente')->autoclose("2000");
        return redirect(route('tipo_numeracion.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       TipoNumeracion::where('id',$id)->delete();
       toast('Eliminado con exito','success');
        return redirect(route('tipo_numeracion.index'));
    }
}
