<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\TipoRol;
use Illuminate\Http\Request;
use App\Models\TipoDocumento;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{

    public function index()
    {
        $data=User::all();
        return view('usuario.index',compact('data'));
    }


    public function create()
    {
        $tipo_rol=TipoRol::all()->pluck('rol','id')->prepend('Seleccione Tipo de Rol','');
        $tipo_documento=TipoDocumento::all()->pluck('nombre','id')->prepend('Seleccione Tipo de Documento');
        return view('usuario.create',compact('tipo_rol','tipo_documento'));
        
    }

    public function store(Request $request)
    {
        
        $input=$request->all();
        $register=$input["register"];
        unset($input['register']);
        $password = bcrypt($input['password']);
        $input['password'] = $password;
        User::create($input);
        Alert::success('Usuario registrado exitosamente')->autoclose("2000");
        if ($register==1) {
            return redirect(route('home'));
        }else{
        return redirect(route('user.index'));

        }

    }


    public function val_dni(Request $request)
    {
         $user = User::where('dni',$request->dni)->count();
        $response = 0;
        if($user > 0){
            $response = 1;
        }

        return response()->json($response);
    }
    public function val_correo(Request $request)
    {
         $user = User::where('email',$request->email)->count();
        $response = 0;
        if($user > 0){
            $response = 1;
        }

        return response()->json($response);
    }

    public function edit($id)
    {   
        $data= User::find($id);
        return view('usuario.edit',compact('data'));
    }


    public function update(Request $request, $id)
    {
        $input= $request->all();

        unset($input['_method']);
        unset($input['_token']);
       if ($input['password']) {   
            $password = bcrypt($input['password']);
            $input['password'] = $password;
        }else{
           $p=User::find($id);
           $input['password']=$p->password;
          } 
        User::where('id',$id)->update($input);
        toast('Actualizado con exito','success');
        return redirect(route('user.index'));
    }


    public function destroy($id)
    {
       User::where('id',$id)->delete();
       toast('Eliminado con exito','success');
        return redirect(route('user.index'));
    }
    
}
