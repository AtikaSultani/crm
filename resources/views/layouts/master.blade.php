<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    {{-- Style files --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="antialiased font-sans text-gray-900 relative h-screen ">
<div class="flex items-start">

@include('layouts.sidebar')

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
            <div class="group inline-block relative w-auto">
                <img src="{{ url('/images/hamidafghan.png') }}"
                     class="h-8 rounded-full border-2 border-red cursor-pointer" alt="">
                <div class="absolute right-0 hidden bg-white rounded-lg text-gray-700 group-hover:block w-32 shadow-md py-2">
                    <a class="text-sm text-blue px-2 block w-full py-1 border-white"
                       href="{{ url('/profile') }}">{{ Auth::user()->name }}</a>
                    <p class="text-sm text-red-darker px-2 py-1">
                        <a href="{{ url('logout') }}"
                           onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="icon_key_alt"></i> Log Out</a>
                    <form id="logout-form" action="{{ url('logout') }}" method="POST">
                        @csrf
                    </form>
                    </p>
                </div>
            </div>
        </div>

        {{-- Page contnet --}}
        <div class="px-5">
            @yield('content')
        </div>
    </div>
</div>

@include('layouts.mobile-sidebar')

<script src="{{ asset('js/jquery.js')}}"></script>
<script src="{{ asset('/js/new-script.js') }}"></script>
</body>
</html>