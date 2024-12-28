<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestVenda extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }



    public function rules(): array
    {
        $request = [];
        if($this->method() == 'POST' || $this->method() == 'PUT'){
            $request = [
                'cliente_id' => 'required',
                'produto_id' => 'required',
            ];
        }
        return $request;
    }

    public function messages(): array
    {
        return [
            'cliente_id.required' => 'O campo cliente é obrigatório.',
            'produto_id.required' => 'O campo produto é obrigatório.',
        ];
    }
}
