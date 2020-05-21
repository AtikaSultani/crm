@extends('layouts.master')
@section('title','Setting')
@section('page-title','Application Setting')

@section('content')
    <div class="flex items-center justify-end my-3">
        <a class="text-sm bg-blue text-white px-2 py-1 rounded-sm focus:outline-none"
           href="{{ url('/backups/backup-now') }}">
            Backup Now
        </a>
    </div>
    <div>
        <table>
            <thead>
            <tr>
                <th>File Name</th>
                <th>Created At</th>
                <th>File Size</th>

                <th>Download</th>

            </tr>
            </thead>
            <tbody>
            @foreach($databases as $database)
                <tr>
                    <td>{{ $database->getBasename() }}</td>
                    <td>{{ Carbon\Carbon::createFromTimestamp($database->getATime())->toDateTimeString() }}</td>
                    <td>{{ number_format($database->getSize() / 1024 / 1024 ,2) }} MB</td>
                    <td>
                        <a href="{{ url('backups/download/'.$database->getBasename()) }}"
                           class="text-blue hover:underline">Download</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop

