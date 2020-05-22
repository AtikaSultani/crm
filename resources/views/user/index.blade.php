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
            <th></th>
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
                    <td class="actions">
                        <button class="text-red-darker px-2 py-px float-right focus:outline-none"
                                onclick="deleteResource({{$user->id}},'users', event)">Delete
                        </button>
                        <a onclick="editUser({{ $user->id }}, event)"
                           class="underline cursor-pointer text-blue float-right mx-4">Edit</a>
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
    @include('user.partial.modal')
@stop
