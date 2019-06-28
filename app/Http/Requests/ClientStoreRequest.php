<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'second_name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'phone' => 'required',
            'ci' => 'required|unique:clients,ci',
            'gender' => 'required',
            'birthday' => 'required',
            'status' => 'required',
        ];
    }
}
