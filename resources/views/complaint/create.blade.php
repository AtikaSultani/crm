@extends('layouts.master')
@section('title', 'Create Complaint')
@section('page-title')
    <h>Add New Complaint</h>
@endsection
@section('content')
                      <div style="margin-left:250px;">
                      <form  method="POST"  action="{{ url('/complaints') }}"class="w-full max-w-lg" enctype="multipart/form-data">
                                @csrf

                                  <div class="md:flex md:items-center mb-6">

                                          {{-- Caller name --}}
                                            <div class="md:w-1/3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                                                  Caller Name
                                                </label>
                                                <input style="padding-top:3px;padding-bottom:3px;" class="w-full md:w-auto" id="caller-name" type="text" name="caller_name">
                                              </div>

                                          {{-- Phone number --}}
                                              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                    Phone number
                                                  </label>
                                                  <input style="padding-top:3px;padding-bottom:3px;" class="w-full md:w-auto" id="caller-name" type="text" name="tel_no_received">
                                                </div>

                                          {{-- gender --}}
                                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                    Gender
                                                  </label>
                                                  <select style="padding-top:3px;padding-bottom:3px;" name="gender" class="w-full md:w-auto">
                                                      <option value="">Select Gender</option>
                                                      <option value="Male">Male</option>
                                                      <option value="Female">Female</option>
                                                  </select>
                                              </div>

                                          {{-- recived date --}}
                                              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                    Recived Date
                                                  </label>
                                                  <input style="padding-top:3px;padding-bottom:3px;" class="datepicker-here" data-language='en'data-date-format="yyyy-mm-dd" id="dob" type="text"
                                                    value="2020-10-10" name="received_date"/>
                                                </div>
                                            </div>

                                          {{-- person who shared the action --}}
                                            <div class="md:flex md:items-center mb-6">
                                              <div class="md:w-2/3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                  Person who shared the action
                                                </label>
                                                <input style="padding-top:3px;padding-bottom:3px;" class="w-full md:w-200" name="person_who_shared_action" id="" type="text">
                                              </div>

                                            {{-- status --}}
                                              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                  Status
                                                </label>
                                                <select style="padding-top:3px;padding-bottom:3px;" name="status" class="w-full md:w-auto">
                                                  <option value="">Please select</option>
                                                          <option value="Registered">Registered</option>
                                                          <option value="Under investigatio">Under investigation</option>
                                                          <option value="Solved">Solved</option>
                                                          <option value="Solved">Pending</option>
                                                </select>
                                            </div>

                                            </div>
                                            <div class="md:flex md:items-center mb-6">

                                            {{-- Quarter --}}
                                              <div class="md:w-2/3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                  Quarter
                                                </label>
                                                <select style="padding-top:3px;padding-bottom:3px;" name="quarter" class="w-full md:w-200">
                                                  <option value="">Please select</option>
                                                          <option value="First">First Quarter</option>
                                                          <option value="Second">Second Quarter</option>
                                                          <option value="Third">Third Quarter</option>
                                                          <option value="Fourth">Fourth Quarter</option>
                                                </select>
                                            </div>

                                          {{-- ReferredTo --}}
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                ReferredTo
                                              </label>
                                              <select style="padding-top:3px;padding-bottom:3px;" name="referred_to" class="w-full md:w-auto">
                                                    <option value="">Please select</option>
                                                    <option value="pm">PM</option>
                                                    <option value="officer">Officer</option>
                                                    <option value="partner">Partner</option>
                                                    <option value="dcd/cd">DCD/CD</option>
                                              </select>
                                          </div>

                                      {{-- beneficiaryFile --}}
                                          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                beneficiaryFile
                                              </label>
                                              <input style="padding-top:3px;padding-bottom:3px;" class="w-full md:w-auto" id="" type="file" name="beneficiary_file">
                                            </div>
                                            </div>

                                        {{-- BroadCategory --}}
                                            <div class="md:flex md:items-center mb-6">
                                              <div class="md:w-2/3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                BroadCategory
                                                  </label>
                                                  <select style="padding-top:3px;padding-bottom:3px;" name="broad_category_id" class="w-full md:w-200">
                                                    <option value="">Please select</option>
                                                    @foreach($broad_category as $category)
                                                        <option value="{{$category->id}}">{{ $category->category_name}}</option>
                                                    @endforeach
                                              </select>
                                              </div>

                                          {{-- SpecificCategory --}}
                                              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                SpecificCategory
                                                  </label>
                                                  <select style="padding-top:3px;padding-bottom:3px;" name="specific_category_id" class="w-full md:w-auto">
                                                    <option value="">Please select</option>
                                                    @foreach($specific_category as $category)
                                                        <option value="{{ $category->id }}" class="truncate">{{ $category->category_name}}</option>
                                                    @endforeach
                                              </select>
                                              </div>
                                            </div>

                                          {{-- CLOSE Date --}}
                                            <div class="md:flex md:items-center mb-6">
                                              <div class="md:w-1/3">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                      CLOSE Date
                                                    </label>
                                                    <input style="padding-top:3px;padding-bottom:3px;" class="datepicker-here" data-language='en'data-date-format="yyyy-mm-dd" id="dob" type="text"
                                                      value="2020-10-10" name="close_date"/>
                                                  </div>
                                            {{-- Project name --}}
                                                  <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                    Project name
                                                      </label>
                                                      <select style="padding-top:3px;padding-bottom:3px;" name="project_id" class="w-full md:w-auto">
                                                          <option value="">Select Project</option>
                                                          @foreach($projects as $project)
                                                              <option value="{{ $project->id }}">{{ $project->project_name }}</option>
                                                          @endforeach
                                                      </select>
                                                  </div>

                                              {{-- Program name --}}
                                                  <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                    Program name
                                                      </label>
                                                      <select style="padding-top:3px;padding-bottom:3px;" name="program_id" class="w-full md:w-auto">
                                                          <option value="">Select Program</option>
                                                          @foreach($programs as $program)
                                                              <option value="{{ $program->id }}">{{ $program->program_name }}</option>
                                                          @endforeach
                                                      </select>
                                                  </div>
                                                </div>
                                                <div class="flex items-start">
                                                    {{-- Province --}}
                                                    <div class="mb-4 w-full md:w-auto">
                                                        <label class="block mb-2 text-sm font-normal text-gray-600">Province</label>
                                                        <select style="padding-top:3px;padding-bottom:3px;" name="province_id" class="w-full md:w-auto" id="province">
                                                            <option value="">Select Province</option>
                                                            @foreach($province as $key)
                                                                <option value="{{$key->id}}">{{$key->province_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    {{-- Distict --}}
                                                    <div class="mb-4 mx-5  w-full md:w-auto">
                                                        <label class="block mb-2 text-sm font-normal text-gray-600">District</label>
                                                        <select style="padding-top:3px;padding-bottom:3px;" name="district_id" class="w-full md:w-auto" id="district">
                                                            <option value="">Select District</option>
                                                        </select>
                                                    </div>

                                                  {{-- Village --}}
                                                    <div class="mb-4">
                                                        <label class="block mb-2 text-sm font-normal text-gray-600">Village</label>
                                                        <input style="padding-top:3px;padding-bottom:3px;" type="text" class="w-full md:w-auto" name="village">
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="md:flex md:items-center mb-6" style="margin-left:210px;">
                                                  <div class="md:w-1/3">
                                                  <div class="flex-shrink-0 w-full md:w-2/5"></div>
                                                  <div class="w-full md:w-3/5  mx-0 md:mx-10">
                                                      <button class="w-full md:w-auto bg-blue text-white px-3 py-1 rounded text-base">Create Complaint</button>
                                                  </div>
                                                </div>
                                              </div>
                                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                  </form>
                                </div>
                                  @stop


@section('page-level-js')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\ComplaintRequest', '#create-form'); !!}
@stop
