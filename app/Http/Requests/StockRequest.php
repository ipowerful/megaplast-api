<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

//use Illuminate\Contracts\Validation\Validator;

class StockRequest extends FormRequest
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
            'name' => 'required|string|max:50|unique:stocks,name,' . $this->id,
            'alias' => 'required|string|max:50|unique:stocks,alias,' . $this->id,
            'color' => 'required|string|max:50',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле обязательно для заполнения',
            'name.unique' => 'Введенное значение уже существует',
            'alias.required' => 'Поле обязательно для заполнения',
            'alias.unique' => 'Введенное значение уже существует',
            'color.required' => 'Поле обязательно для заполнения',
            'color.unique' => 'Введенное значение уже существует',
        ];
    }

    public function all($keys = null)
    {
        $data = parent::all($keys);
        return $data;
    }
//
//    public function failedValidation(Validator $validator)
//    {
//        return response()->json($validator->errors());
//    }
}
