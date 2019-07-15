@extends('layouts.template')

@section('css')
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
  <?php $i=0; ?>
  <?php $j=0; ?>
    @foreach ($dependencia as $depe )
    <div class="box collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">{{ $depe->sec_name }}</h3>
             
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <!-- Direcciones -->
            <div class="row">
                <?php $i=$i+1; ?>
                @foreach ($direccion as $dire)
                @if ($dire->sec_id == $i)
                    
                <div class="col-md-3">
                    <div class="box box-warning collapsed-box">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{ $dire->dir_name }}</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <?php $j=$j+1; ?>
                            @foreach ($unidad as $unid)
                              @if ($unid->direction_id == $j)
                              <i class="fa fa-play fa-1x"></i> {{ $unid->uni_name }}<br>
                              @endif
                            @endforeach
                            
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                @endif

                @endforeach
            </div>
            <!-- /.row -->
            <!-- /Direcciones -->
        </div>
        <!-- /.box-body -->
    </div>
    @endforeach
    <!-- /.box -->

    <!-- Small boxes (Stat box) -->
    <div class="row">
      @foreach ($dependencia as $dep)
          <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box {{ $dep->class }}">
            <div class="inner">
              <h3>150</h3>
              <p>{{ $dep->sec_name }}</p>
            </div>
            <div class="icon">
              <i class="fa fa-bank"></i>
            </div>
            <a href="#" class="small-box-footer">
              Dependencias <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
      @endforeach           
    </div>
      <!-- /.row -->
</section>
<!-- /.content -->
@section('js')
@endsection
@endsection
