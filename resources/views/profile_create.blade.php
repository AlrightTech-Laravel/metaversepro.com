@extends('layouts.app')

@section('content')
    <div class="container bg-light p-5">
      <div class="mb-3 text-center">
        <h1 class="fw-bolder" id="form-title">{{__('Application Form')}}</h1>
        <span class="lead">{{__('Complete the form below to connect and learn more. We look forward to talking in more depth with you soon.')}}</span>
      </div>
        <form class="row g-3">
            <div class="col-md-6">
              <label for="fname" class="form-label lead">{{__('First name *')}}</label>
              <input type="text" class="form-control" id="fname" placeholder="Enter your first name" required>
            </div>
            <div class="col-md-6">
                <label for="lname" class="form-label lead">{{__('Last name *')}}</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your last name" required>
            </div>
            <div class="col-12">
              <label for="inputImage" class="form-label lead">{{{__('Image *')}}}</label>
              <input type="file" class="form-control" id="inputImage" placeholder="Upload and image" required>
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label lead">{{__('Address *')}}</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Enter complete address" required>
            </div>
            <div class="col-md-6">
              <label for="inputService" class="form-label lead">{{__('Service Remote *')}}</label>
              <input type="text" class="form-control" id="inputService" placeholder="Enter remote service type" required>
            </div>
            <div class="col-md-6">
              <label for="inputZip" class="form-label lead">{{__('Zip *')}}</label>
              <input type="" class="form-control" id="inputZip" placeholder="Enter zip code of business needed">
            </div>
            <div class="col-md-12">
                <label for="inputEducation" class="form-label lead">{{__('Education *')}}</label>
                <input type="text" class="form-control" id="inputEducation" placeholder="Enter education level completed" required>
              </div>
              <div class="col-md-6">
                <label for="inputLicense" class="form-label lead">{{__('License *')}}</label>
                <select class="form-select" id="inputLicense" required>
                    <option selected disabled>{{__('are you licensed?')}}</option>
                    <option value="yes">{{__('Yes')}}</option>
                    <option value="no">{{__('No')}}</option>
                  </select>
              </div>
              <div class="col-md-6">
                <label for="inputCertification" class="form-label lead">{{__('Counseling Certification *')}}</label>
                <select class="form-select" id="inputCertification" required>
                    <option selected disabled>{{__('are you certified counseler')}}</option>
                    <option value="yes">{{__('Yes')}}</option>
                    <option value="no">{{__('No')}}</option>
                  </select>
              </div>
              <label for="inputExperties" class="form-label lead">{{__('Experties *')}}</label>
            <div class="col-md-3 col-6">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  {{__('Art therapy')}}
                </label>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  {{__('Healing Touch')}}
                </label>
              </div>
            </div>           
             <div class="col-md-3 col-6">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  {{__('Journal Therapy')}}
                </label>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  {{__('Reality Therapy')}}
                </label>
              </div>
            </div>
            <div class="col-md-6">
              <label for="inputConsultation" class="form-label lead">{{__('Offering now *')}}</label>
              <select class="form-select" id="inputConsultation" required>
                  <option selected disabled>{{__('Case consultation')}}</option>
                  <option value="supervision">{{__('Therapist supervision')}}</option>
                  <option value="mentor">{{__('Mentor')}}</option>
                  <option value="training">{{__('Training')}}</option>
                  <option value="courses">{{__('CE Courses')}}</option>
                  <option value="privatePractice">{{__('Private practice consultation')}}</option>
                  <option value="ethics">{{__('Ethics consultation')}}</option>
                  <option value="referrals">{{__('Referrals')}}</option>
                </select>
             </div>
             <div class="col-md-6">
              <label for="inputEvents" class="form-label lead">{{__('Events *')}}</label>
              <select class="form-select" id="inputEvents" required>
                  <option selected disabled>{{__('Offering events')}}</option>
                  <option value="yes">{{__('Yes')}}</option>
                  <option value="no">{{__('No')}}</option>
                </select>
             </div>
             <div class="col-md">
              <label for="inputAvailability" class="form-label lead">{{__('Availability *')}}</label>
              <select class="form-select" id="inputAvailability" required>
                  <option selected disabled>{{__('open hours')}}</option>
                  <option value="oneHour">{{__('30 min to 1hr')}}</option>
                  <option value="slot">{{__('Increment slot')}}</option>
                </select>
             </div>
            
             <div class="col-12 mt-5 text-center">
              <button type="submit" class="btn btn-warning rounded-pill text-white">{{__('Submit')}}</button>
            </div>  
          </form>
        </div>
      </div>
      <div class="lead text-center text-white mt-5 container">
        <p>{{ __('If you are in immediate need of services, feeling unsafe in this current moment, or are experiencing                                                                                                                                                                                         thoughts of harming yourself or others, please do not use this site. Instead,') }}
          <a class="text-white" href="#">{{ __('please use one of these resources.') }}</a>
          {{ __('For a medical emergency,') }}
          <a class="text-white"
          href="#">{{ __('call 9-1-1') }}</a>{{ __('or visit your local Emergency Room.') }}
        </p>
      </div>
@endsection
