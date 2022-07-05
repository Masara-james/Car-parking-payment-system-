<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- font awesome cdn link  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <link rel="stylesheet" href="assets/css/fontawesome.all.min.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    
<header class="header bg-primary">

    <div id="menu-btn" class="fas fa-bars"></div>

    <span href="#" class="logo"> <span>UCAR</span> CAR PARKING PAYMENT</span>

    <div id="login-btn">
        <button class="btn btn-warning text-primary border-warning">Login</button>
        <i class="far fa-user"></i>
</header> 
    
<div class="login-form-container bg-dark">

    <span id="close-login-form" class="fas fa-times"></span>
    <!-- hide login  and register forms for logged in users-->
        <!-- Login and register handled via javascript -->
    <form  id="formLogin" class="bg-primary" action="{{ route('login') }}" method="POST" >
        @csrf

        <h3>User login</h3>
        <h5 id="loginResp"></h5>
        <input type="email" name="email" placeholder="email" class="box">
        <input type="password" name="password" placeholder="password" class="box">
        <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
        <p class="text-warning"> don't have an account <a href="#" id="btn-register">Register here</a> </p>
    </form>

    <form id="formRegister" action="{{ route('register') }}" method="POST" class="d-none bg-primary">
        @csrf
        <h3>User Registration</h3>
        <h5 id="registerResp"></h5>
        <input type="text" name="username" placeholder="username" class="box">
        <input type="text" name="phone" placeholder="phone" class="box">
        <input type="email" name="email" placeholder="email" class="box">
        <input type="password" name="password" placeholder="password" class="box">
        <button type="submit" class="btn btn-warning " name="save">Register</button>  
        <p class="text-warning"> Already have an account? <a id="btn-login" href="#">login here</a> </p>
    <!-- </form>
    
        <form action="/logout" method="get">
        <h4>You are alredy logged in. Do you wish to logout?</h4>
        <button type="submit" name="logout" class="btn">Logout</button>
        </form> -->


</div>

<section class="home" id="home">

  

    <img data-speed="5" src="assets/image/pay.png" alt="" height="500px" width="70px">


</section>






<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>