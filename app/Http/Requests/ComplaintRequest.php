<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComplaintRequest extends FormRequest
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
            'caller_name'              => "required|min:3|max:15",
            'tel_no_received'          => "required|regex:/[07]{2}\d{8}/|min:10|max:10",
            'gender'                   => "required",
            'received_date'            => "required|date",
            'province_id'              => 'nullable|numeric',
            'district_id'              => 'nullable|numeric',
            'village'                  => "nullable|min:3|max:200",
            'status'                   => "required",
            'quarter'                  => "required",
            'close_date'               => 'required|date',
            'project_id'               => "nullable|numeric",
            'program_id'               => "nullable|numeric",
            'broad_category_id'        => "required",
            'specific_category_id'     => "required",
            'description'              => "required_if:specific_category_id,14",
            'referred_to'              => "required",
            'person_who_shared_action' => 'nullable',
            'beneficiary_file'         => 'nullable|file|max:'.(5 * 1024) // 5 MB
        ];
    }

    /**
     * Customize the validation messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'tel_no_received.required' => 'Caller phone number is required.',
            'tel_no_received.regex'    => 'Invalid Caller phone number.',
            'description.required_if'  => 'Please provide extra info about category you selected.',
            'beneficiary_file.max'     => "The file can't be more the 5 MB."
        ];
    }
}
