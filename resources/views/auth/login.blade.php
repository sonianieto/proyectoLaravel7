@extends('layouts.app')
@extends('layouts.menu')
@section('content')
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
     <!--contenido-->
   <section class="contenido" >
    
   </section>
   <!--formulario --><main id="main">

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">
  
           
           <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
           
          
<div class="container">
    <div class="frame">
        <img src="assets/img/logo_Cinde.png" class="img-fluid rounded mx-auto d-block" width="300" alt="">
        <div ng-app ng-init="checked = false ">
            <form class="form-signin" action="" method="post" name="form">
                <!--campo oculto con el token csrf-->
                @csrf
                
                
                    <label for="email"    >Correo electrónico</label>
                    <input id="email" type="email" class="form-styling @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                    <label for="password">Contraseña</label>
                    <input id="password" type="password" class="form-styling @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            
                    <!--<button ng-click="checked = !checked" class="btn-signup">iniciar Sesion</button>-->
                    <button type="submit" class="btn-signup"  href="/login">iniciar Sesion</button>
                    <br>
                    <br>
                        <div class="forgot">
                            <br>
                            <br>
                            <a class="nav-link" href="/recuperarcontraseña">Olvido su contraseña</a>
                            <a class="nav-link" href="/registro">Registrate</a>
                        </div>
            </form>
                
        </div>

    </div>
</div>
      </section><!-- FIN SELECTION -->

      
    

    @include('layouts.pie')

