@extends('admin.master.master')

@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Resumo Serviços Prestados</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Titulo</th>
                            <th>Descrição</th>
                            <th>Acão</th>
                        </tr>
                        @foreach($servicesResumo as $serviceResumo)
                        <tr>
                            <td>{{ $serviceResumo->id }}</td>
                            <td>{{ $serviceResumo->title_services }}</td>
                            <td>{!!  html_entity_decode($serviceResumo->description) !!}</td>
                            <td><a href="servicos/{{$serviceResumo->id}}/edit"><span class="glyphicon glyphicon-pencil"></span></a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Trecho Site</h3>
                </div>
            </div>
            <div class="box-body">
                <!-- ======= Services Section ======= -->
                <section class="services">
                @foreach($servicesResumo as $key => $serviceResumo)
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="icon-box icon-box-green">
                        <div class="icon"><img src="{{asset ('img/'.$key .'.png')}}" class="img-fluid" alt=""></div>
                        <h4 class="title"><a href="">{{ $serviceResumo->title_services}}</a></h4>
                        {!! html_entity_decode($serviceResumo->description) !!}
                    </div>
                </div>
                 @endforeach
                </section>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Nossos Servicos</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Titulo</th>
                            <th>Descrição</th>
                            <th>Acão</th>
                        </tr>
                        @foreach($servicesOurServices as $serviceOurServices)
                        <tr>
                            <td>{{ $serviceOurServices->id }}</td>
                            <td>{{ $serviceOurServices->title_services }}</td>
                            <td>{!!  html_entity_decode($serviceOurServices->description) !!}</td>
                            <td><a href="servicos/{{$serviceOurServices->id}}/edit"><span class="glyphicon glyphicon-pencil"></span></a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Trecho Site</h3>
                </div>
            </div>
            <div class="box-body">

            </div>

        </div>
    </div>
</section>

@endsection
