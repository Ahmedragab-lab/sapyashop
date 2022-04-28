<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class storedata extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'fname' => ['required','min:3','max:100'],
            'lname' => ['required','min:3','max:100'],
            'email' => ['required','email', Rule::unique('users')->ignore($this->user)],
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:active,unactive',
            // 'email' => ['required','email','unique:users'],
            // 'password' => 'required|same:confirm-password',
            // 'password' => [
            //     $this->route()->user ? 'nullable':'required','confirmed','min:6'
            // ],
            // 'email' => 'required|email|unique:users,email',
            // 'email' => 'required|email|unique:users,email,'.$this->user->id,
            // 'email' => ['required',Rule::unique('users')->ignore($this->user()->id)],
            // 'password' => ['required',
            //    'min:6',
            //    'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            //    'confirmed'],
            //    'password_confirm' => 'required|same:password',
        ];
    }
    public function messages()
    {
        return [
            // 'image.mimes' => 'صيغة المرفق يجب ان تكون   jpeg,png,jpg,gif,svg',
            // 'serve_name.required' => trans('validation.required'),
        ];
    }
}
