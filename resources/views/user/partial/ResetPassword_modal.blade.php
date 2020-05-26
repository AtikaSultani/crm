{{-- Delete Modal --}}
<div class="fixed pin bg-modal h-screen w-screen invisible modal" id="ResetPassword_modal">
    <div class="relative bg-white max-w-xl mx-auto mt-16 rounded  py-4 px-6 shadow-2xl">

        <p class="my-3 text-gray-700 font-semibold">Reset Your Password</p>

        <form method="post" action="" id="ResetPassword-form">
            @csrf
            {{--old password --}}
            <div class="mb-4">
                <label for="year">Old Password</label>
                <input type="text" name="" value="">
            </div>

            {{-- New Password --}}
            <div class="mb-4">
                <label for="quarter">New Password</label>
                 <input type="text" name="" value="">
            </div>

            {{-- Confirm Passwrod --}}
            <div class="mb-4">
                <label for="project">Confirm Password</label>
                <input type="text" name="" value="">
            </div>
        </form>

        {{-- Modal footer --}}
        <div class="py-2 text-right">

            {{-- Cancel Button --}}
            <a class="cursor-pointer close-modal text-sm">Cancel</a>

            {{-- Submit Button --}}
            <button type="submit" form="export-form"
                    class="text-sm rounded text-white px-3 py-1 bg-blue focus:outline-none ml-3">Change
            </button>
        </div>
    </div>
</div>
