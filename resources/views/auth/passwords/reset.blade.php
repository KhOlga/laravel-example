@extends('index')

@include('partials.nav')

@section('content')
    <div class="container form-container">
        <div class="justify-content-center">
            <h3 class="form-header">{{ __('Reset Password') }}</h3>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group">
                    <label for="email" class="text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="">
                        <input id="email" type="email" class="form-shadow form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="text-md-right">{{ __('Password') }}</label>

                    <div class="">
                        <input id="password" type="password" class="form-shadow form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="">
                        <input id="password-confirm" type="password" class="form-shadow form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group mb-0">
                    <div class="">
                        <button type="submit" class="form-shadow btn btn-primary">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
