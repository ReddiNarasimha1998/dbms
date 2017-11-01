<?php

namespace App\Http\Controllers;
use Image;
use Illuminate\Support\Facades\Auth;
//use Redirect;
use Illuminate\Support\Facades\DB;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
//use Auth;
use Redirect;
use Mail;

class customAuthController extends Controller
{
    //
    public function show()
    {
    	return view('adduser');
    }
    public function register(Request $request)
    {
    	$this->validate($request,[
    'username' => 'required|unique:users|max:50',
    'password' => 'required|confirmed|max:15|min:7',
    'rollnumber' => 'required|unique:users|max:7|min:7',
    //'author.description' => 'required',
]);
        $dept=request('rollnumber');
        if(strcmp(substr($dept,0,2),"15")==0)
        {
              $sem=5;
        }
        if(strcmp(substr($dept,0,2),"14")==0)
        {
              $sem=7;
        }
        if(strcmp(substr($dept,0,2),"16")==0)
        {
              $sem=3;
        }
       if(strcmp(substr($dept,0,2),"17")==0)
        {
              $sem=1;
        }
    	$user=new User;
    	$user->username=request('username');
    	$user->password=bcrypt(request('password'));
        $user->rollnumber=request('rollnumber');
    	$user->save();
        $studen=new \App\Student;
        $studen->roll_number=request('rollnumber');
        $studen->email=request('username');
        $studen->deptid=substr($dept,2,2);
        $studen->semester=$sem;
        $studen->save();
    	//Auth::login($user);
         return redirect()->route('dashboard2',['username'=>Auth::user()->username]);
    }
    public function showLogin()
    {

        if(!Auth::check())
    	return view('login');
        if(Auth::check())
            {
                if(Auth::user()->isadmin==1)
        {
            return redirect()->route('dashboard2',['username'=>Auth::user()->username]);
        }
        return redirect()->route('dashboard',['username'=>Auth::user()->username]);
    }
    }
    public function postLogin(Request $request)
    {

    	$this->validate($request,[
    'username' => 'required|email|exists:users,username',
    'password' => 'required',
]);
    	//remember = $request->input('remember'); 
      if(Auth::attempt(['username'=> $request->input('username'),'password'=> $request->input('password')])) {
      	$task=DB::table('users')->where('username','=',$request->input('username'))->first();
      if(Auth::user()->isadmin==1)
        {
            return redirect()->route('dashboard2',['username'=>Auth::user()->username]);
        }
      return redirect()->route('dashboard',['username'=>Auth::user()->username]);
      	//return view('dashboard',compact('task'));
      }
      return Redirect::back()
            ->withInput($request->only('username'))
            ->withErrors(
                [
                    'password' => 'Wrong Password',
                ]
              
            );
  }
 
    public function logout() {
        //Session::flush ();
       Auth::logout();
        return view('signout');
    }
public function profile()
{  if(Auth::user()->isadmin)
    {
        return redirect()->route('profileadmin');
    }
    $student=DB::table('students')->where('email','=',Auth::user()->username)->first();
    $dep=DB::table('departments')->where('deptid','=',$student->deptid)->first();
    //$depy=$dep->deptname;
    return view('profile',compact('student','dep'));
}
public function editprofile()
{  $student=DB::table('students')->where('email','=',Auth::user()->username)->first();
    $dep=DB::table('departments')->where('deptid','=',$student->deptid)->first();

    return view('editprofileuser',compact('student','dep'));
}
public function posteditprofile(Request $request)
{
   //$firstname=if(request('firstname')==NULL)?request('firstname'):'firstname',
  $this->validate($request,[
   'mess_block'=>'composite_unique:students,messno',
 'firstname'=>'regex:/^[a-zA-Z][a-zA-Z\\s]+$/|max:50|nullable',
     'middlename'=>'regex:/^[a-zA-Z][a-zA-Z\\s]+$/|max:50|min:0|nullable',
      'lastname'=>'regex:/^[a-zA-Z][a-zA-Z\\s]+$/|max:50|min:0|nullable',
      'roomno'=>'alpha_num|nullable|max:4',
       'messno'=>'numeric|max:9999|nullable',
       'messblock'=>'nullable|regex:/([A-Za-z0-9 ])+/|max:20']);

    DB::table('students')->where('email','=',Auth::user()->username)->update(['firstname'=> request('firstname'),
    'lastname'=>request('lastname'),
    'middlename'=>request('middlename'),
    'hostel'=>request('hostel'),
    'gender'=>request('gender'),
    'phone_number'=>request('mobile'),
    'roomnumber'=>request('roomno'),
    'mess_block'=>request('messblock'),
    'messrollno'=>request('messno'),
    ]);
    
    //$student=DB::table('students')->where('email','=',Auth::user()->username)->first();
    //$value_to_insert = Input::get('optradio1') == 'true' ? 1 : 0;
    return redirect()->route('profile');
}
public function dashboard()
{
if(Auth::user()->isadmin==1)
        {
            return redirect()->route('dashboard2',['username'=>Auth::user()->username]);
        }
	return view('dashboard');
}
public function dashboard2()
{

    return view('dashboard2');
}
public function hostelcomplaint()
{
     $stud=DB::table('students')->where('email','=',Auth::user()->username)->first();
    return view('hostel_complaints',compact('stud'));
    //return view('hostel_complaints');
}
public function posthostelcomplaint(Request $request)
{
    
     $type_comp = implode(",", $request->get('complaint'));
     $complaint= new \App\Hostelcomplaint;
     $complaint->id=rand();
     $complaint->reference_no=rand()+1;
     $complaint->rollnumber=Auth::user()->rollnumber;
     $complaint->description=request('description');
     $complaint->status="not processed";
     $complaint->type=$type_comp;
     $complaint->save();
return view('posthostelcomplaint',compact('complaint'));

}
public function changepassword()
{
    return view('changepassword');
}
public function postchangepassword(Request $request)
{
        $this->validate($request,[
    'current_password' => 'required',
    'new_password' => 'required|confirmed',]);
        if (Hash::check(request('new_password'),Auth::user()->password)) 
            {
    return Redirect::back()
            
            ->withErrors(
                [
                    'new_password' => 'same as old password',
                ]
              
            );  

            }

        if (Hash::check(request('current_password'),Auth::user()->password)) 
            {
    // The passwords match...
           // return "true";
            DB::table('users')->where('username','=',Auth::user()->username)->update(['password'=>bcrypt(request('new_password'))]);
            return view('login');

            }
            

return Redirect::back()
            
            ->withErrors(
                [
                    'current_password' => 'Wrong old Password',
                ]
              
            );                  
}
public function send()
{
    mail::send(['text'=>'mail'],['name'=>'reddi'],function($message){
        $message->to('ananthkenguva820@gmail.com','To ananth')->subject('Text email');
    });
}
public function complaints()
{
 $complaints=DB::table('hostelcomplaints')->where('rollnumber','=',Auth::user()->rollnumber)->orderBy('created_at', 'DESC')->get();
 $acomplaints=DB::table('academiccomplaints')->where('rollnumber','=',Auth::user()->rollnumber)->orderBy('created_at', 'DESC')->get();
    return view('cmp',compact('complaints','acomplaints'));
}
public function admincomplaints()
{
 $complaints=DB::table('hostelcomplaints')->get();
 $acomplaints=DB::table('academiccomplaints')->get();
    return view('cmp',compact('complaints','acomplaints'));
}
public function addadmin()
{
    return view('addadmin');
}
public function postaddadmin(Request $request)
{
    $this->validate($request,[
    'username' => 'required|unique:users|email',
    'password' => 'required|confirmed|min:7|max:15',
    'rollnumber' => 'required|unique:users|max:15|min:7',
    //'author.description' => 'required',
]);
        
        $user=new User;
        $user->username=request('username');
        $user->password=bcrypt(request('password'));
        $user->rollnumber=request('rollnumber');
        $user->isadmin=true;
        $user->save();
        //Auth::login($user);
         return redirect()->route('dashboard2',['username'=>Auth::user()->username]);
}
public function adminprofile()
{if(Auth::user()->isadmin)
    {
    $student=DB::table('students')->where('email','=',Auth::user()->username)->first();
    return view('profileadmin',compact('student'));
    }

}
public function posteditadminprofile(Request $request)
{
   //$firstname=if(request('firstname')==NULL)?request('firstname'):'firstname',
    if(Auth::user()->isadmin)
        {
    $this->validate($request,[
    'firstname'=>'regex:/^[a-zA-Z][a-zA-Z\\s]+$/|max:50|nullable',
     'middlename'=>'regex:/^[a-zA-Z][a-zA-Z\\s]+$/|max:50|min:0|nullable',
      'lastname'=>'regex:/^[a-zA-Z][a-zA-Z\\s]+$/|max:50|min:0|nullable',]);

    DB::table('students')->where('email','=',Auth::user()->username)->update(['firstname'=> request('firstname'),
    'lastname'=>request('lastname'),
    'middlename'=>request('middlename'),
    'gender'=>request('gender'),
    'phone_number'=>request('mobile'),
    ]);
    
    //$student=DB::table('students')->where('email','=',Auth::user()->username)->first();
    //$value_to_insert = Input::get('optradio1') == 'true' ? 1 : 0;
    return redirect()->route('profileadmin');
}
}
public function editadminprofile()
{  if(Auth::user()->isadmin)
    {
    $student=DB::table('students')->where('email','=',Auth::user()->username)->first();
    return view('editadmin',compact('student'));
}
}
public function profilepic()
{
    return view('profilepic');
}
public function postprofilepic(Request $request)
{
    $this->validate($request,[
    'avatar' => 'image',
    //'author.description' => 'required',
]);
    if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(165, 159)->save( public_path('/uploads/avatars/' . $filename ) );

            $user = Auth::user();
            $user->image = $filename;
            $user->save();
        }

        return redirect()->route('dashboard',['username'=>Auth::user()->username]);
}
public function showcomplaint(Request $request)
{

    $student=request('student');
    $complaints=DB::table('hostelcomplaints')->where('rollnumber','=',$student)->orderBy('created_at', 'DESC')->get();
 $acomplaints=DB::table('academiccomplaints')->where('rollnumber','=',$student)->orderBy('created_at', 'DESC')->get();
    return view('cmp',compact('complaints','acomplaints'));
}
public function updatestatus(Request $request)
{

if(request('complaint')=="hostel")
{  $this->validate($request,[
    'reference' => 'required|numeric|exists:hostelcomplaints,reference_no',
    //'author.description' => 'required',
]);
    $complaints=DB::table('hostelcomplaints')->where('rollnumber','=',request('rollnumber'))->where('reference_no','=',request('reference'))->update(['status'=>request('status')]);
    return redirect()->back()->with('message', 'SUBMITTED SUCCESSFULLY!');
}
if(request('complaint')=="academics")
{
    $this->validate($request,[
    'reference' => 'required|numeric|exists:academiccomplaints,reference_no',
    //'author.description' => 'required',
]);
    $complaints=DB::table('academiccomplaints')->where('rollnumber','=',request('rollnumber'))->where('reference_no','=',request('reference'))->update(['status'=>request('status')]);
    return redirect()->back()->with('message', 'SUBMITTED SUCCESSFULLY!');

}

}
}
