<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
        'lastname'=>'required|string|max:155',
        'firstname'=>'required|string|max:155',
        'email'=>'required|unique:users',
        'phone_number'=>'required',
        'profil'=>'required',
        'compagnie_id'=>'required',
       
        ];
    }
}