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
                    <i class="fa-solid fa-circle-dot current"></i>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <span>Logistics</span>
                    <i class="fa-solid fa-circle-dot"></i>
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

        <div>
            <div class="text-center">
                <h1>{{ __('How would you prefer your provider identify?') }}</h1>
                <span class="lead">{{ __('Choose all that may apply:') }}</span>
            </div>
            <form method="POST" action="{{route('begins.gender')}}">
                @csrf
                <div class="row justify-content-between mt-5">
                    <input type="hidden" id="gender" name="gender">
                    <div class="col-md my-md-0 my-2">
                        <button class="btn btn-light input btn-lg rounded-pill px-5 w-100 gender"
                            type="button"  value="female"  data-value="female">{{ __('Female') }}</button>
                    </div>
                    <div class="col-md my-md-0 my-2">
                        <button class="btn btn-light input btn-lg rounded-pill px-5 w-100 gender"
                            type="button"  value="male"  data-value="male">{{ __('Male') }}</button>
                    </div>
                    <div class="col-md my-md-0 my-2">
                        <button class="btn btn-light input btn-lg rounded-pill px-5 w-100 gender"
                            type="button"  value="non-binary"  data-value="non-binary">{{ __('Non-binary') }}</button>
                    </div>
                    <div class="col-md my-md-0 my-2">
                        <button class="btn btn-light input btn-lg rounded-pill px-5 w-100 gender"
                            type="button"  value="no-prefrence"  data-value="no-prefrence">{{ __('No preference') }}</button>
                    </div>
                </div>
                <div class="mt-5">
                    <a id="next-btn" href="javascript:void(0)">
                        <button type="submit" class="custom-tooltip btn btn-warning text-white rounded-pill fw-bold btn-lg px-5"
                            type="button">{{ __('Next') }}
                            <span class="custom-tooltiptext">Please select one of the options above!</span>
                        </button>
                    </a>
                </div>
            </form>
            <div class="text-center mt-2">
                <i class="fa-solid fa-circle-dot current"></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>

            </div>
            <div class="d-flex justify-content-center mt-2 mb-5">
                <a href="{{ url()->previous() }}" class="text-decoration-none text-white lead"><i
                        class="fa-solid fa-chevron-left me-1"></i>{{ __('1 of 4') }}</a>
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
        $(".gender").click(function(){
            var value = $(this).attr('data-value');
            $("#gender").val(value);
        });

    </script>
@endpush
