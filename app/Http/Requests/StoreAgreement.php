<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAgreement extends FormRequest
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
            'agreement_title' => 'required|regex:/^[0-9-أ-ي-pL\s\-]+$/u',
            'agreement_title_en' => 'required|regex:/^[A-Za-z0-9-pL\s\-]+$/u',
            'desc'=>'required|regex:/^[A-Za-z0-9-أ-ي-pL\s\-]+$/u',
        ];
    }


    public function messages()
    {
        return [
            'agreement_title.required' => trans('validation.required'),
            'agreement_title.unique' => trans('validation.unique'),
            'agreement_title_en.required' => trans('validation.required'),
            'agreement_tilte_en.unique' => trans('validation.unique'),
            'agreement_title_en.regex' => trans('site.required_en'),
            'agreement_title.regex' => trans('site.required_ar'),
            'desc.required'=>trans('site.desc_required'),
        ];
    }
}
