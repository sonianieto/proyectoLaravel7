<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <div id="app">
        <!--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{ url('/') }}">
                    { config('app.name', 'Laravel') }}
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                   <!-- <ul class="navbar-nav mr-auto">
                        extends('layouts.menu')
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <!--<ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <!--guest
                            <!--<li class="nav-item">
                                <a class="nav-link" href="{ route('login') }}">{ __('Login') }}</a>
                            </li>
                            if (Route::has('register'))
                                <!--<li class="nav-item">
                                    <a class="nav-link" href="{ route('register') }}">{ __('Register') }}</a>
                                </li>
                            endif
                        else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    { Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        { __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{ route('logout') }}" method="POST" class="d-none">
                                        csrf
                                    </form>
                                </div>
                            </li>
                        @}endguest
                    </ul>
                </div>
            </div>
        </nav>-->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog1 modal-dialog-scrollable" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalScrollableTitle">Terminos y condiciones </h5>
               
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route('investigador.store')}}" method="POST"  >
                        @csrf
                        <div class="">
    
                            <div class="">
                                <label for="names" class="mb-2 font-bold text-lg text-gray-900">Documento de identificación</label>
                                <input wire:model="ccInvest" type="text" id="names" autocomplete="off" name="names" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md form-control @error('ccInvest') is-invalid @enderror" placeholder="Escriba su documento">
                                @error('ccInvest') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
    
                            <div class="">
                                <label for="names" class="mb-2 font-bold text-lg text-gray-900">Tipo documento</label>
                                <input wire:model="idtipoDoc" type="text" id="names" autocomplete="off" name="names" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Example. John Doe">
                                
                            </div>
    
                            <div class="">
                                <label for="names" class="mb-2 font-bold text-lg text-gray-900">Nombre Completo</label>
                                <input wire:model="nombre_completo" type="text" id="names" autocomplete="off" name="names" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md @error('nombre_completo') is-invalid @enderror" placeholder="Escriba su nombre completo">
                                @error('nombre_completo') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
    
                            <div>
                            <label class="block text-left" style="max-width: 400px;">
                              <span class="mb-2 font-bold text-lg text-gray-900">Género</span>
                              <select class="form-select block w-full mt-1 border-2 border-blue-400" wire:model="genero">
                                <option>Seleccione</option>
                                 <option>Masculino</option>
                                  <option>Femenino</option>
                                  <option>Otro</option>
                              </select>
                            </label>
                            </div>
                            <br>
                           
                           <div class="">
                                <label for="idpais" class="mb-2 font-bold text-lg text-gray-900">Pais</label>
                                <input wire:model="idpais" type="text" id="phone" autocomplete="off" name="phone" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="">
                            </div>
    
                            <div class="">
                                <label for="text" class="mb-2 font-bold text-lg text-gray-900">Dirección de residencia</label>
                                <input wire:model="direccion" type="text" id="text" autocomplete="off" name="text" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md @error('direccion') is-invalid @enderror" placeholder="Escriba su dirección personal">
                                @error('direccion') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
    
                            <div class="">
                                <label for="fecha" class="mb-2 font-bold text-lg text-gray-900">Fecha de nacimiento (aaaa-mm-dd)</label>
                                <input wire:model="fecha_de_nacimiento" type="date" id="fecha" autocomplete="off" name="fecha_de_nacimiento" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md @error('fecha_de_nacimiento') is-invalid @enderror" placeholder="">
                                @error('fecha_de_nacimiento') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
    
                            <div>
                            <label class="block text-left" style="max-width: 400px;">
                              <span class="mb-2 font-bold text-lg text-gray-900">Estado Civil</span>
                              <select class="form-select block w-full mt-1 border-2 border-blue-400" wire:model="estado_civil">
                              <option>Seleccione</option>
                                  <option>Soltero</option>
                                  <option>Casado</option>
                                  <option>Viudo</option>
                                  <option>Unión libre</option>
                                  <option>Divorciado</option>
                              </select>
                            </label>
                            </div>
                            <br>
    
                            <div class="">
                                <label for="text" class="mb-2 font-bold text-lg text-gray-900">Estado Investigador</label>
                                <input wire:model="idestado_inv" type="text" id="text" autocomplete="off" name="text" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Example. 0729400426">
                            </div>
    
                            <div class="">
                                <label for="text" class="mb-2 font-bold text-lg text-gray-900">Número Celular</label>
                                <input wire:model="telefono_celular" type="text" id="id_number" autocomplete="off" name="text" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md @error('telefono_celular') is-invalid @enderror" placeholder="Ejemplo +57 3152225565">
                                @error('telefono_celular') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
    
                            <div class="">
                                <label for="direccionemail" class="mb-2 font-bold text-lg text-gray-900">Email Personal</label>
                                <input wire:model="email_personal" type="email" id="direccionemail" autocomplete="off" name="direccionemail" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md @error('email_personal') is-invalid @enderror" placeholder="Ejemplo: prueba@gmail.com">
                                @error('email_personal') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
    
                            <div class="">
                                <label for="phone" class="mb-2 font-bold text-lg text-gray-900">Clasificación</label>
                                <input wire:model="idclasificacion_inv" type="text" id="phone" autocomplete="off" name="phone" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Example. 0729400426">
                            </div>
    
                            <div class="">
                                <label for="text" class="mb-2 font-bold text-lg text-gray-900">Código ORCID</label>
                                <input wire:model="codigo_orcid" type="text" id="id_number" autocomplete="off" name="text" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Ejemplo: 0000-0003-0767-5273">
                            </div>
    
                            <div class="">
                                <label for="number" class="mb-2 font-bold text-lg text-gray-900">Valor del H5</label>
                                <input wire:model="H5" type="number" id="id_number" autocomplete="off" name="number" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Ejemplo: 5">
                            </div>
    
                            <div class="">
                                <label for="url" class="mb-2 font-bold text-lg text-gray-900">Fuente del H5</label>
                                <input wire:model="url_google_scholar"type="url" id="id_number" autocomplete="off" name="url" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Página web de la fuente indice H5">
                            </div>
    
                            <div class="">
                                <label for="text" class="mb-2 font-bold text-lg text-gray-900">ScopusID</label>
                                <input wire:model="autor_id_scopus"type="text" id="text" autocomplete="off" name="text" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Ejemplo: ">
                            </div>
    
                            <div class="">
                                <label for="url" class="mb-2 font-bold text-lg text-gray-900">Url del ResearchGate</label>
                                <input wire:model="researchgate" type="url" id="url" autocomplete="off" name="url" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Url ResearchGate">
                            </div>
    
                            <div class="">
                                <label for="text" class="mb-2 font-bold text-lg text-gray-900">ResearchID</label>
                                <input wire:model="researcherid" type="text" id="text" autocomplete="off" name="text" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="">
                            </div>
    
                            <div class="">
                                <label for="url" class="mb-2 font-bold text-lg text-gray-900">URL Cvlac</label>
                                <input wire:model="url_cvlac" type="text" id="url" autocomplete="off" name="url" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Url cvlac">
                            </div>
    
                            <div class="">
                                <label for="text" class="mb-2 font-bold text-lg text-gray-900">Tutor</label>
                                <input wire:model="tutor"type="text" id="text" autocomplete="off" name="text" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md @error('tutor') is-invalid @enderror" placeholder="si / no">
                                @error('tutor') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
    
                        </div>
    
                       
                    </form>
              </div>
                    
                  </div>
                </div>
              </div>
</body>
</html>
