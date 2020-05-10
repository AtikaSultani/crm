@extends('layouts.master')
@section('title', 'Create Complaint')
@section('page-title')
    <h>Add New Complaint</h>
@endsection
@section('content')

    <form action="{{ url('/complaints') }}" method="post" id="create-form">
    @csrf
    <!-- Caller information -->
        <div class="border-b">
            <div class="flex flex-col md:flex-row justify-between w-full my-3">
                <div class="w-full md:w-2/5 flex-shrink-0">
                    <p class="text-gray-700 text-lg font-medium">Caller information</p>
                    <p class="text-gray-600 leading-relaxed my-3 text-sm">
                        Provide the name, phone number, gender, province, district and village of caller.
                    </p>
                </div>
                <div class="w-full  md:w-3/5 mx-0 md:mx-10">

                    {{-- Caller name --}}
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Name</label>
                        <input type="text" class="w-full md:w-auto" name="caller_name"/>
                    </div>

                    {{-- Tell number received --}}
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Phone number</label>
                        <input type="text" class="w-full md:w-auto" name="tel_no_received"/>
                    </div>

                    {{-- Tell number received --}}
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Gender</label>
                        <select name="gender" class="w-full md:w-auto">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    {{-- Localtion --}}
                    <div class="flex items-start">
                        {{-- Province --}}
                        <div class="mb-4 w-full md:w-auto">
                            <label class="block mb-2 text-sm font-normal text-gray-600">Province</label>
                            <select name="province_id" class="w-full md:w-auto" id="province">
                                <option value="">Select Province</option>
                                @foreach($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->province_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Distict --}}
                        <div class="mb-4 mx-5  w-full md:w-auto">
                            <label class="block mb-2 text-sm font-normal text-gray-600">District</label>
                            <select name="district_id" class="w-full md:w-auto" id="district">
                                <option value="">Select District</option>
                            </select>
                        </div>
                    </div>

                    {{-- Village --}}
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-normal text-gray-600">Village</label>
                        <input type="text" class="w-full md:w-auto" name="village">
                    </div>
                </div>
            </div>
        </div>

        <div class="border-b">
            <div class="flex flex-col md:flex-row justify-between w-full my-3">
                <div class="w-full md:w-2/5 flex-shrink-0">
                    <p class="text-gray-700 text-lg font-medium">Category information</p>
                    <p class="text-gray-600 leading-relaxed my-3 text-sm">
                        Provide the statue, quarter and category information of complaint.
                        <br>
                        Accurate data in category can help for more accurate report.
                    </p>
                </div>
                <div class="w-full  md:w-3/5 mx-0 md:mx-10">

                    {{-- project and program --}}
                    <div class="flex items-start">
                        {{-- status --}}
                        <div class="mb-4 w-full md:w-auto">
                            <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Status</label>
                            <select name="status" class="w-full md:w-auto">
                                <option value="">Please select</option>
                                <option value="Registered">Registered</option>
                                <option value="Under Investigation">Under investigation</option>
                                <option value="Solved">Solved</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>

                        {{-- Quarter --}}
                        <div class="mb-4 mx-5 w-full md:w-auto">
                            <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Quarter</label>
                            <select name="status" class="w-full md:w-auto">
                                <option value="">Please select</option>
                                <option value="First Quarter">First Quarter</option>
                                <option value="Second Quarter">Second Quarter</option>
                                <option value="Third Quarter">Third Quarter</option>
                                <option value="Fourth Quarter">Fourth Quarter</option>
                            </select>
                        </div>
                    </div>

                    {{-- Borad category --}}
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Board Category</label>
                        <select name="broad_category_id" class="w-full md:w-auto">
                            <option value="">Please select</option>
                            @foreach($broadCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Specific category --}}
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Specific
                            Category</label>
                        <select name="broad_category_id" class="w-full md:w-auto truncate">
                            <option value="">Please select</option>
                            @foreach($specificCategory as $category)
                                <option value="{{ $category->id }}" class="truncate">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- project and program --}}
                    <div class="flex items-start">
                        {{-- Province --}}
                        <div class="mb-4 w-full md:w-auto">
                            <label class="block mb-2 text-sm font-normal text-gray-600">Project</label>
                            <select name="project_id" class="w-full md:w-auto">
                                <option value="">Select Project</option>
                                @foreach($projects as $project)
                                    <option value="{{ $project->id }}">{{ $project->project_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Program --}}
                        <div class="mb-4 mx-5  w-full md:w-auto">
                            <label class="block mb-2 text-sm font-normal text-gray-600">Program</label>
                            <select name="district_id" class="w-full md:w-auto">
                                <option value="">Select Program</option>
                                @foreach($programs as $program)
                                    <option value="{{ $program->id }}">{{ $program->program_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row justify-between w-full my-3">
            <div class="flex-shrink-0 w-full md:w-2/5"></div>
            <div class="w-full md:w-3/5  mx-0 md:mx-10">
                <button class="w-full md:w-auto bg-blue text-white px-3 py-1 rounded text-base">Create Complaint</button>
            </div>
        </div>
    </form>
@stop

@section('page-level-js')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\ComplaintRequest', '#create-form'); !!}
@stop
