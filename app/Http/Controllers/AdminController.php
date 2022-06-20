<?php

namespace App\Http\Controllers;

use App\Models\MatchRequest;
use App\Models\Student;
use DB;
use App\Models\Therapist;
use session;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function panel(){
        return view('Admin.layout');
    }

    public function request(){
        $requests = MatchRequest::all();
        return view('Admin.view_requests', compact('requests'));
    }

    public function delete($id){
        MatchRequest::find($id)->delete();
        return redirect()->back();
    }

    public function viewTherapist(){
        $therapists = Therapist::orderBy('id', 'DESC')->get();
        return view('Admin.therapist.view_therapists', compact('therapists'));
    }

    public function deleteTherapist($id){
        $therapist = Therapist::find($id)->delete();

        if ($therapist) {
            session()->flash('success', 'Therapist Deleted Successfully');
            return redirect()->back();
        }else{
            session()->flash('error', 'Therapist Not Deleted');
            return redirect()->back();
        }
    }

    public  function allStudents(){
        $students = Student::all();
        return view('Admin.student.all_students', compact('students'));
    }

    public function deleteStudents($id){
        $student = Student::find($id)->delete();

        if ($student) {
            session()->flash('success', 'Student Deleted Successfully');
            return redirect()->back();
        }else{
            session()->flash('error', 'Student Not Deleted');
            return redirect()->back();
        }
    }

    public function approveTherapist($id){
        $approve = DB::update("update therapists SET status='approved' where id = '$id'");
        session()->flash('message', 'Therapist approve Successfully...!');
        return back();
    }

    public function rejectTherapist($id){
        $reject = DB::update("update therapists SET status='rejected' where id = '$id'");
                session()->flash('message', 'Therapist rejected Successfully...!');

        return back();
    }

}
