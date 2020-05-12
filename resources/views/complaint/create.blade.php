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
                {{-- Caller name --}}
              <div  class="mb-4 w-full md:w-auto">
                    <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Caller Name</label>
                    <input type="text" class="w-full md:w-auto" id="caller_name" name="caller_name"/>
                </div>

                {{-- Tell number received --}}
                <div class="mb-4 mx-5  w-full md:w-auto">
                    <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Phone number</label>
                    <input type="text" class="w-full md:w-auto" id="tel_no_received" name="tel_no_received"/>
                </div>
              </div>
              <div class="flex items-start">
                {{-- Recived Date --}}
              <div  class="mb-4 w-full md:w-auto">
                    <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Recived Date</label>
                    <input class="datepicker-here" data-language='en' data-date-format="yyyy-mm-dd" id="dob"  value="{{date('Y-m-d')}}" name="received_date"/>
                </div>

                {{-- close datae --}}
                <div class="mb-4 mx-5  w-full md:w-auto">
                    <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Close date</label>
                    <input class="datepicker-here" data-language='en' data-date-format="yyyy-mm-dd" id="dob"  value="{{date('Y-m-d')}}" name="close_date"/>
                </div>
              </div>
              {{-- Localtion --}}
              <div class="flex items-start">
                {{-- Province --}}
                    <div class="mb-4 w-full md:w-auto">
                        <label class="block mb-2 text-sm font-normal text-gray-600">Province</label>
                        <select name="province_id" class="w-full md:w-auto" id="province">
                            <option value="">Select Province</option>
                            @foreach($provinces as $key)
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
                   <div class="flex items-start">
                        {{-- Village --}}
                                <div class="mb-4 w-full md:w-auto">
                                    <label class="block mb-2 text-sm font-normal text-gray-600">Village</label>
                                    <input type="text" class="w-full md:w-auto" name="village">
                                </div>
                            </div>
                      </div>


                              <div class="flex items-start">

                                {{-- gender --}}
                                <div class="mb-4 w-full md:w-auto">
                                    <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Gender</label>
                                    <select name="gender" class="w-full md:w-auto">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                  {{-- status --}}
                                  <div class="mb-4 mx-5 w-full md:w-auto">
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

                                  <div class="flex items-start">
                                    {{-- Borad category --}}
                                    <div class="mb-4  w-full md:w-auto">
                                        <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Board Category</label>
                                        <select name="broad_category_id" class="w-full md:w-auto">
                                            <option value="">Please select</option>
                                            @foreach($broadCategories as $category)
                                                <option value="{{$category->id}}">{{ $category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{--beneficiaryFile --}}
                                    <div class="mb-4 mx-5  w-full md:w-auto">
                                        <label class="block mb-2 text-sm font-normal text-gray-600" for="grid-first-name">
                                          beneficiaryFile
                                        </label>
                                        <input class="w-full md:w-auto" id="" type="file" name="beneficiary_file">
                                      </div>

                                  </div>

                                          <div class="flex items-start">

                                          {{-- Project --}}
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
                                              <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Program</label>
                                              <select name="program_name" class="w-full md:w-auto">
                                                  <option value="">Select Program</option>
                                                  @foreach($programs as $program)
                                                      <option value="{{ $program->id }}">{{ $program->program_name }}</option>
                                                  @endforeach
                                              </select>
                                          </div>
                                          {{-- referred to --}}
                                          <div class="mb-4 mx-5 w-full md:w-auto">
                                              <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Referred To</label>
                                                  <select name="referred_to" class="w-full md:w-auto">
                                                        <option value="">Please select</option>
                                                        <option value="pm">PM</option>
                                                        <option value="officer">Officer</option>
                                                        <option value="partner">Partner</option>
                                                        <option value="dcd/cd">DCD/CD</option>
                                                  </select>
                                          </div>
                                        </div>
                                              <div class="flex items-start">
                                                {{-- Project --}}
                                                <div class="mb-4 w-full md:w-auto">
                                                  <label class="block mb-2 text-sm font-normal text-gray-600">
                                                    Person who shared the action
                                                  </label>
                                                  <input class="w-full md:w-auto" name="person_who_shared_action" id="" type="text">

                                                </div>

                                                </div>
                                                  {{-- specific category --}}
                                                <div class="flex items-start">
                                                <div class="mb-4 w-full md:w-auto">
                                                    <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Specific
                                                        Category</label>
                                                    <select name="broad_category_id" class="w-full md:w-auto truncate">
                                                        <option value="">Please select</option>
                                                        @foreach($specificCategory as $category)
                                                            <option value="{{$category->id}}">{{ $category->category_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                              </div>
                                              @if($category->category_name == 'Other (please specify)')
                                              <div class="flex items-start">
                                                <div class="mb-4  w-full md:w-auto">
                                                  <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Description</label>
                                                  <textarea class="w-full md:w-auto"></textarea>
                                                </div>
                                              </div>
                                              @endif
                                              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                {{-- submit button --}}

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
