<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserRequest extends FormRequest
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
        switch (Request::method()) {
            case 'PUT':
            case 'PATCH':
                $user = User::find($this->route('user'));
                return [
                    'email' => 'required|email|max:255|unique:users,email,'.$user->id,
                    'name'  => 'required|string|min:3|max:255'
                ];
                break;
            default:
                return [
                    'email' => 'required|email|max:255|unique:user,',
                    'name'  => 'required|string|min:3|max:255'
                ];
        }
    }
}
