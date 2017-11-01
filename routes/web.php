<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/adduser/','customAuthController@show')->name('adduser');
Route::post('/adduser/','customAuthController@register');
Route::get('/login/','customAuthController@showLogin')->name('login');
Route::post('/login/','customAuthController@postLogin');
Route::get('/profile/','customAuthController@profile')->name('profile')->middleware('auth');
//Route::post('/profile/','customAuthController@postprofile');
Route::get('/editprofileuser/','customAuthController@editprofile')->name('editprofileuser')->middleware('auth');
Route::post('/editprofileuser/','customAuthController@posteditprofile');
Route::get ( '/logout', 'customAuthController@logout' )->name('logout');
Route::get ( '/dashboard/{username}', 'customAuthController@dashboard' )->name('dashboard')->middleware('auth');
Route::get ( '/hostelcomplaint/', 'customAuthController@hostelcomplaint' )->name('hostel_complaints')->middleware('auth');
Route::post ( '/hostelcomplaint/', 'customAuthController@posthostelcomplaint' );
Route::get ( '/changepassword/', 'customAuthController@changepassword' )->name('changepassword')->middleware('auth');
Route::post( '/changepassword/', 'customAuthController@postchangepassword' );
Route::get('/send','customAuthController@send');
Route::get('/complaints','customAuthController@complaints')->name('posthostel')->middleware('auth');
Route::get ( '/dashboard2/{username}', 'customAuthController@dashboard2' )->name('dashboard2')->middleware('auth');
Route::get('/admincomplaints','customAuthController@admincomplaints')->name('posthosteladmin')->middleware('auth');
Route::get('/addadmin','customAuthController@addadmin')->name('addadmin')->middleware('auth');
Route::post('/addadmin','customAuthController@postaddadmin');
Route::get('/academiccomplaint','FacultyCourseController@academiccomplaint')->name('academiccomplaint');
Route::post('/academiccomplaint','FacultyCourseController@postacademiccomplaint');
Route::get('/adminprofile/','customAuthController@adminprofile')->name('profileadmin');
Route::post('/adminprofile/','customAuthController@postadminprofile');
Route::get('/adminprofileuser/','customAuthController@editadminprofile')->name('editadminprofile');
Route::post('/adminprofileuser/','customAuthController@posteditadminprofile');
Route::get('/profilepic/','customAuthController@profilepic')->name('profilepic');
Route::post('/profilepic/','customAuthController@postprofilepic');
Route::get('/feedback','FeedbacksController@feedbackform')->name('feedbackform');
Route::post('/feedback','FeedbacksController@postfeedbackform');
Route::get('/viewfeedbacks','FeedbacksController@feedbackadmin')->name('feedbackadmin');
//Route::get('/studentcomplaint','customAuthController@showstudent')->name('studentcomplaint')
Route::post( '/viewstudentcomplaint', 'customAuthController@showcomplaint' );
Route::post( '/updatestatus', 'customAuthController@updatestatus' );