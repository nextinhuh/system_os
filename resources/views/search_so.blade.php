@extends('template')

@section('main')

@push('script')



@endpush


<div class="row mt">
  <div class="col-md-12">
    <div class="content-panel">
      <table class="table table-striped table-advance table-hover">
        <h4><i class="fa fa-angle-right"></i> Pesquisar Ordem de Serviço</h4>
        <hr>
        
        @if (session('save-status') == "fail_user" )
        <div class="alert alert-danger"><b>Ops!</b> Algo deu errado, favor verificar as informações e tentar novamente.</div>
        <hr>
        @endif
        
        @if ($errors->any())
        <div class="alert alert-danger">
          <strong>Erro(s):</strong>
          @foreach ($errors->all() as $e)
          <p>{{$e}}</p>
          @endforeach
        </div>@endif
        
        <div class="row">
          
          <form action="{{route('search_num')}}" method="get">
            
            
            <label class="col-md-1">Número da OS:</label>
            <div class="col-md-2">
              <input type="text" name="num_os" class="form-control round-form" >
            </div>
            
            <div class="col-md-1">
              <button type="submit" class="btn btn-theme02"><i class="fa fa-search"></i> Pesquisar</button>
            </div>
            
          </form>
          
          <form action="{{route('search_name')}}" method="get">
            
            
            <label class="col-md-1">Nome do Solicitante:</label>
            <div class="col-md-3">
              <input type="text" name="nome" class="form-control round-form">
            </div>
            
            <div class="col-md-4">
              <button type="submit" class="btn btn-theme02"><i class="fa fa-search"></i> Pesquisar</button>
            </div>
            
          </form>
          
          
          
        </div>
        <hr>
        
        

        
        
        <thead>
          <tr>
            <th><i class="fa fa-bullhorn"></i> Número da Ordem</th>
            <th class="hidden-phone"><i class="fa fa-calendar"></i> Data de Início</th>
            <th><i class="fa fa-user"></i> Solicitante</th>
            <th><i class=" fa fa-edit"></i> Setor</th>
            <th><i class="fa fa-flag"></i> Prioridade</th>
            <th><i class="fa fa-flag"></i> Hora do Chamado</th>
            <th><i class=" fa fa-edit"></i> Descrição do Problema</th>
            <th><i class=" fa fa-edit"></i> Resolução</th>
            <th><i class="fa fa-bookmark"></i> Status</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          
          @foreach ($ordem as $ordens )
          <tr>
            <th>{{$ordens['id']}}</th>
            <td>{{$ordens['dt_servico']}}</td>
            <td>{{$ordens['cliente']}}</td>
            <td>{{$ordens['setor']}}</td>
            <td>{{$ordens['prioridade']}}</td>
            <td>{{$hora[$teste= $teste+1]}}</td>
            <td>{{$ordens['descricao']}}</td>
            <td>{{$ordens['resolucao']}}</td>
            <td>{{$ordens['status']}}</td>
          </tr>
          @endforeach
          
          
        </tr>
      </tbody>
      
    </table>
    @if ($procura == 0)
    <table class="table table-striped table-advance table-hover">
      <div class="col-md-8">
        {{$ordem}}
      </div>
    </table>
    @endif
    
    
  </div>
  <!-- /content-panel -->
</div>
<!-- /col-md-12 -->
</div>


@endsection