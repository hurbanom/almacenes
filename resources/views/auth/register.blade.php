@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <usuarios></usuarios>
            <!--
            <div class="form-group col-md-6">
                <label for="name" class="control-label">Obras asignadas:</label>
                {{ Form::select('obras_asignadas', ['Obra 1', 'Obra 2', 'Obra 3'], null, ['classs' => 'form-control', 'id' => 'obras_asignadas', 'style' => 'width: 100%', 'multiple' => 'multiple']) }}
            </div>

            <div class="form-group col-md-6">
                <label for="name" class="control-label">Cargo obras:</label>
                {{ Form::select('cargo_obras', ['Cargo 1', 'Cargo 2', 'Cargo 3'], null, ['classs' => 'form-control', 'id' => 'cargos_obras', 'style' => 'width: 100%; height: 35px']) }}
            </div>
        -->
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>

var usuario = new Vue({
    el: "#app",
});

$(function () {

})
</script>
@stop
