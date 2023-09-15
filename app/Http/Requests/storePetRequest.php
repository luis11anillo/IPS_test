<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storePetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre_msc' => 'required',
            'especie' => 'required',
            'raza' => 'required',
            'color_pelo' => 'required',
            'certificado' => 'file|mimes:pdf,doc,docx,jpg,png'
        ];
    }
}
