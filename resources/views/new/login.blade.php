<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Style files --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body class="font-sans text-gray-900">
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="max-w-md w-full py-12 px-6">
        <img class="mx-auto h-10 w-auto" src="{{ asset('/images/logo-dark.svg') }}" alt=""/>
        <p class="mt-6 text-sm leading-5 text-center text-gray-900">Log in to your account</p>
        <form class="mt-5" action="{{ url('login') }}" method="POST">
            @csrf
            <input type="hidden" name="remember" value="true"/>
            <div class="rounded-md shadow-sm">

                {{-- Email Address --}}
                <div>
                    <input aria-label="Email address" name="email" type="email" required
                           class="border-gray-300 placeholder-gray-500 appearance-none rounded-none relative block w-full px-3 py-2 border text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5"
                           placeholder="Email address" value=""/>
                </div>

                {{-- Password --}}
                <div class="-mt-px relative">
                    <input aria-label="Password" name="password" type="password" required
                           class="border-gray-300 placeholder-gray-500 appearance-none rounded-none relative block w-full px-3 py-2 border text-gray-900 rounded-b-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5"
                           placeholder="Password"/>
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                        <a href="{{ url('/password/reset') }}" class="text-gray-900 underline">Forgot?</a>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <button type="submit"
                        class="relative block w-full py-2 px-3 border border-transparent rounded-md text-white font-semibold bg-blue-lighter hover:bg-blue focus:bg-blue focus:outline-none focus:shadow-outline sm:text-sm sm:leading-5">
                        <span class="absolute left-0 inset-y pl-3">
                <svg class="h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                        clip-rule="evenodd"/>
                </svg>
              </span>
                    Log in
                </button>
            </div>
        </form>

        {{--  Do not have account  --}}
        <div class="mt-6">
            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm leading-5">
                    <span class="px-2 bg-gray-100 text-gray-500">Don't have an account?</span>
                </div>
            </div>

            <div class="mt-6">
                <a href="{{ url('/register') }}"
                   class="block w-full text-center py-2 px-3 border border-gray-300 rounded-md text-gray-900 font-medium hover:border-gray-400 focus:outline-none focus:border-gray-400 sm:text-sm sm:leading-5">
                    Create account now
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>