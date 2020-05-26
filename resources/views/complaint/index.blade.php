@extends('layouts.master')
@section('page-title')
    <h>Complaints List</h>
@endsection
@section('content')

    <div class="flex items-center justify-end my-3">
        <a class="text-sm bg-blue text-white px-2 py-1 rounded-sm focus:outline-none"
           href="{{ url('/complaints/create') }}">
            Add New
        </a>

        <button class="text-sm mx-2 bg-yellow text-blue px-2 py-1 rounded-sm focus:outline-none"
                onclick="exportComplaint()">
            Export to Excel
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
                    <td class="text-blue cursor-pointer"><a
                                href="{{ url('/complaints/'.$complaint->id) }}">{{ $complaint->caller_name }}</a></td>
                    @if($complaint->status=='Under Investigation')
                    <td style="color:#FF0000;">
                      {{ $complaint->status }}
                    </td>
                    @else
                    <td>
                      {{ $complaint->status }}
                    </td>
                    @endif
                    <td>{{ $complaint->quarter }}</td>
                    <td>{{ $complaint->province->province_name }} | {{ $complaint->district->district_name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $complaints->links() }}
    </div>

@endsection

@section('include')
    @include('complaint.partial.export-modal')
@stop
