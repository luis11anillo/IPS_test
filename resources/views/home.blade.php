<x-app-layout>
  <div class="py-2">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-between items-center space">
                   <p class="font-bold pl-5">LISTA DE MASCOTAS</p>
                   <a href="{{ route('pets.create') }}" title="Añadir" class="rounded-md px-4 py-1 bg-blue-600 text-white font-bold hover:bg-blue-500">
                    Agregar +
                    </a>
                </div>
    
                <table class="table-auto w-full rounded-md mt-4">
                    <thead>
                      <tr class="text-left bg-gray-200">
                        <th class="text-center py-2 rounded-tl-lg">ID</th>
                        <th class="uppercase">Nombre</th>
                        <th class="uppercase">Especie</th>
                        <th class="uppercase">Raza</th>
                        <th class="uppercase text-center">Acci&oacute;n</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($pets as $pet)
                        <tr class="border-y 1 border-gray-300 hover:bg-gray-200">
                            <td class="text-center font-bold py-3">{{ $pet->id }}</td>
                            <td class="mt-2">{{ $pet->nombre_msc }}</td>
                            <td class="py-2">{{ $pet->especie }}</td>
                            <td class="py-2">{{ $pet->raza }}</td>
                            <td class="text-center mx-0">
                                <button 
                                type="button" 
                                class="bg-yellow-300 px-4 py-2 rounded-md text-center hover:bg-yellow-200"
                                onclick="window.location.href = '{{ route('pets.edit', $pet) }}'"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>                                  
                                </button>
                                <button 
                                type="button" 
                                class="btn-delete text-center px-2 py-2 rounded-md bg-red-500 hover:bg-red-400 ml-2"
                                data-toggle="modal"
                                data-target="#confirmDeleteModal"
                                data-delete-url="{{ route('pets.destroy', $pet->id) }}"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>                                  
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
          <!-- Modal -->
          @include('components.modal-confirm')
      </div>
  </div>
</x-app-layout>

<script>

  function showModal() {
      document.getElementById('confirmDeleteModal').classList.remove('hidden');
  }


  function closeModal() {
      document.getElementById('confirmDeleteModal').classList.add('hidden');
  }

  document.querySelectorAll('.btn-delete').forEach(function (button) {
      button.addEventListener('click', function () {
          var deleteUrl = button.getAttribute('data-delete-url');
          var deleteForm = document.getElementById('deleteForm');
          deleteForm.setAttribute('action', deleteUrl);
          showModal();
      });
  });

  document.getElementById('cancelDelete').addEventListener('click', function () {
      closeModal();
  });
  document.getElementById('closeModal').addEventListener('click', function () {
      closeModal();
  });
</script>






