<!-- Full screen menu -->
<div class="h-screen w-full z-50 my-0 md:hidden hidden bg-blue fixed top-0 " id="mobile-side-bar">

    <!-- close button -->
    <div class="flex justify-end  p-5 pb-5">
        <img src="{{ url('/images/close-cross.svg') }}" class="w-5 toggle-menu-bar " alt="">
    </div>

    <!-- white logo  -->
    <div class="flex items-center justify-center">
        <img src="{{ url('/images/logo-white.svg') }}" class="h-20" alt="">
    </div>

    <!-- links -->
    <div class="w-full flex flex-col items-center my-5">


        <a class="@if(request()->is('/')) bg-blue-lighter @endif flex items-center w-2/3 p-2 rounded my-1 inline-block"
           href="{{ url('/') }}">
            <img src="{{ url('/images/dashboard-icon.svg') }}" class="w-6" alt="">
            <p class="text-gray-400  text-lg ml-3">Dashboard</p>
        </a>

        <a class="@if(request()->is('complaints*')) bg-blue-lighter @endif hover:bg-blue-lighter flex items-center w-2/3 p-2 rounded my-1 inline-block"
           href="{{ url('/complaints') }}">
            <img src="{{ url('/images/complaint-icon.png') }}" class="w-6" alt="">
            <p class="text-gray-400  text-lg ml-3">Complaints</p>
        </a>

        <a class="@if(request()->is('projects*')) bg-blue-lighter @endif hover:bg-blue-lighter flex items-center w-2/3 p-2 rounded my-1 inline-block"
           href="{{ url('/projects') }}">
            <img src="{{ url('/images/project-icon.png') }}" class="w-6" alt="">
            <p class="text-gray-400  text-lg ml-3">Projects</p>
        </a>

        <a class="@if(request()->is('programs*')) bg-blue-lighter @endif hover:bg-blue-lighter flex items-center w-2/3 p-2 rounded my-1 inline-block"
           href="{{ url('/programs') }}">
            <img src="{{ url('/images/program-icon.png') }}" class="w-6" alt="">
            <p class="text-gray-400  text-lg ml-3">Programs</p>
        </a>

        <div class="bg-gray-300 w-2/3 my-px my-1">
            <hr>
        </div>

        <a class="@if(request()->is('users*')) bg-blue-lighter @endif hover:bg-blue-lighter flex items-center w-2/3 p-2 rounded my-1 inline-block"
           href="{{ url('/users') }}">
            <img src="{{ url('/images/users_icon.png') }}" class="w-6" alt="">
            <p class="text-white  text-lg ml-3">Users</p>
        </a>

        <a class="@if(request()->is('settings*')) bg-blue-lighter @endif hover:bg-blue-lighter flex items-center w-2/3 p-2 rounded my-1 inline-block"
           href="{{ url('/settings') }}">
            <img src="{{ url('/images/setting-icon.png') }}" class="w-6" alt="">
            <p class="text-white text-lg ml-3">Setting</p>
        </a>
    </div>

</div>
