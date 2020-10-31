@extends('layouts.master')
@section('title', 'Create Project')
@section('page-title', 'Add New Project')

@section('page-level-css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
@stop

@section('content')
    <form action="{{ url('/projects') }}" method="post" id="create-form">
        @csrf
        {{-- Project information --}}
        <p class="pt-5 pb-3 text-lg font-semibold text-gray-600">Project information</p>
        <div class="w-full bg-gray-100 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 p-5 rounded-sm gap-5">

            {{-- project name --}}
            <div class="mb-4">
                <label for="caller_name">Project Name</label>
                <input type="text" id="project_name" name="project_name"/>
            </div>

            {{-- project code --}}
            <div class="mb-4">
                <label for="caller_name">Project Code</label>
                <input type="text" id="project_code" name="project_code"/>
            </div>

            {{-- NGO Name --}}
            <div class="mb-4">
                <label for="partner_name">Partner Name</label>
                <input type="text" id="partner_name" name="partner_name"/>
            </div>

            {{-- Start Date --}}
            <div class="mb-4">
                <label for="title">Start Date</label>
                <input type="text" name="start_date" class="datepicker-here"
                       data-language='en'
                       data-date-format="yyyy-mm-dd"
                       value="{{date('Y-m-d')}}"/>
            </div>

            {{-- End Date --}}
            <div class="mb-4">
                <label>End Date </label>
                <input type="text" name="end_date" class="datepicker-here"
                       data-language='en'
                       data-date-format="yyyy-mm-dd"
                       value="{{date('Y-m-d')}}"/>
            </div>

            {{-- Donors --}}
            <div class="mb-4">
                <label>Donors </label>
                <input type="text" id="donors" name="donors"/>
            </div>

            {{-- Direct Beneficiary --}}
            <div class="mb-4">
                <label>Direct Beneficiary </label>
                <input type="text" id="direct_beneficiary" name="direct_beneficiaries"/>
            </div>

            {{-- Indirect Beneficiary --}}
            <div class="mb-4">
                <label>Indirect Beneficiary </label>
                <input type="text" id="indirect_beneficiary" name="indirect_beneficiaries"/>
            </div>


            {{-- Total Budget --}}
            <div class="mb-4">
                <label>Total Budget</label>
                <input type="text" id="total_budget" name="total_budget"/>
            </div>


            {{-- Province --}}
            <div class="mb-4">
                <label>Province</label>
                <select name="provinces[]" multiple id="province" class="form-control">
                    @foreach($provinces as $province)
                        <option value="{{$province->id}}">{{ $province->province_name }}</option>
                    @endforeach
                </select>
            </div>


            {{-- Prject Manager --}}
            <div class="mb-4">
                <label>Project Manager</label>
                <input type="text" id="project_manager" name="project_manager"/>
            </div>

            {{-- Program --}}
            <div class="mb-4">
                <label for="program">Program</label>
                <select name="program_id" id="program">
                    <option value="">Select Program</option>
                    @foreach($programs as $program)
                        <option value="{{ $program->id }}">{{ $program->program_name }}</option>
                    @endforeach
                </select>
            </div>
            {{-- ACTIVITIES --}}
            <div class="mb-4 col-span-2 md:col-span-3 lg:col-span-4">
                <label for="specific-category">Activities</label>
                <textarea name="activities" id="activities" rows="4"></textarea>
            </div>

        </div>

        <div class="flex justify-end my-5">
            <button type="submit"
                    class="text-white bg-blue-lighter hover:bg-blue text-base hover:shadow-lg focus:outline-none px-3 py-1 rounded-sm">
                Create Now
            </button>
        </div>

    </form>
@stop

@section('page-level-js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\ProjectRequest', '#create-form'); !!}
    <script>
        $("#province").select2({
            maximumSelectionLength: 10
        });
    </script>
@stop
