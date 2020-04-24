@extends('master')
@section('title')
CRM Registration
@stop
@section('main_content')
   <div class="row">
           @if(session()->has('msg'))
               <div class="alert alert-success">
                   {{ session()->get('msg') }}
               </div>
           @endif
               <div class="col-lg-12">
              <h3 class="page-header"><i class=""></i>Hotline - Beneficiary Feedback and Complaint Tracking Database</h3>
                <ol class="breadcrumb" >
                  <li><i class="fa fa-home"></i><a href="/crm">Home</a></li>
                  <li><i class="fa fa-plus"></i>CRM Registeration</li>
                    <div style="float:right;" >
                    <i class="fa fa-calendar"></i>
                  <span><?php echo date('l j F Y'); ?></span>
                    </div>
                </ol>
          </div>
            <section class="panel">
              <header class="panel-heading">
                <strong>
                  CRM Registration
               </strong>
              </header>
              <div class="panel-body">
                <div class="form">
                    <form  method="POST"  action="{{url('home') }}" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="student_type" value="3">
                            <div class="form-body">

                                <div class="tab-content" id=''>

                                    <div class="tab-pane active" id="">
                                        <div class="row reg-content-wrapper">

                                            <div class="col-sm-6 reg-right-content-wrapper">
                                                <div class="form-group">
                                                    <div>
                                                    <label class="control-label col-md-4"> CallerName <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="text"  class="form-control " name="caller_name"  required="required" />
                                                        <span id="base_number_field_error" style="color:#f13e64"></span>
                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-4"> PhoneNumberRecived <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="number" class="form-control" name="tel_no_received" required="required"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Gender
                                                    </label>
                                                    <div class="col-md-6">
                                                        <select name="gender" id="gender" class="form-control">
                                                            <option>Please select</option>
                                                            <option value="Female">Female</option>
                                                            <option value="Male">Male</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"> Received Date <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="date" id="picker" class="form-control" name="received_date" required="required"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Status
                                                    </label>
                                                    <div class="col-md-6">
                                                        <select name="status"  class="form-control">
                                                            <option>Please select</option>
                                                            <option value="Registered">Registered</option>
                                                            <option value="Under investigatio">Under investigation</option>
                                                            <option value="Solved">Solved</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Quarter
                                                    </label>
                                                    <div class="col-md-6">
                                                        <select name="quarter" id="quarter" class="form-control">
                                                            <option>Please select</option>
                                                            <option value="First">First Quarter</option>
                                                            <option value="Second">Second Quarter</option>
                                                            <option value="Third">Third Quarter</option>
                                                            <option value="Fourth">Fourth Quarter</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Referred To
                                                    </label>
                                                    <div class="col-md-6">
                                                        <select name="referred_to" id="referred_to" class="form-control">
                                                            <option>Please select</option>
                                                            @foreach($referred_programs as $referred)
                                                                <option value="{{$referred->id}}">{{$referred->referred_program_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"> <span class="required">*</span>Beneficiary file
                                                    </label>
                                                    <div class="col-md-6">
                                                                <input type="file"  class="form-control " name="beneficiary_file">
                                                        <span id="base_number_field_error" style="color:#f13e64"></span>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-sm-6" style="direction: ltr">

                                                <div class="form-group">
                                                    <label class="control-label col-md-4">BroadCategory
                                                    </label>
                                                    <div class="col-md-6">
                                                        <select name="broad_category" id="broad_category" class="form-control" required>
                                                            <option>Please select</option>
                                                            @foreach($broad_category as $b_category)
                                                               <option value="{{$b_category->id}}">{{$b_category->broad_cat_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Specific Category
                                                    </label>
                                                    <div class="col-md-6">
                                                        <select name="specific_category" id="specific_category" class="form-control">
                                                            <option>Please select</option>
                                                            @foreach($specific_category as $s_category)
                                                               <option value="{{$s_category->id}}">{{$s_category->specifice_cat_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"> Received By <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="text"  class="form-control " name="received_by"  required="required"/>
                                                        <span id="base_number_field_error" style="color:#f13e64"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">
                                                        Person who shared
                                                        the action
                                                        <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="text"  class="form-control " name="person_who_shared_action"  required="required" />
                                                        <span id="base_number_field_error" style="color:#f13e64"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"> Close Date <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="date" class="form-control" name="close_date" required="required"/>
                                                    </div>
                                                </div>


                                                 <div class="form-group">
                                                    <label class="control-label col-md-4">Project name
                                                    </label>
                                                    <div class="col-md-6">
                                                      <select name="project_name" id="specific_category" class="form-control" required>
                                                          <option>Please select</option>
                                                          @foreach($projects as $project)
                                                             <option value="{{$project->id}}">{{$project->project_name}}</option>
                                                          @endforeach
                                                      </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Program name
                                                    </label>
                                                    <div class="col-md-6">
                                                      <select name="program_name" id="specific_category" class="form-control" required>
                                                          <option>Please select</option>
                                                          @foreach($programs as $program)
                                                             <option value="{{$program->id}}">{{$program->program_name}}</option>
                                                          @endforeach
                                                      </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-4"> <span class="required">*</span>Description
                                                    </label>
                                                    <div class="col-md-6">
                                                                <textarea type="text"  class="form-control " name="description"  required="required" >
                                                                </textarea>
                                                        <span id="base_number_field_error" style="color:#f13e64"></span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <br>

                                        <div class="row" style="margin-right:0px;margin-left:0px;">
                                            <div class="col-md-12">
                                                <h3 class="block" style="margin:0px;padding-bottom: 0px;">Main Address Information</h3>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-12" style="text-align:left;">Province <span class="required">*
                                                        </span>
                                                            </label>
                                                            <div class="col-md-12">
                                                                <select name="province" id="province" class="form-control"  required>
                                                                    <option value="">Please Select...</option>
                                                                      @foreach($province as $key=>$value)
                                                                          <option value="{{$key}}">{{$value}}</option>
                                                                        @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-12" style="text-align:left;">District <span class="required">*
                                                         </span>
                                                            </label>
                                                            <div class="col-md-12">
                                                                <select name="district" id="district" class="form-control"  required>
                                                                    <option value="">Please Select...</option>
                                                                        <option value=""></option>>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-12" style="text-align:left;">Village/Area
                                                            </label>
                                                            <div class="col-md-12">
                                                                <input type="text" name="village" id="village" class="form-control">
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
           $(document).ready(function() {
             $('select[name="province"]').on('change',function(){
                var province_id=$(this).val();
                if(province_id)
                {
                    $.ajax({
                        url:'/home/district/'+province_id,
                        type:'GET',
                        datatype:'json',
                        success:function (data) {
                            console.log(data);
                            $('select[name="district"]').empty();
                            $.each(data,function(key,value){
                                $('select[name="district"]')
                                .append('<option value="'+key+'">' + value +'</option>');
                            });
                        }
                    });
                }
                else{
                     $('select[name="district"]').empty();
                 }
             });
          } );




       </script>

@endsection
