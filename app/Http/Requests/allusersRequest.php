<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class allusersRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'email|required|unique:userslists',
            'password'=>'required|min:8|max:15',
            'ref_id'=>'numeric|required'
        ];
    }
}