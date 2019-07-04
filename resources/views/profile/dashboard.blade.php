@extends('index')

@include('partials.nav')

@section('content')

<div class="d-flex container form-container align-content-center">
    <div class="justify-content-center">
        <div class="card card-shadow" {{--style="margin-top: 50px;"--}}>
            <h1>Hello, {{ Auth::user()->name }}</h1>
            <span>This is Your Profile.</span>
        </div>

        <div class="card card-shadow justify-content-center">
            <img alt="Card image" class="card-img-top profile-image" src="/images/avatar1.jpg">
        </div>

        <div class="card card-shadow">
           <div class="card-body">
               <p class="card-text">Name: {{ Auth::user()->name }}</p>
               <p class="card-text">E-mail: {{ Auth::user()->email }}</p>
           </div>
        </div>

        <div class="card card-shadow">
            <h3>You could always edit your data</h3>
        </div>

        <div class="form-group mb-0 align-content-center d-flex justify-content-center" style="width: 400px !important;">
            <button type="submit" class="form-shadow btn btn-primary">
                {{ __('Edit data') }}
            </button>
        </div>
    </div>
</div>
@endsection
