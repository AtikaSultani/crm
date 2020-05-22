<?php

namespace App\Http\Requests;

use App\Models\Program;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;

class ProgramRequest extends FormRequest
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
                $program = Program::find($this->route('program'));

                return [
                    'program_name' => "required|unique:programs,program_name,".$program->id,
                    'start_date'   => "required|date",
                    'end_date'     => "required|date",
                ];
            default :
                return [
                    'program_name' => "required|unique:programs,program_name",
                    'start_date'   => "required|date",
                    'end_date'     => "required|date",
                ];
        }
    }
}
