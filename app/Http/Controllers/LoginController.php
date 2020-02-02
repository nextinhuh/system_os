<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Funcionario;

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
            $fun = Funcionario::where('id', '=', $usuario->id_funcionario)->first();
            session([
                'fun_nome' => $fun->nome,
                'fun_privilegio'=> $usuario->privilegio
                ]);
            
            return redirect()->route('main', $menu = ['menu' => 1]);
        }else{
            return redirect()->route('login')->with('save-status', 'fail_user');
        }
    }

    public function deslogando(Request $request){
        $request->session()->flush();
        return redirect()->route('login');
    }

}
