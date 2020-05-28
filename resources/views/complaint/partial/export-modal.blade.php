{{-- Delete Modal --}}
<div class="fixed pin bg-modal h-screen w-screen invisible modal" id="export-modal">
    <div class="relative bg-white max-w-xl mx-auto mt-16 rounded  py-4 px-6 shadow-2xl">

        <p class="my-3 text-gray-700 font-semibold">Filter complaints</p>

        <form method="post" action="{{ url('/complaint-export') }}" id="export-form">
            @csrf
            {{-- year --}}
            <div class="mb-4">
                <label for="year">Year</label>
                <select name="year" id="year">
                    <option value="">All</option>
                    @foreach(range(Carbon\Carbon::now()->year, 2016)  as $year)
                        <option value="{{ $year }}">{{ $year }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Term --}}
            <div class="mb-4">
                <label for="term">Term</label>
                <select name="term" id="term">
                    <option value="">All</option>
                    <option value="T1">T1</option>
                    <option value="T2">T2</option>
                    <option value="T3">T3</option>
                </select>
            </div>

            {{-- Project code --}}
            <div class="mb-4">
                <label for="project">Project Code</label>
                <select name="project" id="project">
                    <option value="">All</option>
                    @foreach($projects as $project)
                        <option value="{{ $project->id  }}">
                            {{ $project->project_code }}
                            - <span class="text-gray-600">{{ $project->project_name }}</span></option>
                    @endforeach
                </select>
            </div>
        </form>

        {{-- Modal footer --}}
        <div class="py-2 text-right">

            {{-- Cancel Button --}}
            <a class="cursor-pointer close-modal text-sm">Cancel</a>

            {{-- Submit Button --}}
            <button type="submit" form="export-form"
                    class="text-sm rounded text-white px-3 py-1 bg-blue focus:outline-none ml-3">Export
            </button>
        </div>
    </div>
</div>
