<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageStoreRequest extends FormRequest
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
            'product_color_id' => 'sometimes|required|integer',
            'sort_order' => 'sometimes|required|integer',
            'filename' => 'sometimes|required|image|mimes:jpg,png,jpeg|max:2048',
            'is_main' => 'sometimes|required|boolean',
        ];
    }
}
