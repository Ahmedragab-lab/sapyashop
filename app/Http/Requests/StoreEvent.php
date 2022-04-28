<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEvent extends FormRequest
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
            'event_title' => 'required|regex:/^[0-9-أ-ي-pL\s\-]+$/u',
            'event_title_en' => 'required|regex:/^[A-Za-z0-9-pL\s\-]+$/u',
            // 'serve_name' => 'required|regex:/^[0-9-أ-ي-pL\s\-]+$/u|unique:services,serve_name->ar,'.$this->id,
            // 'serve_name_en' => 'required|regex:/^[A-Za-z0-9-pL\s\-]+$/u|unique:services,serve_name->en,'.$this->id,
            // 'serve_name' => 'required|regex:/(^([ا-ى]+)(\d+)?$)/u|unique:services,serve_name->ar,'.$this->id,
            // 'serve_name' => ['required','regex:/(^([ا-ى]+)(\d+)?$)/u',Rule::unique('services','serve_name->ar')->ignore($this->id),],
            // 'serve_name_en' => 'required|regex:/(^([a-zA-Z]+)(\d+)?$)/u|unique:services,serve_name->en,'.$this->id,
            'desc'=>'required|regex:/^[A-Za-z0-9-أ-ي-pL\s\-]+$/u',
        ];
    }

    public function messages()
    {
        return [
            'event_title.required' => trans('validation.required'),
            'event_title.unique' => trans('validation.unique'),
            'event_title_en.required' => trans('validation.required'),
            'event_tilte_en.unique' => trans('validation.unique'),
            'event_title_en.regex' => trans('site.required_en'),
            'event_title.regex' => trans('site.required_ar'),
            'desc.required'=>trans('site.desc_required'),
        ];
    }
}
