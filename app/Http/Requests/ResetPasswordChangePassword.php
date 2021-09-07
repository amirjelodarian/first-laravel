<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordChangePassword extends FormRequest
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
            "password"              => 'required|min:8|max:255|confirmed',
            "password_confirmation" => 'required|min:8|max:255'
        ];
    }

    public function messages()
    {
        return[
            'password.required'                   => '"رمز" نباید خالی باشد',
            'password.min'                        => 'رمز نباید کمتر از 8 رقم باشد',
            'password.max'                        => 'رمز نباید کمتر از 255 رقم باشد',
            'password.confirmed'                  => 'تکرار رمز اشتباه است',
            'password_confirmation.required'      => '"تکرار رمز" نباید خالی باشد',
            'password_confirmation.min'           => 'تکرار رمز نباید کمتر از 8 رقم باشد',
            'password_confirmation.max'           => 'تکرار رمز نباید کمتر از 255 رقم باشد',
        ];
    }
}
