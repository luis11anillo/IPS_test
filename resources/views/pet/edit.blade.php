<x-app-layout>
    <div class="mt-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="py-4 px-6 text-gray-700 font-bold bg-sky-200">
                EDITAR
            </div>
        </div>

        {{-- FORM --}}
        <div class="mt-8">
          <form class="w-full" method="POST" action="{{ route('pets.update', $pet) }}" enctype="multipart/form-data">
            @csrf

            @method('PUT')

            <div class="mt-8">
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre_sc">
                    Nombre de la mascota 
                    <span class="text-red-500">*</span>
                  </label>
                  <input
                    id="nombre_msc"
                    name="nombre_msc" 
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    type="text" 
                    value="{{ old('nombre_msc', $pet->nombre_msc) }}"
                    required
                    >
                </div>
                <div class="w-full md:w-1/2 px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="especie">
                    Especie 
                    <span class="text-red-500">*</span>
                  </label>
                  <input 
                    id="especie"
                    name="especie"  
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    type="text" 
                    value="{{ old('especie', $pet->especie) }}"
                    required
                    >
                </div>
              </div>
      
              <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="raza">
                      Raza 
                      <span class="text-red-500">*</span>
                    </label>
                    <input 
                      id="raza"
                      name="raza" 
                      class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                      type="text" 
                      value="{{ old('raza', $pet->raza) }}"
                      required
                      >
                  </div>
                  <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="color_pelo">
                      Color del pelaje
                    </label>
                    <input 
                      id="color_pelo"
                      name="color_pelo" 
                      id="color_pelo"
                      class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                      type="text" 
                      value="{{ old('color_pelo', $pet->color_pelo) }}">
                  </div>
                </div>
      
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="certificado">
                    Certificado de vacuna
                  </label>
                  <input 
                    name="certificado" 
                    id="certificado"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    type="file" 
                    value="{{ $pet->certificado }}">
                  <p class="text-gray-600 text-xs italic">Archivo no debe sobrepasar los 4MB</p>
                </div>
              </div>
            </div>

              <input 
                type="submit"
                value="Editar"
                accept="application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document, image/*"
                class="py-4 px-6 bg-yellow-500 hover:bg-yellow-400 text-white font-bold rounded-md text-center"
                >
                <a href="{{ route('pets.index') }}" class="border 1 border-red-500 py-4 px-6 bg-red-500 hover:bg-red-600 text-white font-bold rounded-md text-center">
                  Descartar
                </a>
          </form>
        </div>
    </div>
</x-app-layout>