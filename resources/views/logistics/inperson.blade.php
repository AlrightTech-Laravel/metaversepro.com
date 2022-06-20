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
          <div class="text-center">
            <h1>Are you looking for in-person or remote care at this time?</h1>
            <p class="lead mt-3 mb-5">
              In light of COVID-19, almost all providers are practicing remotely.
              You may want to begin with your provider remotely, and as cities
              begin to re-open, you may decide you want to transition to in-person
              - that’s okay! You can always discuss this with your provider as the
              situation evolves.
            </p>
          </div>
          <form action="{{route('logistics.inperson')}}" method="POST">
            @csrf
            <div class="row  mt-5 d-flex justify-content-center">
                    <input type="hidden" name="inperson" id="inperson">
                    <div class=" col-md-4  my-2">
                        <button class="btn btn-light input btn-lg rounded-pill px-5 py-4 w-100 inperson" data-value="In-Person Only" type="button" >In-Person Only</button>
                    </div>
                    <div class=" col-md-4  my-2">
                        <button class="btn btn-light input btn-lg rounded-pill px-5 py-4 w-100 inperson" data-value="Remote Only" type="button" >Remote Only</button>
                    </div>
                    <div class=" col-md-4  my-2">
                        <button class="btn btn-light input btn-lg rounded-pill px-5 py-4 w-100 inperson" data-value="No Preferences"
                            type="button" >No Preferences</button>
                    </div>

                    <div class="mt-5">
                            <button type="submit" class="btn btn-warning text-white rounded-pill fw-bold btn-lg px-5 "
                                type="button">{{ __('Next') }}</button>
                    </div>
                </div>
            </form>
            <div class="text-center mt-2">
                <i class="fa-solid fa-circle done"></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle-dot current"></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>
            </div>
            <div class="d-flex justify-content-center mt-2 mb-5">
                <a href="{{ url()->previous() }}" class="text-decoration-none text-white lead"><i
                        class="fa-solid fa-chevron-left me-1"></i>{{ __('4 of 10') }}</a>
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
            $(".inperson").click(function(){
                var value = $(this).attr('data-value');
                $("#inperson").val(value);
            });
        </script>
    @endpush
