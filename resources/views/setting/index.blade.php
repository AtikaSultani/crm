@extends('layouts.master')
@section('title','Setting')
@section('page-title','Application Setting')

@section('content')

    <div class="flex items-center justify-between my-3">
        <p class="text-gray-700 font-medium">Activity logs</p>
    </div>
    <div>
        <table>
            <thead>
            <tr>
                <th>Log name</th>
                <th>Action</th>
                <th>User</th>
                <th>Date</th>
                <th>Details</th>
            </tr>
            </thead>
            <tbody>

            @foreach($logs as $log)
                <tr>
                    <td>{{ $log->log_name }}</td>
                    <td class="capitalize">{{ $log->description}}</td>
                    <td>
                        @if($log->causer)
                            {{ $log->causer->name.' '.$log->causer->last_name }}
                        @endif
                    </td>
                    <td>{{ $log->created_at->format('F j, Y h:i A')}}</td>
                    <td>
                        <button class="text-sm text-blue focus:outline-none" onclick="viewLogDetails(this)">
                            Details
                        </button>
                    </td>
                </tr>

                {{-- Log properties --}}
                <tr hidden="hidden">
                    <td colspan="5">
                        @if(!isset($log->properties['old']))

                            <div class="w-full">
                                <div class="flex flex-wrap">
                                    @foreach ($log->properties['attributes'] as $key => $attribute)
                                        <div class="w-auto bg-gray-300 px-2 py-1 rounded my-1 mx-2">
                                            <span class="text-gray-600 capitalize">{{str_replace('_', ' ', $key) }}</span>
                                            : {{ $attribute }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <div class="w-full">
                                <div class="flex flex-wrap">
                                    @foreach ($log->properties['attributes'] as $key => $attribute)
                                        <div class="w-auto bg-gray-300 px-2 py-1 rounded my-1 mx-2">
                                            <span class="text-gray-900 capitalize">{{str_replace('_', ' ', $key) }}</span>
                                            : <span
                                                    class="line-through text-red-darker">{{ $log->properties['old'][$key] }}</span>
                                            <span>
                                             {{ $attribute }}
                                        </span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            {{ $logs->links() }}
        </div>
    </div>


    <div class="flex items-center justify-between my-3 mt-10">
        <p class="text-gray-700 font-medium">10 Recent Backups</p>
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
            @forelse($databases as $database)
                <tr>
                    <td>{{ $database->getBasename() }}</td>
                    <td>{{ Carbon\Carbon::createFromTimestamp($database->getATime())->toDateTimeString() }}</td>
                    <td>{{ number_format($database->getSize() / 1024 / 1024 ,2) }} MB</td>
                    <td>
                        <a href="{{ url('backups/download/'.$database->getBasename()) }}"
                           class="text-blue hover:underline">Download</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">
                        No Backup yet.
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>


@stop

