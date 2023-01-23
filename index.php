<!DOCTYPE html>
<htlm>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
</head>
</body>

<?php include 'menu.php'; ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="0001.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="0002.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="0003.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
    <div>
      <h3 class="text-center">About Us</h3>
    </div>
  </section>
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
        <img src="004.jpg" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h3 class="display-5">Dream Tourism welcomes you.</h3>
        <p class="py-3"> Welcome Dream Tourism is an Indian based IATA and government recognized travel company. We are a young, energetic and enthusiastic team of professionals with a combined field experience. We are one of the leading players in the travel industry, known for our impeccable service and well preserved moral values.</p>
        <a href="about.php" class="btn btn-success"> Check More </a>
      </div>
      </div>
    </div>
  </section>

  <section class="my-7">
    <div class="py-5">
      <h3 class="text-center">Our Packages</h3>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="005.jpg" alt="Card image">
            <div class="card-body">
            <h4 class="card-title">Air International Package</h4>
            <p class="card-text">South Africa, Greece, Spain and Australia etc.</p>
             </div>
          </div>
       </div>
       <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="010.jpg" alt="Card image">
            <div class="card-body">
            <h4 class="card-title">Domestic Tours</h4>
            <p class="card-text">Delhi, Mumbai, Agra, and Jaipur etc.</p>
             </div>
          </div>
       </div>
       <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="025.jpg" alt="Card image">
            <div class="card-body">
            <h4 class="card-title">International Cruise Package</h4>
            <p class="card-text">Best International Cruise deals.</p>
             </div>
          </div>
       </div>
       
     </div>
  </div>
</section>

<section class="my-6">
  <div class="py-4">
<div class="text-center"> <a href="services.php" class="btn btn-primary">Our Services</a>
</div>
</section>


<footer>
  <p class="p-3 bg-dark text-white text-center">
  @dreamtourism</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</body>
</html>