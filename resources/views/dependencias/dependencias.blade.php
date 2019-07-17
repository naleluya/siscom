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


    <!-- Small boxes (Stat box) -->
    <section class="content-header">
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
            <a href="{{ route('menores', $dep->id) }}" class="small-box-footer">
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
