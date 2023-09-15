<div class="mt-8">
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
              Nombre de la mascota 
              <span class="text-red-500">*</span>
            </label>
            <input 
              name="nombre_msc" 
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
              type="text" 
              placeholder="nombre"
              required
              >
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
              Especie 
              <span class="text-red-500">*</span>
            </label>
            <input 
              name="especie"  
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
              type="text" 
              placeholder="Especie"
              required
              >
          </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Raza 
                <span class="text-red-500">*</span>
              </label>
              <input 
                name="raza" 
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                type="text" 
                placeholder="Raza"
                required
                >
            </div>
            <div class="w-full md:w-1/2 px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="color_pelo">
                Color del pelaje
              </label>
              <input 
                name="color_pelo" 
                id="color_pelo"
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                type="text" 
                placeholder="pelaje">
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
              accept="application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document, image/*"
              >
            <p class="text-gray-600 text-xs italic">Archivo (.pdf, .doc, .docx, .jpg, .png) no debe sobrepasar los 4MB</p>
          </div>
        </div>
</div>