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
                            <input  type="text" id="names"  name="ccInvest" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md form-control @error('ccInvest') is-invalid @enderror" placeholder="Escriba su documento">
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
                            <input type="number" id="id_number" autocomplete="off" name="h5" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Ejemplo: 5">
                        </div>

                        <div class="">
                            <label for="url" class="mb-2 font-bold text-lg text-gray-900">Fuente del H5</label>
                            <input type="url" id="id_number" autocomplete="off" name="url" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Página web de la fuente indice H5">
                        </div>

                        <div class="">
                            <label for="text" class="mb-2 font-bold text-lg text-gray-900">ScopusID</label>
                            <input type="text" id="text" autocomplete="off" name="text" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Ejemplo: ">
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
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <input type="submit" class="btn btn-primary">Save changes
                        </div>
in
                    </div>

                   
                </form>
          </div>
                
              </div>
            </div>
          </div>