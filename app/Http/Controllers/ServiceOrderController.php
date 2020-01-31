<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ordem_Servico;
use App\Models\Funcionario;

class ServiceOrderController extends Controller
{
    private $dados = ['menu' => 2];

    public function order_register(){
        $processos = Ordem_Servico::max('id');
        if($processos != null){
            return view('register_so', ['processos' => $processos, 'menu' => 2]);
        }else{
            return view('register_so', ['processos' => $processos, 'menu' => 2]);
        }
        
        
    }

    public function order_search(){
        return view('search_so', $this->dados);
    }


    public function register(Request $request){
        
        $request->validate([
            'dt_servico' => 'required',
            'nome' => 'required',
            'desc_servico' => 'required'
        ], [
            'required' => 'O campo :attribute é obrigatório!'
        ],[
            'dt_servico' => 'Data',
            'nome' => 'Nome do Funcionário',
            'desc_servico' => 'Descrição do Serviço'
            ]);
            
            $dados = Funcionario::where('nome', $request->nome)->first();
            
            if($dados != null){
                $processo = new Ordem_Servico;
                $processo->dt_servico = $request->dt_servico;
                $processo->setor ='SECOM';
                $processo->desc_servico = $request->desc_servico;
                $processo->id_funcionario = $dados->id;
                
                if ($processo->save()) {
                    return redirect()->route('order_register', $this->dados)->with('save-status', 'sucess_user');
                }else{
                    return redirect()->route('order_register', $this->dados)->with('save-status', 'fail_user');
                }
            }else{
                return redirect()->route('order_register', $this->dados)->with('save-status', 'fail_user');
            }
            
            
            
            
            
            
            
            
            
            
        }

    

}
