<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterValidateRequest extends FormRequest
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
            "firstname"       => 'required|min:2|max:255',
            "lastname"        => 'required|min:2|max:255',
            'phone'           => 'required|unique:users|min:11|max:11|regex:/^((09))[0-9]{9}/',
            "password"        => 'required|min:8|max:255|confirmed',
            "password_confirmation" => 'required|min:2|max:255',
            'address'         => 'required|min:8|max:600',
            'state'           => 'required|min:2|max:255',
            'city'            => 'required|min:2|max:255',
            'zip'             => 'required|min:10|max:10|regex:/^[0-9]{10}/',
        ];
    }
    public function messages()
    {
        return [
            'firstname.required'      => '"نام" نباید خالی باشد',
            'lastname.required'      => '"نام خانوادگی" نباید خالی باشد',
            'phone.required'      => '"شماره تلفن" نباید خالی باشد',
            'zip.required'      => '"کد پستی" نباید خالی باشد',
            'password.required'      => '"رمز" نباید خالی باشد',
            'password_confirmation.required'      => '"تکرار رمز" نباید خالی باشد',
            'state.required'      => '"استان" نباید خالی باشد',
            'city.required'      => '"شهر" نباید خالی باشد',
            'address.required'      => '"آدرس" نباید خالی باشد',
            'password.min'      => 'رمز نباید کمتر از 8 رقم باشد',
            'password.max'      => 'رمز نباید کمتر از 255 رقم باشد',
            'password.confirmed'      => 'تکرار رمز اشتباه است',
            'firstname.min' => '"نام" نمی تواند کمتر از 2 حرف باشد',
            'firstname.max' => '"نام" نمی تواند بیشتر از 255 حرف باشد',
            'lastname.min'  => '"نام خانوادگی" نمی تواند کمتر از 3 حرف باشد',
            'lastname.max'  => '"نام خانوادگی" نمی تواند بیشتر از 255 حرف باشد',
            'phone.min'      => '"شماره تلفن" نباید کمتر از 11 رقم باشد',
            'phone.max'      => '"شماره تلفن" نباید بیشتر از 11 رقم باشد',
            'phone.regex'    => '"شماره تلفن" معتبر نیست',
            'phone.unique'    => '"شماره تلفن" از قبل ثبت شده',
            'address.min'   => '"آدرس" نباید کمتر از 8 حرف باشد',
            'address.max'   => '"آدرس" نباید بیشتر از 600 حرف باشد',
            'state.min'     => '"استان" نباید کمتر از ۲ حرف باشد',
            'state.max'     => '"استان" نباید بیشتر از 255 حرف باشد',
            'city.min'      => '"شهر" نباید کمتر از 2 حرف باشد',
            'city.max'      => '"شهر" نباید بیشتر از 255 حرف باشد',
            'zip.regex'     => '"کد پستی" معتبر نیست',
            'zip.min'       => '"کد پستی" نباید کمتر از 10 رقم باشد',
            'zip.max'       => '"کد پستی" نباید بیشتر از 10 رقم باشد',
        ];
    }
}
