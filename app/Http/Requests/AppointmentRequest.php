<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
            'major_id' => 'required|digits_between:1,9',
            'doctor_id' => 'required',
            'date' => 'required',
            'shift_id' => 'required',
        ];

    }
        public function attributes()
    {
        return [
            'major_id' => "Major",
            'doctor_id' => "Doctor",
            'date' => "Date",
            'shift_id' => "Shift",
        ];
    }

}
