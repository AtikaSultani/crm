@extends('layouts.master')
@section('title', 'Project Detail')
@section('page-title', 'Project Details')
@section('content')

    <div class="flex justify-end items-center py-2">
        <a class="text-blue underline" href="{{ url('/projects/'.$project->id.'/edit') }}">Edit</a>
        <a class="bg-red-darker px-2 text-sm cursor-pointer py-px text-white rounded-sm mx-2"
           onclick="deleteResource({{ $project->id }}, 'projects', event)">Delete
        </a>
    </div>

    <p class="pb-3 text-lg font-semibold text-gray-600">Basic information</p>
    <div class="w-full bg-gray-100 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 p-5 rounded-sm gap-5">

        <div class="info">
            <p>Project Name</p>
            <p>{{ $project->project_name }}</p>
        </div>

        <div class="info">
            <p>Project Code</p>
            <p>{{ $project->project_code }}</p>
        </div>

        <div class="info">
            <p>Partner name</p>
            <p>{{ $project->partner_name }}</p>
        </div>

        <div class="info">
            <p>Start Date</p>
            <p>{{ $project->start_date }}</p>
        </div>

        <div class="info">
            <p>End Date</p>
            <p>{{ $project->end_date }}</p>
        </div>

        <div class="info">
            <p>Direct Beneficiaries</p>
            <p>{{ $project->direct_beneficiaries }}</p>
        </div>

        <div class="info">
            <p>Indirect Beneficiaries</p>
            <p>{{ $project->indirect_beneficiaries }}</p>
        </div>


        <div class="info">
            <p>Total Budget </p>
            <p>{{ $project->total_budget }}</p>
        </div>

        <div class="info">
            <p> Project Manager </p>
            <p>{{ $project->project_manager }}</p>
        </div>

        <div class="info">
            <p>Province</p>
            @foreach($project->provinces as $province)
                <p>{{ $province }}</p>
            @endforeach
        </div>

        <div class="info">
            <p>District</p>
            @foreach($project->districts as $district)
                <p>{{ $district->district_name }}</p>
            @endforeach
        </div>

        <div class="info">
            <p>Program</p>
            <p>{{ $project->program->program_name }}</p>
        </div>

        <div class="info">
            <p>Activities</p>
            <p>{{ $project->activities }}</p>
        </div>

        <div class="info">
            <p>Donors</p>
            <p>{{ $project->donors }}</p>
        </div>
    </div>
@endsection

@section('include')
    @include('helper.delete', ['test' => 'I am fine'])
@stop
