<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialitiesController extends Controller
{
    public function group(Request $request){
        if(!empty($request->group)){
            $arr = json_encode(array_unique($request->group));
            session(['group' => $arr]);
            return redirect()->route('match.specialities.experties');
        }
        return redirect()->back()->with('error','Something Went Wrong');
    }

    public function experties(Request $request){
        if(!empty($request->experties)){
            $arr = json_encode(array_unique($request->experties));
            session(['experties' => $arr]);
            return redirect()->route('match.specialities.techniquerequest');
        }
        return redirect()->back()->with('error','Something Went Wrong');
    }


    public function techniquerequest(Request $request){
        if(!empty($request->techniquerequest)){
            session(['techniquerequest' => $request->techniquerequest]);
            return redirect()->route('match.specialities.technique');
        }
        return redirect()->back()->with('error','Something Went Wrong');
    }

    public function technique(Request $request){
        if(!empty($request->technique)){
            $arr = json_encode(array_unique($request->technique));
            session(['technique' => $arr]);
            return redirect()->route('match.priorities.index');
        }
        return redirect()->back()->with('error','Something Went Wrong');
    }
}
