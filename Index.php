<?php
session_start();
 
if(isset($_POST['submit'])){
    $User = trim($_POST['email']);
    $password = trim($_POST['password']);
}
   // if (trim($_COOKIE['email'])== $User && trim($_COOKIE['password'])==$password) {
       setcookie('flag', true, time()+3600, '/');
   // }

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/74351aa3ed.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href=".controller/style.css">
    <link rel="icon" href="Favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="/view.style1.css">
    <link rel="stylesheet" href="/view.style2.css">
     <style>
        
        .box1 {
            height: 200px;
            background-color: #fff;
        }
        
        .box2 {
            height: 200px;
            background-color: #fff;
        }
        
        .box3 {
            height: 200px;
            background-color: #fff;
        }
        
        .box4 {
            height: 200px;
            background-color: #fff;
        }
        @font-face {
            font-family: Muli;
            src: url(./view/fonts/Muli-Regular.ttf);
        }
        .p{
            font-family: Muli;
        }
       
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel" style="background-color: #008ff5;">
    <div class="container" >
        <a class="navbar-brand" href="Index.php"><img src="./view/image/icon.png" height="50px" width="50px" alt=""> Online-Project-Management-System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Index.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view/about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view/group.php">Team</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Main home -->
   <div class="shadow p-3 mb-5 bg-body rounded">
            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src=" https://7wdata.be/wp-content/uploads/2020/11/Artificial-Intelligence-5.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://internetmus.com/wp-content/uploads/2020/04/Web-Development.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://cdn.kenzie.academy/wp-content/uploads/prod/2020/11/02155935/AdobeStock_241083104-1400x934.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
        </div>
<!-- login page -->
<main class="login-form" style="margin-top: 5rem;">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form action="./controller/loginController.php" method="POST">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <a href="view/editpassword.php" class="btn btn-link">
                                    Forgot Your Password?
                                </a>
                            </div>
                            <div class="col-md-6 offset-md-4">
                                You are new here Let's
                                <a href="view/Registration.php" class="btn btn-link">
                                    Registration
                                </a>
                                then
                            </div>
                            </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Text Page -->
<br> </br>

<div class="shadow p-3 mb-5 bg-body rounded">
        <p align="center">
    <marquee width="100%" direction="right" height="100px">
<h1 class="p1">Welcome to Online Project Management System</h1>
</marquee>
<marquee width="60%" direction="left" height="100px">
<p class="p2">Let's keep in touch.. <br><br> </p>
</marquee>
<style>
body
{
background: #FDF5E6; linear-gradient(#2b1055, #7597de);}</style>
<p class="p3">This project is an online software development project. This project is helping to find their work by a software/ website. Mainly developed by focusing on many kinds of society where a large group of people lives together and they need to go out for their work in this pandemic. <br><br> 
<p class="text-justify">Welcome back digitalized system. But in this situation this is really rick and harmful for their life. So now they can easily work for their job or office or project by this software/ website from their house. They don’t need to go out for their work they can easily find their work such as programmer, tester, developer, analysis, data collection, designer, project manager. The most important think for customer or client they don’t have to find worker or online labour for their project. Customers or clients have to post their project work proposal. After that this software/ website will manage all workers for this project. In this software all actors and project manager also discuss everything by this software/website like calling and chatting section. Customer or client can see their work progress also.  </p></p>
<br><br><br>

    </div>

<!-- Facilities Page   -->  
<section id="facilities">
        <div class="container">
            <div class="title">
                <h1><center>Facilities</center></h1>
                <p>This process consists of various stages: Planning, Analysis, Product Design, Development & Implementation, Testing, Maintenance.</p>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="https://images.unsplash.com/photo-1593720213428-28a5b9e94613?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8d2ViJTIwZGV2ZWxvcG1lbnR8ZW58MHx8MHx8&w=1000&q=80" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">PROGRAMMING</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti officiis aperiam mollitia ipsam voluptatibus beatae iusto quod qui quidem sapiente quam maxime ad at distinctio placeat, unde accusamus consequatur maiores!</p>
                            <a href="">Click Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="https://images.unsplash.com/photo-1571171637578-41bc2dd41cd2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c29mdHdhcmV8ZW58MHx8MHx8&w=1000&q=80" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">TESTING</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti officiis aperiam mollitia ipsam voluptatibus beatae iusto quod qui quidem sapiente quam maxime ad at distinctio placeat, unde accusamus consequatur maiores!</p>
                            <a href="">Click Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="https://images.unsplash.com/photo-1534972195531-d756b9bfa9f2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80" class="card-img-top" alt="" alt="">
                        <div class="card-body">
                            <h5 class="card-title">DESIGNING</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti officiis aperiam mollitia ipsam voluptatibus beatae iusto quod qui quidem sapiente quam maxime ad at distinctio placeat, unde accusamus consequatur maiores!</p>
                            <a href="">Click Me</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<br>
<?php require_once('view/footer.php')?>