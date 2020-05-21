@extends('layouts.master')
@section('page-title')
    Users List
@endsection
@section('content')
    <div class="my-10">
        <table>
            <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Edit</th>
            <th>Delete</th>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>
                        {{ $user->id }}
                    </td>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>
                        @foreach($user->roles as $role)
                            {{ $role->name }}
                        @endforeach

                        <a href="" class="text-blue underline" onclick="assignRole({{ $user->id }}, event)">
                            @if($user->roles->count() > 0)
                                Change Role
                            @else
                                Assign Role
                            @endif
                        </a>
                    </td>
                    <td class="actions" style="white-space:nowrap">
                      <button type="button" class="bg-white hover:bg-grey-lightest text-grey-darkest font-semibold py-2 px-4 border border-grey-light rounded shadow" name="button"><a href="{{ url('/users/'.$user->id.'/edit') }}">Edit</a></button>

                    </td>
                    <td>
                        <button type="button" class="bg-white hover:bg-grey-lightest text-grey-darkest font-semibold py-2 px-4 border border-grey-light rounded shadow" name="button" onclick="deleteResource({{ $user->id }}, '/users', event)">Delete</button>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

        <div>
            {{ $users->links()}}
        </div>
    </div>

@endsection
@section('include')
    @include('helper.delete')
@stop


@section('include')
    {{-- Assing Role Modal --}}
    <div class="fixed pin bg-modal h-screen w-screen invisible modal" id="assign-role-modal">
        <div class="relative bg-white max-w-xl mx-auto mt-16 rounded  py-4 px-6 shadow-2xl" id="assign-role-body"></div>
    </div>
@stop
