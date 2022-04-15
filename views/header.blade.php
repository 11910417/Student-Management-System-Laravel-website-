<!DOCTYPE html>
<html>
    <head>
      <!--  <meta charset="utf-8">
        <title>header</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
        <link href="css/header.css"/>
</head>
<body>
    
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/master">SMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/index">Dashboard</a>
        </li>
        
       
</ul>
      <ul>
      <a href="/login"><img src="images/login.jfif" height="50px" width="50px" alt="Login"/></a>
      <a href="/signup"><img src="images/signup.jpg" height="60px" width="60px" alt="Sign up"/></a>
        </ul>
    </div>
  </div>
</nav>
</body>

<script>
  $(document).ready(function(){
  $('.navbar-toggler-icon').click(function(){
$('.collapse navbar-collapse').toggle('1000');
});
$('.nav-link dropdown-toggle active').click(function(){
$('.dropdown-menu').toggle('1000');
});
$('.navbar-toggler-icon').click(function(){
$('.collapse navbar-collapse').hide('1000');
});
   }
   );
 </script>
</html>