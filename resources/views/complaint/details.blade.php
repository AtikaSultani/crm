@extends('layouts.master')
@section('title', 'Complaint Detail')
@section('page-title')
    <h>Complaint Detail</h>
@endsection
@section('content')
    <span>
  <button style="margin-left:20px;padding-top:3px;padding-bottom:3px;background-color:#B0C4DE;color:#fff;"
          class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
    <a href="{{ url('/complaints/'.$complaint->id.'/edit') }}">Edit</a>
   </button>

        <button style="background-color:#FF0000;padding-top:4px;padding-bottom: 4px; font-size:15px"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                onclick="deleteResource({{ $complaint->id }}, 'complaints', event)">Delete</button>
</span>

    <div style="margin-top:20px;" class="grid grid-cols-2 divide-x divide-gray-600">
        <div class="text-center">
            <label> <span style="font-weight:bold;">Caller Name</span> : {{$complaint->caller_name}}</label>
            <br>
            <br>
            <label> <span style="font-weight:bold;">Phone Number Recived</span> : {{$complaint->tel_no_received}}
            </label>
            <br>
            <br>
            <label> <span style="font-weight:bold;">Gender</span> : {{$complaint->gender}}</label>
            <br>
            <br>
            <label> <span style="font-weight:bold;">Recieved Date</span> : {{$complaint->received_date}}</label>
            <br>
            <br>
            <label> <span style="font-weight:bold;">Status</span> : {{$complaint->status}}</label>
            <br>
            <br>
            <label> <span style="font-weight:bold;">Term</span> : {{$complaint->term}}</label>
            <br>
            <br>
            <label> <span style="font-weight:bold;">Referred To</span> : {{$complaint->referred_to}}</label>
            <br>
            <br>
            <label> <span style="font-weight:bold;">Broad Category</span> : {{$complaint->broadCategory->category_name}}
            </label>
            <br>
            <br>
            <label> <span style="font-weight:bold;">Specific Category</span>
                : {{$complaint->specificCategory->category_name}}</label>
        </div>
        <div class="text-center">
            <label> <span style="font-weight:bold;">Person Who Shared The Action</span>
                : {{$complaint->person_who_shared_action}}</label>
            <br>
            <br>
            <label> <span style="font-weight:bold;">Close Date</span> : {{$complaint->close_date}}</label>
            <br>
            <br>
            <label> <span style="font-weight:bold;">Province Name</span> : {{$complaint->province->province_name}}
            </label>
            <br>
            <br>
            <label> <span style="font-weight:bold;">District Name</span> : {{$complaint->district->district_name}}
            </label>
            <br>
            <br>
            <label> <span style="font-weight:bold;">Project Name</span> : {{$complaint->project->project_name}}</label>
            <br>
            <label> <span style="font-weight:bold;">Project Code</span> : {{$complaint->project->project_code}}</label>
            <br>
            <br>
            <label> <span style="font-weight:bold;">Program Name</span> : {{$complaint->program->program_name}}</label>
            <br>
            <br>
            <label> <span style="font-weight:bold;">Call Recived By</span> : {{ Auth::user()->name }}</label>
            <br>
            <br>
            @if($complaint->description != "")
                <label> <span style="font-weight:bold;">Description</span> : {{$complaint->description}}</label>
            @endif
        </div>

    </div>
@endsection

@section('include')
    @include('helper.delete')
@stop
