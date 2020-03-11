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


            <header class="panel-heading">
                <strong>
                    CRM List
                </strong>
            </header>


            <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">CallerName</th>
        <th scope="col">PhonNo</th>
        <th scope="col">Gender</th>
        <th scope="col">ReceivedDate</th>
        <th scope="col">Status</th>
        <th scope="col">Quarter</th>
        <th scope="col">ReferredTo</th>
        <th scope="col">BroadCategory</th>
        <th scope="col">SpecificCategory</th>
        <th scope="col">ReceivedBy</th>
        <th scope="col">who shared</th>
        <th scope="col">CloseDate</th>
        <th scope="col">Description</th>
        <th scope="col">Province</th>
        <th scope="col">District</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <th scope="row">2</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
    
    </tbody>
  </table>
</div>
        <!-- <table class="table table-striped table-hover table-bordered resl">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">CallerName</th>
      <th scope="col">PhonNo</th>
      <th scope="col">Gender</th>
      <th scope="col">ReceivedDate</th>
      <th scope="col">Status</th>
      <th scope="col">Quarter</th>
      <th scope="col">ReferredTo</th>
      <th scope="col">BroadCategory</th>
      <th scope="col">SpecificCategory</th>
      <th scope="col">ReceivedBy</th>
      <th scope="col">who shared</th>
      <th scope="col">CloseDate</th>
      <th scope="col">Description</th>
      <th scope="col">Province</th>
      <th scope="col">District</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>jlkjlk</td>
      <td>jlkjlk</td>
      <td>dfdf</td>
      <td>jlkjlk</td>
      <td>jlkjlk</td>
      <td>jlkjlk</td>
      <td>jlkjlk</td>
      <td>jlkjlk</td>
      <td>jlkjlk</td>
      <td>jlkjlk</td>
      <td>jlkjlk</td>
      <td>jlkjlk</td>
      <td>jlkjlk</td>
      <td>jlkjlk</td>
      <td>jlkjlk</td>
      <td>jlkjlk</td>
      <td>
          <div class="btn-group">
              <a  href="#"><i class="fa fa-edit"></i></a>
              <a  href="#"><i class="fa fa-trash-o"></i></a>
          </div>
      </td>
    </tr>
  </tbody>
</table> -->


</div>
        <!-- container section end -->


@endsection
