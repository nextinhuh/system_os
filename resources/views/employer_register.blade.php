@extends('template')

@section('main')




<div class="row mt">
  <div class="col-lg-12">
    <h4><i class="fa fa-angle-right"></i> Cadastrar Funcionário</h4>
    
    
    
    <div class="form-panel">
      @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Erro(s):</strong>
        @foreach ($errors->all() as $e)
        <p>{{$e}}</p>
        @endforeach
      </div>@endif
      
      @if (session('save-status') == "s" )
      <div class="alert alert-success"><b>Ótimo!</b> Funcionário cadastrado com sucesso!</div>
      @endif
      
      @if (session('save-status') == "n" )
      <div class="alert alert-danger"><b>Ops!</b> Algo deu errado, favor tentar em instantes.</div>
      @endif
      
      
      
      <div class="form">
        <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="{{route('employer_register')}}">
          @csrf
          <div class="form-group ">
            <label for="firstname" class="control-label col-lg-2">Nome:</label>
            <div class="col-lg-10">
              <input class=" form-control" id="firstname" name="nome" type="text" />
            </div>
          </div>
          
          <div class="form-group ">
            <label for="username" class="control-label col-lg-2">Cargo:</label>
            <div class="col-lg-10">
              <input class="form-control " id="username" name="cargo" type="text" />
            </div>
          </div>
          
          <div class="form-group ">
            <label for="username" class="control-label col-lg-2">Setor:</label>
            <div class="col-lg-10">
              <input class="form-control " id="username" name="setor" type="text" />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
              <button class="btn btn-theme" type="submit">Cadastrar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- /form-panel -->
  </div>
  <!-- /col-lg-12 -->
</div>
@endsection