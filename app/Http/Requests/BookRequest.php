<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2', 'max:30'],
            'phone' => ['required', 'string', 'min:14', 'max:14'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'required' => "Поле має бути заповнене.",
            'string' => "Поле має бути текстовим.",
            'max' => "Поле не може перевищувати :max символів.",
            'name.min' => "Поле не може бути менше за 2 символи.",
            'phone.min' => "Поле не може бути менше за 13 символів.",
        ];
    }
}
