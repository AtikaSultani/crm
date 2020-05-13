@extends('layouts.master')
@section('title', 'Create Project')
@section('page-title')
    <h>Add New Project</h>
@endsection
@section('content')
<form style="margin-left:300px;" action="{{ url('/complaints') }}" method="post" id="create-form">
@csrf
<!-- Caller information -->

            <div  class="w-full  md:w-3/5 mx-0 md:mx-10">

              {{-- Localtion --}}
              <div class="flex items-start">
                {{-- project name --}}
              <div  class="mb-4 w-full md:w-auto">
                    <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Project Name</label>
                    <input type="text" class="w-full md:w-auto" name="project_name"/>
                </div>

                {{-- NGO Name --}}
                <div class="mb-4 mx-5  w-full md:w-auto">
                    <label class="block mb-2 text-sm font-normal text-gray-600" for="title">NGO Name</label>
                    <input type="text" class="w-full md:w-auto" name="NGO_name"/>
                </div>
              </div>
              <div class="flex items-start">
                {{-- Start Date --}}
              <div  class="mb-4 w-full md:w-auto">
                    <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Start Date</label>
                    <input class="datepicker-here" data-language='en' data-date-format="yyyy-mm-dd" id="dob"  value="{{date('Y-m-d')}}" name="start_date"/>
                </div>

                {{-- end datae --}}
                <div class="mb-4 mx-5  w-full md:w-auto">
                    <label class="block mb-2 text-sm font-normal text-gray-600" for="title">End date</label>
                    <input class="datepicker-here" data-language='en' data-date-format="yyyy-mm-dd" id="dob"  value="{{date('Y-m-d')}}" name="end_date"/>
                </div>
              </div>
              <div class="flex items-start">
                {{-- DONORS --}}
                <div  class="mb-4 w-full md:w-auto">
                      <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Donors</label>
                      <input type="text" class="w-full md:w-auto" name="donors"/>
                  </div>

                  {{-- ACTIVITIES --}}
                  <div class="mb-4 mx-5  w-full md:w-auto">
                      <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Activities</label>
                      <input type="text" class="w-full md:w-auto" name="activities"/>
                  </div>
                  </div>
                   <div class="flex items-start">
                        {{-- direct beneficiary --}}
                                <div class="mb-4 w-full md:w-auto">
                                    <label class="block mb-2 text-sm font-normal text-gray-600">Direct Beneficiary</label>
                                    <input type="text" class="w-full md:w-auto" name="direct_beneficiary">
                                </div>
                                {{-- indirect beneficiary --}}
                                        <div class="mb-4 mx-5 w-full md:w-auto">
                                            <label class="block mb-2 text-sm font-normal text-gray-600">Indirect Beneficiary</label>
                                            <input type="text" class="w-full md:w-auto" name="indirect_beneficiary">
                                        </div>
                            </div>



                              <div class="flex items-start">

                                {{-- on budget --}}
                                <div class="mb-4 w-full md:w-auto">

                                      <label class="block mb-2 text-sm font-normal text-gray-600">On Budget</label>
                                      <input type="text" class="w-full md:w-auto" name="on_budget">
                                  </div>
                                  {{-- off budget --}}
                                          <div class="mb-4 mx-5 w-full md:w-auto">
                                              <label class="block mb-2 text-sm font-normal text-gray-600">Off Budget</label>
                                              <input type="text" class="w-full md:w-auto" name="off_budget">
                                          </div>
                                  {{-- budget --}}
                                  <div class="mb-4 mx-5 w-full md:w-auto">
                                      <label class="block mb-2 text-sm font-normal text-gray-600">budget</label>
                                      <input type="text" class="w-full md:w-auto" name="budget">
                                  </div>
                                  </div>
                                  <div class="flex items-start">
                                    {{-- Province --}}
                                        <div class="mb-4 w-full md:w-auto">
                                            <label class="block mb-2 text-sm font-normal text-gray-600">Province</label>
                                            <select name="province_id" class="w-full md:w-auto" id="province">
                                                <option value="">Select Province</option>
                                                @foreach($province as $key)
                                                    <option value="{{$key->id}}">{{$key->province_name}}</option>
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

                                  <div class="flex items-start">
                                    {{-- program manager --}}
                                    <div class="mb-4  w-full md:w-auto">
                                      <label class="block mb-2 text-sm font-normal text-gray-600">Program Manager</label>
                                      <input type="text" class="w-full md:w-auto" name="program_manager">
                                    </div>
                                    {{-- Program --}}
                                    <div class="mb-4 mx-5  w-full md:w-auto">
                                        <label class="block mb-2 text-sm font-normal text-gray-600">Program</label>
                                        <select name="program_name" class="w-full md:w-auto">
                                            <option value="">Select Program</option>
                                            @foreach($programs as $program)
                                                <option value="{{ $program->id }}">{{ $program->program_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                  </div>
                                  {{-- submit button --}}
                                  <div class="flex items-start">
                                                  <div class="mb-4 w-full md:w-auto">
                                                    <button class="w-full md:w-auto bg-blue text-white px-3 py-1 rounded text-base">Create Project</button>

                                                </div>
                                              </div>


                                          </form>
                                          @stop


                              @section('page-level-js')
                                  <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
                                  {!! JsValidator::formRequest('App\Http\Requests\ComplaintRequest', '#create-form'); !!}
                              @stop
