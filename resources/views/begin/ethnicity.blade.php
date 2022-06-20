@extends('layouts.app')

@push('css')
    <style>
        form .btn{
            /* font-size: 14px !important; */
        }

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
                <h1>{{ __('Are you looking for a provider who identifies with a specific') }} <br class="d-md-block d-none">
                    {{ __('ethnicity/ethnicities?') }}</h1>
                <span class="lead">{{ __('Choose all that may apply:') }}</span>
            </div>
            <form action="{{route('begins.ethnicity')}}" method="POST">
                @csrf
                <div class="ethnicityArray">
                </div>
                <div class="row justify-content-between mt-5 g-4">
                    <div class="col-md-4 mb-md-3 my-md-0 my-2">
                        <button class="btn btn-light input multiple btn-lg rounded-pill px-5 w-100 ethnicity" data-value="Asian"
                            type="button">{{ __('Asian') }}</button>
                    </div>
                    <div class="col-md-4 mb-md-3 my-md-0 my-2">
                        <button class="btn btn-light input multiple btn-lg rounded-pill px-5 w-100 ethnicity" data-value="Black or American African"
                            type="button">{{ __('Black or American African') }}</button>
                    </div>
                    <div class="col-md-4 mb-md-3 my-md-0 my-2">
                        <button class="btn btn-light input multiple btn-lg rounded-pill px-5 w-100 ethnicity" data-value="Hispanic or Latnix"
                            type="button">{{ __('Hispanic or Latnix') }}</button>
                    </div>
                    <div class="col-md-4 mb-md-3 my-md-0 my-2">
                        <button class="btn btn-light input multiple btn-lg rounded-pill px-5 w-100 ethnicity" data-value="Miidle Eastern or Noth African"
                            type="button">{{ __('Miidle Eastern or Noth African') }}</button>
                    </div>
                    <div class="col-md-4 mb-md-3 my-md-0 my-2">
                        <button class="btn btn-light input multiple btn-lg rounded-pill px-5 w-100 ethnicity" data-value="Native or Indigenous American"
                            type="button">{{ __('Native or Indigenous American') }}</button>
                    </div>
                    <div class="col-md-4 mb-md-3 my-md-0 my-2">
                        <button class="btn btn-light input multiple btn-lg rounded-pill px-5 w-100 ethnicity" data-value="Pacific Islander"
                            type="button">{{ __('Pacific Islander') }}</button>
                    </div>
                    <div class="col-md-4 mb-md-3 my-md-0 my-2">
                        <button class="btn btn-light input multiple btn-lg rounded-pill px-5 w-100 ethnicity" data-value="White"
                            type="button">{{ __('White') }}</button>
                    </div>
                    <div class="col-md-4 mb-md-3 my-md-0 my-2">
                        <button class="btn btn-light input multiple btn-lg rounded-pill px-5 w-100 ethnicity" data-value="No preference"
                            type="button">{{ __('No preference') }}</button>
                    </div>
                    <div class="col-md-4 mb-md-3 mx-auto my-md-0 my-2">
                        <button class="btn btn-light input multiple btn-lg rounded-pill px-5 w-100 ethnicity" data-value="Other"
                            type="button">{{ __('Other') }}</button>
                    </div>
                </div>
                <div class="mt-5">
                        <button class="btn btn-warning text-white rounded-pill fw-bold btn-lg px-5"
                            type="submit">{{ __('Next') }}</button>
                </div>
            </form>
            <div class="text-center mt-2">
                <i class="fa-solid fa-circle done"></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle done"></i>
                <i class="fa-solid fa-circle-dot current "></i>

            </div>
            <div class="d-flex justify-content-center mt-2 mb-5">
                <a href="{{ url()->previous() }}" class="text-decoration-none text-white lead"><i
                        class="fa-solid fa-chevron-left me-1"></i>{{ __('4 of 4') }}</a>
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
        file_count.num = 0;
        function file_count() {
            return file_count.num++;
        }
        $('.ethnicity').click(function(){
            var value = $(this).attr('data-value');
            c = file_count();
            $('.ethnicityArray').append("<input type='hidden' name='ethnicity[" + c + "]' id='ethnicity_" + c + "' value='" + value + "'>");
        });
    </script>
@endpush
