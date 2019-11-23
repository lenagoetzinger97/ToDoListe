@extends('todos.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left my-4">
                <h2>Todo Bearbeiten</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-outline-primary mb-4" href="{{ route('todos.index') }}"><i class="fas fa-chevron-left"></i> zurück</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ups!</strong> Dir ist bei der Eingabe ein Fehler unterlaufen.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('todos.update',$todo->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Aufgabe:</strong>
                    <input type="text" name="name" value="{{ $todo->name }}" class="form-control" placeholder="Was gibts zu tun?">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $todo->detail }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Erledigen bis:</strong>
                    <textarea class="form-control" name="time" placeholder="JJJJ.MM.TT">{{ $todo->time }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-outline-primary">Speichern</button>
            </div>
        </div>

    </form>
@endsection
