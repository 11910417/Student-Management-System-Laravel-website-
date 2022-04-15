@extends('master2')
@section('title','courses')
@section('content')
<h1 style="background-color:black;color:white;" align="center"><br>Courses<br></h1>


@endsection
@section('content2')
<br>

<div class="flex-container">
    <div class="a">
    <div class="card" style="width: 18rem; ">
  <img src="images/physics.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h2 style="color:white;">Physics</h2>
    <p class="card-text">Physics is the natural science that studies matter, its fundamental constituents, its motion and behavior through space and time, and the related entities of energy and force.<br>
      <a href="/physics">Click here to know more</a></p>
  </div>
</div>
</div>
<div class="b">
    <div class="card" style="width: 18rem; ">
  <img src="images/maths.jpg" class="card-img-top" alt="..." height="252px">
  <div class="card-body">
  <h2 style="color:white;">Maths</h2>
    <p class="card-text">Mathematics (from Ancient Greek μάθημα (máthēma) 'knowledge, study, learning ) is an area of knowledge, which includes the study of such topics as arithmetic and number theory, algebra, geometry, and calculus and analysis.<br>
      <a href="/maths">Click here to know more</a></p>
  </div>
</div>
</div>
<div class="c">
    <div class="card" style="width: 18rem; ">
  <img src="images/chemistry.jpg" class="card-img-top" alt="..." height="252px">
  <div class="card-body">
  <h2 style="color:white;">Chemistry</h2>
    <p class="card-text">Chemistry is the branch of science concerned with the substances of which matter is composed, the investigation of their properties and reactions, and the use of such reactions to form new substances.<br>
    <a href="/chemistry">Click here to know more</a></p>
  </p>
  </div>
</div>
</div>
<br>
<div class="d">
    <div class="card" style="width: 18rem; ">
  <img src="images/biology.jpg" class="card-img-top" alt="..." height="252px">
  <div class="card-body">
  <h2 style="color:white;">Biology</h2>
    <p class="card-text">Biology is the study of living organisms, divided into many specialized fields that cover their morphology, physiology, anatomy, behaviour, origin, and distribution.<br>
    <a href="/biology">Click here to know more</a></p>
  </div>
</div>
</div>
<div class="e">
    <div class="card" style="width: 18rem; ">
  <img src="images/geography.jpg" class="card-img-top" alt="..." height="252px">
  <div class="card-body">
  <h2 style="color:white;">Geography</h2>
    <p class="card-text">Geography is the study of the physical features of the earth and its atmosphere, and of human activity as it affects and is affected by these, including the distribution of populations and resources and political and economic activities.<br>
    <a href="/Geography">Click here to know more</a></p>
  </div>
</div>
</div>
<div class="f">
    <div class="card" style="width: 18rem; ">
  <img src="images/computer.jpg" class="card-img-top" alt="..." height="252px">
  <div class="card-body">
  <h2 style="color:white;">Computer</h2>
    <p class="card-text">A computer is a digital electronic machine that can be programmed to carry out sequences of arithmetic or logical operations (computation) automatically.<br>
      <a href="/computer">Click here to know more</a></p>
  </div>
</div>
</div>
<br>
<div class="g">
    <div class="card" style="width: 18rem; ">
  <img src="images/history.jpg" class="card-img-top" alt="..." height="252px">
  <div class="card-body">
  <h2 style="color:white;">History and Civics</h2>
    <p class="card-text">Similarities of History and Civics are like two sides of the same coin: both study humankind and its actions taken in the past or present.<br>
      <a href="/HistoryandCivics">Click here to know more</a></p>
  </div>
</div>
</div>

</div>
@endsection
<html>
    <head>
        <meta charset="utf-8">
        <title>Courses</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
         body{
        background-color:#ffed4b;
        
      
    }
    h1{
        background-color:black;
        color:white;
        padding:4px;
        font-style:normal;
    }
    h2{
        background-color:black;
        color:white;
        padding:4px;
    }
    .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.8);
}

    .flex-container {
  display: flex;
  flex-wrap: wrap;
}
.flex-container > div {
  margin: 40px;
  padding: 15px;
  width:300px;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));

}
    </style>  
    </head>
            <body style="background: linear-gradient(110deg, #fdcd3b 60%, #ffed4b 60%);">
  
</body>
</html>
