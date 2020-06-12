@extends('layout.dashboard')
@section('content')


<div id="carouselslide" class= "carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
            <li data-target="#carouselslide" data-slide-to="0" class="active"></li>
            <li data-target="#carouselslide" data-slide-to="1"></li>
            <li data-target="#carouselslide" data-slide-to="2"></li>
            <li data-target="#carouselslide" data-slide-to="3"></li>
          </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 image" src="images/hostel.png" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
                <h3>WELCOME TO OUR HOSTEL</h3>
                <p >Your comfortability and security is our number one priority</p><br/>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 image" src="images/sports.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
                <h3>Opening Of Our Sports Complex </h3>
                <p>Find pleasure in exercising and having fun at the same time</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 image" src="images/key.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
                <h3>We Are Just A Bell Away From You</h3>
                <p>Feel free to come to us or report any insues</p>
        </div>
      </div>
      <div class="carousel-item">
            <img class="d-block w-100 image" src="images/porter.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                    <h3>Well Trained and Friendly Porters</h3>
                    <p>Feel free to come to us or report any insues</p>
            </div>
          </div>
    </div>
  </div>
@endsection
