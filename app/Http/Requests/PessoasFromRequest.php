<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoasFromRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome'      => 'required|min:2',
            'cpf'       => 'required',
            'rua'       => 'required',
            'nrCasa'    => 'required',
            'bairro'    => 'required',
            'cidade'    => 'required',
            'estado'    => 'required',
            'cep'       => 'required',
            'email'     => 'required',
            'telefone'  => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required'      => 'O campo :attribute é obrigatório!',
            'min'           => 'O campo :attribute deve possuir ao menos 2 caracteres!',
        ];
    }
}
