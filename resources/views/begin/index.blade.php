@extends('layouts.app')

@section('content')
    <div class="container text-center text-white">
        <img class="img-fluid w-75 mb-md-5 mb-2" src="assets/hero-img.jpg" alt="">
        <div class="my-md-2">
            <h1>{{ __('Find the right') }} <br> {{ __('therapist or coach for you') }}</h1>
        </div>
        <div class="my-5">
            <a href="{{ route('match.begin.go') }}">
                <button class="btn btn-warning text-white fw-bold rounded-pill btn-lg px-5 py-2 lead">{{ __('Begin') }}</button>
            </a>
        </div>
        <div class="mt-5 mb-3 text-light lead">
            <p>{{ __('If you are in immediate need of services, feeling unsafe in this current moment, or are experiencing
                thoughts of harming yourself or others, please do not use this site. Instead,') }}
                <a class="text-white" href="#">{{ __('please use one of these resources.') }}</a>
                {{ __('For a medical emergency,') }}
                <a class="text-white" href="#">{{ __('call 9-1-1') }}</a>{{ __('or visit your local Emergency Room.') }}
            </p>
        </div>
    </div>
@endsection
