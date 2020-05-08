<!-- sidebar -->
<div class="h-screen w-1/6 hidden md:block ease-in duration-700 sticky top-0 px-5"
     id="sidebar">

    {{-- sidebar logo --}}
    <div class="flex justify-center mt-5">
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/logo-white.svg') }}" class="h-12 block" alt="">
        </a>
    </div>

    <a class=" @if(request()->is('/')) bg-blue-lighter @endif flex items-center w-full p-1 rounded my-1 mt-10 inline-block"
       href="{{ url('/') }}">
        <img src="{{ url('/images/dashboard-icon.svg') }}" class="w-5" alt="">
        <p class="text-yellow text-base ml-2">Dashboard</p>
    </a>

    <a class="@if(request()->is('complaints*')) bg-blue-lighter @endif hover:bg-blue-lighter flex items-center w-full p-1 rounded my-2 inline-block"
       href="{{ url('complaints') }}">
        <img src="{{ url('/images/complaint-icon.png') }}" class="w-5" alt="">
        <p class="text-gray-400 text-base ml-2">Complaints</p>
    </a>

    <a class="hover:bg-blue-lighter flex items-center w-full p-1 rounded my-2 inline-block" href="#">
        <img src="{{ url('/images/project-icon.png') }}" class="w-5" alt="">
        <p class="text-gray-400 text-base ml-2">Projects</p>
    </a>

    <a class="hover:bg-blue-lighter flex items-center w-full p-1 rounded my-2 inline-block" href="#">
        <img src="{{ url('/images/program-icon.png') }}" class="w-5" alt="">
        <p class="text-gray-400 text-base ml-2">Programs</p>
    </a>

    <div class="bg-gray-300 w-2/3 my-px my-1">
        <hr>
    </div>

    <a class="hover:bg-blue-lighter flex items-center w-full p-1 rounded my-2 inline-block" href="#">
        <img src="{{ url('/images/users-icon.png') }}" class="w-5" alt="">
        <p class="text-gray-400 text-base ml-2">Users</p>
    </a>

    <a class="hover:bg-blue-lighter flex items-center w-full p-1 rounded my-2 inline-block" href="#">
        <img src="{{ url('/images/setting-icon.png') }}" class="w-5" alt="">
        <p class="text-gray-400 text-base ml-2">Setting</p>
    </a>
</div>