@extends('layouts.master')
@section('title', 'Edit User')
@section('page-title')
<h>Edit User</h>
@endsection
@section('content')
   <div class="row">


            <section class="panel">

              <div class="panel-body">
                <div class="form">
                    <form  method="post"  action="{{url('/users/'.$user->id) }}" class="form-vertical" id="edit-form" >
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
                                                    <label class="control-label col-md-4"> User Name <span  >*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="text"  class="form-control " name="user_name" value="{{$user->name}}"/>

                                                    </div>
                                                    </div>
                                                </div>



                                              <div class="form-group">
                                                  <label class="control-label col-md-4"> Email <span  >*</span>
                                                  </label>
                                                  <div class="col-md-6">
                                                      <input type="text" id="picker" class="form-control" name="email" value="{{$user->email}}"/>

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
@section('page-level-js')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\ProjectRequest', '#edit-form'); !!}
@stop
