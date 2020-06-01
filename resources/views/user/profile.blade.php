@extends('layouts.master')
@section('title', 'Complaint Detail')
@section('page-title','User Profile')
@section('content')

    <div class="flex flex-col items-center my-2">
        <p class="text-2xl font-semibold text-gray-600">{{ $user->name }}</p>
        <p class="text-base font-normal text-gray-500"> {{ $user->email }}</p>

        <div class="flex items-center justify-center my-3">
            <button class="text-white bg-blue px-2 py-1 rounded-sm mx-2 focus:outline-none"
                    onclick="editUser({{ $user->id }}, event)">Edit information
            </button>
            <button class="text-blue px-3 py-2 rounded-sm focus:outline-none" onclick="UserProfile()">Change Password
            </button>
        </div>
    </div>
@endsection

@section('page-level-js')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\ChangePasswordRequest', '#change-password-form'); !!}
@stop

@section('include')
    @include('user.partial.change-password-modal')
    @include('user.partial.modal')
@stop
