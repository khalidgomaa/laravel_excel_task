<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImportRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'users_file' => 'required|mimes:xlsx,csv,txt',
        ];
    }
}
