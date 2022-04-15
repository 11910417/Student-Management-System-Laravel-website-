@extends('master2')
@section('title','update contact')
@section('content')
<h1 style="background-color:black;color:white;padding:10px;"> <center>Update contact delails of id:{{$data['id']}}</center>
</h1>
@endsection
@section('content2')
<center>
<div class="header">
  <h2><center>Update Contact details </center></h2>
</div>


                        <form class="row g-3" action="/updateContact" method="post">
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
    <label>Username</label>
        <input class="form-control" type="text" name="username2" value="{{$data->username2}}">
        <br><br>
        <label>Email</label>
        <input class="form-control" type="email" name="email" value="{{$data->email}}" ><br><br>
        <label>Message</label>
        <textarea class="form-control" name="message" value="{{$data->message}}" rows="6"></textarea><br><br>
        <center><input class="btn btn-primary" type="submit" name="Update"></center>
  
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
