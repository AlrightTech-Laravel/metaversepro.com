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
                <h1>{{ __('Is it important to you that your provider identify as') }} <br class="d-md-block d-none">
                    {{ __('LGBTQIA+?') }}</h1>
            </div>
            <form action="{{route('begins.lgbtqia')}}" method="POST">
                @csrf
                <div class="d-flex justify-content-center mt-5">
                    <input type="hidden" name="lgbtqia" id="lgbtqia">
                    <div class="my-md-0 my-2">
                        <button class="btn btn-light input btn-lg rounded-circle px-5 py-5 mx-2 lgbtqia"
                            type="button" data-value="yes">{{ __('Yes') }}</button>
                    </div>
                    <div class="my-md-0 my-2">
                        <button class="btn btn-light input btn-lg rounded-circle px-5 py-5 mx-2 lgbtqia"
                            type="button" data-value="no">{{ __('No') }}</button>
                    </div>
                </div>
                <div class="mt-5">
                        <button class="custom-tooltip btn btn-warning text-white rounded-pill fw-bold btn-lg px-5"
                            type="submit">{{ __('Next') }}
                            <span class="custom-tooltiptext">Please select one of the options above!</span>
                        </button>
                </div>
            </form>
            <div class="text-center mt-2">
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle-dot current"></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>

            </div>
            <div class="d-flex justify-content-center mt-2 mb-5">
                <a href="{{ url()->previous() }}" class="text-decoration-none text-white lead"><i
                        class="fa-solid fa-chevron-left me-1"></i>{{ __('2 of 4') }}</a>
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
        $(".lgbtqia").click(function(){
            var value = $(this).attr('data-value');
            $("#lgbtqia").val(value);
        });
    </script>
@endpush
