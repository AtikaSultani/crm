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
                  <li><i class="fa fa-home"></i><a href="/projects">Projects</a></li>
                  <li><i class="fa fa-plus"></i>Add New Project</li>
                    <div style="float:right;" >
                    <i class="fa fa-calendar"></i>
                  <span><?php echo date('l j F Y'); ?></span>
                    </div>
                </ol>
          </div>
            <section class="panel">
              <header class="panel-heading">
                <strong>
                  Add New Project
               </strong>
              </header>
              <div class="panel-body">
                <div class="form">
                    <form  method="POST"  action="{{url('projects') }}" class="form-horizontal" >
                        @csrf
                        <input type="hidden" name="student_type" value="3">
                            <div class="form-body">

                                <div class="tab-content" id=''>

                                    <div class="tab-pane active" id="">
                                        <div class="row reg-content-wrapper">

                                            <div class="col-sm-6 reg-right-content-wrapper">
                                                <div class="form-group">
                                                    <div>
                                                    <label class="control-label col-md-4"> ProjectName <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="text"  class="form-control " name="project_name"  required="required" />
                                                        <span id="base_number_field_error" style="color:#f13e64"></span>
                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-4"> NGO Name <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="NGO_name" required="required"/>
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
                                                      <label class="control-label col-md-4"> StartDate <span class="required">*</span>
                                                      </label>
                                                      <div class="col-md-6">
                                                          <input type="date" id="picker" class="form-control" name="start_date" required="required"/>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="control-label col-md-4"> EndtDate <span class="required">*</span>
                                                      </label>
                                                      <div class="col-md-6">
                                                          <input type="date" id="picker" class="form-control" name="end_date" required="required"/>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="control-label col-md-4"> Donors <span class="required">*</span>
                                                      </label>
                                                      <div class="col-md-6">
                                                          <input type="text" class="form-control" name="donors" required="required"/>
                                                      </div>
                                                  </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"> Activities<span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                      <textarea type="text"  class="form-control " name="activities"  required="required" >
                                                      </textarea>
                                                        <span id="base_number_field_error" style="color:#f13e64"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-6" style="direction: ltr">

                                              <div class="form-group">
                                                  <label class="control-label col-md-4">
                                                      DirectBeneficiaries
                                                      <span class="required">*</span>
                                                  </label>
                                                  <div class="col-md-6">
                                                      <input type="text"  class="form-control " name="direct_beneficiaries"  required="required" />
                                                      <span id="base_number_field_error" style="color:#f13e64"></span>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-md-4">
                                                      IndirectBeneficiaries
                                                      <span class="required">*</span>
                                                  </label>
                                                  <div class="col-md-6">
                                                      <input type="text"  class="form-control " name="indirect_beneficiaries"  required="required" />
                                                      <span id="base_number_field_error" style="color:#f13e64"></span>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-md-4">OnBudjet <span class="required">*</span>
                                                  </label>
                                                  <div class="col-md-6">
                                                      <input type="text" class="form-control" name="on_budjet" required="required"/>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-md-4">OffBudjet <span class="required">*</span>
                                                  </label>
                                                  <div class="col-md-6">
                                                      <input type="text" class="form-control" name="off_budjet" required="required"/>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-md-4">Budjet <span class="required">*</span>
                                                  </label>
                                                  <div class="col-md-6">
                                                      <input type="text" class="form-control" name="budjet" required="required"/>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-md-4">Province <span class="required">*
                                                 </span>
                                                  </label>
                                                  <div class="col-md-6">
                                                      <select name="province" id="province" class="form-control"  required>
                                                          <option value="">Please Select...</option>
                                                            @foreach($province as $key=>$value)
                                                                <option value="{{$key}}">{{$value}}</option>
                                                              @endforeach
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-md-4">District <span class="required">*
                                               </span>
                                                  </label>
                                                  <div class="col-md-6">
                                                      <select name="district" id="district" class="form-control"  required>
                                                          <option value="">Please Select...</option>
                                                              <option value=""></option>>
                                                      </select>
                                                  </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                      </div>
                                </div>
                            </div>
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
