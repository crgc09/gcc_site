<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Scripts 
    <script src="{{ asset('js/app.js') }}" defer></script>
  -->
  <!-- Icon -->
    <link rel="icon" href="https://miespaciolaureate.mx/gcc_site/public/img/landings/parachute.ico" type="image/gif">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,100;0,300;0,400;0,600;0,700;1,100;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
  <!-- Icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body style="background-image: url(public/img/landings/slash.png), url(public/img/landings/pa1.jpg);">
  <div id="app">
    <div id="appLogin">
      <div id="login">
        <h2 id="h2" class="login-title">
          Login
        </h2>
        <div class="login-ta">
          <p class="login-text login-msg mt-2">
            ¡Hola! Para entrar al sitio ingresa con las siguientes credenciales:
            <br>
            <strong>Usuario</strong> <span class="login-online">invitado@gcc.com</span><strong>
            <br>Contraseña</strong> <span class="login-online">Invitado01</span>
          </p>
          <!--
            <p class="login-text login-msg">
              Tambien puedes acceder con tu cuenta de Facebook si lo prefieres.
            </p>
          --> 
        </div>
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-left login-txt login-text">{{ __('E-Mail Address') }}</label>
            <div class="col-md-8 input-group-sm">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-left login-txt login-text">{{ __('Password') }}</label>

            <div class="col-md-8 input-group-sm">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
          <div class="form-group row mb-0">
            <div class="col-md-12">
              <button type="submit" class="btn btn btn-outline-light btn-sm btn-block login-text">
                <i class="fas fa-sign-in-alt"></i> {{ __('Login') }} 
              </button>
              <!--
                <button type="button" class="btn btn btn-outline-light btn-sm btn-block login-text">
                  <i class="fab fa-facebook"></i> Login with Facebook 
                </button>
              -->
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>


