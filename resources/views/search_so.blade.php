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
        <thead>
          <tr>
            <th><i class="fa fa-bullhorn"></i> Nº da Ordem</th>
            <th class="hidden-phone"><i class="fa fa-question-circle"></i> Nome do Funcionário</th>
            <th><i class="fa fa-bookmark"></i> Setor</th>
            <th><i class=" fa fa-edit"></i> Descrição do Serviço</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <a href="basic_table.html#">Company Ltd</a>
            </td>
            <td class="hidden-phone">Lorem Ipsum dolor</td>
            <td>12000.00$ </td>
            <td><span class="label label-info label-mini">Feito</span></td>
            <td>
              <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
              <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
              <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
            </td>
          </tr>
          <tr>
            <td>
              <a href="basic_table.html#">
                Dashio co
                </a>
            </td>
            <td class="hidden-phone">Lorem Ipsum dolor</td>
            <td>17900.00$ </td>
            <td><span class="label label-warning label-mini">Due</span></td>
            <td>
              <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
              <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
              <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
            </td>
          </tr>
          <tr>
            <td>
              <a href="basic_table.html#">
                Another Co
                </a>
            </td>
            <td class="hidden-phone">Lorem Ipsum dolor</td>
            <td>14400.00$ </td>
            <td><span class="label label-success label-mini">Paid</span></td>
            <td>
              <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
              <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
              <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
            </td>
          </tr>
          <tr>
            <td>
              <a href="basic_table.html#">Dashio ext</a>
            </td>
            <td class="hidden-phone">Lorem Ipsum dolor</td>
            <td>22000.50$ </td>
            <td><span class="label label-success label-mini">Paid</span></td>
            <td>
              <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
              <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
              <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
            </td>
          </tr>
          <tr>
            <td>
              <a href="basic_table.html#">Total Ltd</a>
            </td>
            <td class="hidden-phone">Lorem Ipsum dolor</td>
            <td>12120.00$ </td>
            <td><span class="label label-warning label-mini">Due</span></td>
            <td>
              <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
              <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
              <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /content-panel -->
  </div>
  <!-- /col-md-12 -->
</div>


@endsection