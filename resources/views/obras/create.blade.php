@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Nueva Obra</h3>
                </div>

                <form class="form" role="form" method="POST" action="/usuarios/save">

                    <div class="box-body">

                        {{ csrf_field() }}

                        <fieldset class="form-group">
                            <legend><h4>Datos de la obra</h4></legend>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name" class="control-label">Nombre de la obra:</label>
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus maxlength="60" style="text-transform:uppercase">
                                </div>

                                <div class="form-group col-md-6">

                                    <label>Id de la obra:</label>
                                    <input type="text" class="form-control" name="obra_id" id="obra_id">

                                </div>
                            </div>

                            <div class="row">

                                <div class="form-group col-md-3">
                                    <label>Fecha inicio:</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="glyphicon glyphicon-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Fecha cierre:</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="glyphicon glyphicon-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group col-md-6">

                                    <label>Nombre del cliente:</label>
                                    <input type="text" class="form-control" name="nombre_cliente" id="nombre_cliente" maxlength="30">

                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group col-md-4">

                                    <label>Número de contrato ú Orden de compra:</label>
                                    <input type="text" class="form-control" name="numero_contrato" id="numero_contrato">

                                </div>

                            </div>

                        </fieldset>

                        <fieldset class="form-group">

                            <legend><h4>Ubicación física</h4></legend>

                            <div class="row">

                                <div class="form-group col-md-4">

                                    <label>Calle:</label>
                                    <input type="text" class="form-control" name="numero_contrato" id="numero_contrato">

                                </div>

                                <div class="form-group col-md-2">

                                    <label>Número exterior:</label>
                                    <input type="text" class="form-control">

                                </div>

                                <div class="form-group col-md-2">

                                    <label>Número interior:</label>
                                    <input type="text" class="form-control">

                                </div>

                                <div class="form-group col-xs-4">

                                    <label>Colonia:</label>
                                    <input type="text" class="form-control">

                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-xs-4">

                                    <label>Estado:</label>
                                    {{ Form::select('estado', ['Aguascalientes', 'Zacatecas'], null, ['classs' => 'form-control', 'id' => 'cargos_obras', 'style' => 'width: 100%; height: 35px']) }}

                                </div>
                                <div class="form-group col-xs-4">

                                    <label>Delegación o Municipio:</label>
                                    <input type="text" class="form-control">

                                </div>
                                <div class="form-group col-xs-2">

                                    <label>Codigo postal:</label>
                                    <input type="text" class="form-control">

                                </div>
                            </div>

                            <div class="form-group">

                                <label>Referenias adicionales:</label>
                                <textarea class="form-control" rows="2"></textarea>

                            </div>

                        </fieldset>

                    </div>

                    <div class="box-footer" style="text-align: center">
                        <button type="submit" class="btn btn-primary">
                            Guardar
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

@endsection
@section('scripts')

@stop
