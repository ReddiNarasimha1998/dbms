<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
//use Redirect;
use Illuminate\Support\Facades\DB;
use App\courses;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
//use Auth;
use Redirect;
use Mail;


class CoursesController extends Controller
{
    //
    public function academiccomplaint()
{
    $sem=DB::table('students')->where('roll_number','=',Auth::user()->rollnumber)->first();
    $sem1=$sem->semester;
    $dep1=$sem->deptid;
   $app = DB::table('faculties')->where('deptid','=','$dep1');
    $courses=DB::table('faculty_courses')->join('faculty_courses','courses.coursecode','=','faculty_courses.coursecode')->join($app,$app->fid,'=','faculty_courses.fid')->where('semester','=',$sem1)->where('deptid','=',$dep1)->get();


    return view('academiccomplaint',compact('courses'));
}
}
