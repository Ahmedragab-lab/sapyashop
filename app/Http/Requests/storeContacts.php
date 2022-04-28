<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeContacts extends FormRequest
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

            'name'      => 'required',
            'email'     => 'required|email',
            'mobile'    => 'nullable|numeric',
            'title'     => 'required|min:5',
            'message'   => 'required|min:10',
        ];

    }


    public function messages()
    {
        return [
            'name.required' => trans('validation.required'),
            'email.required' => trans('validation.required'),
            'title.required' => trans('validation.required'),
            'message.required' => trans('validation.required'),

        ];
    }
}