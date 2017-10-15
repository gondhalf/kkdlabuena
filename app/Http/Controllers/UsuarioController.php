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

    public function registrar($usuario,$contraseña,$telefono,$email){
        DB::table('usuarios')->insertGetId($usuario,$contraseña,$telefono,$email);
    }
}
