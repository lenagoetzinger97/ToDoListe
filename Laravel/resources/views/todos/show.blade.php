@extends('todos.layout')
@section('content')
<div class="container">
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
    <div class="card">
      <div class="card-body">
         <h5 class="card-title">Was ist zu tun?</h5>
         <p><strong>Aufgabe:</strong>
         {{ $todo->name }}</p>
         <p><strong>Details:</strong>
         {{ $todo->detail }}</p>
         <p><strong>Erledigen bis:</strong>
         {{ $todo->time }}</p>
      </div>
    </div>
</div>
@endsection
