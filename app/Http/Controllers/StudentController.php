<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function register()
    {
        return view('student.register');
    }

    public function registerStudent(Request $request)
    {
        $request->validate([
            'prefix' => ['required'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'suffix' => ['required'],
            'image' => ['required'],
            'address' => ['required'],
            'education' => ['required'],
            'internships' => ['required'],
            'intern_hours' => ['required'],
            'exam_study_group' => ['required'],
            'availability' => ['required'],
        ]);

        if ($request->hasFile('image')) {
            $extension = $request->image->extension();
            $imagefile = time() . "_." . $extension;
            $request->image->move(public_path('images'), $imagefile);
        }

        $event_image = array();
        if ($files = $request->file('event_image')) {
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'images';
                $image_url = $upload_path . $image_full_name;
                $file->move($upload_path, $image_full_name);
                $event_image[] = $image_url;
            }
        }

        $student = Student::create([
            'prefix' => $request['prefix'],
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' => $request['password'],
            'suffix' => $request['suffix'],
            'image' => $imagefile,
            'address' => $request['address'],
            'education' => $request['education'],
            'internships' => $request['internships'],
            'intern_hours' => $request['intern_hours'],
            'exam_study_group' => $request['exam_study_group'],
            'availability' => $request['availability'],
            'description' => $request['description'],
            'event_image' => implode(' | ', $event_image),
        ]);

        if ($student) {
            session()->flash('message', 'Student Added Successfully!');
            return redirect()->back();
        }

    }
}
