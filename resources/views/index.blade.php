@extends('master')

@section('title')
    CRM Registration

@stop

@section('main_content')
    <div class="row">

        <div class="col-lg-12">
            <h3 class="page-header"><i class=""></i>Hotline - Beneficiary Feedback and Complaint Tracking Database</h3>
            <ol class="breadcrumb" >
                <li><i class="fa fa-home"></i><a href="/crm">Home</a></li>
                <li><i class="fa fa-plus"></i>CRM List</li>
                <div style="float:right;" >
                    <i class="fa fa-calendar"></i>
                    <span><?php echo date('l j F Y'); ?></span>
                </div>
            </ol>
      </div>
    <div>
      <div class="col-sm-12" style="margin-bottom: 8%;">
                    <form method="post" id="search">
                        <div class="col-sm-2">
                            <label class="control-label">Date From: </label>
                             <input type="date" class="form-control" name="received_date" id="received_date" placeholder="date_from">
                        </div>
                        <div class="col-sm-2">
                            <label class="control-label">Date to: </label>
                             <input type="date" class="form-control" name="received_date" id="received_date" placeholder="date_to">
                        </div>
                        <div class="col-sm-2">
                              <label class="control-label">Quarter</label>
                              <select class="form-control" name="gender">
                                  <option value="">All</option>
                                  <option value="First">First</option>
                                  <option value="Second">Second</option>
                                  <option value="Third">Third</option>
                                  <option value="Fourth">Fourth</option>
                              </select>
                          </div>

                        <div class="col-sm-2">
                            <label id="filter-label" class="control-label">Status</label>
                            <select class="form-control" name="state" id="state">
                                <option value="">All</option>
                                      <option value="1">Registered</option>
                                      <option value="2">Under Investigatio</option>
                                     <option value="3">Solved</option>

                            </select>
                        </div>
					          <div class="col-sm-2">
                            <div class="form-group" style="margin-bottom:0">
                                <a href="javascript:;" onclick="do_filter_records('finance/students/filterStudent','stForm','student_table')" class="btn btn-primary badge-pill" style="margin-top:25px;">
                                    <i class="fa fa-search"></i>Search
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
          <div class="col-lg-12">
            <header class="panel-heading">
                <strong>
                    CRM List
                </strong>
                <div  style="float:right;text-align:right;width:150px;margin-bottom:-10px;margin-top:-5px;background-color:#DAA520;color:#FFF5EE;">
                  <a style="color:#FFF5EE;text:bold;"  class="btn green" onclick="" title="Print as Excel">
                      <i class="fa fa-print"></i>   <strong>Print as Excell</strong>
                  </a>
                </div>
            </header>



              <div class="table-responsive">
                <table class="table table-bordered">
                <thead>
                            <tr>
                              <th>#</th>
                              <th>CallerName</th>
                              <th>PhonNo</th>
                              <th>Gender</th>
                              <th>ReceivedDate</th>
                              <th>Status</th>
                              <th>Quarter</th>
                              <th>ReceivedBy</th>
                              <th>who shared</th>
                              <th>CloseDate</th>
                              <th>Description</th>
                              <th>Program Name</th>
                              <th>Project Name</th>
                              <th>ReferredTo</th>
                              <th>BroadCategory</th>
                              <th>SpecificCategory</th>
                              <th>Province</th>
                              <th>District</th>
                              <th colspan="3" style="text-align:center;">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($data as $key)
                            <tr>
                              <td>{{$loop->iteration }}</td>
                              <td>{{$key->caller_name}}</td>
                              <td>{{$key->tel_no_received}}</td>
                              <td>{{$key->gender}}</td>
                              <td>{{$key->received_date}}</td>
                              <td>{{$key->status}}</td>
                              <td>{{$key->quarter}}</td>
                              <td>{{$key->received_by}}</td>
                              <td>{{$key->person_who_shared_action}}</td>
                              <td>{{$key->close_date}}</td>
                              <td>{{$key->description}}</td>
                              <td>{{$key->program_name}}</td>
                              <td>{{$key->project_name}}</td>
                              <td>{{$key->referred_program_name}}</td>
                              <td>{{$key->broad_cat_name}}</td>
                              <td>{{$key->specifice_cat_name}}</td>
                              <td>{{$key->province_name}}</td>
                              <td>{{$key->district_name}}</td>
                              <td class="actions" style="white-space:nowrap">
                                <a class="btn btn-primary badge-pill" style="width:65px;border-radius:20px;font-size:12px;" href="{{action('Home@edit',$key->complaints_id)}}">EDIT</a>
                              </td>
                              <td>
                                <form action="{{ url('/home/'.$key->complaints_id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                  <button class="btn btn-danger badge-pill" style="width:75px;border-radius:20px;font-size:12px;" onclick="return confirm('Are you sure to delete this?')" data-confirm="Are you sure to delete this item?" type="submit">DELETE</button>
                                </form>
                              </td>
                              <td>
                                <a href="#" class="btn btn-primary badge-pill" style="width:65px;border-radius:20px;height:30px;"><i class="fa fa-upload"></i></a>
                              </td>
                            </tr>
                              @endforeach

                          </tbody>
                        </table>

</div>
</div>
</div>
  <script type="text/javascript">
      $(document).ready(function () {
      $('#xscroll').DataTable({
      "scrollX": true,

      });
      $('.dataTables_length').addClass('bs-select');
      });

  </script>
  <!-- container section end -->


@endsection
