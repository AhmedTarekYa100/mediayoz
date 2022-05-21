<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreService extends FormRequest
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
            'image'         => 'mimes:jpeg,jpg,png,gif,webp|required_without:id',
            'title'         => 'required|max:255|unique:services,title,'.$this->id,
            'sub_title'     => 'required',
            'desc'          => 'required',
        ];
    }

    public function messages()
    {
        return [
            'image.mimes'                => 'صيغة الصورة غير مسموحة',
            'image.required_without'     => 'يجب رفع صورة',
            'title.required'             => 'يجب ادخال عنوان الخدمة',
            'title.unique'               => 'عنوان الخدمة مسجل من قبل',
            'sub_title.required'         => 'يجب ادخال عنوان فرعي',
            'desc.required'              => 'يجب ادخال وصف الخدمة',

        ];

    }
}
