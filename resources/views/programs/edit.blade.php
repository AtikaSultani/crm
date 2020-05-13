@extends('layouts.master')
@section('title', 'Edit Program')
@section('page-title')
<h>Edit Program</h>
@endsection
@section('content')
   <div class="row">


            <section class="panel">

              <div class="panel-body">
                <div class="form">
                    <form  method="post"  action="{{url('/programs/'.$id) }}" class="form-vertical" >
                        @csrf
                        @method('PUT')
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
                                                        <input type="text"  class="form-control " name="program_name" value="{{$data->program_name}}"/>
                                                        @error('program_name')
                                                        <div style="color:red;">
                                                          {{$message}}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    </div>
                                                </div>


                                              <div class="form-group">
                                                  <label class="control-label col-md-4"> StartDate <span >*</span>
                                                  </label>
                                                  <div class="col-md-6">
                                                      <input type="date" id="picker" class="form-control" name="start_date" value="{{$data->start_date}}" />
                                                      @error('start_date')
                                                      <div style="color:red;">
                                                        {{$message}}
                                                      </div>
                                                      @enderror
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-md-4"> EndtDate <span  >*</span>
                                                  </label>
                                                  <div class="col-md-6">
                                                      <input type="date" id="picker" class="form-control" name="end_date" value="{{$data->end_date}}"/>
                                                      @error('end_date')
                                                      <div style="color:red;">
                                                        {{$message}}
                                                      </div>
                                                      @enderror
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
                              <button class="w-full md:w-auto bg-blue text-white px-3 py-1 rounded text-base">save</button>

                          </div>
                          </form>
                    </div>
                </div>
            </section>

  <!-- container section end -->

  <!-- javascripts -->

@endsection
