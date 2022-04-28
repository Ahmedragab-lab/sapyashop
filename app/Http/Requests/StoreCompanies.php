<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanies extends FormRequest
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
            'name_ar' => 'required|regex:/^[0-9-أ-ي-pL\s\-]+$/u',
            'name_en' => 'required|regex:/^[A-Za-z0-9-pL\s\-]+$/u',
            // 'slug'=>'required|regex:/^[A-Za-z0-9-أ-ي-pL\s\-]+$/u',
            // 'desc'=>'required|regex:/^[A-Za-z0-9-أ-ي-pL\s\-]+$/u',
            // 'email' => 'required|email|unique:companies,email,'.$this->id,


        ];
    }


    public function messages()
    {
        return [
            'name_ar.required' => trans('validation.required'),
            'name_en.required' => trans('validation.required'),

        ];
    }
}
