<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrudUpdate extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'old' => 'required|integer',
            'description' => 'required|string',
            'show' => 'required |in:1,0',
            'status' => 'required|in:enable, disable'
        ];
    }
}
