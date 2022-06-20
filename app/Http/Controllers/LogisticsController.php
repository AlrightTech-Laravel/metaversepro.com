<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogisticsController extends Controller
{
    public function about(Request $request){
        if(!empty($request->about)){
            session(['about' => $request->about]);
            return redirect()->route('match.logistics.email');
        }
        return redirect()->back()->with('error','Something Went Wrong');
    }

    public function email(Request $request){
        if(!empty($request->email)){
            session(['email' => $request->email]);
            return redirect()->route('match.logistics.zip');
        }
        return redirect()->back()->with('error','Something Went Wrong');
    }

    public function zip(Request $request){
        if(!empty($request->zip)){
            session(['zip' => $request->zip]);
            return redirect()->route('match.logistics.inperson');
        }
        return redirect()->back()->with('error','Something Went Wrong');
    }

    public function inperson(Request $request){
        if(!empty($request->inperson)){
            session(['inperson' => $request->inperson]);
            return redirect()->route('match.logistics.location');
        }
        return redirect()->back()->with('error','Something Went Wrong');
    }

    public function location(Request $request){
        if(!empty($request->location)){
            $arr = json_encode(array_unique($request->location));
            session(['location' => $arr]);
            return redirect()->route('match.logistics.neighborhood');
        }
        return redirect()->back()->with('error','Something Went Wrong');
    }

    public function neighborhood(Request $request){
        session(['neighborhood' => isset($request->neighborhood) ? $request->neighborhood : 'none']);
        return redirect()->route('match.logistics.interest');
    }

    public function interest(Request $request){
        if(!empty($request->interest)){
            session(['interest' => $request->interest]);
            return redirect()->route('match.logistics.available');
        }
        return redirect()->back()->with('error','Something Went Wrong');
    }

    public function available(Request $request){
        if(!empty($request->weekdays) || !empty($request->weekends)){
            session(['weekdays' => $request->weekdays, 'weekends' => $request->weekends]);
            return redirect()->route('match.logistics.fee');
        }
        return redirect()->back()->with('error','Something Went Wrong');
    }

    public function fee(Request $request){
        if(!empty($request->fee)){
            session(['fee' => $request->fee]);
            return redirect()->route('match.logistics.whentostart');
        }
        return redirect()->back()->with('error','Something Went Wrong');
    }

    public function whentostart(Request $request){
        if(!empty($request->whentostart)){
            session(['whentostart' => $request->whentostart]);
            return redirect()->route('match.style.index');
        }
        return redirect()->back()->with('error','Something Went Wrong');
    }
}
