@extends('layouts.master')
@section('title', 'Create Project')
@section('page-title')
    <h>Add New Project</h>
@endsection
@section('content')
              <form  method="POST"  action="{{url('projects') }}" id="create-form" >
                        @csrf
                        <div class="border-b">
                            <div class="flex flex-col md:flex-row justify-between w-full my-3">
                                <div class="w-full md:w-2/5 flex-shrink-0">
                                    <p class="text-gray-700 text-lg font-medium">Project Information</p>
                                    <p class="text-gray-600 leading-relaxed my-3 text-sm">
                                        Provide the Project name, NGO name, Start Date, End Date, Donors and Activities of project.
                                    </p>
                                </div>
                                <div class="w-full  md:w-3/5 mx-0 md:mx-10">

                                    {{-- Project name --}}
                                    <div class="flex items-start">
                                      <div class="mb-4 w-full md:w-auto">
                                        <div class="mb-4">
                                            <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Project Name</label>
                                            <input type="text" class="w-full md:w-auto" name="project_name"/>
                                        </div>
                                      </div>

                                    {{-- NGO Name --}}
                                    <div class="mb-4 mx-5  w-full md:w-auto">
                                      <div class="mb-4">
                                          <label class="block mb-2 text-sm font-normal text-gray-600" for="title">NGO Name</label>
                                          <input type="text" class="w-full md:w-auto" name="NGO_name"/>
                                      </div>
                                  </div>
                                  </div>
                                      {{-- Star Date --}}
                                      <div class="flex items-start">
                                        <div class="mb-4 w-full md:w-auto">
                                          <div class="mb-4">
                                              <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Start Date</label>
                                              <input type="date" class="w-full md:w-auto" name="start_date"/>
                                          </div>
                                        </div>

                                    {{-- end Date --}}
                                      <div class="mb-4 mx-5  w-full md:w-auto">
                                          <div class="mb-4">
                                              <label class="block mb-2 text-sm font-normal text-gray-600" for="title">End Date</label>
                                              <input type="date" class="w-full md:w-auto" name="end_date"/>
                                          </div>
                                      </div>
                                    </div>
                                    {{-- Donors --}}
                                    <div class="flex items-start">
                                      <div class="mb-4 w-full md:w-auto">
                                        <div class="mb-4">
                                            <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Donors</label>
                                            <input type="text" class="w-full md:w-auto" name="donors"/>
                                        </div>
                                      </div>
                                      {{-- budjet --}}
                                      <div class="mb-4 mx-5  w-full md:w-auto">
                                          <div class="mb-4">
                                              <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Budjet</label>
                                              <input type="text" class="w-full md:w-auto" name="budget"/>
                                          </div>
                                        </div>
                                      </div>
                                    {{-- Direct Beneficiaries --}}
                                    <div class="flex items-start">
                                      <div class="mb-4 w-full md:w-auto">
                                        <div class="mb-4">
                                            <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Direct Beneficiaries</label>
                                            <input type="number" class="w-full md:w-auto" name="direct_beneficiaries"/>
                                        </div>
                                      </div>
                                    {{-- Indirect Beneficiaries --}}
                                    <div class="mb-4 mx-5  w-full md:w-auto">
                                        <div class="mb-4">
                                            <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Indirect Beneficiaries</label>
                                            <input type="number" class="w-full md:w-auto" name="indirect_beneficiaries"/>
                                        </div>
                                    </div>
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
                                    {{-- on budjet --}}
                                    <div class="flex items-start">
                                      <div class="mb-4 w-full md:w-auto">
                                        <div class="mb-4">
                                            <label class="block mb-2 text-sm font-normal text-gray-600" for="title">OnBudjet</label>
                                            <input type="text" class="w-full md:w-auto" name="on_budget"/>
                                        </div>
                                      </div>
                                    {{-- off budjet --}}
                                    <div class="mb-4 mx-5  w-full md:w-auto">
                                        <div class="mb-4">
                                            <label class="block mb-2 text-sm font-normal text-gray-600" for="title">OffBudjet</label>
                                            <input type="text" class="w-full md:w-auto" name="off_budget"/>
                                        </div>
                                    </div>
                                  </div>

                                    {{-- Localtion --}}
                                    <div class="flex items-start">
                                        {{-- Province --}}
                                        <div class="flex items-start">
                                              <div class="mb-4 w-full md:w-auto">
                                                  <label class="block mb-2 text-sm font-normal text-gray-600">Province</label>
                                                  <select name="province_id" class="w-full md:w-auto" id="province">
                                                      <option value="">Select Province</option>
                                                      @foreach($province as $key)
                                                          <option value="{{$key->id}}">{{$key->province_name}}</option>
                                                      @endforeach
                                                  </select>
                                              </div>
                                            </div>

                                        {{-- Distict --}}
                                        <div class="mb-4 mx-5  w-full md:w-auto">
                                            <label class="block mb-2 text-sm font-normal text-gray-600">District</label>
                                            <select name="district" class="w-full md:w-auto" id="district">
                                                <option value="">Select District</option>
                                            </select>
                                        </div>
                                      </div>
                                      {{-- Project Manager --}}
                                      <div class="mb-4">
                                          <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Project Manager</label>
                                          <input type="text" class="w-full md:w-auto" name="project_manager"/>
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
                                      {{-- Activities --}}
                                      <div class="mb-4">
                                          <label class="block mb-2 text-sm font-normal text-gray-600" for="title">Activities</label>
                                          <textarea type="text"  class="w-full md:w-auto " name="activities" >
                                          </textarea>
                                      </div>

                                      <div class="flex flex-col md:flex-row justify-between w-full my-3">
                                          <div class="flex-shrink-0 w-full md:w-2/5"></div>
                                          <div class="w-full md:w-3/5  mx-0 md:mx-10">
                                              <button class="w-full md:w-auto bg-blue text-white px-3 py-1 rounded text-base">Create Project</button>
                                          </div>
                                      </div>
                                  </form>
                              @stop


                              @section('page-level-js')
                                  <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
                                  {!! JsValidator::formRequest('App\Http\Requests\ComplaintRequest', '#create-form'); !!}
                              @stop
