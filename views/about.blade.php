@extends('master2')
@section('title','about us')
@section('content')

        <h1 style="background-color:black;color:white;padding:10px;"><center><b>About us</b></center></h1>
@endsection
@section('content2') 
<center>   
  <div class="header">
    <h2><center>About us</center></h2>
</div> 
<center>

       <form>
        <div class="container1">
            <img src="images/11910417.jpg" alt="Avatar" style="width:90px;border:1px solid grey;">
            <p><span>Resham Chandak</span> Student at Lovely Professional University</p>
            <p>Pursuing 3rd year of B.Tech. Computer Science and Engineering</p>
          </div>
</form>

</center>
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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
          
          .header{
            width:60%;
          }
          form{
            width:60%;
          }
.container1 {
  border: 2px solid #ccc;
  background-color:#fdcd3b;
  border-radius: 8px;
  padding: 20px;
  margin: 16px 10px;
  color:white;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.container1 p{
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.container1 p:hover{
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.8);
}
.container1:hover{
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.8);
}

.container1::after {
  content: "";
  clear: both;
  display:table;
}

.container1 img {
  float: left;
  margin-right: 20px;
  border-radius: 50%;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.container1 img:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.8);
}
.container1 span {
  font-size: 20px;
  margin-right: 15px;
}

@media (max-width: 500px) {
  .container1 {
      text-align: center;
  }
  .container1 img {
      margin: auto;
      float: none;
      display: block;
     
}
  }
}
        </style>
    </head>
    <body style="background: url('images/about.jpeg');
            background-repeat: no-repeat;
            background-size: 130%; ">
     
    </body>
</html>