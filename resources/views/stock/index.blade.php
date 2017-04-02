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
                    <h5>Productos</h5>
                </div>
                <div class="panel-body">
                    {!! $grid !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
