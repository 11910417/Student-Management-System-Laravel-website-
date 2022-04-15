@extends('master2')
@section('title','update student')
@section('content')
<h1 style="background-color:black;color:white;padding:10px;"> <center>Update student delails of id:{{$data['id']}}</center>
</h1>
@endsection
@section('content2')
<center>
<div class="header">
  <h2><center>Update Student details </center></h2>
</div>


                        <form class="row g-3" action="/update" method="post">
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
    <div class="col-md-6">
    <label for="validationDefault01" class="form-label">Name</label>
    <input type="text" class="form-control" id="validationDefault01" value="{{$data['name']}}" name="name" required>
  </div>
  
  <div class="col-md-6">
    <label for="validationDefaultUsername" class="form-label">Username</label>
      <input type="text" class="form-control @error('username2') is-invalid @enderror" id="username"  value="{{$data['username2']}}" name="username2" aria-describedby="inputGroupPrepend2" >
    <span style="color:red;">  @error('username2'){{$message}}@enderror</span>
  </div>
  
  
  <br>
  <div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$data['email']}}">
    <span style="color:red;">  @error('email'){{$message}}@enderror<br></span>
  </div>
 
  <br>
  <div class="col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control @error('password2') is-invalid @enderror" name="password2" value="">
    <span style="color:red;">  @error('password2'){{$message}}@enderror<br></span>
  </div>
  

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" name="check" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <div class="col-12">
    <input class="btn btn-primary" type="submit" name="update">
  </div>
  
</form>
</center>
         <br>
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
