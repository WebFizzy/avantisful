<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(!Auth::check()){
            return true;
        }else{
            if(Auth::user()->hasRole('user')){
                return false;
            }else{
                return true;
            }
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'bail|required|min:5|max:11|unique:users',
            'email' => 'bail|required|email|unique:users,email',
            // 'p_number' => 'bail|required|min:7',
            'f_name' => 'bail|required|alpha|min:3|max:18',
            // 'l_name' => 'bail|required|alpha',
            'password' => 'bail|required|min:8|confirmed',
        ];
    }
}
