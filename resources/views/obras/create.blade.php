@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <obras :post_vista = '"create"'></obras>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>

var obras = new Vue({
    el: "#app",
});

</script>
@stop
