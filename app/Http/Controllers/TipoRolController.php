<?php

namespace App\Http\Controllers;

use App\Models\TipoRol;
use Illuminate\Http\Request;
use Alert;

class TipoRolController extends Controller
{
  
    public function index()
    {
       $data=TipoRol::all();
       return view('tipo_rol.index',compact('data'));

    }

    public function create()
    {

        return view ('tipo_rol.create');
    }

    
    public function store(Request $request)
    {
        $input=$request->all();
        TipoRol::create($input);
        Alert::success('Tipo de Rol registrado exitosamente')->autoclose("2000");
        return redirect(route('tipo_rol.index'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoRol  $tipoRol
     * @return \Illuminate\Http\Response
     */
    public function show(TipoRol $tipoRol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoRol  $tipoRol
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=TipoRol::find($id);
        return view('tipo_rol.edit',compact('data'));

    }


    public function update(Request $request, $id)
    {
        $input=$request->all();
        unset($input['_method']);
        unset($input['_token']);
        TipoRol::where('id',$id)->update($input);
        Alert::success('Tipo de Rol actualizado exitosamente')->autoclose("2000");
        return redirect(route('tipo_rol.index'));
    }


    public function destroy(TipoRol $tipoRol)
    {
       TipoRol::where('id',$id)->delete();
       toast('Eliminado con exito','success');
        return redirect(route('tipo_rol.index'));
    }
}
