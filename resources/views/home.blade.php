@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-3 col-md-offset-0">
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
        <div class="col-sm-6 col-md-offset-0">
          <div class="panel panel-default">
              <div class="panel-heading"><h2>Campañas</h2></div>

              <div class="panel-body">
                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif
                  <div class="campana1">
                    <p>#SigueLaPromo</p>
                    <p>Seguimos con 30%OFF abonando de contado con seña y saldo a la entrega o hasta 18 cuotas sin interes!</p>
                    <p>Envios a todo el pais y Ventas al (011) 2152-4506</p>
                    <p>Showroom Shopping Tortugas Open Mall</p>
                    <p>www.tiendaluxorgas.com.ar</p>
                    <p>#Cocina #Horno #Campana #Vintage #deco #DiseñoInterior #ViviLuxorgas</p>
                    <img class="imagenCampana1"src="imagenes/campana1.jpg" alt="Error">
                    <br><br><br><br>
                  </div>
              </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-offset-0">
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
    </div>
</div>
@endsection
