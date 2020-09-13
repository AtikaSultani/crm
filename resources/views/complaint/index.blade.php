@extends('layouts.master')
@section('page-title', 'Complaints List')
@section('content')

    <div class="flex items-center justify-between my-3">

        <div>
            @if(!request()->query())
            <button
                onclick="showFilter()"
                id="complaint-filter-button"
                class="text-sm bg-white mx-2 border hover:shadow flex items-center text-blue  px-2 py-1 rounded-sm focus:outline-none">
                <img src="{{ asset('/images/filter.png') }}" class="h-5 px-1" alt=""> Filter
            </button>
            @endif
        </div>

        <div>
            <a href="{{ url('/complaints/create') }}">
                <button class="text-sm bg-blue text-white px-2 py-1 rounded-sm focus:outline-none">
                    Add new
                </button>
            </a>

            <button class="text-sm mx-2 bg-yellow text-blue px-2 py-1 rounded-sm focus:outline-none"
                    onclick="exportComplaint()">
                Export to Excel
            </button>
        </div>

    </div>

    {{-- complaint filter --}}
    <div class=" flex-wrap p-2 border shadow-lg  bg-white my-3 rounded py-3" @if(!request()->query()) hidden
         @endif id="complaint-filter">
        <form action="{{ url('complaints') }}">
            <div class="flex items-center">
                <div class="w-full md:w-1/2 lg:w-1/4 px-2">
                    <label for="province">Province</label>
                    <select name="province" id="province">
                        <option value="">All Provinces</option>
                        @foreach($provinces as $province)
                            <option @if (request('province') == $province->id)selected
                                    @endif value="{{ $province->id }}">{{ $province->province_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/4 px-2">
                    <label for="status">Status</label>
                    <select name="status" id="status">
                        <option value="">All Status</option>
                        <option value="Registered" @if (request('status') == 'Registered')selected @endif>Registered
                        </option>
                        <option value="Under Investigation"
                                @if (request('status') == 'Under Investigation')selected @endif>
                            Under investigation
                        </option>
                        <option value="Solved" @if (request('status') == 'Solved')selected @endif>Solved</option>
                    </select>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/4 px-2">
                    <label for="term">Term</label>
                    <select name="term" id="term">
                        <option value="">All Terms</option>
                        <option value="T1" @if (request('term') == 'T1')selected @endif>T1</option>
                        <option value="T2" @if (request('term') == 'T2')selected @endif>T2</option>
                        <option value="T3" @if (request('term') == 'T3')selected @endif>T3</option>
                    </select>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/4 px-2">
                    <label for="caller-name">Caller Name</label>
                    <input type="text" id="caller-name" name="caller_name" value="{{ request('caller_name') }}">
                </div>
            </div>

            <div class="flex justify-end mt-2 px-2">
                <button class="text-sm text-red-darker px-3 focus:outline-none">
                    <a href="{{ url('complaints') }}">Cancel</a>
                </button>
                <button class="text-sm bg-blue text-white rounded px-2 py-1" type="submit">Apply filter</button>
            </div>
        </form>

    </div>

    <div>
        <table>
            <thead>
            <tr>
                <th>Id</th>
                <th>Caller Name</th>
                <th>Status</th>
                <th>Term</th>
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
                    <td>{{ $complaint->term }}</td>
                    <td>{{ $complaint->province->province_name }} | {{ $complaint->district->district_name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $complaints->appends($_GET)->links() }}
    </div>

@endsection

@section('include')
    @include('complaint.partial.export-modal')
@stop
