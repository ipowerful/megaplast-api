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
            'name_full' => 'required|string|max:100|unique:products,name_full,' . $this->id,
            'slug' => 'required|string|max:100|unique:products,slug,' . $this->id,
            'article' => 'required|max:20|unique:products,article,' . $this->id,
            'price' => 'required|decimal:0,2',
            'price_old' => 'required|decimal:0,2',
            'stock_id' => 'required|exists:stocks,id',
            'measure_id' => 'required|exists:measures,id',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Заполните Наименование',
            'name.unique' => 'Укажите другое Наименование. Введенное значение уже существует.',
            'name_full.required' => 'Заполните Полное наименование',
            'name_full.unique' => 'Укажите другое Полное наименование. Введенное значение уже существует.',
            'slug.required' => 'Заполните Идентификатор',
            'slug.unique' => 'Укажите другой Идентификатор. Введенное значение уже существует.',
            'article.required' => 'Заполните Артикул',
            'article.unique' => 'Укажите другой Артикул. Введенное значение уже существует.',
            'stock_id.required' => 'Выберите Наличие',
            'price.required' => 'Заполните Цену',
            'price.decimal' => 'Цена должна быть числом',
            'price_old.decimal' => 'Старая цена должна быть числом',
        ];
    }
}
