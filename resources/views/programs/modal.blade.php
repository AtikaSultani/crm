{{-- Create program --}}
<div class="fixed pin z-50 bg-modal h-screen w-screen invisible modal" id="create-program">
    <div class="relative bg-white max-w-xl mx-auto mt-16 rounded py-4 px-6 shadow-2xl">

        {{-- Modal header --}}
        <div class="flex items-center justify-between text-lg  text-gray-700">
            <span> New Program </span>
            <span class="cursor-pointer"> &times </span>
        </div>

        <form method="POST" action="{{ url('/programs') }}" id="create-program-form">
            @csrf
            <div class="my-2">
                <label for="">Program name</label>
                <input type="text" autofocus name="program_name">
            </div>

            <!-- <div class="my-2">
                <label for="">Start Date</label>
                <input type="text" class="datepicker-here" data-language='en'
                       name="start_date"
                       data-date-format="yyyy-mm-dd"
                       value="{{date('Y-m-d')}}"/>
            </div>

            <div class="my-2">
                <label for="">End Date</label>
                <input type="text" class="datepicker-here" data-language='en'
                       name="end_date"
                       data-date-format="yyyy-mm-dd"
                       value="{{date('Y-m-d')}}"/>
            </div> -->
        </form>

        {{-- Modal footer --}}
        <div class="py-2 text-right">
            <button type="submit" class="bg-blue px-2 py-1 rounded-sm text-white text-sm focus:outline-none"
                    form="create-program-form">
                Create
            </button>
        </div>
    </div>
</div>


{{-- Edit program --}}
<div class="fixed pin z-50 bg-modal h-screen w-screen invisible modal" id="edit-program">
    <div class="relative bg-white max-w-xl mx-auto mt-16 rounded py-4 px-6 shadow-2xl">

        {{-- Modal header --}}
        <div class="flex items-center justify-between text-lg  text-gray-700">
            <span> Edit Program </span>
            <span class="cursor-pointer"> &times </span>
        </div>

        {{-- Load the program info here --}}
        <div id="edit-program-content">

        </div>

        {{-- Modal footer --}}
        <div class="py-2 text-right">
            <button type="submit" class="text-white bg-blue text-sm rounded-sm px-3 py-1" form="edit-program-form">Save
            </button>
        </div>
    </div>
</div>
