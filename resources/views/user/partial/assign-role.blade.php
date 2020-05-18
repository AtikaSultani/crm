<p class="text-gray-800 text-base">Assign or change role!</p>
<form action="{{ url('/users/'.$user->id.'/assign-role') }}" method="post">
    @csrf
    <div class="w-full px-3 mb-6 md:mb-0">
        <div class="flex justify-center">
            <img src="{{ asset('images/role.svg') }}" class="h-32 text-center" alt="">
        </div>

        <label class="block tracking-wide text-gray-700 text-sm mb-2" for="grid-first-name">
            Role
        </label>

        <select name="role"
                class="block w-full bg-gray-200 text-gray-700 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
            @foreach($roles as $role)
                <option value="{{ $role->id }}" @if($user->roles->pluck('id')->first() == $role->id) selected @endif>
                    {{ $role->name }}
                </option>
            @endforeach
        </select>
    </div>
    {{-- Modal footer --}}
    <div class="py-2 text-right">
        {{-- Submit Button --}}
        <button type="submit" class="text-sm rounded text-white px-3 py-1 bg-blue focus:outline-none ml-3">Save
        </button>
    </div>
</form>