<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSetting extends FormRequest
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
            //  'comp_name' => 'required|regex:/^[0-9-أ-ي-pL\s\-]+$/u',
            //  'about'=>'required|regex:/^[A-Za-z0-9-أ-ي-pL\s\-]+$/u',


        ];
    }


    public function messages()
    {
        return [
            // 'comp_name.required' => trans('validation.required'),
            // 'about.unique' => trans('validation.unique'),

        ];
    }
}
