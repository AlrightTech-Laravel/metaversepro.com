@extends('layouts.app')

@push('css')
    <style>
        /* .current{
                   color: #ffc107;
               } */

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
    <form action="{{route('logistics.email')}}" method="POST">
        @csrf
        <div class="mt-5">
            <div class="text-center">
                <h1>What is your email address?</h1>
                <p class="lead mt-3 mb-5">We'll use it to send you your matches.</p>
              </div>
              <div class="row mt-3 d-flex justify-content-center">
                <div class="col">
                  <input
                    type="email"
                    name="email"
                    id=""
                    class="fs-2 border-0 border-bottom bg-transparent"
                    style="
                      border: 0;
                      background: none;
                      outline: none;
                      border-bottom: 1px solid #32668f;
                    "
                    required
                  />
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-12">
                  <div class="d-flex">
                    <input
                      type="checkbox"
                      name=""
                      id=""
                      class="me-3 checkbox rounded-0"
                    />
                    <p>
                      By clicking this box, I acknowledge that I have read,
                      understood, and agree to the <a class="text-white" href="">Terms of Use</a> and
                      <a href="" class="text-white">Privacy Policy</a>.
                    </p>
                  </div>
                  <div class="d-flex">
                    <input
                      type="checkbox"
                      name=""
                      id=""
                      class="me-3 checkbox rounded-0"
                    />
                    <p>
                      I'd like to receive MyWellbeing's newsletter with free mental
                      health tips, tools, and perspective.
                    </p>
                  </div>
                </div>
              </div>
        <div class="mt-5">
                <button class="btn btn-warning text-white rounded-pill fw-bold btn-lg px-5"
                    type="submit">{{ __('Next') }}</button>
        </div>
        </form>
        <div class="text-center mt-2">
            <i class="fa-solid fa-circle done"></i>
            <i class="fa-solid fa-circle-dot current"></i>
            <i class="fa-solid fa-circle-dot "></i>
            <i class="fa-solid fa-circle-dot "></i>
            <i class="fa-solid fa-circle-dot "></i>
            <i class="fa-solid fa-circle-dot "></i>
            <i class="fa-solid fa-circle-dot "></i>
            <i class="fa-solid fa-circle-dot "></i>
            <i class="fa-solid fa-circle-dot "></i>
            <i class="fa-solid fa-circle-dot "></i>
            {{-- <i class="fa-solid fa-circle-dot "></i> --}}
        </div>
        <div class="d-flex justify-content-center mt-2 mb-5">
            <a href="{{ url()->previous() }}" class="text-decoration-none text-white lead"><i
                    class="fa-solid fa-chevron-left me-1"></i>{{ __('2 of 10') }}</a>
        </div>
        <div class="lead">
            <p>{{ __('If you are in immediate need of services, feeling unsafe in this current moment, or are experiencing
                                                            thoughts of harming yourself or others, please do not use this site. Instead,') }}
                <a class="text-white" href="#">{{ __('please use one of these resources.') }}</a>
                {{ __('For a medical emergency,') }}
                <a class="text-white" href="#">{{ __('call 9-1-1') }}</a>{{ __('or visit your local Emergency Room.') }}
            </p>
        </div>
    </div>
@endsection
