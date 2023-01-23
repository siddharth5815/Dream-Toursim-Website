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
  <a class="navbar-brand">Dream Tourism</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  </nav>
<div class="jumbotron">
  <h6>Email: dreamtourism@gmail.com</h6>
  <h6>Tolfree no. 1800-584-88</h6>
</div>

 <!-- PHP form connects with mysql database using session -->
<section class="my-5">
    <div class="py-7">
      <h2 class="text-center">Cruise Packages</h2>
      <h5 class="text-center my-5">PLEASE FILL THE FORM TO CONFIRM YOUR DETAILS AND SELECT YOUR PREFERRED TOUR FOR BOOKING</h5>
    </div>

    <div class="w-50 m-auto">
      <form action="cruiseuserinfo.php" method="post">
        <div class="ban-bottom">
        <div class="bnr-right">
        <label class="inputLabel">From</label>
        <input class="date" name="from" id="datepicker" type="text" placeholder="yyyy-mm-dd" required="" class="bnr-right">
        <label class="inputLabel">To</label>
        <input class="date" name="to" id="datepicker1" type="text" placeholder="yyyy-mm-dd" required="">
      </div>
        <div class="form-group">
          <div class="my-4"></div>
          <label>Name:</label>
          <input type="text" name="name" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Email:</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile:</label>
          <input type="number" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>No. of Persons:</label>
          <input type="number" class="form-control" name="persons" id="sel1">
        </div>
        <div class="form-group">
          <label>Select Tour:</label>
          <select class="form-control" name="tour" id="sel1">
    <option>Jalesh Cruises Mumabai-Goa-Mumbai</option>
    <option>Singapore with 2 Nights Dream Cruise</option>
    <option>American Explorer with Bahams Cruise</option>
    </select>
        </div>
        <div class="form-group">
          <label>Comment(optional):</label>
          <textarea class="form-control" name="comment"></textarea>
        </div>
        <button text-center type="submit" class="btn btn-primary">Book</button>
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
</htlm>

<?php
include '../adminlogin/connection.php';
?>