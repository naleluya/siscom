@extends('layouts.template')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection
@section('content')
<section class="content-header">
        <h1>
          Comisiones
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Registros</a></li>
            <li><a href="#">Comisiones</a></li>
          </ol>
      </section>
  
      <!-- Main content -->
    <section class="content">
            <div class="row">
              <div class="col-xs-12">      
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Todos los archivos</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>#</th>
                        <th>Funcionario</th>
                        <th>Cargo</th>
                        <th>Tipo Registro</th>
                        <th>Horas<br>marcación</th>
                        <th>Acción</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td>X</td>
                      </tr>
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Funcionario</th>
                        <th>Cargo</th>
                        <th>Tipo Registro</th>
                        <th>Horas<br>marcación</th>
                        <th>Accion</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </section>
          <!-- /.content -->
      @section('js')
            <!-- DataTables -->
            <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
            <script>
                    $(function () {
                      $('#example1').DataTable()
                    })
                  </script>
      @endsection
@endsection