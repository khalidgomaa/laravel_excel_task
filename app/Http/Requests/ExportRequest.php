<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExportRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'columns' => 'required|array|min:1',
            'rows' => 'required|string|in:last,all',
        ];
    }
}
