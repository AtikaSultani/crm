@extends('layouts.master')
@section('page-title')
<h>Programs List</h>
@endsection
@section('content')



    <div class="flex items-center justify-end my-3">
        <a class="text-sm bg-blue text-white px-2 py-1 rounded-sm focus:outline-none" href="{{ url('/programs/create')}}">
            Add New
        </a>

    </div>

    <div>
        <table>
            <thead>
            <tr>
              <th>No</th>
              <th>Program Name</th>
              <th>StartDate</th>
              <th>EndDate</th>
              <th>Edit</th>
              <th>Delete</th>
              <!-- <th>Actions</th> -->
            </tr>
            </thead>
            <tbody>
              @foreach($data as $key)
              <tr>
                <td>{{$loop->iteration }}</td>
                <td>{{$key->program_name}}</td>
                <td>{{$key->start_date}}</td>
                <td>{{$key->end_date}}</td>
                <td class="actions" style="white-space:nowrap">
                  <button type="button" class="bg-white hover:bg-grey-lightest text-grey-darkest font-semibold py-2 px-4 border border-grey-light rounded shadow" name="button"><a href="{{ url('/programs/'.$key->id.'/edit') }}">Edit</a></button>

                </td>
                <td>
                    <button type="button" class="bg-white hover:bg-grey-lightest text-grey-darkest font-semibold py-2 px-4 border border-grey-light rounded shadow" name="button" onclick="deleteResource({{ $key->id }}, '/programs', event)">Delete</button>
                </td>

              </tr>
              @endforeach
            </tbody>
        </table>
          {{ $data->links() }}
    </div>

@endsection
@section('include')
    @include('helper.delete')
@stop
