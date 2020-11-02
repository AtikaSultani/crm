@extends('layouts.master')
@section('page-title', 'Complaints List')
@section('page-level-css')
    @livewireStyles
@stop
@section('content')
     <livewire:show-complaints />
@endsection

@section('include')
    @include('complaint.partial.export-modal')
@stop

@section('page-level-js')
    @livewireScripts
@stop
