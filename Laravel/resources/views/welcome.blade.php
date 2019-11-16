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
                </p>
              </div>
            </div>
          </div>

            <!-- CARDS-->
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="card" style="width: 18rem;">
                  <img src="../../../Bilder/täglich.jpg" class="card-img-top" alt="KALENDER_BILD">
                  <div class="card-body">
                    <h5 class="card-title">Daily ToDos</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary">zu den täglichen ToDos</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="width: 18rem;">
                  <img src="../../../Bilder/arbeit.jpg" class="card-img-top" alt="LAPTOP_BILD">
                  <div class="card-body">
                    <h5 class="card-title">Uni ToDos</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary">zu den Uni ToDos</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="width: 18rem;">
                  <img src="../../../Bilder/privat.jpg" class="card-img-top" alt="STAUBSAUGER_BILD">
                  <div class="card-body">
                    <h5 class="card-title">Private ToDos</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary">zu den privaten ToDos</a>
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
