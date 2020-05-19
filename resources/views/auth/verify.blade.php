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
        <p class="mt-6 text-sm leading-5 text-center text-gray-900">Verify Your Email Address</p>
        <p class="mt-6 text-sm leading-5 text-center text-gray-900">Please check your email for a verification link</p>
        <form class="mt-5" action="{{ route('verification.resend') }}" method="POST">
            @csrf
            <div class="flex justify-center my-10">
                <img src="{{ asset('images/email.svg') }}" class="h-32" alt="">
            </div>

            <div>
                <p class="mt-6 text-sm leading-5 text-center text-gray-900">
                    If you did not receive the email,
                    <button class="text-blue underline" type="submit">click here to request another</button>
                    .
                </p>

                <p class="mt-6 text-sm leading-5 text-center text-gray-900 font-semibold">
                    @if (session('resent'))
                        A fresh verification link has been sent to your email address.
                    @endif
                </p>
            </div>
        </form>
    </div>
</div>
</body>
</html>