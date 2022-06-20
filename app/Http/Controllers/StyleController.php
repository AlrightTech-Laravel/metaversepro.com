<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StyleController extends Controller
{
    public function therapistrating(Request $request){
        if(!empty($request->action_oriented) && !empty($request->relational_and_reflective) && !empty($request->creative_and_integrative)){
            session(['action_oriented' => $request->action_oriented, 'relational_and_reflective' => $request->relational_and_reflective, 'creative_and_integrative' => $request->creative_and_integrative]);
            return redirect()->route('match.specialities.index');
        }
    }
}
