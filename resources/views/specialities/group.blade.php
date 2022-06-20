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
        <form action="{{route('specialities.group')}}" method="POST">
            @csrf
            <div class="groupArray"></div>
        <div class="mt-5">
            <div class="text-center">
                <h1>What would you like to work on?</h1>
                <p class="lead">Choose all that may apply:</p>
            </div>
            <div class="row justify-content-between mt-5">
                <div class="col-md my-md-0 my-2">
                    <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-3 group" data-value="Health" type="button">
                        Health
                    </button>
                </div>
                <div class="col-md my-md-0 my-2">
                    <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-3 group" data-value="Identity" type="button">
                        Identity
                    </button>
                </div>
                <div class="col-md my-md-0 my-2">
                    <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-3 group" data-value="Life" type="button">
                        Life
                    </button>
                </div>
                <div class="col-md my-md-0 my-2">
                    <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-3 group" data-value="Relationships" type="button">
                        Relationships
                    </button>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-3 my-lg-4 my-2">
                    <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-3 group" data-value="Work" type="button">
                        Work
                    </button>
                </div>
            </div>
        </div>
        <div class="mt-5">
                <button class="btn btn-warning text-white rounded-pill fw-bold btn-lg px-5"
                    type="submit">{{ __('Next') }}</button>
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
        file_count.num = 0;
        function file_count() {
            return file_count.num++;
        }
        $('.group').click(function(){
            var value = $(this).attr('data-value');
            c = file_count();
            $('.groupArray').append("<input type='hidden' name='group[" + c + "]' id='group_" + c + "' value='" + value + "'>");
        });
    </script>
@endpush
