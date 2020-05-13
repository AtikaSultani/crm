@extends('layouts.master')
@section('title', 'Create Complaint')
@section('page-title', 'Edit Complaint - '.$complaint->caller_name)
@section('content')
    <form action="{{ url('/complaints') }}" method="post" id="create-form">

        {{-- Calleer information --}}
        <p class="pt-5 pb-3 text-lg font-semibold text-gray-600">Caller information</p>
        <div class="w-full bg-gray-100 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 p-5 rounded-sm gap-5">
            {{-- Caller name --}}
            <div class="mb-4">
                <label for="caller_name">Caller Name</label>
                <input type="text" id="caller_name" value="{{ $complaint->caller_name }}" name="caller_name"/>
            </div>

            {{-- Tell number received --}}
            <div class="mb-4">
                <label for="title">Phone number</label>
                <input type="text" id="tel_no_received" value="{{ $complaint->tel_no_received }}"
                       name="tel_no_received"/>
            </div>

            {{-- gender --}}
            <div class="mb-4">
                <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option value="Male" @if($complaint->gender == 'Male') selected @endif>Male</option>
                    <option value="Female" @if($complaint->gender == 'female') selected @endif>Female</option>
                </select>
            </div>

            {{-- Retrived by --}}
            <div class="mb-4">
                <label>Receive By </label>
                <input type="text" disabled value="{{ $complaint->user->name }}">
            </div>

            {{-- Recieve date --}}
            <div class="mb-4">
                <label>Receive Date {{$complaint->receive_date}} </label>
                <input type="text" name="received_date" class="datepicker-here"
                       data-language='en'
                       data-date-format="yyyy-mm-dd"
                       value="{{$complaint->received_date}}"/>
            </div>

            {{-- Province --}}
            <div class="mb-4">
                <label>Province</label>
                <select name="province_id" id="province">
                    <option value="">Select Province</option>
                    @foreach($provinces as $province)
                        <option value="{{$province->id}}"
                                @if($province->id == $complaint->province_id) selected @endif>{{$province->province_name}}</option>
                    @endforeach
                </select>
            </div>

            {{-- Distict --}}
            <div class="mb-4 ">
                <label>District</label>
                <select name="district_id" id="district"></select>
            </div>

            {{-- Village --}}
            <div class="mb-4">
                <label>Village</label>
                <input type="text" name="village" value="{{ $complaint->village }}">
            </div>

        </div>

        {{-- Category and details --}}
        <p class="pt-5 pb-3 text-lg font-semibold text-gray-600">Category & actions</p>
        <div class="w-full bg-gray-100 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 p-5 rounded-sm gap-5">
            {{-- Status --}}
            <div class="mb-4">
                <label for="status">Status</label>
                <select name="status" id="status">
                    <option value="Registered" @if($complaint->status == 'Registered') selected @endif>Registered
                    </option>
                    <option value="Under Investigation"
                            @if($complaint->status == 'Under Investigation') selected @endif>Under investigation
                    </option>
                    <option value="Solved" @if($complaint->status == 'Solved') selected @endif>Solved</option>
                    <option value="Pending" @if($complaint->status == 'Pending') selected @endif>Pending</option>
                </select>
            </div>

            {{-- Quarter --}}
            <div class="mb-4">
                <label for="quarter">Quarter</label>
                <select name="quarter" id="quarter">
                    <option value="">Please select</option>
                    <option value="First Quarter" @if($complaint->quarter == 'First Quarter') selected @endif>First
                        Quarter
                    </option>
                    <option value="Second Quarter" @if($complaint->quarter == 'Second Quarter') selected @endif>Second
                        Quarter
                    </option>
                    <option value="Third Quarter" @if($complaint->quarter == 'Third Quarter') selected @endif>Third
                        Quarter
                    </option>
                    <option value="Fourth Quarter" @if($complaint->quarter == 'Fourth Quarter') selected @endif>Fourth
                        Quarter
                    </option>
                </select>
            </div>

            {{-- Recieve date --}}
            <div class="mb-4">
                <label>Close Date </label>
                <input type="text" name="receive_date" class="datepicker-here"
                       data-language='en'
                       data-date-format="yyyy-mm-dd"/>
            </div>

            {{-- Project --}}
            <div class="mb-4">
                <label for="project">Project</label>
                <select name="project_id" id="project">
                    <option value="">Select Project</option>
                    @foreach($projects as $project)
                        <option value="{{ $project->id }}">{{ $project->project_name }}</option>
                    @endforeach
                </select>
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

            {{-- Broad category --}}
            <div class="mb-4">
                <label for="broad-category">Broad Category</label>
                <select name="broad_category_id" id="broad-category">
                    <option value="">Please select</option>
                    @foreach($broadCategories as $category)
                        <option value="{{$category->id}}">{{ $category->category_name}}</option>
                    @endforeach
                </select>
            </div>

            {{-- Specific category --}}
            <div class="mb-4 col-span-2 md:col-span-3 lg:col-span-2 ">
                <label for="specific-category">Specific Category</label>
                <select name="specific_category_id" id="specific-category">
                    <option value="">Please select</option>
                    @foreach($specificCategory as $category)
                        <option value="{{$category->id}}">{{ $category->category_name}}</option>
                    @endforeach
                </select>
            </div>

            {{-- Description --}}
            <div class="mb-4 col-span-2 md:col-span-3 lg:col-span-4" id="description-container">
                <label for="specific-category">Description</label>
                <textarea name="description" id="description" rows="4"></textarea>
            </div>

            {{-- Refered to--}}
            <div class="mb-4">
                <label>Referred To </label>
                <input type="text" name="referred_to">
            </div>

            {{-- Person who shared action--}}
            <div class="mb-4">
                <label>Person who shared action</label>
                <input type="text" name="person_who_shared_action">
            </div>


            {{-- Attachment to--}}
            <div class="mb-4 col-span-2 md:col-span-3 lg:col-span-2">
                <label>Attachment</label>
                <input type="file" name="beneficiary_file">
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
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\ComplaintRequest', '#create-form'); !!}

    <script>
        $.ajax({
            url: `/provinces/${$('select#province').val()}/districts?district={{ $complaint->district_id }}`,
            success: function (view) {
                $('select#district').html(view)
            }
        });
    </script>
@stop
