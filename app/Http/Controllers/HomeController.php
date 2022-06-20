<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zip;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('begin.index');
    }

    public function begin_go()
    {
        return view('begin.go');
    }

    public function begin_gender()
    {
        return view('begin.gender');
    }

    public function begin_lgbtqia()
    {
        return view('begin.lgbtqia');
    }

    public function begin_age()
    {
        return view('begin.age');
    }

    public function begin_ethnicity()
    {
        return view('begin.ethnicity');
    }

    public function logistics_index()
    {
        return view('logistics.index');
    }

    public function logistics_about()
    {
        return view('logistics.about');
    }

    public function logistics_email()
    {
        return view('logistics.email');
    }

    public function logistics_zip()
    {
        $zipcodes = Zip::all();
        return view('logistics.zip', compact('zipcodes'));
    }

    public function logistics_inperson()
    {
        return view('logistics.inperson');
    }

    public function logistics_location()
    {
        return view('logistics.location');
    }

    public function logistics_neighborhood()
    {
        return view('logistics.neighborhood');
    }

    public function logistics_interest()
    {
        return view('logistics.interest');
    }

    public function logistics_available()
    {
        return view('logistics.available');
    }

    public function logistics_fee()
    {
        return view('logistics.fee');
    }

    public function logistics_whentostart()
    {
        return view('logistics.whentostart');
    }

    public function style_index()
    {
        return view('style.index');
    }

    public function style_therapistrating()
    {
        return view('style.therapistrating');
    }

    public function specialities_index()
    {
        return view('specialities.index');
    }

    public function specialities_group()
    {
        return view('specialities.group');
    }

    public function specialities_experties()
    {
        return view('specialities.experties');
    }

    public function specialities_techniquerequest()
    {
        return view('specialities.techniquerequest');
    }

    public function specialities_technique()
    {
        return view('specialities.technique');
    }

    public function priorities_index()
    {
        return view('priorities.index');
    }

    public function priorities_mostimportantfactors()
    {
        return view('priorities.mostimportantfactors');
    }

    public function priorities_followuppreference()
    {
        return view('priorities.followuppreference');
    }

    public function submit()
    {
        return view('submit');
    }

}
