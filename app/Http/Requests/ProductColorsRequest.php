<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductColorsRequest extends FormRequest
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
//            'color_id' => 'required|unique_with:product_colors,product_id'
            'color_id' => 'required',
            'price' => 'sometimes|required|decimal:0,2',
            'price_old' => 'sometimes|decimal:0,2',
            'is_in_stock' => 'sometimes|required|boolean',
            'product_id' => 'sometimes|required|integer',
            'images' => 'sometimes',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'color_id.required' => 'Выберите цвет',
            'color_id.unique_with' => 'Выберите другой цвет. Введенное значние уже существует.',
            'price.required' => 'Заполните Цену',
            'price.decimal' => 'Цена должна быть числом',
            'price_old.decimal' => 'Старая цена должна быть числом',
        ];
    }
}
