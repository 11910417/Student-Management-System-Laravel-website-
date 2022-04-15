<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script><!-- cdn of css-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!--jquery cdn-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')
</title>
<link rel="stylesheet" href="'static',filename='css/header.css'"/>
<link href="images/login.jfif"/>
<link href="images/signup.jpg"/>
<!--retieve the information from the child page-->
<style>
    header{
        background-color:grey;
        color:white;
        position:relative;
        padding:10px;
    }
    header:hover{
        background-color:black;
    }
    </style>
</head>
<body>
    <div class="page-header">
@yield('content')
@include('header')
</div>
@yield('content2')
</body>
<br>
@include('footer')
</html>
