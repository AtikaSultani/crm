<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    {{-- Style files --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="font-sans text-gray-900 relative h-screen">

<div class="flex items-start relative">

    <!-- sidebar -->
    <div class="h-screen w-1/6 hidden md:block ease-in duration-700 sticky top-0 px-5"
         id="sidebar">

        {{--  sidebar logo --}}
        <div class="flex justify-center mt-5">
            <img src="{{ asset('images/logo-white.svg') }}" class="h-12 block" alt="">
        </div>

        <a class="bg-blue-lighter flex items-center w-full p-1 rounded my-1 mt-10 inline-block" href="#">
            <img src="{{ url('/images/dashboard-icon.svg') }}" class="w-5" alt="">
            <p class="text-yellow text-base ml-2">Dashboard</p>
        </a>

        <a class="hover:bg-blue-lighter flex items-center w-full p-1 rounded my-2 inline-block" href="#">
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

    <!-- content -->
    <div class="w-full">
        <!-- Menu -->
        <div class="flex items-center justify-between p-5 sticky top-0">

            <!-- Page title -->
            <div class="flex items-center">
                <img src="{{ url('/images/menu-bar.svg') }}" class="h-4 toggle-menu-bar md:hidden ease-in duration-700"
                     alt="">
                <p class="text-gray-800 text-lg ml-2 font-semibold">@yield('page-title', 'Dashboard')</p>
            </div>

            <!-- Avatar -->
            <div>
                <img src="{{ url('/images/hamidafghan.png') }}" class="h-8 rounded-full border-2 border-red" alt="">
            </div>
        </div>

        {{-- Page contnet --}}
        <div>
            @yield('content')
        </div>
    </div>
</div>

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


        <a class="bg-blue-lighter flex items-center w-2/3 p-2 rounded my-1 inline-block" href="#">
            <img src="{{ url('/images/dashboard-icon.svg') }}" class="w-6" alt="">
            <p class="text-yellow  text-lg ml-3">Dashboard</p>
        </a>

        <a class="hover:bg-blue-lighter flex items-center w-2/3 p-2 rounded my-1 inline-block" href="#">
            <img src="{{ url('/images/complaint-icon.png') }}" class="w-6" alt="">
            <p class="text-gray-400  text-lg ml-3">Complaints</p>
        </a>

        <a class="hover:bg-blue-lighter flex items-center w-2/3 p-2 rounded my-1 inline-block" href="#">
            <img src="{{ url('/images/project-icon.png') }}" class="w-6" alt="">
            <p class="text-gray-400  text-lg ml-3">Projects</p>
        </a>

        <a class="hover:bg-blue-lighter flex items-center w-2/3 p-2 rounded my-1 inline-block" href="#">
            <img src="{{ url('/images/program-icon.png') }}" class="w-6" alt="">
            <p class="text-gray-400  text-lg ml-3">Programs</p>
        </a>

        <div class="bg-gray-300 w-2/3 my-px my-1">
            <hr>
        </div>

        <a class="hover:bg-blue-lighter flex items-center w-2/3 p-2 rounded my-1 inline-block" href="#">
            <img src="{{ url('/images/users-icon.png') }}" class="w-6" alt="">
            <p class="text-white  text-lg ml-3">Users</p>
        </a>

        <a class="hover:bg-blue-lighter flex items-center w-2/3 p-2 rounded my-1 inline-block" href="#">
            <img src="{{ url('/images/setting-icon.png') }}" class="w-6" alt="">
            <p class="text-white text-lg ml-3">Setting</p>
        </a>
    </div>

</div>

<script src="{{ asset('js/jquery.js')}}"></script>
<script src="{{ asset('/js/new-script.js') }}"></script>
</body>
</html>