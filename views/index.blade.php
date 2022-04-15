@extends('master2')
@section('title','home')
@section('content')
<h1 style="background-color:black;color:white;padding:10px;"> <center>Student Management System</center>
</h1>
@section('content2')
<div class="header">
  <h2><center>Dashboard</center></h2> 
</div>
<div class="content">
<center><h4 id="head"class="text-warning">Welcome {{$data->name}} to our website</h4></center>
<hr>

  
<br>
  <br>
  <div class="flex-container">
  <div>
  
 <center><span class="report-title">Total Students</span></center>
 <hr>
 
<center><h4>{{$count1}}</h4></center>
<hr>
<center><a style="color:red;font-size:20px;" href="searchStudent.php"><span class="report-count"> View Students</span></a></center>
  </div>
  <div>
 
 <center><span class="report-title">Total Courses added</span></center>
 <hr>

<center><h4>{{$count2}}</h4></center>

<hr>
<center><a style="color:red;font-size:20px;" href="searchCourses"><span class="report-count"> View Courses</span></a></center>
  </div>
  
  <div>
 
 <center><span class="report-title">Total Contact added</span></center>
 <hr>
<center><h4>{{$count3}}</h4></center>

<hr>
<center><a style="color:red;font-size:20px;" href="searchContacts"><span class="report-count"> View Contacts</span></a></center>
  </div>
  
<div>
  
 <center><span class="report-title">Total Courses Available</span></center>
 <hr>
<center><h4>7</h4></center>
<hr>
<center><a style="color:red;font-size:20px;" href="courses"><span class="report-count"> View Courses Info</span></a></center>
  </div>
  
</div>
    
</div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

@endsection
<!DOCTYPE html>
<html>
    <head>
        <!--<meta charset="utf-8">
        <title>Index Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
         
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
-->
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
        
        * {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: #F8F8FF;
}
.content h4:hover{
color:red;
}

.header {
  width: 80%;
  margin: 50px auto 0px;
  color: white;
  background-color:#202727 ;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius:10px 10px 0 0;
  padding: 20px;
}
form, .content {
  width: 80%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;}

  .flex-container {
  display: flex;
}

.flex-container > div {
  background-color: aqua;
  margin: 10px;
  padding: 20px;
  font-size: 30px;
  border-radius:7px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 36%;
}
.flex-container > div:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.8);
}
            </style>
      </head>
            <body style="background: linear-gradient(110deg, #fdcd3b 60%, #ffed4b 60%);">
</body>
</html>
