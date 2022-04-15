@extends('master2')
@section('title','update course')
@section('content')
<h1 style="background-color:black;color:white;padding:10px;"> <center>Update course delails of id:{{$data['id']}}</center>
</h1>
@endsection
@section('content2')
<center>
<div class="header">
  <h2><center>Update Course details </center></h2>
</div>


                        <form class="row g-3" action="/updateCourse" method="post">
                      @if (session('status'))
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('status') }}
</div>
@elseif(session('failed'))
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('failed') }}
</div>
@endif
                          @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <br>
        <label>Student Username</label><br>
        <input type="text" name="username2" value="{{$data->username2}}" class="form-control" ><br><br>
        <label>Choose your Course</label><br>
        <select name="course" class="form-select" value="{{$data->course}}" aria-label="select">
            <option value="Physics">Physics</option>
            <option value="Chemistry">Chemistry</option>
            <option value="Maths">Maths</option>
            <option value="Computer">Computer</option>
            <option value="English">English</option>
            <option value="Biology">Biology</option>
            <option value="History">History</option>
            <option value="Civics">Civics</option>
            <option value="Geography">Geography</option>
</select>
<br><br>
<label>Select your class</label>
<select name="class" class="form-select" value="{{$data->class}}" aria-label="select">
            <option value="11">11th</option>
            <option value="12">12th</option>
</select>
<br><br>
<label>Academic Year</label><br>
        <input type="text" id="year" name="year" value="{{$data->year}}" class="form-control"/>
<br><br>

       <center> <input type="submit" class="btn btn-warning" name="update2" value="Update"/></center>
</div>
</form>
</div>
<br>
<br>
<br>
                    @endsection
                    
<!DOCTYPE html>
<html>
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="css/style.css">
           
                <style>
                        
                        .header {
  width: 50%;
  margin: 50px auto 0px;
  color: white;
  background: #202727;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form{
  width: 50%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
                        </style>
                        </head>
                        <body >
                           
                          
                            
</body>  
</html>  
