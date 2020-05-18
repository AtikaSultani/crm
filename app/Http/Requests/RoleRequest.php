<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleRequest extends FormRequest
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
        switch (Request::method())
        {
            case 'POST':
                return [
                    'name' => 'required|min:3|max:255|unique:roles,name',
                ];
                break;
            case 'PUT':
            case 'PATCH':
                $role = Role::find($this->route('role'));

                return [
                    'name' => 'required|min:3|string|min:3|max:255|unique:roles,name,' . $role->id,
                ];
                break;
            default:
                return [
                    'name' => 'required|min:3|max:255|unique:roles',
                ];
        }
    }
}
