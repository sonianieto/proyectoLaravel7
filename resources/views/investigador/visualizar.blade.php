<div class="main-modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
		<div class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold text-gray-500">Visualizar Investigador</p>
					<div wire:click="cerrarModal()" class="modal-close cursor-pointer z-50" onclick="modalClose('main-modal')">
						<svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
							viewBox="0 0 18 18">
							<path
								d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
							</path>
						</svg>
					</div>
				</div>
				<!--Body-->
				<div class="px-7 overflow-x-hidden overflow-y-auto" style="max-height: 40vh;">
                    
					<form  method="POST" id="add_caretaker_form"  class="w-full">
                        <div class="">

                            <div class="">
                                <label for="names" class="text-md font-bold text-lg text-gray-900">Documento de identificación</label>
                            </div>
                            <div class="">
                                <input wire:model="ccInvest" type="text" id="names" autocomplete="off" name="names" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Escriba su documento">
                            </div>
                            <div class="">
                                <label for="names" class="text-md font-bold text-lg text-gray-900">Tipo documento</label>
                            </div>
                            <div class="">
                                <input wire:model="idtipoDoc" type="text" id="names" autocomplete="off" name="names" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Example. John Doe">
                            </div>

                            <div class="">
                                <label for="names" class="text-md font-bold text-lg text-gray-900">Nombre Completo</label>
                            </div>
                            <div class="">
                                <input wire:model="nombre_completo" type="text" id="names" autocomplete="off" name="names" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Escriba su nombre completo">
                            </div>

                            <div>
                            <label class="block text-left" style="max-width: 400px;">
                              <span class="font-bold text-lg text-gray-900 ">Género</span>
                              <select class="form-select block w-full mt-1 border-2 border-blue-400" wire:model="genero">
                                  <option>Masculino</option>
                                  <option>Femenino</option>
                                  <option>Otro</option>
                              </select>
                            </label>
                            </div>
                            <br>
                           
                           <div class="">
                                <label for="idpais" class="text-md font-bold text-lg text-gray-900">Pais</label>
                            </div>
                            <div class="">
                                <input wire:model="idpais" type="text" id="phone" autocomplete="off" name="phone" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="">
                            </div>

                            <div class="">
                                <label for="text" class="text-md font-bold text-lg text-gray-900">Dirección de residencia</label>
                            </div>
                            <div class="">
                                <input wire:model="direccion" type="text" id="text" autocomplete="off" name="text" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Escriba su dirección personal">
                            </div>
                            <div class="">
                                <label for="fecha" class="text-md font-bold text-lg text-gray-900">Fecha de nacimiento (aaaa-mm-dd)</label>
                            </div>
                            <div class="">
                                <input wire:model="fecha_de_nacimiento" type="date" id="fecha" autocomplete="off" name="fecha" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="">
                            </div>

                            <div>
                            <label class="block text-left" style="max-width: 400px;">
                              <span class="font-bold text-lg text-gray-900 ">Estado Civil</span>
                              <select class="form-select block w-full mt-1 border-2 border-blue-400" wire:model="estado_civil">
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
                                <label for="text" class="text-md font-bold text-lg text-gray-900">Estado Investigador</label>
                            </div>
                            <div class="">
                                <input wire:model="idestado_inv" type="text" id="text" autocomplete="off" name="text" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Example. 0729400426">
                            </div>

                            <div class="">
                                <label for="text" class="text-md font-bold text-lg text-gray-900">Número Celular</label>
                            </div>
                            <div class="">
                                <input wire:model="telefono_celular" type="text" id="id_number" autocomplete="off" name="text" class="h-3 p-6 w-full border-2 border-gray-300 mb-5 rounded-md" placeholder="Ejemplo +57 3152225565">
                            </div>

                            <div class="">
                                <label for="direccionemail" class="text-md font-bold text-lg text-gray-900">Email Personal</label>
                            </div>
                            <div class="">
                                <input wire:model="email_personal" type="email" id="direccionemail" autocomplete="off" name="direccionemail" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Ejemplo: prueba@gmail.com">
                            </div>
                            <div class="">
                                <label for="phone" class="text-md font-bold text-lg text-gray-900">Clasificación</label>
                            </div>
                            <div class="">
                                <input wire:model="idclasificacion_inv" type="number" id="phone" autocomplete="off" name="phone" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Example. 0729400426">
                            </div>
                            <div class="">
                                <label for="text" class="text-md font-bold text-lg text-gray-900">Código ORCID</label>
                            </div>
                            <div class="">
                                <input wire:model="codigo_orcid" type="text" id="id_number" autocomplete="off" name="text" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Ejemplo: 0000-0003-0767-5273">
                            </div>

                            <div class="">
                                <label for="number" class="text-md font-bold text-lg text-gray-900">Valor del H5</label>
                            </div>
                            <div class="">
                                <input wire:model="H5" type="number" id="id_number" autocomplete="off" name="number" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Ejemplo: 5">
                            </div>

                            <div class="">
                                <label for="url" class="text-md font-bold text-lg text-gray-900">Fuente del H5</label>
                            </div>
                            <div class="">
                                <input wire:model="url_google_scholar"type="url" id="id_number" autocomplete="off" name="url" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Página web de la fuente indice H5">
                            </div>

                            <div class="">
                                <label for="text" class="text-md font-bold text-lg text-gray-900">ScopusID</label>
                            </div>
                            <div class="">
                                <input wire:model="autor_id_scopus"type="text" id="text" autocomplete="off" name="text" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Ejemplo: ">
                            </div>

                            <div class="">
                                <label for="url" class="text-md font-bold text-lg text-gray-900">Url del ResearchGate</label>
                            </div>
                            <div class="">
                                <input wire:model="researchgate" type="url" id="url" autocomplete="off" name="url" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Url ResearchGate">
                            </div>

                            <div class="">
                                <label for="text" class="text-md font-bold text-lg text-gray-900">ResearchID</label>
                            </div>
                            <div class="">
                                <input wire:model="researcherid" type="text" id="text" autocomplete="off" name="text" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="">
                            </div>

                            <div class="">
                                <label for="url" class="text-md font-bold text-lg text-gray-900">URL Cvlac</label>
                            </div>
                            <div class="">
                                <input wire:model="url_cvlac" type="text" id="url" autocomplete="off" name="url" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="Url cvlac">
                            </div>

                            <div class="">
                                <label for="text" class="text-md font-bold text-lg text-gray-900">Tutor</label>
                            </div>
                            <div class="">
                                <input wire:model="tutor"type="text" id="text" autocomplete="off" name="text" class="h-3 p-6 w-full border-2 border-blue-400 mb-5 rounded-md" placeholder="si / no">
                            </div>

                        </div>
                    </form>
				</div>
			
                @livewireStyles
			</div>
		</div>
	</div>
