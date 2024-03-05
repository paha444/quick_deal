<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TasksCrudRequest extends FormRequest
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
           'status' => ['required'],
           'name' => ['required'],
           'description' => ['required'],
           'date' => ['required'],        
        ];

    }


    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name field must be a string.',
            'name.max' => 'The name field must not exceed 255 characters.',
        ];
    }

}
