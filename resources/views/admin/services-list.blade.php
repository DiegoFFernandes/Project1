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
                    <h3 class="box-title">Serviços Prestados</h3>
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
                        @foreach($services as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->title_services }}</td>                            
                            <td>{!!  html_entity_decode($service->description) !!}</td>
                            <td><a href="servicos/{{$service->id}}/edit"><span class="glyphicon glyphicon-pencil"></span></a></td>
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