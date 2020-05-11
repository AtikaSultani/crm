<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    {{-- Style files --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/datepicker.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body class="antialiased font-sans text-gray-900 relative h-screen ">
<div class="flex items-start">

@include('layouts.sidebar')

<!-- content -->
    <div class="w-full content">

        <!-- Menu -->
        <div class="flex items-center justify-between p-5 sticky top-0 bg-white">

            <!-- Page title -->
            <div class="flex items-center">
                <img src="{{ url('/images/menu-bar.svg') }}" class="h-4 toggle-menu-bar md:hidden"
                     alt="">
                <p class="text-gray-800 text-lg ml-2 font-semibold">@yield('page-title')</p>
            </div>

            <!-- Avatar -->
            <div class="group inline-block relative w-auto">
                <img src="{{ url('/images/users-icon.png') }}"
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
        <div class="px-5 pb-10">
            @yield('content')
        </div>
    </div>
</div>

@include('layouts.mobile-sidebar')

{{-- scripts--}}
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/datepicker.js') }}"></script>
<script src="{{ asset('js/i18n/datepicker.en.js') }}"></script>
@yield('page-level-js')
<script src="{{ asset('/js/scripts.js') }}"></script>
</body>
</html>
