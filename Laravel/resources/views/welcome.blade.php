@extends('layouts.app')

@section('content')

        <!-- CONTENT-->

          <div class="container">
            <div class="row">
              <div class="col">
                <h1 class="h1">ToDo Listen</h1>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <p>
                  <br>
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                  diam nonumy eirmod tempor invidunt ut labore et dolore magna
                  aliquyam erat, sed diam voluptua. At vero eos et accusam et
                  justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                  takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
                  dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                  eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                  sed diam voluptua. At vero eos et accusam et justo duo dolores
                  et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
                  est Lorem ipsum dolor sit amet.
                  <br><br>
                </p>
              </div>
            </div>
          </div>

            <!-- CARDS-->
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="card">
                  <img src="https://images.unsplash.com/photo-1435527173128-983b87201f4d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2847&q=80" class="card-img-top" alt="KALENDER_BILD">
                  <div class="card-body">
                    <h5 class="card-title">Uni ToDos</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/todos" class="btn btn-outline-primary">zu den täglichen ToDos</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80" class="card-img-top" alt="LAPTOP_BILD">
                  <div class="card-body">
                    <h5 class="card-title">Neues ToDo erstellen</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{ route('todos.create') }}" class="btn btn-outline-primary">Erstellen</a>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/
  popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

@endsection
