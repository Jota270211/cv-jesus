@extends('layouts.navigation')

@section('content')
<body>
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="{{ asset('assets3/images/undraw_remotely_2j6y.svg') }}" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6 contents">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="mb-4">
                <h3>Logueate</h3>
                <p class="mb-4">Bienvenido Jesús!</p>
              </div>
              <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group first">
                    <label for="username">Correo</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                <div class="form-group last">
                  <label for="password">Contraseña</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0"><span class="caption">Recuerdame</span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="#" class="forgot-pass">Olvide mi contraseña</a></span>
                </div>

                <button type="submit" class="btn btn-block btn-primary">Iniciar sección</button>

                <span class="d-block text-left my-4 text-muted">&mdash; otros &mdash;</span>

                <div class="social-login">
                  <a href="#" class="facebook">
                    <span class="icon-facebook mr-3"></span>
                  </a>
                  <a href="#" class="twitter">
                    <span class="icon-twitter mr-3"></span>
                  </a>
                  <a href="#" class="google">
                    <span class="icon-google mr-3"></span>
                  </a>
                </div>
              </form>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>

@endsection

