<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'project_name'    => "required|unique:projects,project_name",
            'project_code'        => "required",
            'NGO_name'        => "required",
            'program_name'    => "required",
            'start_date'      => "required|date",
            'end_date'        => "required|date",
            'donors'          => "required",
            'activities'      => "required",
            'province'        => "required",
            'district'        => "required",
            'project_manager' => "required",
            'direct_beneficiary'=> "required",
            'indirect_beneficiary'=> "required",
            'on_budget'       => "required",
            'off_budget'      => "required",
            'budget'          => "required"
        ];
    }
}
