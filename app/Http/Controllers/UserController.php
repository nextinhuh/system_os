<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use App\Models\Usuario;

class UserController extends Controller
{
    
    private $menu = ['menu' => 3];
    
    public function user_register(){
        return view('register_user', $this->menu);
    }
    
    public function user_alter(){
        return view('alter_user', $this->menu);
    }
    
    public function register(Request $request){
        
        $request->validate([
            'login' => 'required',
            'senha' => 'same:senha2|required',
            'senha2' => 'required',
            'email' => 'required'
        ], [
            'required' => 'O campo :attribute é obrigatório!'
        ],[
            'login' => 'Login',
            'senha' => 'Senha',
            'senha2' => 'Confirmar Senha',
            'email' => 'Email'
            ]);
            
            $dados = Funcionario::where('nome', $request->nome)->first();
            
            if($dados != null){
                $processo = new Usuario;
                $processo->login = $request->login;
                $processo->senha = $request->senha;
                $processo->email = $request->email;
                $processo->id_funcionario = $dados->id;
                
                if ($processo->save()) {
                    return redirect()->route('user_register', $this->menu)->with('save-status', 'sucess_user');
                }else{
                    return redirect()->route('user_register', $this->menu)->with('save-status', 'fail_user');
                }
            }else{
                return redirect()->route('user_register', $this->menu)->with('save-status', 'fail_user');
            }
            
            
            
            
            
            
            
            
            
            
        }
        
        
    }
    