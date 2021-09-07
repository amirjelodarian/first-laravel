<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordValidateRequest extends FormRequest
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
            'phone' => 'required|min:11|max:11|regex:/^((09))[0-9]{9}/'
        ];
    }

    public function messages()
    {
        return[
            'phone.required' => 'شماره تلفن نباید خالی باشد',
            'phone.min' => 'شماره تلفن نباید کمتر از 11 رقم باشد',
            'phone.max' => 'شماره تلفن نباید بیشتر از 11 رقم باشد',
            'phone.regex' => 'شماره تلفن معتبر نیست'
        ];
    }
}
