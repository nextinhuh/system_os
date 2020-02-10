<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ordem_Servico;
use App\Models\Funcionario;
use DateTime;

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
    
    public function order_edit(){
        
        return view('edit_os', ['menu' => 2, 'teste' =>0] );
        //return view('search_so', $this->dados);
    }
    
    public function order_search(){
        //$ordem = Ordem_Servico::select()->get(); 
        $ordem = Ordem_Servico::paginate(10);
        foreach ($ordem as $hr){
            $minha_data = $hr ['created_at'];
            $date = new DateTime($minha_data);
            $teste[] = $date->format('H:i:s');  
        }
        
        return view('search_so', ['ordem' => $ordem, 'menu' => 2, 'procura' => 0, 'hora' => $teste, 'teste' => -1] );
        //return view('search_so', $this->dados);
    }
    
    
    public function register(Request $request){
        
        $request->validate([
            'dt_servico' => 'required',
            'nome' => 'required',
            'desc_servico' => 'required',
            'solicitante' => 'required',
            'prioridade' => 'required'
        ], [
            'required' => 'O campo :attribute é obrigatório!'
        ],[
            'dt_servico' => 'Data',
            'nome' => 'Nome do Funcionário',
            'desc_servico' => 'Descrição do Serviço',
            'solicitante' => 'Nome do Solicitante',
            'prioridade' => 'Prioridade'
            ]);
            
            $dados = Funcionario::where('nome', $request->nome)->first();
            
            if($dados != null){
                $processo = new Ordem_Servico;
                $processo->dt_servico = $request->dt_servico;
                $processo->setor ='SECOM';
                $processo->descricao = $request->desc_servico;
                $processo->cliente = $request->solicitante;
                $processo->prioridade = $request->prioridade;
                $processo->status = 'Em Aberto';
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
        
        public function searching_number(Request $request){
            
            if($request->num_os != null){
                $ordem = Ordem_Servico::where('id', '=', $request->num_os)->get();
                foreach ($ordem as $hr){
                    $minha_data = $hr ['created_at'];
                    $date = new DateTime($minha_data);
                    $teste[] = $date->format('H:i:s');  
                }
                if($ordem != null){
                    return view('search_so',['ordem' => $ordem, 'menu' => 2, 'procura' => 1, 'teste' => -1, 'hora' => $teste]);
                }else{
                    return redirect()->route('order_search', $this->dados)->with('save-status', 'fail_user');
                }
                
            }else{
                return redirect()->route('order_search', $this->dados);
            }
            
        }
        
        public function searching_name(Request $request){
            
            if($request->nome != null){
                $ordem = Ordem_Servico::where('cliente', '=', $request->nome)->get();
                foreach ($ordem as $hr){
                    $minha_data = $hr ['created_at'];
                    $date = new DateTime($minha_data);
                    $teste[] = $date->format('H:i:s');  
                }
                if($ordem != null){
                    return view('search_so',['ordem' => $ordem, 'menu' => 2, 'procura' => 1, 'teste' => -1, 'hora' => $teste]);
                }else{
                    return redirect()->route('order_search', $this->dados)->with('save-status', 'fail_user');
                }
                
            }else{
                return redirect()->route('order_search', $this->dados);
            }
            
        }
        
        public function searching_number2(Request $request){
            
            if($request->num_os != null){
                $ordem = null;
                $ordem2 = Ordem_Servico::where('id', '=', $request->num_os)->get();
                
                
                
                foreach ($ordem2 as $ordens){
                    $ordem = array(
                        "id" => $ordens['id'],
                        "dt_servico" => $ordens['dt_servico'],
                        "cliente" => $ordens['cliente'],
                        "setor" => $ordens['setor'],
                        "prioridade" => $ordens['prioridade'],
                        "descricao" => $ordens['descricao'],
                        "status" => $ordens['status'],
                        "id_funcionario" => $ordens['id_funcionario']
                    );
                }
                
                
                if($ordem != null){
                    $nome_fun2 = Funcionario::where('id', '=', $ordem['id_funcionario'])->get();
                    
                    foreach ($nome_fun2 as $orden){
                        $nome_fun = array(
                            "nome" => $orden['nome']
                        );
                    }
                    
                    return view('edit_os',['ordem' => $ordem, 'menu' => 2, 'nome_fun' => $nome_fun, 'teste' => 1]);
                }else{
                    return redirect()->route('order_edit', $this->dados)->with('save-status', 'fail_user');
                }
                
            }else{
                return redirect()->route('order_edit', $this->dados);
            }
            
        }
        
        public function editing(Request $request)
        {
            
            $request->validate([
                'resolucao' => 'required'
            ], [
                'required' => 'O campo :attribute é obrigatório!'
            ],[
                'resolucao' => 'Resolução'
                ]);
                
                $ordem = Ordem_Servico::where('id', '=', $request->num_os)->first();
                
                if ($ordem != null) {
                    $ordem->resolucao = $request->resolucao;
                    $ordem->prioridade = $request->prioridade;
                    $ordem->status = $request->status;
                    $ordem->save();
                    
                    return redirect()->route('order_edit', $menu = ['menu' => 2])->with('save-status', 'sucess_user');
                }else{
                    return redirect()->route('order_edit', $menu = ['menu' => 2])->with('save-status', 'fail_user');
                }
                
            }
            
            
        }
        