@extends('todos.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left my-4">
                <h1>Uni ToDos</h1>
            </div>
            <div class="pull-right mb-4">
                <a class="btn btn-outline-primary" href="{{ route('todos.create') }}"> Neues Todo anlegen</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table thead-dark">
        <tr>
            <!--th>Nr.</th-->
            <th>Aufgabe</th>
            <th width="300px">Bis</th>
            <th width="300px">Aktion</th>
        </tr>
        @foreach ($todos as $todo)
        <tr>
            <!--td>{{ ++$i }}</td-->
            <td>{{ $todo->name }}</td>
            <td>{{ $todo->time }}</td>
            <td>
                <form action="{{ route('todos.destroy',$todo->id) }}" method="POST">

                    <a class="btn btn-outline-primary" href="{{ route('todos.show',$todo->id) }}">Details</a>

                    <a class="btn btn-outline-primary" href="{{ route('todos.edit',$todo->id) }}">Bearbeiten</a>

                    @csrf
                    @method('DELETE')

                    <button class="btn"><i class="fa fa-trash"></i></button>
                    <!--button type="submit" class="btn btn-danger">Löschen</button-->

                    <input type="checkbox" value=1 id="foo" name="foo">

                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $todos->links() !!}

@endsection
