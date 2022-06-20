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
            <form action="{{route('logistics.interest')}}" method="POST">
                @csrf
                <input type="hidden" name="interest" id="interest">
                <div class="text-center">
                    <h1>What kind of care are you interested in?</h1>
                    <a href="" class=" text-white mt-5 lead">What are these?</a>
                </div>
                <div class="row justify-content-between mt-5">
                    <div class="col-md-4 my-md-0 my-2">
                    <button
                        class="btn btn-light input btn-lg rounded-pill w-100 h-100 p-3 interest" data-value="1:1 for Adults"
                        type="button"
                    >
                        1:1 for Adults
                    </button>
                    </div>
                    <div class="col-md-4 my-md-0 my-2">
                    <button
                        class="btn btn-light input btn-lg rounded-pill w-100 h-100 p-3 interest" data-value="Couples"
                        type="button"
                    >
                        Couples
                    </button>
                    </div>
                    <div class="col-md-4 my-md-0 my-2">
                    <button
                        class="btn btn-light input btn-lg rounded-pill w-100 h-100 p-3 interest" data-value="1:1 for Children (age 10 and under)"
                        type="button"
                    >
                        1:1 for Children (age 10 and under)
                    </button>
                    </div>
                </div>
                <div class="row justify-content-center mt-lg-3 mt-md-3">
                    <div class="col-md-4 my-md-0 my-2">
                    <button
                        class="btn btn-light input btn-lg rounded-pill w-100 h-100 p-3 interest" data-value="1:1 for Adolescents"
                        type="button"
                    >
                        1:1 for Adolescents
                    </button>
                    </div>
                    <div class="col-md-4 my-md-0 my-2">
                    <button
                        class="btn btn-light input btn-lg rounded-pill w-100 h-100 p-3 interest" data-value="Family Care"
                        type="button"
                    >
                        Family Care
                    </button>
                    </div>
                    <!-- <div class="col-md my-md-0 my-2"></div> -->
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
                <i class="fa-solid fa-circle-dot current"></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>
            </div>
            <div class="d-flex justify-content-center mt-2 mb-5">
                <a href="{{ url()->previous() }}" class="text-decoration-none text-white lead"><i
                        class="fa-solid fa-chevron-left me-1"></i>{{ __('7 of 10') }}</a>
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
        $(".interest").click(function(){
            var value = $(this).attr('data-value');
            $("#interest").val(value);
        });
    </script>
@endpush
