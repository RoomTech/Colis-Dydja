<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
           'lastname_expeditor'=>'required|string|max:155',
           'firstname_expeditor'=>'required|string|max:155',
           'phone_expeditor'=>'required',
           'lastname_recipient'=>'required',
           'firstname_recipient'=>'required',
           'phone_recipient'=>'required',
           'package_status'=>'required',
           'description_package'=>'required',
           'price_package'	=>'required',
        ];
    }
}