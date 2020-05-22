@extends('layouts.master')
@section('title', 'Edit Project')
@section('page-title', 'Edit Project')
@section('content')
    <form action="{{ url('projects/'.$data->id) }}" method="POST" id="edit-form">
        @method('PUT')
        @csrf

        {{-- Project information --}}
        <p class="pt-5 pb-3 text-lg font-semibold text-gray-600">Project information</p>
        <div class="w-full bg-gray-100 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 p-5 rounded-sm gap-5">

            {{-- project name --}}
            <div class="mb-4">
                <label for="caller_name">Project Name</label>
                <input type="text" id="project_name" name="project_name" value="{{$data->project_name}}"/>
            </div>
            {{-- project code --}}
            <div class="mb-4">
                <label for="caller_name">Project code</label>
                <input type="text"  name="project_code" value="{{$data->project_code}}"/>
            </div>

            {{-- NGO Name --}}
            <div class="mb-4">
                <label for="title">NGO Name</label>
                <input type="text" id="NGO_name" name="ngo_name" value="{{$data->ngo_name}}"/>
            </div>

            {{-- Start Date --}}
            <div class="mb-4">
                <label for="title">Start Date</label>
                <input type="text" name="start_date" class="datepicker-here"
                       data-language='en'
                       data-date-format="yyyy-mm-dd"
                       value="{{$data->start_date}}"/>
            </div>

            {{-- End Date --}}
            <div class="mb-4">
                <label>End Date </label>
                <input type="text" name="end_date" class="datepicker-here"
                       data-language='en'
                       data-date-format="yyyy-mm-dd"
                       value="{{$data->end_date}}"/>
            </div>

            {{-- Donors --}}
            <div class="mb-4">
                <label>Donors </label>
                <input type="text" id="donors" name="donors" value="{{$data->donors}}"/>
            </div>


            {{-- Direct Beneficiary --}}
            <div class="mb-4">
                <label>Direct Beneficiary </label>
                <input type="text" id="direct_beneficiary" name="direct_beneficiaries"
                       value="{{$data->direct_beneficiaries}}"/>
            </div>

            {{-- Indirect Beneficiary --}}
            <div class="mb-4">
                <label>Indirect Beneficiary </label>
                <input type="text" id="indirect_beneficiary" name="indirect_beneficiaries"
                       value="{{$data->indirect_beneficiaries}}"/>
            </div>

            {{-- on budget --}}
            <div class="mb-4">
                <label>On Budget</label>
                <input type="text" id="on_budget" name="on_budget" value="{{$data->on_budget}}"/>
            </div>

            {{-- Off Budget --}}
            <div class="mb-4">
                <label>Off Budget</label>
                <input type="text" id="off_budget" name="off_budget" value="{{$data->off_budget}}"/>
            </div>
            {{-- Budget --}}
            <div class="mb-4">
                <label>Budget</label>
                <input type="text" id="budget" name="budget" value="{{$data->budget}}"/>
            </div>


            {{-- Province --}}
            <div class="mb-4">
                <label>Province</label>
                <select name="province_id" id="province">
                    <option value="">Select Province</option>
                    @foreach($provinces as $province)
                        <option value="{{$province->id}}"
                                @if($province->id==$data->province_id)
                                selected
                                @endif
                        >{{$province->province_name}}</option>
                    @endforeach
                </select>
            </div>

            {{-- Distict --}}
            <div class="mb-4 ">
                <label>District</label>
                <select name="district_id" id="district">
                    @foreach($districts as $district)
                        <option value="{{$district->id}}"
                                @if($district->id==$data->district_id)
                                selected
                                @endif
                        >{{$district->district_name}}</option>
                    @endforeach
                </select>
            </div>
            {{-- project Manager --}}
            <div class="mb-4">
                <label>Project Manager</label>
                <input type="text" id="project_manager" name="project_manager" value="{{$data->project_manager}}"/>
            </div>

            {{-- Program --}}
            <div class="mb-4">
                <label for="program">Program</label>
                <select name="program_id" id="program">
                    <option value="">Select Program</option>
                    @foreach($programs as $program)
                        <option value="{{$program->id}}"
                                @if($program->id==$data->program_id)
                                selected
                                @endif
                        >{{$program->program_name}}</option>
                    @endforeach
                </select>
            </div>
            {{-- ACTIVITIES --}}
            <div class="mb-4 col-span-2 md:col-span-3 lg:col-span-4">
                <label for="specific-category">Activities</label>
                <textarea name="activities" id="activities" rows="4">{{$data->activities}}"</textarea>
            </div>

        </div>

        <div class="flex justify-end my-5">
            <button type="submit"
                    class="text-white bg-blue-lighter hover:bg-blue text-base hover:shadow-lg focus:outline-none px-3 py-1 rounded-sm">
                Save Changes
            </button>
        </div>

    </form>
@stop


@section('page-level-js')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\ProjectRequest', '#edit-form'); !!}
@stop
