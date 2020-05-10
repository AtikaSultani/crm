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
                <!-- <td class="actions" style="white-space:nowrap">
                  <a class="btn btn-primary badge-pill" style="width:65px;border-radius:20px;font-size:12px;" href="{{ url('/programs/'.$key->id.'/edit') }}">EDIT</a>

                  <form action="{{ url('/programs/'.$key->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                    <button class="btn btn-danger badge-pill" style="width:75px;border-radius:20px;font-size:12px;" onclick="return confirm('Are you sure to delete this?')" data-confirm="Are you sure to delete this item?" type="submit">DELETE</button>
                  </form>
                </td> -->

              </tr>
              @endforeach
            </tbody>
        </table>
          {{ $data->links() }}
    </div>

@endsection
