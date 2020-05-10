@extends('layouts.master')
@section('title', 'Create Complaint')
@section('page-title')
<h>Add New Complaint</h>
@endsection
@section('content')
    <div class="row">

        <section class="panel">

            <div class="panel-body">
                <div class="form">
                    <form method="POST" action="{{url('complaints') }}" class="form-horizontal"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="student_type" value="3">
                        <div class="form-body">

                            <div class="tab-content" id=''>

                                <div class="tab-pane active" id="">
                                    <div class="row reg-content-wrapper">

                                        <div class="col-sm-6 reg-right-content-wrapper">
                                            <div class="form-group">
                                                <div>
                                                    <label class="control-label col-md-4"> CallerName <span>*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control " name="caller_name" =" "
                                                        />
                                                        @error('caller_name')
                                                        <div style="color:red;">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4"> PhoneNumberRecived <span>*</span>
                                                </label>
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="tel_no_received"/>
                                                    @error('tel_no_received')
                                                    <div style="color:red;">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Gender
                                                </label>
                                                <div class="col-md-6">
                                                    <select name="gender" id="gender" class="form-control">
                                                        <option value="">Please select</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Male">Male</option>
                                                    </select>
                                                    @error('gender')
                                                    <div style="color:red;">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4"> Received Date <span>*</span>
                                                </label>
                                                <div class="col-md-6">
                                                    <input class="datepicker-here"
                                                           value="2020-10-10"
                                                           name="received_date"/>
                                                    @error('received_date')
                                                    <div style="color:red;">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Status
                                                </label>
                                                <div class="col-md-6">
                                                    <select name="status" class="form-control">
                                                        <option value="">Please select</option>
                                                        <option value="Registered">Registered</option>
                                                        <option value="Under Investigation">Under investigation</option>
                                                        <option value="Solved">Solved</option>
                                                        <option value="Pending">Pending</option>
                                                    </select>
                                                    @error('status')
                                                    <div style="color:red;">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Quarter
                                                </label>
                                                <div class="col-md-6">
                                                    <select name="quarter" id="quarter" class="form-control">
                                                        <option value="">Please select</option>
                                                        <option value="First Quarter">First Quarter</option>
                                                        <option value="Second Quarter">Second Quarter</option>
                                                        <option value="Third Quarter">Third Quarter</option>
                                                        <option value="Fourth Quarter">Fourth Quarter</option>
                                                    </select>
                                                    @error('quarter')
                                                    <div style="color:red;">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Referred To
                                                </label>
                                                <div class="col-md-6">
                                                    <select name="referred_to" id="referred_to" class="form-control">
                                                        <option value="">Please select</option>
                                                        <option value="DCD/CD">DCD/CD</option>
                                                        <option value="officer">Officer</option>
                                                        <option value="partner">Partner</option>
                                                        <option value="PM">PM</option>
                                                    </select>
                                                    @error('referred_to')
                                                    <div style="color:red;">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4"> <span>*</span>Beneficiary file
                                                </label>
                                                <div class="col-md-6">
                                                    <input type="file" class="form-control " name="beneficiary_file">
                                                    <span id="base_number_field_error" style="color:#f13e64"></span>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-sm-6" style="direction: ltr">

                                            <div class="form-group">
                                                <label class="control-label col-md-4">BroadCategory
                                                </label>
                                                <div class="col-md-6">
                                                    <select name="broad_category" id="broad_category"
                                                            class="form-control">
                                                        <option value="">Please select</option>
                                                        @foreach($broad_category as $b_category)
                                                            <option value="{{$b_category->id}}">{{$b_category->broad_cat_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('broad_category')
                                                    <div style="color:red;">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Specific Category
                                                </label>
                                                <div class="col-md-6">
                                                    <select name="specific_category" id="specific_category"
                                                            class="form-control">
                                                        <option value="">Please select</option>
                                                        @foreach($specific_category as $s_category)
                                                            <option value="{{$s_category->id}}">{{$s_category->specifice_cat_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('specific_category')
                                                    <div style="color:red;">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4"> Received By <span>*</span>
                                                </label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control " name="received_by"/>
                                                    @error('received_by')
                                                    <div style="color:red;">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4">
                                                    Person who shared
                                                    the action
                                                    <span>*</span>
                                                </label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control "
                                                           name="person_who_shared_action" =" " />
                                                    <span id="base_number_field_error" style="color:#f13e64"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4"> Close Date <span>*</span>
                                                </label>
                                                <div class="col-md-6">
                                                    <input type="date" class="form-control" name="close_date"/>
                                                    @error('close_date')
                                                    <div style="color:red;">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label col-md-4">Project name
                                                </label>
                                                <div class="col-md-6">
                                                    <select name="project_name" id="project_name" class="form-control">
                                                        <option value="">Please select</option>
                                                        @foreach($projects as $project)
                                                            <option value="{{$project->id}}">{{$project->project_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('project_name')
                                                    <div style="color:red;">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Program name
                                                </label>
                                                <div class="col-md-6">
                                                    <select name="program_name" class="form-control">
                                                        <option value="">Please select</option>
                                                        @foreach($programs as $program)
                                                            <option value="{{$program->id}}">{{$program->program_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('program_name')
                                                    <div style="color:red;">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4"> <span>*</span>Description
                                                </label>
                                                <div class="col-md-6">
                                                                <textarea type="text" class="form-control "
                                                                          name="description">
                                                                </textarea>
                                                    @error('description')
                                                    <div style="color:red;">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>

                                    <div class="row" style="margin-right:0px;margin-left:0px;">
                                        <div class="col-md-12">
                                            <h3 class="block" style="margin:0px;padding-bottom: 0px;">Main Address
                                                Information</h3>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-12" style="text-align:left;">Province
                                                            <span>*
                                                        </span>
                                                        </label>
                                                        <div class="col-md-12">
                                                            <select name="province" id="province" class="form-control">
                                                                <option value="">Please Select...</option>
                                                                @foreach($province as $key=>$value)
                                                                    <option value="{{$key}}">{{$value}}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('province')
                                                            <div style="color:red;">
                                                                {{$message}}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-12" style="text-align:left;">District
                                                            <span>*
                                                         </span>
                                                        </label>
                                                        <div class="col-md-12">
                                                            <select name="district" id="district" class="form-control">
                                                                <option value="">Please Select...</option>
                                                                <option value=""></option>
                                                                >
                                                            </select>
                                                            @error('district')
                                                            <div style="color:red;">
                                                                {{$message}}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-12" style="text-align:left;">Village/Area
                                                        </label>
                                                        <div class="col-md-12">
                                                            <input type="text" name="village" id="village"
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <button style="margin-left:80px" type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>

            </div>


        </section>

        <!-- container section end -->

        <!-- javascripts -->
        <script type="text/javascript">
            $(document).ready(function () {
                $('select[name="province"]').on('change', function () {
                    var province_id = $(this).val();
                    if (province_id) {
                        $.ajax({
                            url: '/ComplaintController/district/' + province_id,
                            type: 'GET',
                            datatype: 'json',
                            success: function (data) {
                                console.log(data);
                                $('select[name="district"]').empty();
                                $.each(data, function (key, value) {
                                    $('select[name="district"]')
                                        .append('<option value="' + key + '">' + value + '</option>');
                                });
                            }
                        });
                    } else {
                        $('select[name="district"]').empty();
                    }
                });
            });


        </script>

@endsection
