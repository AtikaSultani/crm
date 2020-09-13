@extends('layouts.master')
@section('title','Dashboard')
@section('page-title','Dashboard')
@section('content')
    <div style="weight:50px">
        {!! $province->container() !!}
    </div>

    <div>
        <div>
            {!! $category->container() !!}
        </div>

        <div>
            {!! $gender->container() !!}
        </div>
    </div>

    <div>
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
