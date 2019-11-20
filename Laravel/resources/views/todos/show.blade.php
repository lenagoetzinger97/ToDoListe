@extends('todos.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left my-4">
                <h2> Detailansicht</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-outline-primary mb-4" href="{{ route('todos.index') }}"><i class="fas fa-chevron-left"></i> zurück</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <p><strong>Aufgabe:</strong>
                {{ $todo->name }}</p>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <p><strong>Details:</strong>
                {{ $todo->detail }}</p>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <p><strong>Erledigen bis:</strong>
                {{ $todo->time }}</p>
            </div>
        </div>

    </div>
@endsection