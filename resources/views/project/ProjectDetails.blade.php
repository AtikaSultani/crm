@extends('layouts.master')
@section('title', 'Project Detail')
@section('page-title')
<h>Project Detail</h>
@endsection


@section('content')

    <button type="button" name="button" style="margin-left:20px;padding-top:3px;padding-bottom:3px;background-color:#B0C4DE;color:#fff;" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
        <a href="{{ url('/projects/'.$data->id.'/edit') }}">Edit</a>
       </button>

      <!-- <form style="margin-top:-30px;" action="{{ url('/ProjectController/'.$data->id) }}" method="post">
           @csrf
             @method('DELETE')
           <button style="margin-left:100px;padding-top:3px;;padding-bottom:3px;background-color:#FF0000;color:#fff;" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" onclick="return confirm('Are you sure to delete this?')">
               Delete
             </button>
       </form> -->

  <div style="margin-top:20px;" class="grid grid-cols-2 divide-x divide-gray-600">
  <div class="text-center">
    <label > <span style="font-weight:bold;">Project Name</span> : {{$data->project_name }}</label>
    <br>
    <br>
    <label> <span style="font-weight:bold;">NGO Name</span> : {{$data->NGO_name}}</label>
    <br>
    <br>
    <label> <span style="font-weight:bold;">Start Date</span> : {{$data->start_date}}</label>
    <br>
    <br>
    <label> <span style="font-weight:bold;">End Date</span> : {{$data->end_date}}</label>
    <br>
    <br>
    <label> <span style="font-weight:bold;">Direct Beneficiaries</span> : {{$data->direct_beneficiaries}}</label>
    <br>
    <br>
    <label> <span style="font-weight:bold;">Indirect Beneficiaries</span> : {{$data->indirect_beneficiaries}}</label>
    <br>
    <br>
    <label> <span style="font-weight:bold;">On Budget Project</span> : {{$data->on_budget_project}}</label>
    <br>
    <br>
    <label> <span style="font-weight:bold;">Off Budget Project</span> : {{$data->off_budget_project}}</label>
  </div>
  <div   class="text-center">
    <label> <span style="font-weight:bold;">Budget</span> : {{$data->budget}}</label>
    <br>
    <br>
     <label> <span style="font-weight:bold;">Project Manager</span> : {{$data->project_manager}}</label>
    <br>
    <br>
     <label> <span style="font-weight:bold;">Province Name</span> : {{$data->province->province_name}}</label>
    <br>
    <br>
     <label> <span style="font-weight:bold;">District Name</span> : {{$data->district->district_name}}</label>
    <br>
    <br>
    <label> <span style="font-weight:bold;">Program Name</span> : {{$data->program->program_name}}</label>
    <br>
    <br>
    <label> <span style="font-weight:bold;">Activities</span> : {{$data->activities}}</label>
    <br>
    <br>
    <label> <span style="font-weight:bold;">Donors</span> : {{$data->donors}}</label>
  </div>

  </div>
@endsection
