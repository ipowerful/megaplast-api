<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|string|max:50|unique:contacts,name,' . $this->id,
            'phone' => 'sometimes',
            'email' => 'sometimes',
            'address' => 'sometimes',
            'telegram' => 'sometimes',
            'whatsapp' => 'sometimes',
            'time_from' => 'sometimes',
            'days_from' => 'sometimes',
            'time_to' => 'sometimes',
            'days_to' => 'sometimes',
            'map_lat' => 'sometimes',
            'map_long' => 'sometimes',
            'map_zoom' => 'sometimes',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Заполните наименование',
            'name.unique' => 'Укажите другое наименование. Введенное значние уже существует.',
        ];
    }
}
