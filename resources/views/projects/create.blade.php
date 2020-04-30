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
                                                    <label class="control-label col-md-4"> ProjectName <span  >*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="text"  class="form-control " name="project_name"/>
                                                        @error('project_name')
                                                        <div style="color:red;">
                                                          {{$message}}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-4"> NGO Name <span  >*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="NGO_name"/>
                                                        @error('NGO_name')
                                                        <div style="color:red;">
                                                          {{$message}}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                  <div class="form-group">
                                                      <label class="control-label col-md-4"> StartDate <span >*</span>
                                                      </label>
                                                      <div class="col-md-6">
                                                          <input type="date" id="picker" class="form-control" name="start_date" />
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
                                                          <input type="date" id="picker" class="form-control" name="end_date"/>
                                                          @error('end_date')
                                                          <div style="color:red;">
                                                            {{$message}}
                                                          </div>
                                                          @enderror
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="control-label col-md-4"> Donors <span  >*</span>
                                                      </label>
                                                      <div class="col-md-6">
                                                          <input type="text" class="form-control" name="donors"/>
                                                          @error('donors')
                                                          <div style="color:red;">
                                                            {{$message}}
                                                          </div>
                                                          @enderror
                                                      </div>
                                                  </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"> Activities<span >*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                      <textarea type="text"  class="form-control " name="activities" >
                                                      </textarea>
                                                      @error('activities')
                                                      <div style="color:red;">
                                                        {{$message}}
                                                      </div>
                                                      @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-4">
                                                        DirectBeneficiaries

                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="text"  class="form-control " name="direct_beneficiaries" />
                                                        @error('direct_beneficiaries')
                                                        <div style="color:red;">
                                                          {{$message}}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-6" style="direction: ltr">


                                              <div class="form-group">
                                                  <label class="control-label col-md-4">
                                                      IndirectBeneficiaries

                                                  </label>
                                                  <div class="col-md-6">
                                                      <input type="text"  class="form-control " name="indirect_beneficiaries"/>
                                                      @error('indirect_beneficiaries')
                                                      <div style="color:red;">
                                                        {{$message}}
                                                      </div>
                                                      @enderror
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-md-4">OnBudjet
                                                  </label>
                                                  <div class="col-md-6">
                                                      <input type="text" class="form-control" name="on_budjet"/>

                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-md-4">OffBudjet
                                                  </label>
                                                  <div class="col-md-6">
                                                      <input type="text" class="form-control" name="off_budjet"/>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-md-4">Budjet 
                                                  </label>
                                                  <div class="col-md-6">
                                                      <input type="text" class="form-control" name="budjet"/>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-md-4">Province <span >*
                                                 </span>
                                                  </label>
                                                  <div class="col-md-6">
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
                                              <div class="form-group">
                                                  <label class="control-label col-md-4">District <span  >*
                                               </span>
                                                  </label>
                                                  <div class="col-md-6">
                                                      <select name="district" id="district" class="form-control">
                                                          <option value="">Please Select...</option>
                                                              <option value=""></option>>
                                                      </select>
                                                      @error('district')
                                                      <div style="color:red;">
                                                        {{$message}}
                                                      </div>
                                                      @enderror
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Project Manager <span  >*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="project_manager"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Program name
                                                    </label>
                                                    <div class="col-md-6">
                                                      <select name="program_name" id="specific_category" class="form-control"   >
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
