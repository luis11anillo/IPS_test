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


    
    public function create()
    {
        return view('pet.create');  
    }

    
    public function store(storePetRequest $request): RedirectResponse
    {

        try { 
        
        $data = $request->validated(); 
            

        // Condicional a la carga del archivo:
        if($request->hasFile('certificado')) {
            $file = $request->file('certificado');
            $certificadoPath = $file->store('public/certificados');
        } else {
            $certificadoPath = null;
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
            Log::info('Error in store pet controller', [$e->getMessage()]);
        }
        
    }


    public function destroy(Pet $pet) 
    {
        $pet->delete();

        return redirect()->route('pets.index');
    }


    public function edit(Pet $pet)
    {
        return view('pet.edit', compact('pet'));
    }


    public function update(storePetRequest $request, Pet $pet): RedirectResponse 
    {
        // Query
        $pet = Pet::find($pet->id);


        $data = $request->validated();

        // Condicional a la carga del archivo:
        if($request->hasFile('certificado')) {

            // Verifica si hay un archivo de certificado existente
            if ($pet->certificado) {
                // Elimina el archivo anterior
                Storage::delete($pet->certificado);
            }

            $file = $request->file('certificado');
            $certificadoPath = $file->store('public/certificados');
        } else {
            $certificadoPath = null;
        }

        $pet->update([
            'nombre_msc' => $data['nombre_msc'],
            'especie' => $data['especie'],
            'raza' => $data['raza'],
            'color_pelo' => $data['color_pelo'],
            'certificado' => $certificadoPath,
        ]);

        return redirect()->route('pets.index', $pet);
    }
}
