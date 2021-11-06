<div class="main-modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
		<div class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="justify-between text-center pb-3">
					<p class="mb-2 font-bold text-xl text-gray-990 bg-primary">Modificar Investigador </p>
					<div class="modal-close cursor-pointer z-50" onclick="modalClose('main-modal')">
						<svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 50 50">
							<path
								d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
							</path>
						</svg>
					</div>
				</div>
				<!--Body-->
				<div class="px-7 overflow-x-hidden overflow-y-auto shadow-lg" style="max-height: 40vh; ">
                  <br> 
					<form  method="POST" id="add_caretaker_form"  class="w-full" >
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
                                <input wire:model="fecha_de_nacimiento" type="" id="fecha" autocomplete="off" name="fecha_de_nacimiento" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md @error('fecha_de_nacimiento') is-invalid @enderror" placeholder="">
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
				<!--Footer-->
				<div class="flex justify-end pt-2 space-x-14">
                    <button wire:click.prevent="guardar()"
                    class="
            bg-blue-500
            hover:bg-blue-700
            text-white
            py-1
            px-4
            sm
            rounded-full">Guardar</button>
					<button wire:click="cerrarModal()"
                    class="
            bg-blue-500
            hover:bg-blue-700
            text-white
            py-1
            px-4
            sm
            rounded-full">Cerrar</button>
					
				</div>
                @livewireStyles
			</div>
		</div>
	</div>

	