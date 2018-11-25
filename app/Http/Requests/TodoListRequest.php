<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoListRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'title' => 'required',
            'level_id' => 'required',
            'date' => 'required|date'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title must be required',
            'level_id.required' => 'Level must be required',
            'date.required' => 'Date must be required',
            'date.date' => 'Must be a date'
        ];
    }
}
