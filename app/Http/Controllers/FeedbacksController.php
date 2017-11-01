<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
//use Redirect;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\feedbacks;

class FeedbacksController extends Controller
{
    //
    public function feedbackform()
    {   
    	return view('feedbackform');
    }
     public function postfeedbackform(Request $request)
    {
    	$feedback=new feedbacks;
    	$feedback->type=request('complaint');
    	$feedback->description=request('feedback');
    	$feedback->save();
    	return redirect()->back()->with('message', 'SUBMITTED SUCCESSFULLY!');
    }
    public function feedbackadmin()
    {
    	$feedbacks=DB::table('feedbacks')->get();
    	return view('adminfeedbacks',compact('feedbacks'));
    }
}
