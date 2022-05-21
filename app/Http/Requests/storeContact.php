<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeContact extends FormRequest
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
            'name'          =>'required|max:255',
            'phone'         =>'required|max:255',
            'email'         =>'required|email|max:255',
            'service_id'    =>'required|exists:services,id|max:255',
            'message'       =>'required',
        ];
    }

    public function messages()
    {
       return [
           'name.required'       => 'يرجي ادخال اسمك',
           'phone.required'      => 'يرجي ادخال هاتف',
           'email.required'      => 'يرجي ادخال بريد الكتروني للتواصل',
           'email.email'         => 'يرجي ادخال بريد الكتروني صحيح',
           'service_id.required' => 'يرجي اختيار نوع الخدمة',
           'service_id.exists'   => 'الخدمة غير موجودة',
           'message.required'    => 'يرجي اخبارنا بتفاصيل طلبك',
           'max'                 => 'يرجي عدم تجاوز الحد المسموح من الحروف (255)',
       ];
    }
}
