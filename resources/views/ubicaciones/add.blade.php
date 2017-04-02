@extends('layouts.app')
@section('content')
<div class="container">
    <div id="app" class="row">
        <div class="col-md-10 col-md-offset-1">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5>Agregar Ubicación</h5>
                </div>
                <div class="panel-body">
                    {{ Form::open(['url' => 'ubicaciones/save', 'method' => 'post', 'class' => 'horizontal']) }}
                    <div class="form-group col-sm-12">
                        {{ Form::label('ubicacion', 'Nombre de la Ubicación:', ['class' => 'col-sm-3 control-label']) }}
                        <div class="col-sm-6">
                            {{ Form::text('ubicacion', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        {{ Form::label('descripcion', 'Descripción:', ['class' => 'col-sm-3 control-label']) }}
                        <div class="col-sm-6">
                            {{ Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => 3] ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-10 col-sm-2">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
