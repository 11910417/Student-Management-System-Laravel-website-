@extends('master2')
@section('content')
<h1 style="background-color:black;color:white;padding:10px;"><center>Contact Information</center></h1>
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
          <td>Email</td>
          <td>Message</td>
         
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($student as $students)
        <tr class="table-light">
            <td>{{$students['id']}}</td>
            <td>{{$students['username2']}}</td>
            <td>{{$students['email']}}</td>
            <td>{{$students['message']}}</td>
            <td><a class="btn btn-primary" href={{"updateContact/".$students['id']}}>Update</a>
            <a class="btn btn-danger" href={{"deleteContact/".$students['id']}}>Delete</a></td>
    
           
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
<style>
  
  </style>
