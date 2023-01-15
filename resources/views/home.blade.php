<?php
use Illuminate\Support\Facades\Request;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>



<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
    
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registration">Registration</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Background image -->
  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('https://www.ecorentacar.com/wp-content/uploads/2019/03/Luxury-Fleet-Banner.jpg');
      
      height: 600px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">Car Rental Management System</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>
<div class="card text-center">
  <div class="card-header">
   <h2> Available Cars For rent </h2>
  </div></div>
<div class="card-deck">
@foreach ($car_lists as $car_list)
  <div class="card">
    <img class="card-img-top" src="{{asset('pro_images/'.$car_list->car_pic)}}" alt="Card image cap"width="250" height="250">
    <div class="card-body">
      <h5 class="card-title">Name:{{ $car_list->car_name }}</h5>
      <p class="card-text">Rent for:{{ $car_list->rent_price }}TK</p>
      <p class="card-text">Rent Provider:{{ $car_list->car_owner_name }}</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"></small>
      
      
    </div>
    <a href="" class="btn btn-primary">Order</a>
  </div>

  @endforeach
  
</div>


<div class="container">
  <div class="row">
    <div class="col-md-12 pt-5 pb-2 ourTeam-hedding text-center">
      <h1>Our Team</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<strong> sed do eiusmod
      tempor incididunt </strong>ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="row section-success ourTeam-box text-center">
        <div class="col-md-12 section1">
          <img src="https://scontent.fdac145-1.fna.fbcdn.net/v/t39.30808-6/308985197_3255901664669231_6298355565480652697_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=174925&_nc_eui2=AeG83Dov1rMpTiJEkPB0f2Y_EtSHRJYkL50S1IdEliQvnVozcIlN0SA2I0zFdFkRBpDAR2PoOpGwpZyyl-oAQTOP&_nc_ohc=r-n-DQtvE8IAX9uBfVE&_nc_ht=scontent.fdac145-1.fna&oh=00_AfDQ5pYuGwnV6G1Wj9h9B4B_EkYFhKZ2Y1Xzy05yC6JduQ&oe=63C8FD41"width="300" height="300">
        </div>
        <div class="col-md-12 section2 pb-3">
          <p> <h3> Hridoy Sheikh </h3> </p>
          <span> <br> </span>
        </div>
        <div class="col-md-12 section3">
          <i class="fa fa-facebook" aria-hidden="true"></i>
          <i class="fa fa-twitter" aria-hidden="true"></i>
          <i class="fa fa-dribbble" aria-hidden="true"></i>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="row section-info ourTeam-box text-center">
        <div class="col-md-12 section1">
          <img src="https://media.licdn.com/dms/image/D5603AQHXtAIB-w8MCA/profile-displayphoto-shrink_800_800/0/1669998426351?e=1679529600&v=beta&t=RoTz_cgcQEmmnz09rS2rDyarPy_pbZHSw3B0pX291uU"width="300" height="300">
        </div>
        <div class="col-md-12 section2 pb-3">
          <p> <h3>Ahsan Mansiv </h3> </p>
          <span> <br> </span>
        </div>
        <div class="col-md-12 section3">
          <i class="fa fa-facebook" aria-hidden="true"></i>
          <i class="fa fa-twitter" aria-hidden="true"></i>
          <i class="fa fa-dribbble" aria-hidden="true"></i>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="row section-danger ourTeam-box text-center">
        <div class="col-md-12 section1">
          <img src="https://media.licdn.com/dms/image/C5603AQHZAk7_VpIpQA/profile-displayphoto-shrink_800_800/0/1643867320281?e=1679529600&v=beta&t=F1gc72eQhtW2EL0nBP50nXoDViG-t3zNRMNsvI56olc" width="300" height="300">
        </div>
        <div class="col-md-12 section2 pb-3">
          <p><h3>S.M. Shahriar</h3></p>
          <span> <br> </span>
        </div>
        <div class="col-md-12 section3">
          <i class="fa fa-facebook" aria-hidden="true"></i>
          <i class="fa fa-twitter" aria-hidden="true"></i>
          <i class="fa fa-dribbble" aria-hidden="true"></i>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
   

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright: Ahsan Mansiv
    
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        
    </script>
</html>
