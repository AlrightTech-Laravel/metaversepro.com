@extends('layouts.app')

@push('css')
    <style>
       /* .current{
           color: #ffc107;
       } */


    </style>
@endpush

{{-- @dd(
Session::get('gender'),
Session::get('lgbtqia'),
Session::get('age'),
Session::get('ethnicity'),
) --}}
@section('content')
    <div class="container text-center text-white">
        <div class="d-flex justify-content-evenly progress-_icons">
            <i class="fa-solid fa-circle done"></i>
            <i class="fa-solid fa-circle-dot current"></i>
            <i class="fa-solid fa-circle-dot"></i>
            <i class="fa-solid fa-circle-dot"></i>
            <i class="fa-solid fa-circle-dot"></i>
        </div>
        <div class="my-5">
            <h1 class="mb-4">{{ __('Logistics') }}</h1>
            <p class="lead">
                {{ __('Next, let\'s nail down the particulars of what you\'re looking for.') }}
            </p>
        </div>
        <div class="my-5">
            <div>
                <a href="{{ route('match.logistics.about') }}">
                    <button
                        class="btn btn-warning text-white rounded-pill fw-bold btn-lg px-5" type="button">{{ __('Let\'s Go') }}</button>
                </a>
            </div>
            <div class="d-flex justify-content-center mt-3 mb-5">
                <a href="{{ url()->previous() }}" class="text-decoration-none text-white lead"><i
                        class="fa-solid fa-chevron-left me-1"></i>{{ __('Back') }}</a>
            </div>
        </div>
        <div class="lead">
            <p>{{ __('If you are in immediate need of services, feeling unsafe in this current moment, or are experiencing
                                                    thoughts of harming yourself or others, please do not use this site. Instead,') }}
                <a class="text-white" href="#">{{ __('please use one of these resources.') }}</a>
                {{ __('For a medical emergency,') }}
                <a class="text-white"
                    href="#">{{ __('call 9-1-1') }}</a>{{ __('or visit your local Emergency Room.') }}
            </p>
        </div>
    </div>
    </div>
@endsection
