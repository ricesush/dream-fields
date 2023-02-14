<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'search_input' => 'max:10',
        ];
    }

    public function messages()
    {
        return [
            'search_innput.max' => 'You may only enter max of 10 characters',
        ];
    }
}
