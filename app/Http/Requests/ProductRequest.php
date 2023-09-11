<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'slug' => 'required|string|max:50|unique:products,slug,' . $this->id,
            'stock_id' => 'required|exists:stocks,id',
            'measure_id' => 'required|exists:measures,id',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Заполните Наименование',
            'name.unique' => 'Укажите другое Наименование. Введенное значние уже существует.',
            'slug.required' => 'Заполните Идентификатор',
            'slug.unique' => 'Укажите другой Идентификатор. Введенное значние уже существует.',
            'stock_id.required' => 'Выберите Наличие.',
            'measure_id.required' => 'Выберите Единицу измерения.',
        ];
    }
}
