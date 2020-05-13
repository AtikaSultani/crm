@extends('layouts.master')
@section('page-title')
<h>PROGRAMS LIST</h>
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
                  <button type="button" style="margin-left:20px;padding-top:3px;padding-bottom:3px;background-color:#B0C4DE;color:#fff;" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" name="button"><a href="{{ url('/programs/'.$key->id.'/edit') }}">Edit</a></button>

                </td>
                <td>
                  <form action="{{ url('/programs/'.$key->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                    <button style="margin-left:100px;padding-top:3px;;padding-bottom:3px;background-color:#FF0000;color:#fff;" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" onclick="return confirm('Are you sure to delete this?')" >Delete</button>
                  </form>
                </td>

              </tr>
              @endforeach
            </tbody>
        </table>
          {{ $data->links() }}
    </div>

@endsection
