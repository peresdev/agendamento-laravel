<?php

namespace agendamento\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendamentosRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'Data' => 'date_format:Y-m-d H:i|required',
            'PacienteID' => 'required',
            'MedicoID' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'date_format' => 'A data precisa estar no formato Y-m-d H:i. Ex: 2018-06-11 08:00',
            'required' => ':attribute é obrigatório'
        ];
    }
}
