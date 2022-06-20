<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeginController extends Controller
{
    public function gender(Request $request){
        if(!empty($request->gender)){
            session(['gender' => $request->gender]);
            return redirect()->route('match.begin.lgbtqia');
        }
        return redirect()->back()->with('error','Something Went Wrong');
    }

    public function lgbtqia(Request $request){
        if(!empty($request->lgbtqia)){
            session(['lgbtqia' => $request->lgbtqia]);
            return redirect()->route('match.begin.age');
        }
        return redirect()->back()->with('error','Something Went Wrong');
    }

    public function age(Request $request){
        if(!empty($request->age)){
            $arr = json_encode(array_unique($request->age));
            session(['age' => $arr]);
            return redirect()->route('match.begin.ethnicity');
        }
        return redirect()->back()->with('error','Something Went Wrong');
    }

    public function ethnicity(Request $request){
        if(!empty($request->ethnicity)){
            $arr = json_encode(array_unique($request->ethnicity));
            session(['ethnicity' => $arr]);
            return redirect()->route('match.logistics.index');
        }
        return redirect()->back()->with('error','Something Went Wrong');
    }


}
