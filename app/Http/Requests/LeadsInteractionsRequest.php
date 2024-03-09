<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeadsInteractionsRequest extends FormRequest
{
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'lead_id' => 'required|numeric',
            'interacao' => 'required|string|max:255',
            'nota' => 'required'
        ];
    }
}
