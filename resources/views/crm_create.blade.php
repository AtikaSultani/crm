@extends('master')

@section('main_content')

<form action="" class="form-horizontal" id=""  method="POST" enctype="multipart/form-data" >
                       <input type="hidden" name="student_type" value="3">
                           <div class="form-wizard">
                             <div class="form-body">

                              <div class="tab-content" id=''>

                                  <div class="tab-pane active" id="">
                                      <div class="row reg-content-wrapper">
                                              <h3 class="block" style="padding: 10px 40px;margin-top: 5px"></h3>

                                          <div class="col-sm-6 reg-right-content-wrapper">
                                          <div class="form-group">
                                                  <label class="control-label col-md-4"> CallerName <span class="required">*</span>
                                                  </label>
                                                  <div class="col-md-6">
                                                      <input type="text" min="1" class="form-control " name="caller_name" id="" required="required" onblur=""/>
                                                      <span id="base_number_field_error" style="color:#f13e64"></span>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <label class="control-label col-md-4"> NumberRecived <span class="required">*</span>
                                                  </label>
                                                  <div class="col-md-6">
                                                      <input type="number" class="form-control" name="number_recived" required="required"/>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-md-4">Gender
                                                  </label>
                                                  <div class="col-md-6">
                                                      <select name="gender" id="gender" class="form-control">
                                                        <option>Please select</option>
                                                          <option value="1">Female</option>
                                                          <option value="2">Male</option>
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-md-4"> Recived Date <span class="required">*</span>
                                                  </label>
                                                  <div class="col-md-6">
                                                      <input type="text" id="picker" class="form-control" name="number_recived" required="required"/>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-md-4">Status
                                                  </label>
                                                  <div class="col-md-6">
                                                      <select name="gender" id="gender" class="form-control">
                                                        <option>Please select</option>
                                                          <option value="1">Registered</option>
                                                          <option value="2">Under investigation</option>
                                                          <option value="3">Solved</option>
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-md-4">Referred To
                                                  </label>
                                                  <div class="col-md-6">
                                                      <select name="gender" id="gender" class="form-control">
                                                        <option>Please select</option>
                                                          <option value="1">Officer</option>
                                                          <option value="2">PM</option>
                                                          <option value="3">Partner</option>
                                                          <option value="4">DCD/CD</option>
                                                      </select>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-sm-6" style="direction: ltr">

                                            <div class="form-group">
                                                <label class="control-label col-md-4">BroadCategory
                                                </label>
                                                <div class="col-md-6">
                                                    <select name="broad_cat" id="gender" class="form-control">
                                                      <option>Please select</option>
                                                        <option value=""></option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Specific Category
                                                </label>
                                                <div class="col-md-6">
                                                    <select name="specific_cat" id="gender" class="form-control">
                                                      <option>Please select</option>
                                                        <option value=""></option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <label class="control-label col-md-4"> Received By <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="text" min="1" class="form-control " name="received_by" id="" required="required" onblur=""/>
                                                        <span id="base_number_field_error" style="color:#f13e64"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                        <label class="control-label col-md-4">
                                                          Name of the Person who shared
                                                          the action taken
                                                          with the caller
                                                           <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6">
                                                            <input type="text" min="1" class="form-control " name="person_who_shared_action" id="" required="required" onblur=""/>
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
                                                            <label class="control-label col-md-4"> <span class="required">*</span>Description of action taken
                                                            </label>
                                                            <div class="col-md-6">
                                                                <textarea type="text" min="1" class="form-control " name="received_by" id="" required="required" onblur="">
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
                                                              <select name="org_province" id="org_province" class="form-control" required>
                                                                <option value="">Please Select...</option>
                                                                 <option value=" "></option>
                                                                    </select>
                                                            </div>
                                                     </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <div class="form-group">
                                                      <label class="control-label col-md-12" style="text-align:left;">
                                                          District <span class="required">
                                                         </span>
                                                      </label>
                                                      <div class="col-md-12">
                                                        <select name="district" id="org_district" class="form-control">
                                                          <option value="">Please Select...</option>
                                                            </select>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                      <label class="control-label col-md-12" style="text-align:left;">Village/Area <span class="required">
                                                        </span>
                                                      </label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="village" id="village" class="form-control">
                                                    </div>
                                                  </div>
                                                </div>
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

                        @endsection
