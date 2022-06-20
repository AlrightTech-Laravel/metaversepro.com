@extends('layouts.app')

@push('css')
    <style> </style>
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
            <form action="{{route('logistics.whentostart')}}" method="POST">
                @csrf
                <input type="hidden" name="whentostart" id="whentostart">
            <div class="text-center">
              <h1>When are you hoping to begin?</h1>
            </div>
            <div class="row justify-content-center mt-5">
              <div class="col-md-4 my-2">
                <button
                  class="btn btn-light input btn-lg rounded-pill px-5 w-100 h-100 whentostart" data-value="As soon as possible"
                  type="button"
                >
                  As soon as possible
                </button>
              </div>
              <div class="col-md-4 my-2">
                <button
                  class="btn btn-light input btn-lg rounded-pill px-5 w-100 h-100 whentostart" data-value="In a month or so"
                  type="button"
                >
                  In a month or so
                </button>
              </div>
              <div class="col-md-4 my-2">
                <button
                  class="btn btn-light input btn-lg rounded-pill px-5 w-100 h-100 whentostart" data-value="Not sure / just checking things out"
                  type="button"
                >
                  Not sure / just checking things out
                </button>
              </div>
            </div>
            <div class="mt-5">
                    <button class="btn btn-warning text-white rounded-pill fw-bold btn-lg px-5"
                        type="submit">{{ __('Next') }}</button>
            </div>
            </form>
            <div class="text-center mt-2">
                <i class="fa-solid fa-circle done"></i>
                <i class="fa-solid fa-circle done"></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle done"></i>
                <i class="fa-solid fa-circle-dot current"></i>
            </div>
            <div class="d-flex justify-content-center mt-2 mb-5">
                <a href="{{ url()->previous() }}" class="text-decoration-none text-white lead"><i
                        class="fa-solid fa-chevron-left me-1"></i>{{ __('10 of 10') }}</a>
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
        $(".whentostart").click(function(){
            var value = $(this).attr('data-value');
            $("#whentostart").val(value);
        });
        </script>
    @endpush
