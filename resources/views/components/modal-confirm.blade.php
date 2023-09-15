<div id="confirmDeleteModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <!-- Contenido del modal -->
        <div class="modal-content py-4 text-left px-6">
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Confirmar Eliminación</p>
                <button id="closeModal" class="modal-close cursor-pointer z-50">
                    <span class="text-3xl">&times;</span>
                </button>
            </div>
            <p>¿Estás seguro de que deseas eliminar este registro?</p>
            <div class="flex mt-8 text-right justify-center">
                <form id="deleteForm" method="POST" action="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white hover:bg-red-600 px-4 py-2 rounded-md">Eliminar</button>
                </form>
                <button id="cancelDelete" class="modal-close bg-gray-400 hover:bg-gray-300 px-4 py-2 rounded-md ml-2">Cancelar</button>
            </div>
        </div>
    </div>
</div>