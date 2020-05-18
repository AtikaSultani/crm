
@extends('layouts.master')
@section('page-title')
<h>Projects List</h>
@endsection
@section('content')
<div class="flex items-center justify-end my-3">
    <a class="text-sm bg-blue text-white px-2 py-1 rounded-sm focus:outline-none" href="{{ url('/projects/create') }}">
        Add New
    </a>

</div>
            <div>
                <table>
                    <thead>
                    <th>No</th>
                    <th>ProjectName</th>
                    <th>ProjectCode</th>
                    <th>NGOname</th>
                    <th>StartDate</th>
                    <th>EndDate</th>
                    <th>Donors</th>
                    <th>Provinces</th>
                    </thead>
                    @foreach($projects as $project)
                        <tr>
                            <td>{{$project->id }}</td>
                            <td class="text-blue cursor-pointer"><a href="{{ url('/projects/'.$project->id) }}">{{$project->project_name}}</a></td>
                            <td>{{$project->project_code}}</td>
                            <td>{{$project->NGO_name}}</td>
                            <td>{{$project->start_date}}</td>
                            <td>{{$project->end_date}}</td>
                            <td>{{$project->donors}}</td>
                            <td>{{$project->province->province_name}}|{{$project->district->district_name}}</td>

                        </tr>
                    @endforeach
                </table>
                  {{ $projects->links() }}
            </div>


@endsection
