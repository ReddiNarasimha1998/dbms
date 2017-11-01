<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
//use Redirect;
use Illuminate\Support\Facades\DB;
use App\faculty_course;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
//use Auth;
use Redirect;
use Mail;


class FacultyCourseController extends Controller
{
    //
        public function academiccomplaint()
{
    $sem=DB::table('students')->where('roll_number','=',Auth::user()->rollnumber)->first();
    $sem1=$sem->semester;
    $dep1=$sem->deptid;
   $app = DB::table('faculties')->where('deptid','=','$dep1');
    $courses=DB::table('courses')->where('semester','=',$sem1)->where('deptid','=',$dep1)->join('faculty_courses','courses.coursecode','=','faculty_courses.coursecode')->get();


    return view('academiccomplaint',compact('courses'));
}
public function postacademiccomplaint(Request $request)
{
    
     $type_comp = implode(",", $request->get('complaint'));
     $complaint= new \App\academiccomplaints;
     $complaint->id=rand();
     $complaint->reference_no=rand()+1;
     $complaint->course=request('courses');
     $complaint->rollnumber=Auth::user()->rollnumber;
     $complaint->description=request('description');
     $complaint->status="not processed";
     $complaint->type=$type_comp;
     $complaint->save();
return view('posthostelcomplaint',compact('complaint'));

}
    
}
