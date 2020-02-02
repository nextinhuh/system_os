<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>
  
  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  
  <!-- Bootstrap core CSS -->
  <link href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('assets/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/style-responsive.css')}}" rel="stylesheet">
  <script src="{{asset('assets/lib/chart-master/Chart.js')}}"></script>
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
    ======================================================= -->
  </head>
  
  <body>
    
    @if (session('permissao'))
    <script>
      alert('Seu usuário, não possui permissão para acessar essa função!');
    </script>
    @endif
    
    <section id="container">
      <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
          <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
          </div>
          <!--logo start-->
          <a href="index.html" class="logo"><b>Gestor Ordem de Serviço</b></a>
          <!--logo end-->
          
          <div class="top-menu">
            <ul class="nav pull-right top-menu">
              <li><a class="logout" href="{{route('deslogando')}}">Sair</a></li>
            </ul>
          </div>
        </header>
        <!--header end-->
        <!-- **********************************************************************************************************************************************************
          MAIN SIDEBAR MENU
          *********************************************************************************************************************************************************** -->
          <!--sidebar start-->
          <aside>
            <div id="sidebar" class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                <p class="centered"><a href="profile.html"><img src="{{asset('assets/img/img_pref.png')}}"  width="80"></a></p>
                <h5 class="centered">{{session('fun_nome')}}</h5>
                
                <li class="mt">
                  <a class="@if ($menu == 1) active @endif" href="{{route('main')}}">
                    <i class="fa  fa-home"></i>
                    <span>Página Principal</span>
                  </a>
                </li>
                
                
                
                <li class="sub-menu">
                  <a href="javascript:;" class="@if ($menu == 2) active @endif">
                    <i class="fa fa-edit"></i>
                    <span>Ordem de Serviço</span>
                  </a>
                  <ul class="sub">
                    <li><a href="{{route('order_register')}}"  >Gerar Ordem de Serviço</a></li>
                    <li><a href="{{route('order_search')}}">Pesquisar Ordem de Serviço</a></li>
                    <li><a href="{{route('order_edit')}}">Editar Ordem de Serviço</a></li>
                  </ul>
                </li>
                
                <li class="sub-menu">
                  <a href="javascript:;" class="@if ($menu == 3) active @endif">
                    <i class="fa fa-users"></i>
                    <span>Gerenciar Contas</span>
                  </a>
                  <ul class="sub">
                    <li><a href="{{route('pg_employer_register')}}"  >Cadastrar Funcionário</a></li>
                    <li><a href="{{route('user_register')}}"  >Cadastrar Usuário</a></li>
                    <li><a href="{{route('user_alter')}}">Alterar Senha de Usuário</a></li>
                  </ul>
                </li>
                
                
                
                
                <!-- sidebar menu end-->
              </div>
            </aside>
            <!--sidebar end-->
            <!-- **********************************************************************************************************************************************************
              MAIN CONTENT
              *********************************************************************************************************************************************************** -->
              <!--main content start-->
              <section id="main-content">
                <section class="wrapper">
                  
                  @yield('main')
                  
                  <!-- /row -->
                </section>
              </section>
              <!--main content end-->
              <!--footer start-->
              <footer class="site-footer">
                <div class="text-center">
                  <p>
                    &copy; Copyrights <strong>Álvaro Neto</strong>. Todos os Direitos Reservados
                  </p>
                  <div class="credits">
                    <!--
                      You are NOT allowed to delete the credit link to TemplateMag with free version.
                      You can delete the credit link only if you bought the pro version.
                      Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
                      Licensing information: https://templatemag.com/license/
                    -->
                    Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
                  </div>
                  <a href="index.html#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                  </a>
                </div>
              </footer>
              <!--footer end-->
              
              <!-- js placed at the end of the document so the pages load faster -->
              @stack('script')
              <script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
              <script class="include" type="text/javascript" src="{{asset('assets/lib/jquery.dcjqaccordion.2.7.js')}}"></script>
              <script src="{{asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
              <script src="{{asset('assets/lib/jquery.scrollTo.min.js')}}"></script>
              <script src="{{asset('assets/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
              <script src="{{asset('assets/lib/jquery.sparkline.js')}}"></script>
              <!--common script for all pages-->
              <script src="{{asset('assets/lib/common-scripts.js')}}"></script>
              <script type="text/javascript" src="{{asset('assets/lib/gritter/js/jquery.gritter.js')}}"></script>
              <script type="text/javascript" src="{{asset('assets/lib/gritter-conf.js')}}"></script>
              <!--script for this page-->
              <script src="{{asset('assets/lib/sparkline-chart.js')}}"></script>
              <script src="{{asset('assets/lib/zabuto_calendar.js')}}"></script>
              
              
              
              
            </body>
            
            </html>
            