<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorLibro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtisbn' => 'required|min:3|max:255',
            'txttitulo' => 'required|min:3|max:255',
            'txtautor' => 'required|min:3|max:255',
            'txtpaginas' => 'required|min:1|max:255',
            'txtanio' => 'required|min:4|max:255',
            'txteditorial' => 'required|min:3|max:255',
            'txtemail' => 'required|email'
        ];
    }
}
