@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Crear Usuario</h3>
                </div>

                <form class="form" role="form" method="POST" action="/usuarios/save">

                    <div class="box-body">

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Nombre completo:</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus style="text-transform:uppercase">

                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Obras asignadas:</label>
                            {{ Form::select('obras_asignadas', ['Obra 1', 'Obra 2', 'Obra 3'], null, ['classs' => 'form-control', 'id' => 'obras_asignadas', 'style' => 'width: 100%', 'multiple' => 'multiple']) }}
                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">E-Mail:</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Contraseña:</label>
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="ccontrol-label">Confirmar contraseña:</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                    </div>

                    <div class="box-footer">
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
