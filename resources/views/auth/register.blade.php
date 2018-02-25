@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Nuevo Usuario</h3>
                </div>

                <form class="form" role="form" method="POST" action="/usuarios/save">

                    <div class="box-body">

                        {{ csrf_field() }}
                        <div class="row">

                            <div class="form-group col-md-5">
                                <label for="name" class="control-label">Nombre completo:</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus style="text-transform:uppercase">

                            </div>

                            <div class="form-group col-md-5">

                                <label for="email" class="control-label">E-Mail:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-envelope"></i>
                                    </div>
                                    <input id="email" type="email" class="form-control" name="email" autocomplete="new-email" value="{{ old('email') }}" required>
                                </div>
                            </div>

                            <div class="form-group col-md-2 checkbox" style="margin-top: 35px;">
                              <label>
                                <input type="checkbox" name="user_active" id="user_active" checked> Activo
                              </label>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="name" class="control-label">Obras asignadas:</label>
                                {{ Form::select('obras_asignadas', ['Obra 1', 'Obra 2', 'Obra 3'], null, ['classs' => 'form-control', 'id' => 'obras_asignadas', 'style' => 'width: 100%', 'multiple' => 'multiple']) }}
                            </div>

                            <div class="form-group col-md-6">
                                <label for="name" class="control-label">Cargo obras:</label>
                                {{ Form::select('cargo_obras', ['Cargo 1', 'Cargo 2', 'Cargo 3'], null, ['classs' => 'form-control', 'id' => 'cargos_obras', 'style' => 'width: 100%; height: 35px']) }}
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-3">
                                <label>Nextel:</label>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-earphone"></i>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                                </div>
                            </div>

                            <div class="form-group col-md-3">
                                <label>Celular:</label>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-phone"></i>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                                </div>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="password" class="control-label">Contraseña:</label>
                                <input id="password" type="password" class="form-control" name="password" minlength="8" autocomplete="new-password" required>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="password-confirm" class="ccontrol-label">Confirmar contraseña:</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" minlength="8" required>
                            </div>

                        </div>

                    </div>

                    <div class="box-footer" style="text-align: center">
                        <button type="button" class="btn btn-primary">
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
<script>
  $(function () {

    $('#obras_asignadas').select2({
        placeholder: "Selecciona una Obra",
        allowClear: true,
        language: "es"
    });

  })
</script>
@stop
