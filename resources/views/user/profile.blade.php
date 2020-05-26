@extends('layouts.master')
@section('title', 'Complaint Detail')
@section('page-title')
    <h>User Profile</h>
@endsection
@section('content')

<div style="margin-left:200px;">
          <br>
          <br>
          <label> <span style="font-weight:bold;">User Name</span> : {{$user->name}}</label>
          <br>
          <label> <span style="font-weight:bold;">Email Address</span> : {{$user->email}}</label>
          <br>
          <div class="flex justify my-5">
              <button type="submit"
                      class="text-white bg-blue-lighter hover:bg-blue text-base hover:shadow-lg focus:outline-none px-3 py-1 rounded-sm">
                  Reset Password
              </button>
          </div>


    </div>
@endsection

@section('include')
    @include('helper.delete')
@stop
