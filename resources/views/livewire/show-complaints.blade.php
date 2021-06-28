
<div class="mt-3">

    <div class="flex items-center justify-end mt-2">

        <a class="text-sm bg-blue text-white px-2 py-1 rounded-sm focus:outline-none"
           href="{{ url('/complaints/create') }}">
            Add New
        </a>
        

        <button class="text-sm mx-2 bg-yellow text-blue px-2 py-1 rounded-sm focus:outline-none"
                onclick="exportComplaint()">
            Export to Excel
        </button>
    </div>

    <div class="py-6 flex">

        <div class="w-1/4 mx-2">
            <input type="text" wire:model="search" placeholder="Search" class="py-3">
        </div>

        <div class="w-1/4 mx-2">
            <select wire:model="province" id="" class="py-3">
                <option value="">All Provinces</option>
                @foreach($provinces as $province)
                    <option value="{{$province->id}}">{{ $province->province_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="w-1/4 mx-2">
            <select wire:model="status" class="py-3">
                <option value="">All Status</option>
                <option value="Registered">Registered</option>
                <option value="Under Investigation"> Under investigation</option>
                <option value="Solved">Solved</option>
            </select>
        </div>

        <div class="w-1/4 mx-2">
            <select wire:model="quarter" class="py-3">
                <option value="">All Quarter</option>
                <option value="First Quarter">First Quarter</option>
                <option value="Second Quarter"> Second Quarter</option>
                <option value="Third Quarter">Third Quarter</option>
                <option value="Fourth Quarter"> Fourth Quarter</option>
            </select>
        </div>
    </div>

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Caller Name</th>
            <th>Status</th>
            <th>Quarter</th>
            <th>Province</th>
        </tr>
        </thead>
        <tbody>
        @foreach($complaints as $complaint)
            <tr>
                <td>{{ $complaint->id }}</td>
                <td class="text-blue cursor-pointer"><a
                        href="{{ url('/complaints/'.$complaint->id) }}">{{ $complaint->caller_name }}</a></td>
                @if($complaint->status=='Under Investigation')
                    <td style="color:#FF0000;">
                        {{ $complaint->status }}
                    </td>
                @else
                    <td>
                        {{ $complaint->status }}
                    </td>
                @endif
                <td>{{ $complaint->quarter}}</td>
                <td>{{ $complaint->province->province_name }}
                    | {{ $complaint->district ? $complaint->district->district_name: 'Unspecified'}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="mt-5">
        {{ $complaints->links('vendor.pagination.livewire') }}
    </div>
</div>
