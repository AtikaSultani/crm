@extends('layouts.master')
@section('page-title')
    <h>Programs List</h>
@endsection
@section('content')

    <div class="flex items-center justify-end my-3">
        <a class="text-sm bg-blue text-white px-2 py-1 rounded-sm focus:outline-none cursor-pointer"
           onclick="createProgram()">
            Add New
        </a>
    </div>

    <div>
        <table>
            <thead>
            <tr>
                <th>No</th>
                <th>Program Name</th>
                <th>StartDate</th>
                <th>EndDate</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($programs as $program)
                <tr>
                    <td>{{$program->id }}</td>
                    <td>{{$program->program_name}}</td>
                    <td>{{$program->start_date}}</td>
                    <td>{{$program->end_date}}</td>
                    <td class="actions" style="white-space:nowrap">
                        <button class="text-red-darker px-2 py-px float-right focus:outline-none"
                                onclick="deleteResource({{$program->id}},'programs', event)">Delete
                        </button>
                        <a onclick="editProgram({{ $program->id }}, event)"
                           class="underline cursor-pointer text-blue float-right mx-4">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $programs->links() }}
    </div>

@endsection
@section('include')
    @include('helper.delete')
    @include('programs.modal')
@stop

@section('page-level-js')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\ProgramRequest', '#create-program-form'); !!}
@stop