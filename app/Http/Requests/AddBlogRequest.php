<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBlogRequest extends FormRequest
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
            'title' => 'required|min:2|max:255',
            'body' => 'required|min:2|max:5000',
            'blogPhoto.*' => 'required|max:10240|mimes:jpg,jpeg,png,bmp,gif',
        ];
    }

    public function messages()
    {
        return[
            'title.required'      => 'عنوان نباید خالی باشد',
            'title.min'      => 'عنوان حداقل بالای 2 حرف باشد',
            'title.max'      => 'عنوان باید کمتر از 255 حرف باشد',
            'body.required'      => 'متن نباید خالی باشد',
            'body.min'      => 'متن حداقل بالای 2 حرف باشد',
            'body.max'      => 'متن باید کمتر از 5000 حرف باشد',
            'blogPhoto.*.required' => 'عکس انتخاب کنید',
            'blogPhoto.*.mimes' => 'پسوند عکس معتبر نیست',
            'blogPhoto.*.max' => 'سایز عکس کمتر از 10 مگابایت باشد',
        ];
    }
}
