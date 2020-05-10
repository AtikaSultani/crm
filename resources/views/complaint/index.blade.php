@extends('layouts.master')
@section('page-title')
<h>COMPLAINTS LIST</h>
@endsection
@section('content')

    <div class="flex items-center justify-end my-3">
        <a class="text-sm bg-blue text-white px-2 py-1 rounded-sm focus:outline-none" href="{{ url('/complaints/create') }}">
            Add New
        </a>

        <button class="text-sm mx-2 bg-yellow text-blue px-2 py-1 rounded-sm focus:outline-none">
            <a href="{{ url('/complaint-export') }}">Export to Excel</a>
          </button>
    </div>

    <div>
        <table>
            <thead>
            <tr>
                <th>Id</th>
                <th>Caller Name</th>
                <th>Status</th>
                <th>Quarter</th>
                <th>Province</th>
            </tr>
            </thead>
            <tbody>
            @foreach($complaints as $complaint)
                <tr>
                    <td>{{ $complaint->id }}</td>
                    <td>{{ $complaint->caller_name }}</td>
                    <td>{{ $complaint->status }}</td>
                    <td>{{ $complaint->quarter }}</td>
                    <td>{{ $complaint->province->province_name }} | {{ $complaint->district->district_name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $complaints->links() }}
    </div>

@endsection
