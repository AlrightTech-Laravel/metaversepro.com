<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zip;

class ZipController extends Controller
{
    public function index(Request $request){
        $generate = Zip::create([
            'zipcode' => $request->zipcode,
        ]);
        return redirect('view-zipcode');
    }

    public function view(){
        $viewcodes = Zip::all();
        return view('Admin.Zip.view_zipCodes', compact('viewcodes'));
    }

    public function delete($id){
        $deletecode = Zip::find($id)->delete();
        return redirect()->back();
    }
}
