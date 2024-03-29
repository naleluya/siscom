@extends('layouts.template')

@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection
@section('content')
<section class="content-header">
    <h1>
        Direcciones/Unidades
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dependencias</a></li>
        <li class="active">Direcciones y Unidades</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crear_direccion">
            Crear Direccion 
          </button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
              Crear Unidad
          </button> <br><br>  
      @foreach ($direccion as $dir)
      <div class="box box-solid">
        <div class="box-header with-border">
          <a href="#"><h3 class="box-title">{{ $dir->dir_name }}</h3></a>

          <div class="box-tools">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="box-body no-padding">
          <ul class="nav nav-pills nav-stacked">
            @foreach ($unidad as $uni)
              @if ($dir->id == $uni->dir_id)
              <li class="active"><a href="#"><i class="fa fa-inbox"></i> {{ $uni->uni_name }}
              <span class="label label-primary pull-right">12</span></a></li>
              @endif
            @endforeach                        
          </ul>
        </div>
        <!-- /.box-body -->
      </div> 
      @endforeach
      
      <!-- /. box -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Personal</h3>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          
            <div class="box-body">
                <table id="personal" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th style="width: 5%">#</th>
                    <th>Funcionario</th>
                    <th>Cargo</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Funcionario</th>
                    <th>Cargo</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
          <!-- /.mail-box-messages -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer no-padding">
          
        </div>
      </div>
      <!-- /. box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
<!-- modal -->
<div class="modal fade" id="crear_direccion" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Crear Dirección</h5>
        </div>
        <div class="modal-body">
            <form method="post" action="/dependencias/create_direcciones">
                <div class="form-group">
                  <label>Nombre de la Dirección</label>
                  <input type="text" class="form-control" id="dir_name" name="dir_name">
                  <input type="hidden" name="_method" value="PUT">
                  {{ csrf_field() }}
                </div>
                <div class="form-group">
                  <label>Secretaria</label>
                  @foreach ($secretaria as $sec)
                      @if ($dir->sec_id == $sec->id)
                         <input type="text" class="form-control" id="sec_name" name="sec_id" value="{{ $sec->sec_name }}" disabled> 
                      @endif   
                  @endforeach
                  <input type="hidden" id="sec_id" name="sec_id" value="{{ $dir->sec_id }}">
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </form>
        </div>
      </div>
    </div>
  </div>
<!-- ./modal -->
@section('js')
  <!-- DataTables -->
  <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
  <script>
    $(function () {
      $('#personal').DataTable()
    })
  </script>
@endsection
@endsection
