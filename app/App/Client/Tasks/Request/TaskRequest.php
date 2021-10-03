<?php
namespace App\Client\Tasks\Request;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    public function rules()
    {
        return [
            'task' => 'required',
            'category'=> 'required'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
