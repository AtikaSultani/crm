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
            'province_id'              => 'required|numeric',
            'district_id'              => 'required|numeric',
            'gender'                   => "required",
            'village'                  => "nullable|min:3|max:200",
            'status'                   => "required",
            'quarter'                  => "required",
            'broad_category_id'        => "required",
            'program_id'               => "required",
            'project_id'               => "required",
            'specific_category_id'     => "required",
            'referred_to'              => "required",
            'received_date'            => "required|date",
            'close_date'               => 'required|date',
            'person_who_shared_action' => 'nullable',
            'description'              => "required_if:specific_category_id,14",
            'beneficiary_file'         => 'nullable|file'
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
            'description.required_if'  => 'Please provide extra info about category you selected.'
        ];
    }
}
