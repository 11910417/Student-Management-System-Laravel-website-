<html>
  <head>
  <title>header</title>
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
        <link href="css/header.css"/>
    </head>
    <body  style="background: linear-gradient(110deg, #fdcd3b 60%, #ffed4b 60%);">
        <div >
      
      <nav class="navbar fixed navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">SMS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index">Dashboard</a>
          </li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Students
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/student">Add new course</a></li>
            <li><a class="dropdown-item" href="/searchStudent">Student Information</a></li>
            <li><a class="dropdown-item" href="/searchCourses">Course Information</a></li>
            <li><a class="dropdown-item" href="/searchContacts">Contact Information</a></li>
            <li><a class="dropdown-item" href="/courses">Courses Available</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
        </li>
          <li class="nav-item">
            <a class="nav-link active" href="about">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="contact">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="feedback.php">Feedback</a>
          </li>
          <pre>             </pre>
        <!--  <li><form class="d-flex"><input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"><button class="btn btn-outline-warning" type="submit">Search</button></form>
  -->  </li>   
  </ul>
          <ul>
    
    	<a class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Logout" href="logout"  name="logout">logout</a> 
   

  
  </ul>
      </div>
    </div>
  </nav> 
  </div>
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
    </body>
    </html>