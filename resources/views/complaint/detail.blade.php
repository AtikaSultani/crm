@extends('layouts.master')
@section('title', 'Create Complaint')
@section('page-title')
<h>Details of Complaint</h>
@endsection
@section('content')

<button style="margin-left:20px;padding-top:3px;padding-bottom:3px;background-color:#B0C4DE;color:#fff;" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
  <a href="#">Edit</a>
 </button>

 <form style="margin-top:-30px;" action="{{url('/ComplaintController/'.$data->id) }}" method="post">
      @csrf
        @method('DELETE')
      <button style="margin-left:100px;padding-top:3px;;padding-bottom:3px;background-color:#FF0000;color:#fff;" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" onclick="return confirm('Are you sure to delete this?')">
          Delete
        </button>
  </form>


  <div style="margin-top:20px;" class="grid grid-cols-2 divide-x divide-gray-600">
  <div class="text-center">
    <label > <span style="font-weight:bold;">Caller Name</span> : {{$data->caller_name}}</label>
    <br>
    <br>
    <label> <span style="font-weight:bold;">Phone Number Recived</span> : {{$data->tel_no_received}}</label>
    <br>
    <br>
    <label> <span style="font-weight:bold;">Gender</span> : {{$data->gender}}</label>
    <br>
    <br>
    <label> <span style="font-weight:bold;">Recieved Date</span> : {{$data->received_date}}</label>
    <br>
    <br>
    <label> <span style="font-weight:bold;">Status</span> : {{$data->status}}</label>
    <br>
    <br>
    <label> <span style="font-weight:bold;">Quarter</span> : {{$data->quarter}}</label>
    <br>
    <br>
    <label> <span style="font-weight:bold;">Referred To</span> : {{$data->referred_to}}</label>
    <br>
    <br>
    <label> <span style="font-weight:bold;">Broad Category</span> : {{$data->broadCategory->category_name}}</label>
    <br>
    <br>
    <label> <span style="font-weight:bold;">Specific Category</span> : {{$data->specificCategory->category_name}}</label>
  </div>
  <div   class="text-center">
    <label> <span style="font-weight:bold;">Person Who Shared The Action</span> : {{$data->person_who_shared_action}}</label>
    <br>
    <br>
     <label> <span style="font-weight:bold;">Close Date</span> : {{$data->close_date}}</label>
    <br>
    <br>
     <label> <span style="font-weight:bold;">Province Name</span> : {{$data->province->province_name}}</label>
    <br>
    <br>
     <label> <span style="font-weight:bold;">District Name</span> : {{$data->district->district_name}}</label>
    <br>
    <br>
     <label> <span style="font-weight:bold;">Project Name</span> : {{$data->project->project_name}}</label>
    <br>
    <br>
     <label> <span style="font-weight:bold;">Program Name</span> : {{$data->program->program_name}}</label>
    <br>
    <br>
     <label> <span style="font-weight:bold;">Call Recived By</span> : {{ Auth::user()->name }}</label>
    <br>
    <br>
    @if($data->description != "")
     <label> <span style="font-weight:bold;">Description</span> : {{$data->description}}</label>
    @endif
  </div>

  </div>
@endsection
