<x-app-layout>
    <div class="mt-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="py-4 px-6 text-gray-700 font-bold bg-sky-200">
                AÑADIR
            </div>
        </div>

        {{-- FORM --}}
        <div class="mt-8">
          <form class="w-full" method="POST" action="{{ route('pets.store') }}" enctype="multipart/form-data">
            @csrf

            @include('pet.form')

              <input 
                type="submit"
                value="Guardar"
                class="flex mx-auto py-4 px-10 bg-blue-700 hover:bg-blue-600 text-white hover:text-white/80 font-bold rounded-md text-center"
                >
          </form>
        </div>
    </div>
</x-app-layout>