<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/title.css">

        <!-- Styles -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">

              <div class="title m-b-md hometitle">
                  NetCode
              </div>
              <div class="subtitle m-b-md hometitle">
                  Conecta todas tus redes sociales desde un solo sitio.
              </div>

              <div class="videohome">
                <video src="home.mp4" autoplay poster="posterimage.jpg">
                </video>
              </div>

                <div class="links">
                    <a href="https://facebook.com">Facebook</a>
                    <a href="https://plus.google.com/?hl=es">Google Plus</a>
                    <a href="https://twitter.com/">Twitter</a>
                    <a href="http://127.0.0.1:8000/PreguntasFrecuentes">Documentación</a>
                </div>
            </div>
        </div>
    </body>
</html>
