<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\Torre;

class TorreController extends Controller
{
  
    public function index()
    {
       $data=Torre::all();
       return view('torre.index',compact('data'));
    }

    public function create()
    {
        return view ('torre.create');
    }

    public function store(Request $request)
    {
       $input=$request->all();
        Torre::create($input);
        Alert::success('Torre registrado exitosamente')->autoclose("2000");
        return redirect(route('torre.index'));
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
        $data=Torre::find($id);
        return view('torre.edit',compact('data'));
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
        Torre::where('id',$id)->update($input);
        Alert::success('Torre actualizado exitosamente')->autoclose("2000");
        return redirect(route('torre.index'));
    }

    
    public function destroy($id)
    {
        Torre::where('id',$id)->delete();
       toast('Eliminado con exito','success');
        return redirect(route('torre.index'));
    }
}
