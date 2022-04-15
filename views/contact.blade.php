@extends('master2')
@section('content')
<h1 style="background-color:black;color:white;padding:10px;" class="text-center">Contact us</h1>
@endsection
@section('content2')
<div class="header">
<h2 class="text-center">Contact us</h2>
                    </div>

    <form action="contact" method="post">
    @if (session('status'))
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('status') }}
</div>

@endif
        @csrf
        <label>Username</label>
        <input class="form-control" type="text" name="username2" value="{{$data->username2}}">
        <br><br>
        <label>Email</label>
        <input class="form-control" type="email" name="email" value="{{$data->email}}" ><br><br>
        <label>Message</label>
        <textarea class="form-control" name="message" placeholder="Message" rows="6"></textarea><br><br>
        <center><button class="btn btn-primary" type="submit" name="send">Send </button></center>
    </form>
<br>
@endsection
<html>
    <head>
        
    <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
             body{
            background: url('images/contact.jpg');
            background-repeat: no-repeat;
            background-size: 7000px;
          }

  .header{
                          width:40%;
                        }
                        form{
                          width:40%;
                          padding:40px;
                        }

</style>
</head>
<body style="background: url('images/contact.jpg');background-repeat: no-repeat;
            background-size: 130%">


</body>
</html>
