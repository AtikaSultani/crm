<?php

namespace App\Http\Requests;

use App\Models\Project;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;

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
        $project = Project::find($this->route('project'));

        switch (Request::method()) {
            case 'PUT':
            case 'PATCH':
                return [
                    'project_name'    => "required|unique:projects,project_name,".$project->id,
                    'project_code'    => "required",
                    'partner_name'    => "required",
                    'program_id'      => "required|numeric",
                    'start_date'      => "required|date",
                    'end_date'        => "required|date",
                    'donors'          => "required|string|min:3",
                    'activities'      => "required",
                    'district_id'     => "required",
                    'project_manager' => "required",
                ];
            default :
                return [
                    'project_name'    => "required|unique:projects,project_name",
                    'project_code'    => "required",
                    'partner_name'    => "required",
                    'program_id'      => "required|numeric",
                    'start_date'      => "required|date",
                    'end_date'        => "required|date",
                    'donors'          => "required|string|min:3",
                    'activities'      => "required",
                    'district_id'     => "required",
                    'project_manager' => "required"
                ];
        }
    }
}
