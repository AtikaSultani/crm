{{-- Delete Modal --}}
<div class="fixed pin bg-modal h-screen w-screen invisible modal delete-modal">
    <div class="relative bg-white max-w-xl mx-auto mt-16 rounded  py-4 px-6 shadow-2xl">

        <form method="POST" id="delete-form">
            @csrf
            @method('delete')
        </form>

        {{-- Confirmation --}}
        <div class="flex flex-col justify-center my-5">
            <img src="{{ asset('/images/warning.svg') }}" alt="" class="h-32">
            <p class="text-gray-700 text-center font-medium text-xl mt-5"> Are you sure ?</p>
            <p class="text-gray-600 text-center text-base mt-4">Once deleted, you will not be able to recover!</p>
        </div>

        {{-- Modal footer --}}
        <div class="py-2 text-right">

            {{-- Cancel Button --}}
            <a class="cursor-pointer close-modal text-sm">Cancel</a>

            {{-- Submit Button --}}
            <button type="submit" class="text-sm rounded text-red-darker px-3 py-1 bg-red focus:outline-none ml-3" form="delete-form">Delete</button>
        </div>
    </div>
</div>