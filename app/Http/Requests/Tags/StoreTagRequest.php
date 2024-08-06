<?php

namespace App\Http\Requests\Tags;

use Illuminate\Foundation\Http\FormRequest;

class StoreTagRequest extends FormRequest
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
            'name' => ['required','unique:tags,name,NULL,id,deleted_at,NULL']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Daxil edin.',
            'name.unique' => 'Bu artıq istifadə edilib.'
        ];

    }
}