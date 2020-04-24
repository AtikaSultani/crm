
@extends('master')
@section('title')
Update CRM
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
                  <li><i class="fa fa-plus"></i>Update CRM</li>
                    <div style="float:right;" >
                    <i class="fa fa-calendar"></i>
                  <span><?php echo date('l j F Y'); ?></span>
                    </div>
                </ol>
          </div>
            <section class="panel">
              <header class="panel-heading">
                <strong>
                  Update CRM
               </strong>
              </header>
              <div class="panel-body">
                <div class="form">

                    <form  method="post"  action="{{url('home/'.$id) }}" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

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
                                                        <input type="text"  class="form-control " name="caller_name" value="{{$data->caller_name}}"  required="required" />
                                                        <span id="base_number_field_error" style="color:#f13e64"></span>
                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-4"> PhoneNumberRecived <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="number" class="form-control" name="tel_no_received" value="{{$data->tel_no_received}}" required="required"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Gender
                                                    </label>
                                                    <div class="col-md-6">
                                                        <select name="gender" id="gender" class="form-control">
                                                          @if($data->gender == 'Male')
                                                                  <option value="Male">Male</option>
                                                                  <option value="Female">Female</option>
                                                              @endif

                                                               <!-- Check if the gender if fenake -->
                                                              @if($data->gender == 'Female')
                                                                  <option value="Female">Female</option>
                                                                  <option value="Male">Male</option>
                                                              @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"> Received Date <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="date" id="picker" class="form-control" name="received_date" value="{{$data->received_date}}" required="required"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Status
                                                    </label>
                                                    <div class="col-md-6">

                                                        <select name="status" id="status"  class="form-control">
                                                            @if($data->status =='Registered')
                                                            <option value="Registered">Registered</option>
                                                            <option value="Under investigatio">Under investigation</option>
                                                            <option value="Solved">Solved</option>
                                                            @endif

                                                            @if($data->status == 'Under investigation')
                                                            <option value="Under investigatio">Under investigation</option>
                                                            <option value="Registered">Registered</option>
                                                            <option value="Solved">Solved</option>
                                                            @endif

                                                            @if($data->status == 'Solved')
                                                            <option value="Solved">Solved</option>
                                                            <option value="Under investigatio">Under investigation</option>
                                                            <option value="Registered">Registered</option>
                                                            @endif

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Quarter
                                                    </label>
                                                    <div class="col-md-6">
                                                        <select name="quarter" id="quarter" class="form-control">
                                                            @if($data->quarter=='First')
                                                            <option value="First">First Quarter</option>
                                                            <option value="Second">Second Quarter</option>
                                                            <option value="Third">Third Quarter</option>
                                                            <option value="Fourth">Fourth Quarter</option>
                                                            @endif

                                                            @if($data->quarter=='Second')
                                                            <option value="Second">Second Quarter</option>
                                                            <option value="First">First Quarter</option>
                                                            <option value="Third">Third Quarter</option>
                                                            <option value="Fourth">Fourth Quarter</option>
                                                            @endif

                                                            @if($data->quarter=='Third')
                                                            <option value="Third">Third Quarter</option>
                                                            <option value="First">First Quarter</option>
                                                            <option value="Second">Second Quarter</option>
                                                            <option value="Fourth">Fourth Quarter</option>
                                                            @endif

                                                            @if($data->quarter=='Fourth')
                                                            <option value="Fourth">Fourth Quarter</option>
                                                            <option value="First">First Quarter</option>
                                                            <option value="Second">Second Quarter</option>
                                                            <option value="Third">Third Quarter</option>
                                                            @endif

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Referred To
                                                    </label>
                                                    <div class="col-md-6">
                                                        <select name="referred_to" id="referred_to" class="form-control">
                                                              @if($data->referred_to =='1')
                                                                <option value="officer">Officer</option>
                                                                <option value="PM">PM</option>
                                                                <option value="partner">Partner</option>
                                                                <option value="DCD/CD">DCD/CD</option>
                                                              @endif
                                                              @if($data->referred_to =='2')
                                                                <option value="PM">PM</option>
                                                                <option value="officer">Officer</option>
                                                                <option value="partner">Partner</option>
                                                                <option value="DCD/CD">DCD/CD</option>
                                                              @endif
                                                              @if($data->referred_to =='3')
                                                                  <option value="partner">Partner</option>
                                                                  <option value="officer">Officer</option>
                                                                  <option value="PM">PM</option>
                                                                  <option value="DCD/CD">DCD/CD</option>
                                                              @endif
                                                              @if($data->referred_to =='3')
                                                                  <option value="DCD/CD">DCD/CD</option>
                                                                  <option value="officer">Officer</option>
                                                                  <option value="partner">Partner</option>
                                                                  <option value="PM">PM</option>
                                                              @endif

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div>
                                                    <label class="control-label col-md-4"> Program Name <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="text"  class="form-control " name="program_name" value="{{$data->program_name}}"  required="required" />
                                                        <span id="base_number_field_error" style="color:#f13e64"></span>
                                                    </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-6" style="direction: ltr">

                                                <div class="form-group">
                                                    <label class="control-label col-md-4">BroadCategory
                                                    </label>
                                                    <div class="col-md-6">
                                                        <select name="broad_category" id="broad_category" class="form-control">
                                                          @foreach($data->broad_categorys==$category)
                                                               <option value="{{$category->id}}">{{$category->broad_cat_name}}</option>
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
                                                               <option value=""></option>
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
                                                    <label class="control-label col-md-4"> <span class="required">*</span>Description
                                                    </label>
                                                    <div class="col-md-6">
                                                                <textarea type="text"  class="form-control " name="description"  required="required" >
                                                                </textarea>
                                                        <span id="base_number_field_error" style="color:#f13e64"></span>
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
                                                <div class="form-group">
                                                    <div>
                                                    <label class="control-label col-md-4"> Project Name <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="text"  class="form-control " name="project_name"  required="required" />
                                                        <span id="base_number_field_error" style="color:#f13e64"></span>
                                                    </div>
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

                                                                          <option value=""></option>

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
