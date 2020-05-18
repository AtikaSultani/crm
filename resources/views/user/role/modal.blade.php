{{-- Create Role --}}
<div class="fixed pin z-50 bg-modal h-screen w-screen invisible modal" id="create-role">
    <div class="relative bg-white max-w-xl mx-auto mt-16 rounded py-4 px-6 shadow-2xl">

        {{-- Modal header --}}
        <div class="flex items-center justify-between text-lg  text-gray-700">
            <span> New Role </span>
            <span class="cursor-pointer"> &times </span>
        </div>

        <form method="POST" action="{{ url('/roles') }}" id="create-role-form">
            @csrf
            <div class="form-group form-group flex justify-center">
                <img src="{{ asset('/images/role.svg') }}" alt="" class="h-32">
            </div>
            <div class="form-group">
                <input type="text" autofocus name="name" placeholder="Role name e.g Admin">
            </div>
        </form>

        {{-- Modal footer --}}
        <div class="py-2 text-right">
            <button type="submit" class="bg-blue text-white text-sm" form="create-role-form"> Create</button>
        </div>
    </div>
</div>


{{-- Edit Role --}}
<div class="fixed pin z-50 bg-modal h-screen w-screen invisible modal" id="edit-role">
    <div class="relative bg-white max-w-xl mx-auto mt-16 rounded py-4 px-6 shadow-2xl">

        {{-- Modal header --}}
        <div class="flex items-center justify-between text-lg  text-gray-700">
            <span> Edit Role </span>
            <span class="cursor-pointer"> &times </span>
        </div>

        {{-- Load the role info here --}}
        <div id="edit-role-content">

        </div>

        {{-- Modal footer --}}
        <div class="py-2 text-right">
            <button type="submit" class="text-white bg-blue text-sm rounded-sm px-3 py-1" form="edit-role-form">Save
            </button>
        </div>
    </div>
</div>


