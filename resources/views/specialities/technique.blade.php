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
        <form action="{{route('specialities.technique')}}" method="POST">
         @csrf
        <div class="mt-5">
            <div class="text-center">
                <h1>Types and techniques</h1>
                <p>Choose all that you would like your provider to be trained in:</p>
            </div>
        </div>
        <div class="techniqueArray"></div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Accelerated Experiential Dynamic Psychotherapy(AEDP)" type="button">
                    Accelerated Experiential Dynamic Psychotherapy(AEDP)
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Acceptance Committment Thrapy(ACT)" type="button">
                    Acceptance Committment Thrapy(ACT)
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Adlerian  Thrapy" type="button">
                    Adlerian Thrapy
                </button>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Art  Thrapy" type="button">
                    Art Thrapy
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Body  Focused Thrapy(ex:Tapping)" type="button">
                    Body Focused Thrapy(ex:Tapping)
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Brainspotting(BSP)" type="button">
                    Brainspotting(BSP)
                </button>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Client-Centered Thrapy/Rogerian Thrapy" type="button">
                    Client-Centered Thrapy/Rogerian Thrapy
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Coaching" type="button">
                    Coaching
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Cognitive Behavioral Thrapy(CBT)" type="button">
                    Cognitive Behavioral Thrapy(CBT)
                </button>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Cognitive Behavioral Thrapy for Psychosis(CBTp)" type="button">
                    Cognitive Behavioral Thrapy for Psychosis(CBTp)
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Cognitive Behavioral Thrapy-Insomnia(CBT-I)" type="button">
                    Cognitive Behavioral Thrapy-Insomnia(CBT-I)
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Cognitive Processing Thrapy for PTSB(CPT)" type="button">
                    Cognitive Processing Thrapy for PTSB(CPT)
                </button>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Creative/Expressive Arts Thrapy" type="button">
                    Creative/Expressive Arts Thrapy
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Dielectrical" type="button">
                    Dielectrical Behavioral Thrapy(DBT)
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Drame Thrapy" type="button">
                    Drame Thrapy
                </button>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Emotionally Focused Thrapy" type="button">
                    Emotionally Focused Thrapy
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Existential Thrapy" type="button">
                    Existential Thrapy
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Exposure and Response Prevention(ERP) Thrapy" type="button">
                    Exposure and Response Prevention(ERP) Thrapy
                </button>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Eye Movement Desensitization and Reprocessing(EMDR)" type="button">
                    Eye Movement Desensitization and Reprocessing(EMDR)
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Family Constellations" type="button">
                    Family Constellations
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Family Systems" type="button">
                    Family Systems
                </button>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Gestalt" type="button">
                    Gestalt Thrapy
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Gottmad" type="button">
                    Gottmad Mathod
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Hypnosis" type="button">
                    Hypnosis or Hypnotherapy
                </button>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Internal" type="button">
                    Internal Family Systems(IFS)
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Medication" type="button">
                    Medication or Mindfulness
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Psychoanalysis" type="button">
                    Psychoanalysis
                </button>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Psychodynamic" type="button">
                    Psychodynamic Therapy
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Rtional" type="button">
                    Rtional Emotive Behaviour Thrapy(REBT)
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Reiki" type="button">
                    Reiki
                </button>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Safety" type="button">
                    Safety Planning
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Sex" type="button">
                    Sex Thrapy
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Social" type="button">
                    Social Justice
                </button>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Solution" type="button">
                    Solution-Focused Thrapy
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Somatic" type="button">
                    Somatic Experiencing
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Spiritually" type="button">
                    Spiritually Integrated Psychotherapy(SIP)
                </button>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Teaching" type="button">
                    Teaching
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Walk" type="button">
                    Walk and Walk Thrapy or Outdoor Thrapy
                </button>
            </div>
            <div class="col-lg-4 my-2">
                <button class="btn btn-light input multiple btn-lg rounded-pill w-100 py-4 h-100 technique " data-value="Yoga" type="button">
                    Yoga
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
            <i class="fa-solid fa-circle done"></i>
            <i class="fa-solid fa-circle done"></i>
            <i class="fa-solid fa-circle-dot current"></i>
        </div>
        <div class="d-flex justify-content-center mt-2 mb-5">
            <a href="{{ url()->previous() }}" class="text-decoration-none text-white lead"><i
                    class="fa-solid fa-chevron-left me-1"></i>{{ __('4 of 4') }}</a>
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
        $('.technique').click(function(){
            var value = $(this).attr('data-value');
            c = file_count();
            $('.techniqueArray').append("<input type='hidden' name='technique[" + c + "]' id='technique_" + c + "' value='" + value + "'>");
        });
    </script>
@endpush
