@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Panel de control</h2></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Tu estas conectado a NetCode disfruta esta nueva experiencia.</p>
                    <h3>Configura tus redes sociales</h3>
                    <br>
                    <div class="links">
                        <a href="https://facebook.com">Facebook</a>
                        <a href="https://plus.google.com/?hl=es">Google+</a>
                        <a href="https://twitter.com/">Twitter</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-8 col-md-offset-0">
          <div class="panel panel-default">
              <div class="panel-heading"><h2>Crea una campaña</h2></div>

              <div class="panel-body">
                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif

                  <p>Crea una campaña o comparte actividades con tus amigos</p>

                  <br>
                  <p>Ingresa el nombre de la campaña:   <input type="text" name="NameCampana" value=""></p>
                  <p>Carga una imagen de campaña: <input type="file" name="" value=""></p>
                  <p>Camañana Prgramada</p>
                    <ul>
                      <li>Numero de Repeticiones:</li><input type="number" name="NumberCamapan" value="">
                      <li>Dia y hora de la compaña<input type="date" name="DateCampana" value=""></li>
                    </ul>
                    <button type="SendButton" name="button">Enviar</button>

              </div>
          </div>
        </div>
    </div>
</div>
@endsection
