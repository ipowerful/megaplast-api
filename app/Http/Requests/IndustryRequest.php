<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndustryRequest extends FormRequest
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
            'name' => 'required|string|max:50|unique:categories,name,' . $this->id,
            'text' => 'required|string|max:255',
            'slug' => 'required|string|max:50|unique:categories,slug,' . $this->id,
            'image' => 'required|string|unique:categories,image,' . $this->id,
            'seo_heading' => 'sometimes',
            'seo_text' => 'sometimes',
            'sorting' => 'sometimes|required|integer|min:1',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Заполните наименование',
            'name.unique' => 'Укажите другое наименование. Введенное значение уже существует.',
            'slug.required' => 'Заполните алиас',
            'slug.unique' => 'Укажите другой алиас. Введенное значение уже существует.',
            'image.required' => 'Заполните Изображение',
            'image.unique' => 'Укажите другое Изображение. Введенное значение уже существует.',
            'sorting' => 'Неверное значение Сортировки',
        ];
    }

    public function all($keys = null)
    {
        $data = parent::all($keys);
        return $data;
    }
}
