<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Style files --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body class="font-sans text-gray-900">
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="max-w-md w-full py-12 px-6">
        <img class="mx-auto h-10 w-auto" src="{{ asset('/images/logo-dark.svg') }}" alt=""/>
        <p class="mt-6 text-sm leading-5 text-center text-gray-900">Create New Account</p>
        <form class="mt-5" action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="rounded-md shadow-sm">

                {{-- Email --}}
                <div>
                    <input aria-label="Email" name="email" type="email" required
                           value="{{ $email ?? old('email') }}"
                           class="border-gray-300 placeholder-gray-500 appearance-none rounded-none relative block w-full px-3 py-2 border text-gray-900 focus:outline-none focus:shadow-outline-blue focus:border-blue focus:z-10 sm:text-sm sm:leading-5 @if($errors->has('email')) border-red @endif"
                           placeholder="Email" autocomplete="email"/>
                </div>

                {{-- Password --}}
                <div class="-mt-px relative">
                    <input aria-label="Password" name="password" type="password" id="password" required
                           class="border-gray-300 placeholder-gray-500 appearance-none rounded-none relative block w-full px-3 py-2 border text-gray-900 rounded-b-md focus:outline-none focus:shadow-outline-blue focus:border-blue focus:z-10 sm:text-sm sm:leading-5 @if($errors->has('password')) border-red @endif"
                           placeholder="New Password" autocomplete="new-password"/>

                </div>
            </div>

            @foreach($errors->all() as $error)
                <p class="mt-1 text-sm leading-5 text-red-darker">
                    {{ $error }}
                </p>
            @endforeach


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
                    Reset Password
                </button>
            </div>
        </form>
    </div>

    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('/js/new-script.js') }}"></script>
</div>
</body>
</html>

