<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function tela_login(){
        return view('login');
    }

    public function logando(Request $request){
        $request->validate([
            'login' => 'required',
            'senha' => 'required'
        ], [
            'required' => 'O campo :attribute é obrigatório!'
        ]);

        $usuario = Usuario::where('login', '=', $request->login)->where('senha', '=', $request->senha)->first();
        
        if ($usuario != null) {
            
            return redirect()->route('main', $menu = ['menu' => 1]);
        }else{
            return redirect()->route('login')->with('save-status', 'fail_user');
        }
    }

    public function deslogando(Request $request){
        
        return view('login');
    }

}
