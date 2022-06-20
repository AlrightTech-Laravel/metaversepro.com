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
                    <i class="fa-solid fa-circle done "></i>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <span>Logistics</span>
                    <i class="fa-solid fa-circle-dot current"></i>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <span>Style</span>
                    <i class="fa-solid fa-circle-dot"></i>
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
        <div class="mt-5">
            <form action="{{ route('logistics.zip') }}" method="POST">
                @csrf
                <div class="text-center">
                    <h1>What’s your zip code?</h1>
                    <p class="lead mt-3 mb-5">
                        It is important that your provider is licensed in your state of
                        residence.
                    </p>
                </div>
                <div class="row mt-3 d-flex justify-content-center">
                    <div class="col">
                        <input type="number" minlength="5" maxlength="5" name="zip" id="zip-code-input"
                            class="fs-2 border-bottom border-0 bg-transparent w-25" required />
                    </div>
                </div>
                <div class="mt-5">
                    <a onclick="checkZipValidation(event);" href="{{ route('match.logistics.inperson') }}">
                        <button type="submit" class="btn btn-warning text-white rounded-pill fw-bold btn-lg px-5"
                            type="button">{{ __('Next') }}</button>
                    </a>
                </div>
            </form>
            <div class="text-center mt-2">
                <i class="fa-solid fa-circle done"></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle-dot current"></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>
            </div>
            <div class="d-flex justify-content-center mt-2 mb-5">
                <a href="{{ url()->previous() }}" class="text-decoration-none text-white lead"><i
                        class="fa-solid fa-chevron-left me-1"></i>{{ __('3 of 11') }}</a>
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
            const zipCodeInput = document.getElementById("zip-code-input");
            const zipArray = [
                "10001",
                "10002",
                "10003",
                "10004",
                "10005",
            ];

            function checkZipValidation(e) {
                if (zipCodeInput.value.length != 5) {
                    e.preventDefault();
                    zipCodeInput.setCustomValidity("Please provide valid zip code")
                    zipCodeInput.reportValidity()
                }
                setTimeout(() => {
                    zipCodeInput.setCustomValidity("")
                }, 1500);

            }
        </script>
    @endpush
