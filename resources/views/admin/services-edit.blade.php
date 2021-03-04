@extends('admin.master.master')

@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Servicos
                        <small>Você está editando um trecho do site</small>
                    </h3>
                </div>
                <!-- /.box-header -->
                <form method="post" action="{{ route('servicos.update', $service->id) }}" >
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="box-body pad">                        
                        <textarea id="editor1" name="description" rows="10" cols="80">                            
                            {!! $service->description !!}
                        </textarea>
                    </div>                    
                    <div class="box-footer">
                        <button type="submit" value="submit" class="btn btn-success">Salvar</button>
                        <button type="reset" value="reset" class="btn btn-warning">Cancelar</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Ficará assim:</h3>
                </div>
            </div>
            <div class="box-body">

            </div>

        </div>
    </div>
</section>

@endsection
