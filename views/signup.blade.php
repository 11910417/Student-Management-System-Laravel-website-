@extends('master')
@section('title','signup')
@section('content')
<h1 style="background-color:black;color:white;padding:10px;"> <center>Sign up page</center>
</h1>
@endsection
@section('content2')
<div class="header">
  <h2><center>Sign up </center></h2>
</div>

<center>

                        <form class="row g-3" action="/create" method="post">
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
  <div class="col-md-6">
    <label for="validationDefault01" class="form-label">Name</label>
    <input type="text" class="form-control" id="validationDefault01" value="{{old('name')}}" name="name" required>
  </div>
  
  <div class="col-md-6">
    <label for="validationDefaultUsername" class="form-label">Username</label>
      <input type="text" class="form-control @error('username2') is-invalid @enderror" id="username"  value="{{old('username2')}}" name="username2" aria-describedby="inputGroupPrepend2" >
    <span style="color:red;">  @error('username2'){{$message}}@enderror</span>
  </div>
  
  
  <br>
  <div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
    <span style="color:red;">  @error('email'){{$message}}@enderror<br></span>
  </div>
 
  <br>
  <div class="col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control @error('password2') is-invalid @enderror" name="password2" value="{{old('password2')}}">
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
    <input class="btn btn-primary" type="submit" name="register">
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
            <meta charset="utf-8"/>
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!--jquery cdn-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                <style>
                        
                      .header{
                        width:50%;
                      }
                      form{
                        width:50%;
                      }
                        .col-md-3 .form-select:hover{
                            max-height:1000px;
                        }
                        </style>
                        </head>
                        <body style="background-color:#fdcd3b">
                          
                            
</body>  
</html>  
