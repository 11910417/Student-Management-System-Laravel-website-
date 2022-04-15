@extends('master2')
@section('title','Student')
@section('content')
<h1 style="background-color:black;color:white;padding:10px;" align="center">Add new course</h1>
@endsection
@section('content2')
<br>
<div class="header">
    <h2><center>Add new courses</center></h2>
</div>

<div class="mb-3">
            
            <form action="{{url('student')}}" method="post">
            @if (session('status'))
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('status') }}
</div>

@endif
      @csrf
        <br>
        <label>Student Username</label><br>
        <input type="text" name="username2" value="{{$data->username2}}" class="form-control" ><br><br>
        <label>Choose your Course</label><br>
        <select name="course" class="form-select" aria-label="select">
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
<select name="class" class="form-select" aria-label="select">
            <option value="11">11th</option>
            <option value="12">12th</option>
</select>
<br><br>
<label>Academic Year</label><br>
        <input type="text" id="year" name="year" class="form-control"/>
<br><br>

       <center> <input type="submit" class="btn btn-warning" name="add" value="Add"/></center>
</div>
</form>
</div>
<br>
<br>
<br>

@endsection
<html>
    <head>
        <meta charset="utf-8">
        <title>Student Page</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
       <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
-->
       <style>
      
    form{
        width:40%;
    }
    
    .header{
        width:40%;
    }
    
   
    .flex-container {
  display: flex;
}
.flex-container > div {
  margin: 10px;
  padding: 20px;
  width:600px;
}
#b1{
    margin:15px;
    padding:10px;
}

#b1 a:hover{
 color:yellow;
}
    </style>  
    </head>
            <body style="background: linear-gradient(110deg, #fdcd3b 60%, #ffed4b 60%);">
  
</body>
</html>
