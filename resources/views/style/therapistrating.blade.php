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
                    <i class="fa-solid fa-circle-dot current"></i>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <span>Specialities</span>
                    <i class="fa-solid fa-circle-dot"></i>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <span>Priorities</span>
                    <i class="fa-solid fa-circle-dot"></i>
                </div>
            </div>
        </div>
        <form action="{{route('style.therapistrating')}}" method="POST">
            @csrf
        <div class="my-5">
            <h1 class="mb-4">{{ __('Rate your interest in each type.') }}</h1>
            <div class="row">
                <div class="col-md mb-md-0 mb-5">
                    <div class="card rounded-3 h-100">
                        <div class="card-header lead py-3">
                            Action-oriented
                        </div>
                        <div class="card-body text-start text-dark">
                            <div class=" d-flex flex-column">
                                <div class="pb-2">
                                    <p class="card-text pb-1">{{ __('This provider will be:') }}</p>
                                    <p class="card-title">{{ __('Hands-on and engaging.') }}</p>
                                </div>
                                <div class="pb-2">
                                    <p class="card-text pb-1">{{ __('They offer:') }}</p>
                                    <p class="card-title">
                                        {{ __('Concrete advice about tools you should practice and ways you should challenge your thought patterns.') }}
                                    </p>
                                </div>
                                <div class="pb-2">
                                    <p class="card-text pb-1">{{ __('You’ll receive:') }}</p>
                                    <p class="card-title">
                                        {{ __('Weekly feedback and sometimes homework between sessions.') }}</p>
                                </div>
                                <div class="pb-2">
                                    <p class="card-text pb-1">{{ __('Together:') }}</p>
                                    <p class="card-title">{{ __('You’ll outline your specific goals.') }}</p>
                                </div>
                            </div>
                            <div class="border-top">
                                <input class="w-100 my-3" type="range" name="action_oriented" id="">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="card-title">
                                        Not my style
                                    </span>
                                    <span class="card-title">
                                        Yes please! </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-md-0 mb-5">
                    <div class="card rounded-3 h-100">
                        <div class="card-header lead py-3">
                            Relational and reflective </div>
                        <div class="card-body text-start text-dark">
                            <div class="">
                                <div class="pb-2">
                                    <p class="card-text">{{ __('This provider will be:') }}</p>
                                    <p class="card-title">{{ __('There for you to share anything and everything on your mind.') }}</p>
                                </div>
                                <div class="pb-2">
                                    <p class="card-text">{{ __('They offer:') }}</p>
                                    <p class="card-title">
                                        {{ __('Patterns: piecing together aspects of your life to help increase your self-awareness.') }}
                                    </p>
                                </div>
                                <div class="pb-2">
                                    <p class="card-text">{{ __('You’ll receive:') }}</p>
                                    <p class="card-title">
                                        {{ __('The ability to better understand yourself.') }}</p>
                                </div>
                                <div class="pb-2">
                                    <p class="card-text">{{ __('Together:') }}</p>
                                    <p class="card-title">{{ __('You’ll better understand the root of distressing feelings you have been dealing with for a long time.') }}</p>
                                </div>
                            </div>
                            <div class="border-top">
                                <input class="w-100 my-1" type="range" name="relational_and_reflective" id="">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="card-title">
                                        Not my style
                                    </span>
                                    <span class="card-title">
                                        Yes please! </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-md-0 mb-5">
                    <div v class="card rounded-3 h-100">
                        <div class="card-header lead py-3">
                            {{__('Creative and integrative')}} </div>
                        <div class="card-body text-start text-dark">
                            <div class="">
                                <div class="pb-1">
                                    <p class="card-text">{{ __('This provider will be:') }}</p>
                                    <p class="card-title">{{ __('Guiding you through holistic activities so that you can connect to your body and your experience.') }}</p>
                                </div>
                                <div class="pb-1">
                                    <p class="card-text">{{ __('They offer:') }}</p>
                                    <p class="card-title">
                                        {{ __('Creative opportunities like hypnotherapy, art therapy, meditation or music therapy.') }}
                                    </p>
                                </div>
                                <div class="pb-1">
                                    <p class="card-text">{{ __('You’ll receive:') }}</p>
                                    <p class="card-title">
                                        {{ __('The ability to access and process your feelings, particularly if words alone aren’t helpful for you.') }}</p>
                                </div>
                                <div class="pb-1">
                                    <p class="card-text">{{ __('Together:') }}</p>
                                    <p class="card-title">{{ __('You’ll relieve blockages and experience understanding.') }}</p>
                                </div>
                            </div>
                            <div class="border-top">
                                <input class="w-100 my-1" type="range" name="creative_and_integrative" id="">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="card-title">
                                        {{__('Not my style')}}
                                    </span>
                                    <span class="card-title">
                                        {{__('Yes please!')}} </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-5">
            <div>
                    <button class="btn btn-warning text-white rounded-pill fw-bold btn-lg px-5"
                        type="submit">{{ __('Next') }}</button>
            </div>
            <div class="d-flex justify-content-center mt-2 mb-5">
                <a href="{{ url()->previous() }}" class="text-decoration-none text-white lead"><i
                        class="fa-solid fa-chevron-left me-1"></i>{{ __('1 of 1') }}</a>
            </div>
        </div>
    </form>
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
