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
            <form action="{{route('logistics.available')}}" method="POST">
                @csrf
                <input type="hidden" name="weekdays" id="weekdays">
                <input type="hidden" name="weekends" id="weekends">
                <div class="text-center">
                <h1>What is your availability?</h1>
                </div>
                <div class="row mt-5">
                <div class="col">
                    <p class="lead">Weekdays</p>
                </div>
                </div>
                <div class="row justify-content-between">
                <div class="col-md my-md-0 my-2">
                    <button
                    class="btn btn-light input btn-lg rounded-pill px-5 w-100 h-100 py-4 weekdays" data-value="Before 9am"
                    type="button"
                    >
                    Before 9am
                    </button>
                </div>
                <div class="col-md my-md-0 my-2">
                    <button
                    class="btn btn-light input btn-lg rounded-pill px-5 w-100 h-100 py-4 weekdays" data-value="9am - 5pm"
                    type="button"
                    >
                    9am - 5pm
                    </button>
                </div>
                <div class="col-md my-md-0 my-2">
                    <button
                    class="btn btn-light input btn-lg rounded-pill px-5 w-100 h-100 py-4 weekdays" data-value="After 5pm"
                    type="button"
                    >
                    After 5pm
                    </button>
                </div>
                </div>

                <div class="row mt-5">
                <div class="col">
                    <p class="lead">Weekends</p>
                </div>
                </div>

                <div class="row justify-content-center">
                <div class="col-md-4 my-lg-0 my-2">
                    <button
                    class="btn btn-light btn-lg rounded-pill px-5 w-100 h-100 py-4 weekends" data-value="9am - 5pm"
                    type="button"
                    >
                    9am - 5pm
                    </button>
                </div>
                <div class="col-md-4 my-lg-0 my-2">
                    <button
                    class="btn btn-light btn-lg rounded-pill px-5 w-100 h-100 py-4 weekends" data-value="After 5pm"
                    type="button"
                    >
                    After 5pm
                    </button>
                </div>
                </div>

              <div class="mt-5">
                    <button class="btn text-center btn-warning text-white rounded-pill fw-bold btn-lg px-5"
                        type="submit">{{ __('Next') }}</button>
            </div>
        </form>
            <div class="text-center mt-2">
                <i class="fa-solid fa-circle done"></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle done"></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle-dot current"></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>
            </div>
            <div class="d-flex justify-content-center mt-2 mb-5">
                <a href="{{ url()->previous() }}" class="text-decoration-none text-white lead"><i
                        class="fa-solid fa-chevron-left me-1"></i>{{ __('8 of 10') }}</a>
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
@push('js')
    <script>
        $(".weekdays").click(function(){
            var value = $(this).attr('data-value');
            $("#weekdays").val(value);
        });

        $(".weekends").click(function(){
            var value = $(this).attr('data-value');
                        $(".weekends").removeClass('selected');

            $(this).addClass('selected');
            $("#weekends").val(value);
        });
    </script>
@endpush
