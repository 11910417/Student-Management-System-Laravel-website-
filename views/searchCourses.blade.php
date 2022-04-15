@extends('master2')
@section('content')
<h1 style="background-color:black;color:white;padding:10px;"><center>Courses Information</center></h1>
@endsection
@section('content2')
<style>
  .push-top {
    margin-top: 50px;
  }
</style>
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Username</td>
          <td>Class</td>
          <td>Course</td>
          <td>Academic Year</td>
         
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($student as $students)
        <tr class="table-light">
            <td>{{$students['id']}}</td>
            <td>{{$students['username2']}}</td>
            <td>{{$students['class']}}</td>
            <td>{{$students['course']}}</td>
            <td>{{$students['year']}}</td>
            <td><a class="btn btn-primary" href={{"updateCourse/".$students['id']}}>Update</a>
            <a class="btn btn-danger" href={{"deleteCourse/".$students['id']}}>Delete</a></td>
    
           
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
<style>
  
  </style>
