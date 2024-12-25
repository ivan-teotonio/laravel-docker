<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestProduto extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        $request = [];
        if($this->method() == 'POST'){
            $request = [
                'nome' => 'required|string|max:255',
                'preco' => 'required|numeric',
            ];
        }
        return $request;
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'preco.required' => 'O campo preço é obrigatório.',
            'preco.numeric' => 'O campo preço deve ser um número.',
        ];
    }
}
