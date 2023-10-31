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
        return [
            'name' => 'sometimes|required|string|max:50',
            'name_full' => 'sometimes|required|string|max:100|unique:products,name_full,' . $this->id,
//            'slug' => 'sometimes|required|string|max:100|unique:products,slug,' . $this->id,
            'article' => 'sometimes|required|max:20|unique:products,article,' . $this->id,
            'measure_id' => 'sometimes|required|exists:measures,id',
            'category_id' => 'sometimes|required|integer',
            'is_popular' => 'sometimes|required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Заполните Наименование',
            'name_full.required' => 'Заполните Полное наименование',
            'name_full.unique' => 'Укажите другое Полное наименование. Введенное значение уже существует.',
//            'slug.required' => 'Заполните Идентификатор',
//            'slug.unique' => 'Укажите другой Идентификатор. Введенное значение уже существует.',
            'article.required' => 'Заполните Артикул',
            'article.unique' => 'Укажите другой Артикул. Введенное значение уже существует.',
            'measure_id.required' => 'Выберите Единицы измерения',
            'category_id.required' => 'Выберите Категорию',
        ];
    }
}
