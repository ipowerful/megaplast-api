<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

//use Illuminate\Contracts\Validation\Validator;

class ProductRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string|max:50|unique:products,name,' . $this->id,
            'alias' => 'required|string|max:50|unique:products,alias,' . $this->id,
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Заполните наименование',
            'name.unique' => 'Укажите другое наименование. Введенное значние уже существует.',
            'alias.required' => 'Заполните алиас',
            'alias.unique' => 'Укажите другой алиас. Введенное значние уже существует.',
        ];
    }

    public function all($keys = null)
    {
        $data = parent::all($keys);
        return $data;
    }
}
