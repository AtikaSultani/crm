@extends('layouts.app')

@section('content')

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="login-wrap" style="width:500px;" >
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <p style="font-weight: bold">Enter your email address and reset your password</p>
                        <div class="input-group">

                                <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email address" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                                 <br>
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                                 <br>
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                <br>
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

                    </form>
                </div>
@endsection
