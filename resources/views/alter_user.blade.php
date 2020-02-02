@extends('template')

@section('main')
    

    
<div class="row mt">
    <div class="col-lg-12">
      <h4><i class="fa fa-angle-right"></i> Alterar Senha de Usuário</h4>
      <div class="form-panel">
        
        @if ($errors->any())
        <div class="alert alert-danger">
          <strong>Erro(s):</strong>
          @foreach ($errors->all() as $e)
          <p>{{$e}}</p>
          @endforeach
        </div>@endif
        
        @if (session('save-status') == "sucess_user" )
        <div class="alert alert-success"><b>Ótimo!</b> Senha de usuário alterada com sucesso!</div>
        @endif
        
        @if (session('save-status') == "fail_user" )
        <div class="alert alert-danger"><b>Ops!</b> Algo deu errado, favor verificar os dados informados e tentar novamente.</div>
        @endif
        
        <div class="form">
          <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="{{route('alter')}}">
            @csrf
            <div class="form-group ">
              <label for="username" class="control-label col-lg-2">Login:</label>
              <div class="col-lg-10">
                <input class="form-control " id="username" name="login" type="text" />
              </div>
            </div>
            
            <div class="form-group ">
              <label for="password" class="control-label col-lg-2">Senha Antiga:</label>
              <div class="col-lg-10">
                <input class="form-control " id="password" name="senha_old" type="password" />
              </div>
            </div>

            <div class="form-group ">
              <label for="confirm_password" class="control-label col-lg-2">Nova Senha:</label>
              <div class="col-lg-10">
                <input class="form-control " id="confirm_password" name="senha_new" type="password" />
              </div>
            </div>

            <div class="form-group ">
              <label for="confirm_password" class="control-label col-lg-2">Confirmar Nova Senha:</label>
              <div class="col-lg-10">
                <input class="form-control " id="confirm_password" name="senha_new2" type="password" />
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