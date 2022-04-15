@extends('master')
@section('title','login')
@section('content')
<h1 style="background-color:black;color:white;padding:10px;"> <center>Login page</center>
</h1>
@endsection
@section('content2')
<div class="header">
  <h2><center>Login</center></h2>
</div>
                       <form  action="{{ route('login-user')}}" method="post">
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
  <div class="mb-3">

    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email"  value="{{old('email')}}" autocomplete="off" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    <span style="color:red;">  @error('email'){{$message}}@enderror<br></span>
  </div>
  
  <div class="mb-3">
    <label for="password2" class="form-label">Password</label>
    <input type="password" class="form-control" id="password2" value="{{old('password2')}}" name="password2">
    <span style="color:red;">  @error('password2'){{$message}}@enderror<br></span>
  </div>
  <center>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1" name="check">Check me out</label>
  </div>
  
  <input type="submit" class="btn btn-primary" name="login" value="Login"></center>
</form>
                    </div>
                    @endsection
<!DOCTYPE html>
<html>  
    <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            
                        #a{
                            width:70%;
                            border:4px solid black;
                            background-color:rgb(223, 217, 217);
                            padding:10px;
                            border-radius:8px;
                            margin:20px 80px 40px 200px
                        }
                       </style>
                       </head>
                       <body style="background-color:#fdcd3b">
                          
</body>  
</html>  
