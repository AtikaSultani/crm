@extends('layouts.master')
@section('page-title')
    Roles List
@endsection
@section('content')

    <div class="flex items-center justify-end my-3">
        {{-- Create role --}}
        <button class="text-sm bg-blue text-white px-2 py-1 rounded-sm focus:outline-none" onclick="createRole()">
            Add New
        </button>
    </div>

    <div class="my-2">
        <table>
            <thead>
            <th>Id</th>
            <th>Name</th>
            <td>Role Permissions</td>
            <td></td>
            </thead>
            <tbody>

            @foreach($roles as $role)
                <tr>
                    <td>
                        {{ $role->id }}
                    </td>
                    <td>
                        <a href="{{ url('/roles/'.$role->id) }}" class="text-blue">{{ $role->name }}</a>
                    </td>
                    <td>
                        <a href="{{ url('/roles/'.$role->id) }}" class="text-blue">Permissions</a>
                    </td>
                    <td>
                        <button class="bg-red-darker text-white rounded-sm px-2 py-px float-right"
                                onclick="deleteResource({{$role->id}},'/roles', event)">Delete
                        </button>
                        <a onclick="editRole({{ $role->id }}, event)"
                           class="underline cursor-pointer text-blue float-right mx-4">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div>
            {{ $roles->links()}}
        </div>
    </div>

@endsection

@section('include')
    @include('helper.delete')
    @include('user.role.modal')
@stop

@section('page-level-js')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\RoleRequest','#create-role-form') !!}
@stop