<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required|string',
            'phone_numb' => 'required|digits_between:0,11|',
            'address' => 'required',
            'dob' => 'required|date',
            'level' => 'required|digits_between:0,1',
        ];
    }
    public function messages(){
        return [
            'required_without_all' => 'You need to choose Level',
        ];
    }
    
    public function attributes(){
        return [
            'dob' => "Date of Birth"
        ];
    }
}
