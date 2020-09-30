@extends('layouts.master')
@section('title','Dashboard')
@section('page-title','Dashboard')
@section('content')
<form action="{{ url('complaints') }}">
    <div class="flex items-center">
        <div class="w-full md:w-1/2 lg:w-1/4 px-2">
            <label for="province">Province</label>
            <select name="province" id="province">
                <option value="">All Provinces</option>

            </select>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/4 px-2">
            <label for="year">Year</label>
            <select name="year" id="year">
                <option value="">All</option>
                <!-- <option value="Registered" @if (request('status') == 'Registered')selected @endif>Registered -->
                </option>
                <!-- <option value="Under Investigation"
                        @if (request('status') == 'Under Investigation')selected @endif>
                    Under investigation
                </option> -->
                <!-- <option value="Solved" @if (request('status') == 'Solved')selected @endif>Solved</option> -->
            </select>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/4 px-2">
            <label for="month">Month</label>
            <select name="month" id="month">
                <option value="">All</option>

            </select>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/4 px-2">
            <label for="quarter">Quarter</label>
            <select name="quarter" id="quarter">
                <option value="">All</option>
                <option value="First Quarter" @if (request('quarter') == 'First Quarter')selected @endif>First Quarter</option>
                <option value="Second Quarter" @if (request('quarter') == 'Second Quarter')selected @endif>Second Quarter</option>
                <option value="Third Quarter" @if (request('quarter') == 'Third Quarter')selected @endif>Third Quarter</option>
                <option value="Fourth Quarter" @if (request('quarter') == 'Fourth Quarter')selected @endif>Fourth Quarter</option>

            </select>
        </div>
    </div>

    <div class="flex justify-end mt-2 px-2">
        <button class="text-sm text-red-darker px-3 focus:outline-none">
            <a href="{{ url('complaints') }}">Cancel</a>
        </button>
        <button class="text-sm bg-blue text-white rounded px-2 py-1" type="submit">Apply filter</button>
    </div>
</form>

<div class="w-full max-w-lg">

  <div class="flex flex-wrap -mx-3 mb-6 bg-gray-100">
   <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 ">
           {!! $province->container() !!}
   </div>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          {!! $category->container() !!}
    </div>
    </div>
 <div class="flex mb-4 bg-gray-100 grid grid-cols-2 md:grid-cols-3  p-5 rounded-sm gap-5">
      <div class="mb-4">
           {!! $gender->container() !!}
      </div>
      <div class="mb-4">
           {!! $project->container() !!}
    </div>
      <div class="mb-4">

    </div>
    </div>




@stop


@section('page-level-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    {!! $province->script() !!}
    {!! $category->script() !!}
    {!! $gender->script() !!}
    {!! $project->script() !!}
@stop
