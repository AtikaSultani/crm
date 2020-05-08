<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    {{-- Style files --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="font-sans antialiased text-gray-900">
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="max-w-md w-full px-6">
        <img class="mx-auto h-10 w-auto" src="{{ asset('/images/logo-dark.svg') }}" alt=""/>
        <h2 class="mt-10 text-3xl font-semibold text-center leading-9 font-display">Reset your password</h2>
        <p class="mt-5 text-sm leading-5 text-center text-gray-600">
            Enter your email and we'll send you a link to reset your password.
        </p>

        <form class="mt-5" action="#" method="GET">

            {{-- email address --}}
            <div class="rounded-md shadow-sm">
                <input aria-label="Email address" name="email" type="email" required autofocus
                       class="border-gray-300 placeholder-gray-500 focus:shadow-outline-blue focus:border-blue-300  appearance-none relative block w-full px-3 py-2 border text-gray-900 rounded-md focus:outline-none sm:text-sm sm:leading-5"
                       placeholder="Email address" value=""/>
            </div>

            {{-- buttton --}}
            <div class="mt-5">
                <button type="submit"
                        class="relative block w-full py-2 px-3 border border-transparent rounded-md text-white font-semibold bg-blue-lighter hover:bg-blue focus:bg-blue focus:outline-none focus:shadow-outline sm:text-sm sm:leading-5">
                    Send password reset email
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>