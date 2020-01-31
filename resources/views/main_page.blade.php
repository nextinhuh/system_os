@extends('template')

@section('main')


<div class="col-lg-9 main-chart">
<div class="border-head">
    <h3>Visitas de Usuários</h3>
  </div>
  <div class="custom-bar-chart">
    <ul class="y-axis">
      <li><span>10.000</span></li>
      <li><span>8.000</span></li>
      <li><span>6.000</span></li>
      <li><span>4.000</span></li>
      <li><span>2.000</span></li>
      <li><span>0</span></li>
    </ul>
    <div class="bar">
      <div class="title">JAN</div>
      <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
    </div>
    <div class="bar ">
      <div class="title">FEB</div>
      <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
    </div>
    <div class="bar ">
      <div class="title">MAR</div>
      <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
    </div>
    <div class="bar ">
      <div class="title">APR</div>
      <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
    </div>
    <div class="bar">
      <div class="title">MAY</div>
      <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
    </div>
    <div class="bar ">
      <div class="title">JUN</div>
      <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
    </div>
    <div class="bar">
      <div class="title">JUL</div>
      <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
    </div>
  </div>
</div>

<!-- SERVER STATUS PANELS -->
<br>
<div class="col-md-3 col-sm-4 main-chart">
    <div class="grey-panel pn donut-chart">
      <div class="grey-header">
        <h5>Espaço do Servidor</h5>
      </div>
      <canvas id="serverstatus01" height="120" width="120"></canvas>
      <script>
        var doughnutData = [{
            value: 70,
            color: "#FF6B6B"
          },
          {
            value: 30,
            color: "#fdfdfd"
          }
        ];
        var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
      </script>
      <div class="row">
        <div class="col-sm-6 col-xs-6 goleft">
          <p>Aumento<br/>de uso:</p>
        </div>
        <div class="col-sm-6 col-xs-6">
          <h2>21%</h2>
        </div>
      </div>
    </div>
    <!-- /grey-panel -->
  </div>
@endsection