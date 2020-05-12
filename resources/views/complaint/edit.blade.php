@extends('layouts.master')
@section('title', 'Edit Complaint')
@section('page-title')
    <h>Edit Complaint</h>
@endsection
@section('content')
<form style="margin-left:300px;" action="{{url('/complaints/'.$id) }}" method="post" id="create-form">
@csrf
@method('PUT')
<!-- Caller information -->

            <div  class="w-full  md:w-3/5 mx-0 md:mx-10">

              {{-- Localtion --}}
              <div class="flex items-start">
                {{-- Caller name --}}
              <div  class="mb-4 w-full md:w-auto">
                    <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Caller Name</label>
                    <input type="text" class="w-full md:w-auto" id="caller_name" name="caller_name" value="{{$data->caller_name}}"/>
                </div>

                {{-- Tell number received --}}
                <div class="mb-4 mx-5  w-full md:w-auto">
                    <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Phone number</label>
                    <input type="text" class="w-full md:w-auto" id="tel_no_received" name="tel_no_received" value="{{$data->tel_no_received}}"/>
                </div>
              </div>
              <div class="flex items-start">
                {{-- Recived Date --}}
              <div  class="mb-4 w-full md:w-auto">
                    <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Recived Date</label>
                    <input class="datepicker-here" data-language='en' data-date-format="yyyy-mm-dd" id="dob"  value="{{$data->received_date}}" name="received_date"/>
                </div>

                {{-- close datae --}}
                <div class="mb-4 mx-5  w-full md:w-auto">
                    <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Close date</label>
                    <input class="datepicker-here" data-language='en' data-date-format="yyyy-mm-dd" id="dob"  value="{{$data->close_date}}" name="close_date"/>
                </div>
              </div>
              {{-- Localtion --}}
              <div class="flex items-start">
                {{-- Province --}}
                    <div class="mb-4 w-full md:w-auto">
                        <label class="block mb-2 text-sm font-normal text-gray-600">Province</label>
                        <select name="province_id" class="w-full md:w-auto" id="province">
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
                    <div class="mb-4 mx-5  w-full md:w-auto">
                        <label class="block mb-2 text-sm font-normal text-gray-600">District</label>
                        <select name="district_id" class="w-full md:w-auto" id="district">
                          @foreach($districts as $district)
                             <option value="{{$district->id}}"
                               @if($district->id==$data->district_id)
                               selected
                               @endif
                               >{{$district->district_name}}</option>
                             @endforeach
                        </select>
                    </div>
                   <div class="flex items-start">
                        {{-- Village --}}
                                <div class="mb-4 w-full md:w-auto">
                                    <label class="block mb-2 text-sm font-normal text-gray-600">Village</label>
                                    <input type="text" class="w-full md:w-auto" name="village" value="{{$data->village	}}">
                                </div>
                            </div>
                      </div>


                              <div class="flex items-start">

                                {{-- gender --}}
                                <div class="mb-4 w-full md:w-auto">
                                    <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Gender</label>
                                    <select name="gender" class="w-full md:w-auto">
                                      @if($data->gender=='Male')
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                      @else
                                      <option value="Female">Female</option>
                                      <option value="Male">Male</option>
                                      @endif
                                    </select>
                                </div>
                                  {{-- status --}}
                                  <div class="mb-4 mx-5 w-full md:w-auto">
                                      <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Status</label>
                                      <select name="status" class="w-full md:w-auto">
                                        @foreach($statuses as $status)
                                          <option value="{{$status}}"
                                          @if($status==$data->status)
                                          selected
                                          @endif>{{$status}}</option>
                                        @endforeach
                                      </select>
                                  </div>

                                  {{-- Quarter --}}
                                  <div class="mb-4 mx-5 w-full md:w-auto">
                                      <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Quarter</label>
                                      <select name="status" class="w-full md:w-auto">
                                        @foreach($quarters as $quarter)
                                          <option value="{{$quarter}}"
                                          @if($quarter == $data->quarter)
                                          selected
                                          @endif>{{$quarter}}</option>
                                        @endforeach
                                      </select>
                                      </div>
                                  </div>

                                  <div class="flex items-start">
                                    {{-- Borad category --}}
                                    <div class="mb-4  w-full md:w-auto">
                                        <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Board Category</label>
                                        <select name="broad_category_id" class="w-full md:w-auto">
                                          @foreach($broad_category as $key)
                                             <option value="{{$key->id}}"
                                               @if($key->id==$data->broad_category_id)
                                               selected
                                               @endif
                                               >{{$key->category_name}}</option>
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
                                                @foreach($projects as $project)
                                                   <option value="{{$project->id}}"
                                                     @if($project->id==$data->project_id)
                                                     selected
                                                     @endif
                                                     >{{$project->project_name}}</option>
                                                   @endforeach
                                              </select>
                                          </div>
                                          {{-- Program --}}
                                          <div class="mb-4 mx-5  w-full md:w-auto">
                                              <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Program</label>
                                              <select name="program_name" class="w-full md:w-auto">
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
                                          {{-- referred to --}}
                                          <div class="mb-4 mx-5 w-full md:w-auto">
                                              <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Referred To</label>
                                                  <select name="referred_to" class="w-full md:w-auto">
                                                    @foreach($refers as $referred)
                                                       <option value="{{$referred}}"
                                                         @if($referred==$data->referred_to)
                                                         selected
                                                         @endif
                                                         >{{$referred}}</option>
                                                       @endforeach
                                                  </select>
                                          </div>
                                        </div>
                                              <div class="flex items-start">
                                                {{-- person_who_shared_action --}}
                                                <div class="mb-4 w-full md:w-auto">
                                                  <label class="block mb-2 text-sm font-normal text-gray-600">
                                                    Person who shared the action
                                                  </label>
                                                  <input class="w-full md:w-auto" name="person_who_shared_action" id="" type="text" value="{{$data->person_who_shared_action}}">

                                                </div>

                                                </div>
                                                  {{-- specific category --}}
                                                <div class="flex items-start">
                                                <div class="mb-4 w-full md:w-auto">
                                                    <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Specific
                                                        Category</label>
                                                    <select name="broad_category_id" class="w-full md:w-auto truncate">
                                                        <option value="">Please select</option>
                                                        @foreach($specific_category as $key)
                                                           <option value="{{$key->id}}"
                                                             @if($key->id==$data->specific_category_id)
                                                             selected
                                                             @endif
                                                             >{{$key->category_name}}</option>
                                                           @endforeach
                                                    </select>
                                                </div>
                                              </div>
                                              @if($key->category_name == 'Other (please specify)')
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
