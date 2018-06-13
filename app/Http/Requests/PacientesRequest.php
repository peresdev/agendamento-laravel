<?php

namespace agendamento\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacientesRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'Nome' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O :attribute é obrigatório',
        ];
    }
}
