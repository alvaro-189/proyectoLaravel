@extends('layout.layouts')

@section('titulo')

Comienza por ver cualquier temporada

@endsection
@section('contenido')

<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="https://wallpapercave.com/wp/wp4056407.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
      <div class="card-body">
        <h5 class="card-title">Season 1</h5>
        <p class="card-text">
            La desaparición de un niño lleva a cuatro familias a una frenétcia búsqueda, mientras descubren un misterio que abarca tres generaciones.
        </p>
        <div>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
            Play
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Season 1</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <img src="https://wallpapercave.com/wp/wp4056407.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning">Download</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://wallpapercave.com/wp/wp6123680.jpg" class="card-img-top" alt="Palm Springs Road"/>
      <div class="card-body">
        <h5 class="card-title">Season 2</h5>
        <p class="card-text">
          Seis meses después de las desapariciones, la policía fomra un grupo de trabajo. El viaje de Jonas continúa con la búsqueda de respuestas.
        </p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
          Play
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Season 2</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
      <img src="https://wallpapercave.com/wp/wp6123680.jpg" class="card-img-top" alt="Palm Springs Road"/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning">Download</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12" style="display: flex; justify-conttent:center">
    <div class="card">
      <img src="https://es.web.img3.acsta.net/pictures/20/06/24/16/47/3350916.jpg" class="card-img-top" alt="Los Angeles Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">Season 3</h5>
        <p class="card-text">Jonas sale de la cueva y entra en un mundo extraño pero conocido: el pueblo de Winden, estremecido por la desaparición de uno de sus jóvenes.</p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
          Play
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Season 3</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
      <img src="https://es.web.img3.acsta.net/pictures/20/06/24/16/47/3350916.jpg" class="card-img-top" alt="Los Angeles Skyscrapers"/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning">Download</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
