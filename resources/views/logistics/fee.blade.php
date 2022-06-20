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
            <form action="{{route('logistics.fee')}}" method="POST">
                @csrf
            <div class="text-center">
                <h1>Please Choose your fee per session:</h1>
            </div>
            <div class="row mt-5 px-5 mt-5">
              <div class="col">
                <p class="lead">
                  Slide the fee range to the highest fee per session that you can
                  afford. The higher the fee per session, the more providers you
                  will be eligible to match with.
                </p>
              </div>
            </div>
            <div class="row px-5">
              <div class="col">
                <p class="lead">
                  Payment is specifically outside of insurance. If you need to use
                  your insurance in-network, please do not complete this form.
                  <a href="" class="text-white"> Click here</a> for information about out-of-network benefits,
                  state specific and national low fee resources.
                </p>
              </div>
            </div>
            <div class="row px-5">
              <div class="col">
                <a href="" class="text-white lead">
                  Confused or unsure what to choose? Here are helpful tips.
                </a>
              </div>
            </div>

            <div class="row justify-content-center mt-5">
              <div class="col-6">
                <input type="range" class="form-range" id="customRange1" name="fee" />
                <div class="price d-flex justify-content-between">
                  <p>100$</p>
                  <p>350$</p>
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
                <i class="fa-solid fa-circle done"></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle-dot current"></i>
                <i class="fa-solid fa-circle-dot "></i>
                {{-- <i class="fa-solid fa-circle-dot "></i> --}}
            </div>
            <div class="d-flex justify-content-center mt-2 mb-5">
                <a href="{{ url()->previous() }}" class="text-decoration-none text-white lead"><i
                        class="fa-solid fa-chevron-left me-1"></i>{{ __('9 of 10') }}</a>
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
        </form>
        </div>
    @endsection
