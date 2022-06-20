<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Userdetail;
use Auth;
use Hash;

class RegisterController extends Controller
{
    public function registerUser(Request $request)
    {
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_as' => $request->role_as,
        ];
        $user = User::create($data);
        if($request->hasFile('image')){
            $extension = $request->image->extension();
            $imagefile = time()."_.".$extension;
            $request->image->move(public_path('img\Uploads'), $imagefile);      
        }
        else {
            $imagefile = 'no_image.png';
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
            $user_id = Auth::user()->id ?? 1;
            $detail = new Userdetail;
            $detail->user_id = $user_id;
            $detail->prefix = $request->prefix;
            $detail->suffix = $request->suffix;
            $detail->image = $imagefile;
            $detail->address = $request->address;
            $detail->education = $request->education;
            $detail->internships = $request->internships;
            $detail->intern_hours = $request->intern_hours;
            $detail->exam_study_group = $request->exam_study_group;
            $detail->license = $request->license;
            $detail->counseling = $request->counseling;
            $detail->offerings = $request->offerings;
            $detail->Offering_now = $request->Offering_now;
            $detail->description = $request->description;
            $detail->images = implode('|', $images);
            $detail->events = $request->events;
            $detail->event_description = $request->event_description;
            $detail->event_image = implode('|', $event_image);
            $detail->availability = $request->availability;

            $detail->save();
            session()->flash('message', 'Data Save Successfully...!');
            return redirect()->back();
    }
}
