


<div class="h-screen overflow-hidden flex items-left justify-left" style="background: #edf2f7;">
  

<link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">

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
<!-- css y javascrip para el model -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Required form plugin -->

<!-- MENU ACORDEÓN-->
<div >

<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


     
        
      


<div class="h-screen flex items-left bg-white py-12">
    <div x-data="{ open: true }" class="max-w-xs mx-auto w-full">
       <button @click="open = !open" class="flex items-left justify-between w-full px-6 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-700 focus:outline-none">
          <span class="flex items-left">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>

            <span class="mx-4 font-medium">Campo de Investigación</span>
           
          </span>

          <span>
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </span>

        </button>

          <div x-show="open" x-transition:enter="transition ease-out duration-150 transform" x-transition:enter-start="opacity-0 -translate-y-5" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-5" class="bg-gray-100">
              <a class="block px-16 py-2 text-sm text-gray-600 hover:bg-green-500 hover:text-white" href="/investigador.index">Investigadores</a>
              <a class="block px-16 py-2 text-sm text-gray-600 hover:bg-green-500 hover:text-white" href="proyecto">Macroproyectos de Investigación</a>
              <a class="block px-16 py-2 text-sm text-gray-600 hover:bg-green-500 hover:text-white" href="programa">Programas de Investigación</a>
              <a class="block px-16 py-2 text-sm text-gray-600 hover:bg-green-500 hover:text-white" href="linea_inv">Líneas de Investigación</a>
          </div>
    


      <div x-data="{ open: true }" class="max-w-xs mx-auto w-full">
            <button @click="open = !open" class="flex items-left justify-between w-full px-6 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-700 focus:outline-none">
              <span class="flex items-left">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>

                 <span class="mx-4 font-medium">Campo Circulación del conocimiento</span>
            
              </span>

              <span>
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                    <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>

            </button>

            <div x-show="open" x-transition:enter="transition ease-out duration-150 transform" x-transition:enter-start="opacity-0 -translate-y-5" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-5" class="bg-gray-100">
                <a class="block px-16 py-2 text-sm text-gray-600 hover:bg-green-500 hover:text-white" href="#">Pasantías</a>
                <a class="block px-16 py-2 text-sm text-gray-600 hover:bg-green-500 hover:text-white" href="#">Eventos científicos</a>
                <a class="block px-16 py-2 text-sm text-gray-600 hover:bg-green-500 hover:text-white" href="#">Redes</a>
                
            </div>
 
        </div>
  </div>
</div>

</div>


<link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>





<!-- TABLA INVESTIGADORES REGISTRADOS -->



<div class="w-full md:w-12/12 px-4">

  

<style>

.table {
border-spacing: 0 15px;
}

i {
font-size: 1rem !important;
}

.table tr {
border-radius: 20px;
}

tr td:nth-child(n + 6),
tr th:nth-child(n + 6) {
border-radius: 0 0.625rem 0.625rem 0;
}

tr td:nth-child(1),
tr th:nth-child(1) {
border-radius: 0.625rem 0 0 0.625rem;
}

</style>



<link
href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
rel="stylesheet"
/>
<img src="assets/img/logo_Cinde.png" class="img-fluid rounded mx-auto d-block" width="200" alt="">
<div class="flex items-center justify-center min-h-screen bg-white">
<div class="col-span-12">
<div class="overflow-auto lg:overflow-visible">
<div class="flex lg:justify-between border-b-2 border-fuchsia-900 pb-1">
<h2 class="text-2xl text-gray-500 font-extrabold">Investigadores Registrados</h2>

<form>
<div class="flex">
  <input type="text"
         name="search"

         placeholder="Buscar...">

</div>
</form>


</div>
<div>

<table class="table text-gray-400 border-separate space-y-6 text-sm">
<thead class="bg-blue-500 text-white">

  <tr>
     <th class="p-3">Documento</th>
    <th class="p-3">Nombre</th>
    <th class="p-3 text-left">Mail</th>
    <th class="p-3 text-left">Teléfono</th>
    <th class="p-3 text-left">clasificación</th>

    <th class="p-3 text-left">Estado</th>
    <th class="p-3 text-left">Acción</th>
  </tr>
</thead>
<tbody>


  @foreach($investigador as $investigar)
  <tr class="bg-blue-200 lg:text-black">
   
  <td class="p-5 font-medium capitalize">{{$investigar->ccInvest}}</td>
    <td class="p-5 font-medium capitalize">{{$investigar->nombre_completo}}</td>
    <td class="p-3">{{$investigar->email_personal}}</td>
    <td class="p-3">{{$investigar->telefono_celular}}</td>
       <td class="p-3 ">{{$investigar->idclasificacion_inv}}</td>
  
   

    <td class="p-3">
      <span class="bg-green-400 text-gray-50 rounded-md px-2"
        >ACTIVO</span
      >
    </td>
    <td class="p-3">
      <a href="#" class="text-gray-500 hover:text-gray-100 mr-2">
        <i  class="material-icons-outlined text-base">visibility</i>
       
      </a>
     
      <a href="#"  class="text-yellow-400 hover:text-gray-100 mx-2">
        <i  class="material-icons-outlined text-base">editar</i>
      </a>
      <a
        href="#"
        class="text-red-400 hover:text-gray-100 ml-2"
      >
        <i class="material-icons-round text-base">delete_outline</i>
      </a>
    </td>
  </tr>
 @endforeach

</tbody>

</table>

{{$investigador->links()}}


</div>



</div>




    <div>

  
</div>
     
<!--<a href="#"  class="
bg-blue-500
hover:bg-blue-700
text-white
py-1
px-3
sm
rounded-full
" data-toggle="modal" data-target="#exampleModalScrollable"> Registrar un nuevo investigador </a>-->
<div>
<button type="button" class="btn btn-primary" data-toggle="modal"  data-target="exampleModalScrollable">Registrar Investigador</button>
</div>
          
    

    
     
      
   
     <!-- <button 
  
          class="
            bg-blue-500
            hover:bg-blue-700
            text-white
            py-1
            px-3
            sm
            rounded-full
          
          "
        >
          Modificar
      </button>-->
   
      <a href="#">
      <button type="button"
          wire:click="export('xlsx')"
          wire:loding.attr="disabled"
          class="
            bg-blue-500
            hover:bg-blue-700
            text-white
            py-1
            px-3
            sm
            rounded-full
          "
        >
          Exportar a Excel
      </button></a
      >

      <a href="#">
      <button type="button"
          wire:click="export('pdf')"
          wire:loding.attr="disabled"
          class="
            bg-blue-500
            hover:bg-blue-700
            text-white
            py-1
            px-3
            sm
            rounded-full
          "
        >
          Exportar a pdf
      </button></a
      >
    
    </div> 
