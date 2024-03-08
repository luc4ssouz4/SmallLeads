<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeadsEditRequest extends FormRequest
{
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'email' => 'email|max:255|unique:leads',
            'empresa' => 'required|string|max:255',
            'telefone' => 'required|numeric',
            'tags' => 'max:255',
        ];
    }
}
