@extends('layouts.master')
@section('page-title')
    <h>Projects List</h>
@endsection
@section('content')
    <div class="flex items-center justify-end my-3">
        <a class="text-sm bg-blue text-white px-2 py-1 rounded-sm focus:outline-none"
           href="{{ url('/projects/create') }}">
            Add New
        </a>

    </div>
    <div>
        <table>
            <thead>
            <th>No</th>
            <th>ProjectName</th>
            <th>ProjectCode</th>
            <th>PartnerName</th>
            <th>StartDate</th>
            <th>EndDate</th>
            <th>Donors</th>
            <th>Provinces</th>
            </thead>
            @foreach($projects as $project)
                <tr>
                    <td>{{$project->id }}</td>
                    <td class="text-blue cursor-pointer"><a
                            href="{{ url('/projects/'.$project->id) }}">{{$project->project_name}}</a></td>
                    <td>{{$project->project_code}}</td>
                    <td>{{$project->partner_name}}</td>
                    <td>{{$project->start_date}}</td>
                    <td>{{$project->end_date}}</td>
                    <td>{{$project->donors}}</td>
                    <td>
                        @forelse($project->provinces as $province)
                            <span class="m-1 bg-gray-200 rounded-full py-1 px-2">{{$province->province_name}}</span>
                        @empty
                            <span class="text-gray-400">No Province</span>
                        @endforelse
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $projects->links() }}
    </div>


@endsection
