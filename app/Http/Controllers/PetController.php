<?php

namespace App\Http\Controllers;

use App\Http\Requests\storePetRequest;
use Illuminate\Http\Request;
use App\Models\Pet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PetController extends Controller
{

    public function index() 
    {
        $pets = Pet::all();

        return view('home', compact('pets'));
    }

    public function show(Pet $pet) 
    {
        // Nombre del archivo
        $nArchivo = basename($pet->certificado);
        // Calcula el tamaño del archivo (certificdo)
        $archivo = storage_path('app/' . $pet->certificado);

        $tamañoMB = '0';

        if (file_exists($archivo)) {
            // bytes 
            $tamañoBytes = filesize($archivo);
            //MB
            $tamañoMB = number_format($tamañoBytes / (1024 * 1024), 2);

        }

        $infoArchvo = [
            'nombre' => $nArchivo,
            'tamaño' => $tamañoMB,
        ];

        return view('pet.show', compact('pet', 'infoArchvo'));
    }


    public function create()
    {
        return view('pet.create');  
    }

    
    public function store(storePetRequest $request): RedirectResponse
    {
        try { 
        
        $data = $request->validated(); 
            
        $certificadoPath = null;

        // Condicional a la carga del archivo:
        if($request->hasFile('certificado')) {
            $file = $request->file('certificado');
            $certificadoPath = $file->store('public/certificados');
        }

        Pet::create([
            'nombre_msc' => $data['nombre_msc'],
            'especie' => $data['especie'],
            'raza' => $data['raza'],
            'color_pelo' => $data['color_pelo'],
            'certificado' => $certificadoPath,
        ]);


        return redirect()->route('pets.index');
        } catch (\Throwable $e){
            Log::error('Error in store pet controller', [$e->getMessage()]);
            abort(500, 'Ocurrió un error al guardar el registro.');
        }
        
    }


    public function destroy(Pet $pet): RedirectResponse
    {
        try {
            $pet->delete();
            return redirect()->route('pets.index');
        } catch (\Throwable $e){
            Log::error('Error in destroy pet controller', [$e->getMessage()]);
            abort(500, 'Ocurrió un error al eliminar el registro.');
        }
    }


    public function edit(Pet $pet)
    {
        return view('pet.edit', compact('pet'));
    }


    public function update(storePetRequest $request, Pet $pet): RedirectResponse 
    {
        try {
            //$pet = Pet::find($pet->id);
            $data = $request->validated();

            $certificadoPath = null;

            // Condicional a la carga del archivo:
            if($request->hasFile('certificado')) {

                // Verifica si hay un archivo de certificado existente
                if ($pet->certificado) {
                    // Elimina el archivo anterior
                    Storage::delete($pet->certificado);
                }

                $file = $request->file('certificado');
                $certificadoPath = $file->store('public/certificados');
            }

            $pet->update([
                'nombre_msc' => $data['nombre_msc'],
                'especie' => $data['especie'],
                'raza' => $data['raza'],
                'color_pelo' => $data['color_pelo'],
                'certificado' => $certificadoPath,
            ]);

            return redirect()->route('pets.index', $pet);
        } catch (\Throwable $e){
            Log::error('Error in update pet controller', [$e->getMessage()]);
            abort(500, 'Ocurrió un error al actualizar el registro.');
        }
    }
}
