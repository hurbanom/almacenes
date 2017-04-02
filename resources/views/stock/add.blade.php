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
                    <h5>Agregar Stock a Productos</h5>
                </div>
                <div class="panel-body">
                    {{ Form::open(['url' => 'inventario/saveStockProduct', 'method' => 'post', 'class' => 'horizontal']) }}
                    <div class="form-group col-sm-12">
                        {{ Form::label('ubicacion', 'Ubicación:', ['class' => 'col-sm-3 control-label']) }}
                        <div class="col-sm-6">
                            {{ Form::select('ubicacion', $ubicaciones, 'null', ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        {{ Form::label('producto', 'Producto:', ['class' => 'col-sm-3 control-label']) }}
                        <div class="col-sm-6">
                            {{ Form::select('producto', $productos, 'null', ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        {{ Form::label('cantidad', 'Cantidad:', ['class' => 'col-sm-3 control-label']) }}
                        <div class="col-sm-6">
                            {{ Form::text('cantidad', 0, ['class' => 'form-control']) }}
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
