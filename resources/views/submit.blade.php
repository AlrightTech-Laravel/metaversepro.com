@extends('layouts.app')

@push('css')
    <style>

    </style>
@endpush

@section('content')
<form action="{{route('priorities.submit')}}" method="POST">
    @csrf
    <div class="container text-center text-white">
        <h1 class="text-center my-5">{{ __('Ready to receive your matches?') }}</h1>
        <div class="my-5">
            <div>
                <a href="pages/begin.html">
                    <button
                        class="btn btn-warning text-white rounded-pill fw-bold btn-lg px-5" type="submit">{{ __('Submit') }}</button>
                </a>
            </div>
            <div class="d-flex justify-content-center mt-3 mb-5">
                <a href="{{ url()->previous() }}" class="text-decoration-none text-white lead"><i
                        class="fa-solid fa-chevron-left me-1"></i>{{ __('Back') }}</a>
            </div>
        </div>
        <div class="lead">
            <p>{{ __('If you are in immediate need of services, feeling unsafe in this current moment, or are experiencing                                                                                                                                                                                         thoughts of harming yourself or others, please do not use this site. Instead,') }}
                <a class="text-white" href="#">{{ __('please use one of these resources.') }}</a>
                {{ __('For a medical emergency,') }}
                <a class="text-white"
                    href="#">{{ __('call 9-1-1') }}</a>{{ __('or visit your local Emergency Room.') }}
            </p>
        </div>
    </div>
</form>
@endsection
