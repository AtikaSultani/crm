@extends('layouts.master')
@section('title','Dashboard')
@section('page-title','Dashboard')
@section('content')
    <div class="w-full">
        {!! $province->container() !!}
    </div>

    <div class="my-5 flex items-center">
        <div class="w-full mx-5">
            {!! $category->container() !!}
        </div>

        <div class="w-full mx-5">
            {!! $gender->container() !!}
        </div>
    </div>

    <div class="w-full my-10">
        {!! $project->container() !!}
    </div>

@stop


@section('page-level-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    {!! $province->script() !!}
    {!! $category->script() !!}
    {!! $gender->script() !!}
    {!! $project->script() !!}
@stop