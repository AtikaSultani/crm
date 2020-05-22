{{-- Assing Role Modal --}}
<div class="fixed pin bg-modal h-screen w-screen invisible modal" id="assign-role-modal">
    <div class="relative bg-white max-w-xl mx-auto mt-16 rounded  py-4 px-6 shadow-2xl" id="assign-role-body"></div>
</div>


{{-- Edit user --}}
<div class="fixed pin z-50 bg-modal h-screen w-screen invisible modal" id="edit-user">
    <div class="relative bg-white max-w-xl mx-auto mt-16 rounded py-4 px-6 shadow-2xl">

        {{-- Modal header --}}
        <div class="flex items-center justify-between text-lg  text-gray-700">
            <span> Edit User </span>
            <span class="cursor-pointer"> &times </span>
        </div>

        {{-- Load the user info here --}}
        <div id="edit-user-content">

        </div>

        {{-- Modal footer --}}
        <div class="py-2 text-right">
            <button type="submit" class="text-white bg-blue text-sm rounded-sm px-3 py-1" form="edit-user-form">Save
            </button>
        </div>
    </div>
</div>
