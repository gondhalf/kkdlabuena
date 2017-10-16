<?php

namespace App\Http\Controllers;

use App\Usario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function logear($usuario,$contraseña){
        $pass = \DB::table('usuarios')->get('contraseña')->where('usuario',$usuario);
        if($contraseña == $pass){
            return view('principal');
        }else{
            return view('welcome');
        }
    }

    public function registrar(){
        //DB::table('usuarios')->insertGetId($usuario,$contraseña,$telefono,$email);
        $this->validate(\request(),['usuario'=>'bail|required|string|max:20',]);
        Usario::create(\request()->all());
        return view('principal');
    }
}
