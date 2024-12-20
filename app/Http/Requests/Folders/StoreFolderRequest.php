<?php

namespace App\Http\Requests\Folders;

use Illuminate\Foundation\Http\FormRequest;

class StoreFolderRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'unique:folders,name,NULL,id,deleted_at,NULL'],
            'date' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Daxil edin.',
            'name.unique' => 'Bu artıq istifadə edilib.',
            'date.required' => 'Daxil edin.'
        ];

    }
}
