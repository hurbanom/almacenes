@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Nueva Requisición</h3>
                </div>

                <requisicion></requisicion>
            </div>

        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>

var requisicion = new Vue({
    el: "#app",


});

</script>
@stop
