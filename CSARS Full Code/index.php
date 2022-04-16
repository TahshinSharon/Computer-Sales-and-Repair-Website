<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--link Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link real="stylesheet" href="css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,700&display=swap" rel="stylesheet">    
    
    <!-- custom CSS -->
    <link real="stylesheet" href="css/custom.css">

    <title>Computer Sales And Repair</title>
</head>
<body>
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-success pl-10 fixed-top">
    <a href="index.php" class="navbar-brand text-dark">Computer Sales And Repair</a>
    <span class="navbar-text text-dark">Customer's Happiness is Our Aim</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
    <span clss="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenue">
    <ul class="navbar-nav pl-5 custom-nav">
    <li class="nav-item">
    <a href="index.php" class="nav-link text-danger">Home</a>
    </li>
    <li class="nav-item">
    <a href="Services" class="nav-link text-danger">Services</a>
    </li>
    <li class="nav-item">
    <a href="UserRegistration.php" class="nav-link text-danger">Registration</a>
    </li>
    <li class="nav-item">
    <a href="Requester/RequesterLogin.php" class="nav-link text-danger">Login</a>
    </li>
    <li class="nav-item">
    <a href="#contact" class="nav-link text-danger">contact</a>
    </li>
    </ul>
    </div>
    </nav>
    <!-- Start jubbotron-->
    <header class="jubbotron back-image" style="background-image:url(images/pg.jpeg);">
    <div class="myclass mainHeading">
        <h1 class="text-uppercase text-danger font-weight-bold">Welcome To Our Website</h1>
        <p class="font-italic bg-dark text-success">Customer's Happiness is our aim</p>
        <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
        <a href="UserRegistration.php" class="btn btn-danger mr-4">Sign Up</a>
    </div>
    
</header>
<!--Start Services-->
<div class="container text-center border-bottom">
        <h2>Our Services</h2>
        <div class="row mt-4">
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
                <h4 class="mt-4">Computer Accessories</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
                <h4 class="mt-4">Computer Maintenance </h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-cogs fa-8x text-success"></i></a>
                <h4 class="mt-4">Computer Repair</h4>
            </div>
        </div>
</div>
<!--Start Registration From-->
<?php include('UserRegistration.php')?>
<!--End Registration Form-->
<!--Start Customer Review-->
<div class="jumbotron bg-success">
<div class="container">
<h2 class="text-center text-Black">Customer Review</h2>
<div class="row">
<div class="col-lg-3 col-sm-6"><!--Start 1st column-->
<div class="card shadow-lg mb-2">
<div class="card-body text-center">
<img src="images/Shattajit.jpg" class="img-fluid" style="border-radius:100px;" alt="Shattajit">
<h4 class="card-title">Shattajit Ghosh</h4>
<p>*****</p>
</div>
</div> <!--End Customer Review-->
</div><!--End 1st Column-->
<div class="col-lg-3 col-sm-6"><!--Start 2nd column-->
<div class="card shadow-lg mb-2">
<div class="card-body text-center">
<img src="images/mow.jpg" class="img-fluid" style="border-radius:100px;" alt="mow">
<h4 class="card-title">Momtaj Hossain Mow</h4>
<p>*****</p>
</div>
</div>
</div><!--End 2nd Column-->
<div class="col-lg-3 col-sm-6"><!--Start 3rd column-->
<div class="card shadow-lg mb-2">
<div class="card-body text-center">
<img src="images/siam.jpg" class="img-fluid" style="border-radius:100px;" alt="siam">
<h4 class="card-title">Abu Yushuf Siam</h4>
<p>*****</p>
</div>
</div>
</div><!--End 3rd Column-->
<div class="col-lg-3 col-sm-6"><!--Start 4th column-->
<div class="card shadow-lg mb-2">
<div class="card-body text-center">
<img src="images/rashed.jpg" class="img-fluid" style="border-radius:100px;" alt="rashed">
<h4 class="card-title">Rashedul Alam</h4>
<p>****</p>
</div>
</div>
</div><!--End 4th Column-->
</div>
</div>
</div>
<!--Start Contruct Us-->
<div class="container">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row">
    <div class="col-md-8"><!--Start 1st column-->
    <?php include('contactform.php')?>
    <!--End 1st Column-->
        <div class="col-md-4 text-center"><!--start 2nd column-->
        <strong>Headquarter:</strong><br>
        CSARS pvt Ltd,<br>
        Tahshin,Nabonita<br>
        Dhaka,1250<br>
        Phone:+880XXXXXXXXXX<br>
        Email:XXX@gmail.com<br>
        <a href="#" target="_blank">www.csars.com</a><br>
    </div>
    <div class="col-md-6 text-right">
    <small>Designed By Tahshin & Nabonnita</small>
    <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
    </div><!--end 2nd coumn-->
</div>
<!-- Bootstrap js-->
    <script src="js/all.min.js"></script>
</body>
</html>