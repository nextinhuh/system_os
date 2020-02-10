@extends('template')

@section('main')

@push('script')



@endpush


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
            <div class="alert alert-success"><b>Ótimo!</b> Ordem de serviço editada com sucesso!</div>
            @endif
            
            @if (session('save-status') == "fail_user" )
            <div class="alert alert-danger"><b>Ops!</b> Algo deu errado, favor verificar as informações e tentar novamente.</div>
            @endif
            
            <h4 class="mb"><i class="fa fa-angle-right"></i> Editar Ordem de Serviço</h4>
            <hr>
            <div class="row">
                <form action="{{route('search_num2')}}" method="get">
                    
                    
                    <label class="col-md-1">Número da OS:</label>
                    <div class="col-md-2">
                        <input type="text" name="num_os" class="form-control round-form" >
                    </div>
                    
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-theme02"><i class="fa fa-search"></i> Pesquisar</button>
                    </div>
                    
                </form>
                
                
            </div>
            <hr>
            
            
            <form class="form-horizontal style-form" method="post" action="{{route('edit_os')}}">
                @csrf
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Número da Ordem: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="@if ($teste == 1){{$ordem['id']}}@endif" readonly=“true” name="num_os">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Data:</label>
                    <div class="col-md-3 col-xs-11">
                        <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="@if ($teste == 1){{$ordem['dt_servico']}}@endif" name="dt_servico" disabled>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nome do Funcionário:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nome" value="@if ($teste == 1){{$nome_fun['nome']}}@endif"  disabled>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Setor: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control round-form" value="@if ($teste == 1){{$ordem['setor']}}@endif" disabled name="setor">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nome do Solicitante:</label>
                    <div class="col-sm-10">
                        <input type="text" value="@if ($teste == 1){{$ordem['cliente']}}@endif" class="form-control" name="solicitante" disabled>
                    </div>
                </div>

                <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2">Descrição do Problema:</label>
                    <div class="col-lg-10">
                        <textarea class="form-control "  id="ccomment" name="desc_servico" disabled>@if ($teste == 1){{$ordem['descricao']}}@endif</textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="confirm_password" class="control-label col-lg-2">Prioridade:</label>
                    <div class="col-md-2">
                        <select class="form-control" name="prioridade">
                            <option @if ($teste == 1) @if ($ordem['prioridade'] == 'Alta') selected @endif @endif >Alta</option>
                            <option @if ($teste == 1) @if ($ordem['prioridade'] == 'Média') selected @endif @endif >Média</option>
                            <option @if ($teste == 1) @if ($ordem['prioridade'] == 'Baixa') selected @endif @endif >Baixa</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="confirm_password" class="control-label col-lg-2">Status do Serviço:</label>
                    <div class="col-md-2">
                        <select class="form-control" name="status">
                            <option @if ($teste == 1) @if ($ordem['status'] == 'Em aberto') selected @endif @endif >Em aberto</option>
                            <option @if ($teste == 1) @if ($ordem['status'] == 'Sem solução (Pendente)') selected @endif @endif >Sem solução (Pendente)</option>
                            <option @if ($teste == 1) @if ($ordem['status'] == 'Resolvido') selected @endif @endif >Resolvido</option>
                        </select>
                    </div>
                </div>
                
                
                

                <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2">Resolução:</label>
                    <div class="col-lg-10">
                        <textarea class="form-control "  id="ccomment" name="resolucao"></textarea>
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