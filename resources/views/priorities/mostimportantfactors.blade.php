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

        <div class="my-5">
            <h1 class="mb-4">{{ __('How would you rank the importance of these factors in your match?') }}</h1>
            <div class="d-felx flex-column text-center">
                <span class="lead">{{ __('Most important') }}</span>
                <div class="container my-5 lead fw-bold text-dark">
                    <div draggable="true" class="box bg-light rounded-pill py-2 mx-auto mb-2">
                        <div class="d-flex justify-content-between px-4">
                            <span>{{ __('Age') }}</span>
                            <div class="">
                                <i class="fa-solid fa-bars"></i>
                                <i class="fa-solid fa-up-down"></i>
                            </div>
                        </div>
                    </div>
                    <div draggable="true" class="box bg-light rounded-pill py-2 mx-auto mb-2">
                        <div class="d-flex justify-content-between px-4">
                            <span>{{ __('Ethnicity') }}</span>
                            <div class="">
                                <i class="fa-solid fa-bars"></i>
                                <i class="fa-solid fa-up-down"></i>
                            </div>
                        </div>
                    </div>
                    <div draggable="true" class="box bg-light rounded-pill py-2 mx-auto mb-2">
                        <div class="d-flex justify-content-between px-4">
                            <span>{{ __('Expertise or speciality') }}</span>
                            <div class="">
                                <i class="fa-solid fa-bars"></i>
                                <i class="fa-solid fa-up-down"></i>
                            </div>
                        </div>
                    </div>
                    <div draggable="true" class="box bg-light rounded-pill py-2 mx-auto mb-2">
                        <div class="d-flex justify-content-between px-4">
                            <span>{{ __('Gender') }}</span>
                            <div class="">
                                <i class="fa-solid fa-bars"></i>
                                <i class="fa-solid fa-up-down"></i>
                            </div>
                        </div>
                    </div>
                    <div draggable="true" class="box bg-light rounded-pill py-2 mx-auto mb-2">
                        <div class="d-flex justify-content-between px-4">
                            <span>{{ __('LGBTIA+') }}</span>
                            <div class="">
                                <i class="fa-solid fa-bars"></i>
                                <i class="fa-solid fa-up-down"></i>
                            </div>
                        </div>
                    </div>
                    <div draggable="true" class="box bg-light rounded-pill py-2 mx-auto mb-2">
                        <div class="d-flex justify-content-between px-4">
                            <span>{{ __('Style or personality') }}</span>
                            <div class="">
                                <i class="fa-solid fa-bars"></i>
                                <i class="fa-solid fa-up-down"></i>
                            </div>
                        </div>
                    </div>
                    <div draggable="true" class="box bg-light rounded-pill py-2 mx-auto mb-2">
                        <div class="d-flex justify-content-between px-4">
                            <span>{{ __('SType or technique') }}</span>
                            <div class="">
                                <i class="fa-solid fa-bars"></i>
                                <i class="fa-solid fa-up-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="lead mt-3">{{ __('Least important') }}</span>
            </div>
        </div>
        <div class="my-5">
            <div>
                <a href="{{ route('match.priorities.followuppreference') }}">
                    <button class="btn btn-warning text-white rounded-pill fw-bold btn-lg px-5"
                        type="button" style="max-width: 350px; width:100%;">{{ __('Next') }}</button>
                </a>
            </div>
            <div class="text-center mt-2">
                <i class="fa-solid fa-circle-dot current "></i>
                <i class="fa-solid fa-circle-dot"></i>
            </div>
            <div class="d-flex justify-content-center mt-2 mb-5">
                <a href="{{ url()->previous() }}" class="text-decoration-none text-white lead"><i
                        class="fa-solid fa-chevron-left me-1"></i>{{ __('1 of 2') }}</a>
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
