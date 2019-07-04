@extends('index')

@include('partials.nav')

@section('content')
    <div class="container form-container">
        <div class="justify-content-center">
            <h3 class="form-header">{{ __('Reset Password') }}</h3>

            <div class="">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="">
                            <input id="email" type="email" class="form-shadow form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <div class="">
                            <button type="submit" class="form-shadow btn btn-primary">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
