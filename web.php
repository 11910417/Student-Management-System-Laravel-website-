<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sms;
use App\Http\Controllers\course;

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
route::get('/count1',[sms::class,'count1']);
route::get('/count2',[course::class,'count2']);
route::get('/count3',[course::class,'count3']);
route::get('login',[sms::class,'login'])->middleware('alreadyLoggedIn');
route::post('login-user',[sms::class,'loginUser'])->name('login-user');

route::get('searchStudent',[sms::class,'show']);
route::get('searchCourses',[course::class,'show']);
route::get('searchContacts',[course::class,'contact2']);
//route::post('sms',[sms::class,'signUp']);
route::view('/signup','signup');
Route::get('insert',[sms::class,'insert']);
Route::post('create',[sms::class,'create']);

Route::get('student',[course::class,'insertCourse']);
Route::post('student',[course::class,'createCourse']);
route::get('/header',function(){
    return view('header');
});
route::get('/header2',function(){
    return view('header2');
});
route::get('/footer',function(){
    return view('footer');
});
route::get('/index',[sms::class,'index'])->middleware('isLoggedIn');
//route::get('/student',[sms::class,'courses']);
//Route::post('create2',[sms::class,'create']);
route::view('/master','master');
route::view('/master2','master2');
route::get('/courses',function(){
    return view('courses');
});
Route::get('contact',[course::class,'insertCourse2']);
Route::post('contact',[course::class,'createCourse2']);
Route::view('/physics','physics');
route::view('/maths','maths');
route::view('/chemistry','chemistry');
route::view('/Geography','Geography');
route::view('/HistoryandChemistry','HistoryandChemistry');
route::view('/biology','biology');
route::view('/computer','computer');
route::view('/about','about');
route::get('/logout',[sms::class,'logout']);
route::get('/delete/{id}',[sms::class,'delete']);
route::get('/update/{id}',[sms::class,'showData']);
route::post('/update',[sms::class,'update']);

route::get('/deleteCourse/{id}',[course::class,'deleteCourse']);
route::get('/updateCourse/{id}',[course::class,'showData2']);
route::post('/updateCourse',[course::class,'updateCourse']);

route::get('/deleteContact/{id}',[course::class,'deleteContact']);
route::get('/updateContact/{id}',[course::class,'showData3']);
route::post('/updateContact',[course::class,'updateContact']);
?>