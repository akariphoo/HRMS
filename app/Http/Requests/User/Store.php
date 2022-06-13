<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
        $user_id = request()->user ? request()->user->id : null;
        $data['password'] = 'required|confirmed';

        if($user_id){
            $data['password'] = 'nullable|confirmed';
        }

        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user_id,
        ]+$data;
        
        return $rules;
    }
}
