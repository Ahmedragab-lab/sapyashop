<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class storeservices extends FormRequest
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
            'serve_name' => 'required|regex:/^[0-9-أ-ي-pL\s\-]+$/u',
            'serve_name_en' => 'required|regex:/^[A-Za-z0-9-pL\s\-]+$/u',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'desc'=>'required|regex:/^[A-Za-z0-9-أ-ي-pL\s\-]+$/u',
            // 'serve_name' => 'required|regex:/^[0-9-أ-ي-pL\s\-]+$/u|unique:services,serve_name->ar,'.$this->id,
            // 'serve_name_en' => 'required|regex:/^[A-Za-z0-9-pL\s\-]+$/u|unique:services,serve_name->en,'.$this->id,
            // 'serve_name' => 'required|regex:/(^([ا-ى]+)(\d+)?$)/u|unique:services,serve_name->ar,'.$this->id,
            // 'serve_name' => ['required','regex:/(^([ا-ى]+)(\d+)?$)/u',Rule::unique('services','serve_name->ar')->ignore($this->id),],
            // 'serve_name_en' => 'required|regex:/(^([a-zA-Z]+)(\d+)?$)/u|unique:services,serve_name->en,'.$this->id,
        ];
    }
    public function messages()
    {
        return [
            'serve_name.required' => trans('validation.required'),
            'serve_name.unique' => trans('validation.unique'),
            'serve_name_en.required' => trans('validation.required'),
            'serve_name_en.unique' => trans('validation.unique'),
            'serve_name_en.regex' => trans('site.required_en'),
            'serve_name.regex' => trans('site.required_ar'),
            'desc.required'=>trans('site.desc_required'),
        ];
    }
}
