<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnviaEmailFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3|max:200',
            'email' => 'nullable|email',
            'telefone' => 'required|min:8|max:20',
            'menssagem' => 'required|min:3'
        ];
    }
}
