@extends('layouts.master')
@section('page-title')
    {{ $role->name }} Permissions
@endsection
@section('content')
    <div class="my-10">
        <form action="{{ url('/roles/'.$role->id.'/sync-permissions') }}" method="post">
            @csrf
            <p>Permissions</p>
            <div class="grid grid-cols-4 col-gap-2">
                @foreach($permissions as $permission)
                    <div class="my-5">
                        <div class="pretty p-default p-round p-thick flex  items-center">
                            <input type="checkbox" name="permissions[]"
                                   value="{{ $permission->name }}"
                                   @if(in_array($permission->id, $role->permissions->pluck('id')->all())) checked
                                   @endif id="permission-{{$permission->id}}" value="{{ $permission->id }}"/>
                            <div class="state p-primary-o">
                                <label class="text-gray-800"
                                       for="permission-{{$permission->id}}">{{ $permission->name }}</label>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue text-white px-3 py-1 rounded-sm text-sm">Grant Permissions</button>
            </div>
        </form>

    </div>

@endsection


