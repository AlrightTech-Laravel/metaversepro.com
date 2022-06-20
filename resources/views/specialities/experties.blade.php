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
        <form action="{{route('specialities.experties')}}" method="POST">
            @csrf
            <div class="expertiesArray"></div>
        <div class="mt-5">
            <div class="text-center">
                <h1>
                    Which areas would you like your provider to have expertise in?
                </h1>
                <p class="lead">
                    Choose up to 8 specializations. If there are additional issues you'd
                    like to work on, don't worry - you'll be able to discuss them with
                    your match before scheduling your first session.
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <p class="lead">Health</p>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="ADD/ADHD" type="button">
                    ADD/ADHD
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Addiction and Substance Use" type="button">
                    Addiction and Substance Use
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Anxiety" type="button">
                    Anxiety
                </button>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Bipolar Disorder" type="button">
                    Bipolar Disorder
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Body Image" type="button">
                    Body Image
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Borderline Personality Disorder" type="button">
                    Borderline Personality Disorder
                </button>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Chronic Illness" type="button">
                    Chronic Illness
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Depression" type="button">
                    Depression
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Eating Disorder" type="button">
                    Eating Disorder
                </button>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Fertility" type="button">
                    Fertility
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Food-Related Stress" type="button">
                    Food-Related Stress
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Gambling/Crypto Addiction" type="button">
                    Gambling/Crypto Addiction
                </button>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Insomnia" type="button">
                    Insomnia
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Intrusive Thoughts" type="button">
                    Intrusive Thoughts
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Mingraines or Chronic Headaches" type="button">
                    Mingraines or Chronic Headaches
                </button>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Mood" type="button">
                    Mood
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Obsessive" type="button">
                    Obsessive-Compulsive Disorder
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Personality Disorder" type="button">
                    Personality Disorder
                </button>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Post Partam Depression" type="button">
                    Post Partam Depression
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Post-Traumatic Stress Disorder(PTSD)" type="button">
                    Post-Traumatic Stress Disorder(PTSD)
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Psychopharmacology/Medication Management" type="button">
                    Psychopharmacology/Medication Management
                </button>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Phychosis" type="button">
                    Phychosis
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Sex Addiction" type="button">
                    Sex Addiction
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Sexual Dysfunction" type="button">
                    Sexual Dysfunction
                </button>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Special Needs" type="button">
                    Special Needs
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Sucidal  Feelings" type="button">
                    Sucidal Feelings
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Trichotillomania/Body-Focused Repetitive Disease" type="button">
                    Trichotillomania/Body-Focused Repetitive Disease
                </button>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 experties" data-value="Voices Visions or perceptual disturbance" type="button">
                    Voices Visions or perceptual disturbance
                </button>
            </div>
        </div>
        <div class="mt-5">
                <button class="btn btn-warning text-white rounded-pill fw-bold btn-lg px-5"
                    type="submit">{{ __('Next') }}</button>
        </div>
        </form>
        <div class="text-center mt-2">
            <i class="fa-solid fa-circle done "></i>
            <i class="fa-solid fa-circle-dot current"></i>
            <i class="fa-solid fa-circle-dot "></i>
            <i class="fa-solid fa-circle-dot "></i>
        </div>
        <div class="d-flex justify-content-center mt-2 mb-5">
            <a href="{{ url()->previous() }}" class="text-decoration-none text-white lead"><i
                    class="fa-solid fa-chevron-left me-1"></i>{{ __('2 of 4') }}</a>
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
        $('.experties').click(function(){
            var value = $(this).attr('data-value');
            c = file_count();
            $('.expertiesArray').append("<input type='hidden' name='experties[" + c + "]' id='experties_" + c + "' value='" + value + "'>");
        });
    </script>
@endpush
