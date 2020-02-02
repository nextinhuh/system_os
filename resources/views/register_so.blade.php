@extends('template')

@section('main')




<div class="row mt">
  
  <div class="col-lg-12">
    <div class="form-panel">

      @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Erro(s):</strong>
                @foreach ($errors->all() as $e)
                <p>{{$e}}</p>
                @endforeach
            </div>@endif

            @if (session('save-status') == "sucess_user" )
              <div class="alert alert-success"><b>Ótimo!</b> Ordem de serviço cadastrado com sucesso!</div>
            @endif

            @if (session('save-status') == "fail_user" )
            <div class="alert alert-danger"><b>Ops!</b> Algo deu errado, favor verificar as informações e tentar novamente.</div>
            @endif

      <h4 class="mb"><i class="fa fa-angle-right"></i> Gerar Ordem de Serviço</h4>
          <form class="form-horizontal style-form" method="post" action="{{route('registrar_ordem')}}">
        @csrf
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Número da Ordem: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="@if ($processos != null) {{$processos+1}} @else 1 @endif" readonly=“true”>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Data:</label>
          <div class="col-md-3 col-xs-11">
          <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="{{date('d/m/Y')}}" name="dt_servico" readonly=“true”>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nome do Funcionário:</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="nome" value="{{session('fun_nome')}}"  readonly=“true”>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Setor: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control round-form" value="SECOM" disabled name="setor">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nome do Solicitante:</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="solicitante" >
          </div>
        </div>

        <div class="form-group">
          <label for="confirm_password" class="control-label col-lg-2">Prioridade:</label>
          <div class="col-md-2">
            <select class="form-control" name="prioridade">
              <option>Alta</option>
              <option>Média</option>
              <option>Baixa</option>
            </select>
          </div>
        </div>
        

        <div class="form-group ">
          <label for="ccomment" class="control-label col-lg-2">Descrição do Serviço:</label>
          <div class="col-lg-10">
            <textarea class="form-control " id="ccomment" name="desc_servico"></textarea>
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">
            <button class="btn btn-theme" type="submit">Salvar</button>
          </div>
        </div>
        
      </div>
    </form>
  </div>
</div>
@endsection