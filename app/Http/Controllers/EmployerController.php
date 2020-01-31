<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class EmployerController extends Controller
{
    private $menu = ['menu' => 2];

    public function employ_register(Request $request){

        $request->validate([
            'nome' => 'required',
            'cargo' => 'required',
            'setor' => 'required'
        ], [
            'required' => 'O campo :attribute é obrigatório!'
        ],[
            'nome' => 'Nome',
            'cargo' => 'Cargo',
            'setor' => 'Setor'
            ]);

            $processo = new Funcionario;
            $processo->nome = $request->nome;
            $processo->cargo = $request->cargo;
            $processo->setor = $request->setor;

            if ($processo->save()) {
                return redirect()->route('user_register', $this->menu)->with('save-status', 's');
            }else{
                return redirect()->route('user_register', $this->menu)->with('save-status', 'n');
            }





        return view('register_so', $this->dados);
    }


}
