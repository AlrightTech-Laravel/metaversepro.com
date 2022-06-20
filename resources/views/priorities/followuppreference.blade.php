@extends('layouts.app')

@push('css')
    <style>

    </style>
@endpush

@section('content')
    <div class="container text-center text-white">
        <div class="d-flex justify-content-evenly mb-5">
            <div class="col">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <span>Identity</span>
                    <i class="fa-solid fa-circle done"></i>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <span>Logistics</span>
                    <i class="fa-solid fa-circle done"></i>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <span>Style</span>
                    <i class="fa-solid fa-circle done"></i>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <span>Specialities</span>
                    <i class="fa-solid fa-circle done"></i>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <span>Priorities</span>
                    <i class="fa-solid fa-circle-dot current"></i>
                </div>
            </div>
        </div>
        <form action="{{route('priorities.followuppreference')}}" method="POST">
            @csrf
            <input type="hidden" name="followuppreference" id="followuppreference">
        <div class="my-5">
            <h1 class="mb-4">{{ __('How would you like your matches to follow up?') }}</h1>
            <span
                class="lead">{{ __('What information would you like to share with your matches so that they can reach out and schedule a free phone consultation?') }}</span>
        </div>
        <div class="row">
            <div class="col-lg mb-lg-0 mb-2">
                <button type="button" class="btn btn-light input rounded-pill btn-lg px-3 h-100 w-100 followuppreference" data-value="Email address">{{__('Email address')}}</button>
            </div>
            <div class="col-lg mb-lg-0 mb-2">
                <button type="button" class="btn btn-light input rounded-pill btn-lg px-3 h-100 w-100 followuppreference" data-value="Phone number">{{__('Phone number')}}</button>
            </div>
            <div class="col-lg mb-lg-0 mb-2">
                <button type="button" class="btn btn-light input rounded-pill btn-lg px-3 h-100 w-100 followuppreference" data-value="Email address and Phone number">{{__('Email address and Phone number')}}</button>
            </div>
            <div class="col-lg mb-lg-0 mb-2">
                <button type="button" class="btn btn-light input rounded-pill btn-lg px-3 h-100 w-100 followuppreference" data-value="Neither, I will contact provider(s) when I\'m ready">{{__('Neither, I will contact provider(s) when I\'m ready')}}</button>
            </div>
        </div>
        <div class="my-5">
            <div>
                    <button  class="btn btn-warning text-white rounded-pill fw-bold btn-lg px-5" type="submit"
                        style="max-width: 350px; width:100%;">{{ __('Next') }}</button>
            </div>
            <div class="text-center mt-2">
                <i class="fa-solid fa-circle done"></i>
            </div>
            <div class="d-flex justify-content-center mt-2 mb-5">
                <a href="{{ url()->previous() }}" class="text-decoration-none text-white lead"><i
                        class="fa-solid fa-chevron-left me-1"></i>{{ __('1 of 1') }}</a>
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
@endsection
@push('js')
    <script>
        $(".followuppreference").click(function(){
            var value = $(this).attr('data-value');
            $("#followuppreference").val(value);
        });
    </script>
@endpush
