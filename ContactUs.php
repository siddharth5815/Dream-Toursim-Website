<!DOCTYPE html>
<htlm>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
</body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Dream Tourism</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ContactUs.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminlogin/adminlogin.php">Admin</a>
      </li>

    </ul>

  </div>
</nav>

<div class="jumbotron">
  <h6>Email: dreamtourism@gmail.com</h6>
  <h6>Tolfree no. 1800-584-88</h6>
</div>

 <!-- PHP form connects with mysql database using session -->
<section class="my-5">
  	<div class="py-7">
  		<h2 class="text-center">Feedback Form</h2>
  	</div>

  	<div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
  			<div class="form-group">
  				<label>Name:</label>
  				<input type="text" name="name" autocomplete="off" class="form-control">
  			</div>
  			<div class="form-group">
  				<label>Mobile:</label>
  				<input type="number" name="mobile" autocomplete="off" class="form-control">
  			</div>
        <div class="form-group">
          <label>Rating:</label>
          <select class="form-control" name="rating" id="sel1">
            <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    </select>
        </div>
  			<div class="form-group">
  				<label>Comment:</label>
  				<textarea class="form-control" name="comment"></textarea>
  			</div>
  			<button type="submit" class="btn btn-primary">Submit</button>
  		</form>
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

<?php
include 'adminlogin/connection.php';
?>