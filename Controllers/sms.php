<?php

namespace App\Http\Controllers;
use App\Models\signup;
use App\Models\student;
use App\Models\contact;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Hash;
use Session;

class sms extends Controller
{
    function signUp(Request $req)
    {
        $req->validate(
            [
                'username2'=>'required|string|max:10',
                'email'=>'required|email|unique:users',
                'password2'=>'required|alpha_num|min:8|max:20',
                 
            ],
            [
                'username2.required' => 'Please enter your username',
                'username2.max' => 'Username must not be more than 10 chars',
                'password2.required' => 'Please enter the password',
                'password2.alpha_num' => 'Password must be alpha numeric chars',
                'password2.min' => 'Password should be minimum 10 chars',
                'email.required' => 'Please enter your email',
                 'email.email' => 'Email must be a valid email address',
            ]
            );
            return $req->input();
    }
    
    public function insert() {
        return view('signup');
     }
      
     public function create(Request $request) {
        $rules = [
			'name' => 'required|string|min:3|max:255',
			'username2' => 'required|string|min:3|max:255',
			'email' => 'required|string|email|max:255|unique:users',
            'password2'=>'required|alpha_num|min:8|max:20'
            
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('insert')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$student = new signup;
                $student->name =$data['name'];
                $student->username2 = $data['username2'];
				$student->email = $data['email'];
				$student->password2 = Hash::make($data['password2']);
				$student->save();
				return redirect('insert')->with('status',"Insert successfully");
                header('location:searchStudent');
			}
			catch(Exception $e){
				return redirect('insert')->with('failed',"operation failed");
			}
		}
     }
     public function login(){
         return view("login");
     }
     public function loginUser(Request $req){
        $req->validate(
            [
			'email' => 'required|string|email|max:255',
            'password2'=>'required|alpha_num|min:8|max:20',
             ] );
            $student = signup::where('email','=',$req->email)->first();

            if($student){
                if(hash::check($req->password2,$student->password2)){
                $req->session()->put('loginId',$student->id);
                return redirect('index');

                }
                else{
                    return redirect('login')->with('status',"Password is not matched.");
                }
                
            }
            else{
                return redirect('login')->with('status',"Email is not matched.");
            }
     }
     public function index(){
        $count1=signup::count();
        $count2=student::count();
        $count3=contact::count();
         $data=array();
         if(Session::has('loginId')){
             $data= signup::where('id','=',Session::get('loginId'))->first();
         }
         return view('index',['data'=>$data, 'count1'=>$count1,'count2'=>$count2,'count3'=>$count3]);
     }
     
     
    
public function logout(){
    if(Session::has('loginId')){
        Session::pull('loginId');
        return redirect('login');
    }
    
}
public function show(){
    $student= signup::all();
   return view('searchStudent',['student'=>$student]);
    
}

public function delete($id){
      $student=signup::find($id);
      $student->delete();
      return redirect('searchStudent');
}
public function showData($id){
     $data= signup::find($id);
    return view('updateStudent',['data'=>$data]);
}
public function update(Request $req){
    $data=signup::find($req->id);
    $data->name=$req->name;
    $data->username2=$req->username2;
    $data->email=$req->email;
    $data->password2=Hash::make($req->password2);
    $data->save();
    return redirect('searchStudent');
}
public function count1(){
    $count1=signup::count();
    return redirect('index',['count1'=>$count1]);
}

}
?>