<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Therapist;
use session;
use DB;

class TherapistController extends Controller
{
    public function register(){
        return view('Therapist.therapist_register');
    }

    public function registerTherpist(Request $request){


        if($request->hasFile('image')){
            $extension = $request->image->extension();
            $imagefile = time()."_.".$extension;
            $request->image->move(public_path('img\Uploads'), $imagefile);      
        }

            $images = array();
            if($files = $request->file('images')){
                foreach($files as $file){
                    $image_name = md5(rand(1000, 10000));
                    $ext = strtolower($file->getClientOriginalExtension());
                    $image_full_name = $image_name. '.' .$ext;
                    $upload_path = 'img/Uploads';
                    $image_url = $upload_path.$image_full_name;
                    $file->move($upload_path, $image_full_name);
                    $images[] = $image_url;
                }
            }

            $event_image = array();
            if($files = $request->file('event_image')){
                foreach($files as $file){
                    $image_name = md5(rand(1000, 10000));
                    $ext = strtolower($file->getClientOriginalExtension());
                    $image_full_name = $image_name. '.' .$ext;
                    $upload_path = 'img/Uploads';
                    $image_url = $upload_path.$image_full_name;
                    $file->move($upload_path, $image_full_name);
                    $event_image[] = $image_url;
                }
            }

            $result = Therapist::insert([
            'prefix' => $request->prefix,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password,
            'suffix' => $request->suffix,
            'image' => $imagefile,
            'address' => $request->address,
            'education' => $request->education,
            'license' => $request->license,
            'counseling' => $request->counseling,
            'offerings' => $request->offerings,
            'Offering_now' => $request->Offering_now,
            'description' => $request->description,
            'images' => implode('|', $images),
            'events' => $request->events,
            'event_description' => $request->event_description,
            'event_image' => implode('|', $event_image),
            'availability' => $request->availability,
         ]);
            $result->id;

            session()->flash('message', 'Data Save Successfully...!');
            return redirect()->back();
    }
}
