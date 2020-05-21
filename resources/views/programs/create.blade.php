
@extends('layouts.master')
@section('title', 'Create Program')
@section('page-title')
<h>Add New Program</h>
@endsection
@section('content')
    <div class="row">

        <section class="panel">

            <div class="panel-body">
              <div class="form">
                    <form  method="POST"  action="{{url('programs') }}" class="form-vertical" id="create-form">
                        @csrf
                        <input type="hidden" name="student_type" value="3">
                            <div class="form-body">

                                <div class="tab-content" id=''>

                                    <div class="tab-pane active" id="">
                                        <div class="row reg-content-wrapper">

                                            <div class="col-sm-6 reg-right-content-wrapper">
                                                <div class="form-group">
                                                    <div>
                                                    <label class="control-label col-md-4"> ProgramName <span  >*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="text"  class="form-control " name="program_name"/>

                                                    </div>
                                                    </div>
                                                </div>


                                              <div class="form-group">
                                                  <label class="control-label col-md-4"> StartDate <span >*</span>
                                                  </label>
                                                  <div class="col-md-6">
                                                      <input type="text"  name="start_date" class="datepicker-here" data-language='en'
                                                             data-date-format="yyyy-mm-dd"
                                                             value="{{date('Y-m-d')}}" />

                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-md-4"> EndtDate <span  >*</span>
                                                  </label>
                                                  <div class="col-md-6">
                                                      <input type="text" class="datepicker-here" data-language='en' name="end_date"
                                                             data-date-format="yyyy-mm-dd"
                                                             value="{{date('Y-m-d')}}"/>

                                                  </div>
                                              </div>


                                            </div>

                                          </div>
                                        </div>
                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                      </div>
                                </div>
                            </div>
                          </br>
                            <div class="mb-4 w-full md:w-auto">
                              <button class="w-full md:w-auto bg-blue text-white px-3 py-1 rounded text-base">Create Program</button>

                          </div>
                          </form>

                        </div>

                    </div>


                </section>

                @endsection
                @section('page-level-js')
                    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
                    {!! JsValidator::formRequest('App\Http\Requests\ProjectRequest', '#create-form'); !!}
                @stop
