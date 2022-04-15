<?php

namespace App\Http\Controllers;
use App\Models\student;
use App\Models\contact;
use App\Models\signup;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Session;
use Hash;


class course extends Controller
{
	/*public function courses(){
        $data=array();
        if(Session::has('loginId')){
            $data= signup::where('id','=',Session::get('loginId'))->first();
        }
        return view('student',compact('data'));
    } 
      
     public function create2(Request $request) {
        $request->validate([
			'username2' => 'required|string|min:3|max:255',
			'class' => 'required',
			'course' => 'required',
            'year'=>'required|num|min:9|max:10'
            
		]);
		

     }*/
    public function insertCourse() {
		$data=array();
        if(Session::has('loginId')){
            $data= signup::where('id','=',Session::get('loginId'))->first();
        }
        return view('student',compact('data'));
     }
      
     public function createCourse(Request $request) {
        
			$student = new student;
        $student->username2 = $request->input('username2');
        $student->class = $request->input('class');
        $student->course = $request->input('course');
        $student->year = $request->input('year');
        $student->save();
        return redirect()->back()->with('status','Student Added Successfully');
		}
		public function insertCourse2() {
			$data=array();
			if(Session::has('loginId')){
				$data= signup::where('id','=',Session::get('loginId'))->first();
			}
			return view('contact',compact('data'));
		 }
		  
		 public function createCourse2(Request $request) {
			
				$student2 = new contact;
			$student2->username2 = $request->input('username2');
			$student2->email = $request->input('email');
			$student2->message = $request->input('message');
			$student2->save();
			return redirect()->back()->with('status','Student Added Successfully');
			}

            public function deleteCourse($id){
                $student=student::find($id);
                $student->delete();
                return redirect('searchCourses');
            }
            public function showData2($id){
               $data= student::find($id);
              return view('updateCourse',['data'=>$data]);
            }
            public function updateCourse(Request $req){
              $data=student::find($req->id);
              $data->username2=$req->username2;
              $data->course=$req->course;
              $data->class=$req->class;
              $data->year=$req->year;
              $data->save();
              return redirect('searchCourses');
            }
            public function show(){
                $student= student::all();
               return view('searchCourses',['student'=>$student]);
                
            }


            public function deleteContact($id){
                $student=contact::find($id);
                $student->delete();
                return redirect('searchContacts');
            }
            public function showData3($id){
               $data= contact::find($id);
              return view('updateContact',['data'=>$data]);
            }
            public function updateContact(Request $req){
              $data=contact::find($req->id);
              $data->username2=$req->username2;
              $data->email=$req->email;
              $data->message=$req->message;
              $data->save();
              return redirect('searchContacts');
            }
            public function contact2(){
                $student= contact::all();
               return view('searchContacts',['student'=>$student]);
                
            }
            public function count2(){
                $count2=student::count();
                return redirect('index',['count2'=>$count2]);
            }
            public function count3(){
                $count3=contact::count();
                return redirect('index',['count3'=>$count3]);
            }
}
?>