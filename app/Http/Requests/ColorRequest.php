<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColorRequest extends FormRequest
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
    public function rules()
    {
        $rules = [
            'name' => 'sometimes|required|string|max:100|unique:colors,name',
            'slug' => 'sometimes|required|string|max:20|unique:colors,slug',
        ];

        return $rules;

//        switch ($this->getMethod()) {
//            case 'POST':
//            case 'PUT':
//                return $rules;
////                return [
////                        'game_id' => 'required|integer|exists:games,id', //должен существовать. Можно вот так: unique:games,id,' . $this->route('game'),
////                        'title' => [
////                            'required',
////                            Rule::unique('games')->ignore($this->title, 'title') //должен быть уникальным, за исключением себя же
////                        ]
////                    ] + $rules; // и берем все остальные правила
//            // case 'PATCH':
////            case 'DELETE':
////                return [
////                    'game_id' => 'required|integer|exists:games,id'
////                ];
//        }
    }

//    public function messages()
//    {
//        return [
//            'name.required' => 'A date is required',
//            'name.unique' => 'A date must be in format: Y-m-d',
//            'date.unique' => 'This date is already taken',
//            'date.after_or_equal' => 'A date must be after or equal today',
//            'date.exists' => 'This date doesn\'t exists',
//        ];
//    }

    public function all($keys = null)
    {
        $data = parent::all($keys);
//        switch ($this->getMethod())
//        {
//            // case 'PUT':
//            // case 'PATCH':
//            case 'DELETE':
//                $data['date'] = $this->route('day');
//        }
        return $data;
    }
}
