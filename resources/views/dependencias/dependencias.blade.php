@extends('layouts.template')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection
@section('content')
<section class="content-header">
        <h1>
          Dependencias
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dependencias</a></li>
        </ol>
      </section>
  
      <!-- Main content -->
    <section class="content">
            
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Title</h3>
      
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                </div>
              </div>
              <div class="box-body">
                Start creating your amazing application!
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                Footer
              </div>
              <!-- /.box-footer-->
            </div>
            <!-- /.box -->
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