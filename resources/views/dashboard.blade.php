

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">

	
	<!-- Required form plugin -->
  <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">





</head>


<body class="h-screen overflow-hidden flex items-left justify-left" style="background: #dce6ef;">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- MENU ACORDEÓN-->
    
<div class="h-screen flex items-left bg-white py-12 ">
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
                  <a class="block px-16 py-2 text-sm text-gray-600 hover:bg-green-500 hover:text-white" href="investigador">Investigadores</a>
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
 

<header class="container-fluid">
  <div class="row" style="height: 680px;">
     <div class="col-12 align-self-center text-center">
        <img src="assets/img/logo_Cinde.png"  class="img-fluid rounded mx-auto d-block" width="500" alt=""><br>
    
            <h2 class="text-2xl text-dark-500 font-extrabold">Bienvenida(o)</h2><br>
            <h2 class="text-2xl text-dark-500 font-extrabold">Al Sistema de Información Gerencial</h2>
      </div>
  </div>  
</header>
         
          
    

</body>
</html>
