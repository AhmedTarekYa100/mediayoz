<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSetting extends FormRequest
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
            'title'       => 'required',
            'open_at'     => 'required',
            'whatsapp'    => 'required',
            'phone1'      => 'required',
            'phone2'      => 'required',
            'facebook'    => 'url|nullable',
            'youtube'     => 'url|nullable',
            'insta'       => 'url|nullable',
            'linkedin'    => 'url|nullable',
        ];
    }
    public function messages(){
        return[
            'title.required'       => 'اسم الشركة مطلوب',
            'open_at.required'     => 'يجب ادخال مواعيد العمل',
            'whatsapp.required'    => 'يرجي ادخال هاتف واتساب',
            'phone1.required'      => 'يرجي ادخال هاتف التواصل الاول',
            'phone2.required'      => 'يرجي ادخال هاتف تواصل ثاني',
            'facebook.url'         => 'يرجي ادخال رابط فيسبوك صحيح يبدأ ب https://',
            'youtube.url'          => 'يرجي ادخال رابط يويتوب صحيح يبدأ ب https://',
            'insta.url'            => 'يرجي ادخال رابط انستجرام صحيح يبدأ ب https://',
            'linkedin.url'         => 'يرجي ادخال رابط لينكد ان صحيح يبدأ ب https://',
        ];
    }
}
