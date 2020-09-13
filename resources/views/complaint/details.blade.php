@extends('layouts.master')
@section('title', 'Complaint Detail')
@section('page-title','Complaint Detail')
@section('content')

    <div class="flex justify-end items-center py-2">
        <a class="text-blue underline" href="{{ url('/complaints/'.$complaint->id.'/edit') }}">Edit</a>
        <a class="bg-red-darker px-2 text-sm cursor-pointer py-px text-white rounded-sm mx-2"
           onclick="deleteResource({{ $complaint->id }}, 'complaints', event)">Delete
        </a>
    </div>

    <p class="pb-3 text-lg font-semibold text-gray-600">Caller information</p>
    <div class="w-full bg-gray-100 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 p-5 rounded-sm gap-5">

        <div class="info">
            <p>Caller Name</p>
            <p>{{ $complaint->caller_name }}</p>
        </div>

        <div class="info">
            <p>Phone Number Received</p>
            <p>{{ $complaint->tel_no_received }}</p>
        </div>

        <div class="info">
            <p>Gender</p>
            <p>{{ $complaint->gender }}</p>
        </div>

        <div class="info">
            <p>Received Date</p>
            <p>{{ $complaint->received_date }}</p>
        </div>

        <div class="info">
            <p>Received By</p>
            <p>{{ $complaint->user->name }}</p>
        </div>

        <div class="info">
            <p>Province</p>
            <p>{{ $complaint->province->province_name }}</p>
        </div>

        <div class="info">
            <p>District</p>
            <p>{{ $complaint->district->district_name }}</p>
        </div>

        <div class="info">
            <p>Village</p>
            <p>{{ $complaint->village }}</p>
        </div>

    </div>


    <p class="pb-3 text-lg font-semibold text-gray-600 mt-10">Category & action</p>
    <div class="w-full bg-gray-100 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 p-5 rounded-sm gap-5">

        <div class="info">
            <p>Status</p>
            <p>{{ $complaint->status }}</p>
        </div>

        <div class="info">
            <p>Quarter</p>
            <p>{{ $complaint->quarter }}</p>
        </div>

        <div class="info">
            <p>Close Date</p>
            <p>{{ $complaint->close_date }}</p>
        </div>

        <div class="info">
            <p>Project</p>
            <p>{{ $complaint->project->project_name }}</p>
        </div>

        <div class="info">
            <p>Program</p>
            <p>{{ $complaint->program->program_name }}</p>
        </div>

        <div class="info">
            <p>Broad Category</p>
            <p>{{ $complaint->broadCategory->category_name }}</p>
        </div>

        <div class="info">
            <p>Specific Category</p>
            <p>{{ $complaint->specificCategory->category_name }}</p>
        </div>

        <div class="info">
            <p>Refereed To</p>
            <p>{{ $complaint->referred_to }}</p>
        </div>

        <div class="info">
            <p>Who action shared</p>
            <p>{{ $complaint->person_who_shared_action ?: 'No one yet' }}</p>
        </div>

        <div class="info">
            <p>Attachments</p>
            <p>
                @if($complaint->beneficiary_file)
                    <a class="text-blue" href="{{ url('download?file='.$complaint->beneficiary_file) }}">Download</a>
                @else
                    No Attachment
                @endif
            </p>
        </div>

        <div class="info">
            <p>Description</p>
            <p>{{ $complaint->description ?: 'No description' }}</p>
        </div>
    </div>

@endsection

@section('include')
    @include('helper.delete')
@stop
