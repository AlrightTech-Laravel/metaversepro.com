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
            <h1>Where would you like your provider to be located?</h1>
            <span class="lead">Choose all that may apply:</span>
          </div>
          <form action="{{route('logistics.location')}}" method="POST">
            @csrf
            <div class="locationArray"></div>
            <div class="row justify-content-between mt-5">
                <div class="col-lg-3 my-lg-0 my-2">
                <button
                    class="btn btn-light input multiple btn-lg rounded-pill px-5 py-4 w-100 location" data-value="Brooklyn"
                    type="button"
                >
                    Brooklyn
                </button>
                </div>
                <div class="col-lg-3 my-lg-0 my-2">
                <button
                    class="btn btn-light input multiple btn-lg rounded-pill px-5 py-4 w-100 location" data-value="Long Island"
                    type="button"
                >
                    Long Island
                </button>
                </div>
                <div class="col-lg-3 my-lg-0 my-2">
                <button
                    class="btn btn-light input multiple btn-lg rounded-pill px-5 py-4 w-100 location" data-value="Manhattan"
                    type="button"
                >
                    Manhattan
                </button>
                </div>
                <div class="col-lg-3 my-lg-0 my-2">
                <button
                    class="btn btn-light input multiple btn-lg rounded-pill px-5 py-4 w-100 location" data-value="Queens"
                    type="button"
                >
                    Queens
                </button>
                </div>
                </button>
                </div>

                <div class="row justify-content-center mt-3">
                    <div class="col-lg-4 my-lg-0 my-2">
                    <button
                        class="btn btn-light input multiple btn-lg rounded-pill px-5 py-4 w-100 location" data-value="Rockland Country"
                        type="button"
                    >
                        Rockland Country
                    </button>
                    </div>
                    <div class="col-lg-4 my-lg-0 my-2">
                    <button
                        class="btn btn-light input multiple btn-lg rounded-pill px-5 py-4 w-100 location" data-value="Westchester"
                        type="button"
                    >
                        Westchester
                    </button>
                    </div>
                    <div class="col-lg-4 my-lg-0 my-2">
                    <button
                        class="btn btn-light input multiple btn-lg rounded-pill px-5 py-4 w-100 location" data-value="Fit it more important to me than location"
                        type="button"
                    >
                        Fit it more important to me than location
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
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle-dot current"></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>
                <i class="fa-solid fa-circle-dot "></i>
                {{-- <i class="fa-solid fa-circle-dot "></i> --}}
            </div>
            <div class="d-flex justify-content-center mt-2 mb-5">
                <a href="{{ url()->previous() }}" class="text-decoration-none text-white lead"><i
                        class="fa-solid fa-chevron-left me-1"></i>{{ __('5 of 10') }}</a>
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
        $('.location').click(function(){
            var value = $(this).attr('data-value');
            c = file_count();
            $('.locationArray').append("<input type='hidden' name='location[" + c + "]' id='location_" + c + "' value='" + value + "'>");
        });
    </script>
    @endpush
