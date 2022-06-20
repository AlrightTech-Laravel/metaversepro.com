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
                    <i class="fa-solid fa-circle done "></i>
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
                    <i class="fa-solid fa-circle-dot current"></i>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <span>Priorities</span>
                    <i class="fa-solid fa-circle-dot"></i>
                </div>
            </div>
        </div>
        <form action="{{route('specialities.techniquerequest')}}" method="POST">
            @csrf
        <div class="mt-5">
            <div class="text-center">
                <h1>
                    Would you like to request a particular type of care or technique?
                </h1>
                <a href="" class="text-white lead">What if I don't Know?</a>
            </div>
        </div>
        <input type="hidden" name="techniquerequest" id="techniquerequest">
        <div class="row justify-content-center mt-5">
            <div class="col-2 ">
                <button class="btn btn-light input btn-lg rounded-circle p-5 techniquerequest" data-value="Yes" type="button">
                    Yes
                </button>
            </div>
            <div class="col-2 ">
                <button class="btn btn-light input btn-lg rounded-circle p-5 techniquerequest" data-value="No" type="button">
                    No
                </button>
            </div>
        </div>
        <div class="mt-5">
                <button class="btn btn-warning text-white rounded-pill fw-bold btn-lg px-5"
                    type="submit">{{ __('Next') }}</button>
        </div>
        </form>
        <div class="text-center mt-2">
            <i class="fa-solid fa-circle done "></i>
            <i class="fa-solid fa-circle done"></i>
            <i class="fa-solid fa-circle-dot current"></i>
            <i class="fa-solid fa-circle-dot "></i>
        </div>
        <div class="d-flex justify-content-center mt-2 mb-5">
            <a href="{{ url()->previous() }}" class="text-decoration-none text-white lead"><i
                    class="fa-solid fa-chevron-left me-1"></i>{{ __('3 of 4') }}</a>
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
        $(".techniquerequest").click(function(){
            var value = $(this).attr('data-value');
            $("#techniquerequest").val(value);
        });
    </script>
@endpush
