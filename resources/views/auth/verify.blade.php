@extends('index')

@include('partials.nav')

@section('content')
    <div class="container form-container">
        <div class="justify-content-center">
            <h3 class="form-header">{{ __('Verify Your Email Address') }}</h3>

            <div class="">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
            </div>
        </div>
    </div>
@endsection
