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
                              <label class="control-label">Program Name</label>
                              <input type="text" class="form-control" name="program_name" value="">
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
                  <a href="{{ url('/program/create') }}" style="color:#FFF5EE;text:bold;"  class="btn green" onclick="" title="create new project">
                      <i class="fa fa-plus"></i>   <strong>Create new Program</strong>
                  </a>
                </div>
            </header>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <th>No</th>
                  <th>Program Name</th>
                  <th>StartDate</th>
                  <th>EndDate</th>
                  <th>Actions</th>

                </thead>
                @foreach($data as $key)
                <tr>
                  <td>{{$loop->iteration }}</td>
                  <td>{{$key->program_name}}</td>
                  <td>{{$key->start_date}}</td>
                  <td>{{$key->end_date}}</td>
                  <td class="actions" style="white-space:nowrap">
                    <a class="btn btn-primary badge-pill" style="width:65px;border-radius:20px;font-size:12px;" href="{{ url('/programs/'.$key->id.'/edit') }}">EDIT</a>
                  </td>
                  <td>
                    <form action="{{ url('/ProgramController/'.$key->id) }}" method="post">
                        @csrf
                        @method('DELETE')

                      <button class="btn btn-danger badge-pill" style="width:75px;border-radius:20px;font-size:12px;" onclick="return confirm('Are you sure to delete this?')" data-confirm="Are you sure to delete this item?" type="submit">DELETE</button>
                    </form>
                  </td>
                </tr>
                @endforeach
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
