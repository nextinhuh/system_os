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
            'privilegio' => 'required',
            'email' => 'required'
        ], [
            'required' => 'O campo :attribute é obrigatório!'
        ],[
            'login' => 'Login',
            'senha' => 'Senha',
            'senha2' => 'Confirmar Senha',
            'privilegio' => 'Nível de Privilégio',
            'email' => 'Email'
            ]);
            
            $dados = Funcionario::where('nome', $request->nome)->first();

            if($request->privilegio == 'Padrão'){
                $request->privilegio = 0;
            }else{
                $request->privilegio = 1;
            }
            
            if($dados != null){
                $processo = new Usuario;
                $processo->login = $request->login;
                $processo->senha = $request->senha;
                $processo->privilegio = $request->privilegio;
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

        public function alter(Request $request)
        {
            
            $request->validate([
                'login' => 'required',
                'senha_old' => 'required',
                'senha_new' => 'same:senha_new2|required',
                'senha_new2' => 'required'
            ], [
                'required' => 'O campo :attribute é obrigatório!',
                'same' => 'A nova senha informada, não conhecide com a confirmação!'
            ],[
                'login' => 'Login',
                'senha_old' => 'Senha Antiga',
                'senha_new' => 'Senha Nova',
                'senha_new2' => 'Confirmar Nova Senha'
                ]);

                $usuario = Usuario::where('login', '=', $request->login)->where('senha', '=', $request->senha_old)->first();

                if ($usuario != null) {
                    $usuario->senha = $request->senha_new;
                    $usuario->save();
                    
                    return redirect()->route('user_alter', $menu = ['menu' => 3])->with('save-status', 'sucess_user');
                }else{
                    return redirect()->route('user_alter', $menu = ['menu' => 3])->with('save-status', 'fail_user');
                }

        }
        
        
    }
    