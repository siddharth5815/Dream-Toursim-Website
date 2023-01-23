<?php

session_start();

if(!isset($_SESSION['username'])){
  echo "You are logged out";
  header('location:login.php');
}

?>
<!DOCTYPE html>
<htlm>
<head> 
  <head>
    <script src= 
        "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
        </script> 
        <script> 
            $(document).ready(function(){ 
                $("button").click(function(){ 
                    $("#div_content").load("gfg.txt"); 
                }); 
            }); 
        </script> 
        <style> 
            body { 
                text-align: center; 
            } 
            .gfg { 
                font-size:30px; 
                font-weight: bold; 
                color: brown; 
            } 
            .geeks { 
                font-size:17px; 
                color: black; 
            } 
            #div_content { 
                font-size: 40px; 
                font-weight: bold; 
                color: black; 
            } 
        </style>
  </head>
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
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    </ul>
</div>
</nav>

<style>
    body {
  background-image: url('.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
  </style>

<body> 
        <div id="div_content"> 
            <div class = "text-center gfg py-5">Your Booking is Confirm! <?php echo $_SESSION['username']; ?></div> 
        </div>
    </body> 

    <div class="container-fluid">
      <div class="text-center">
        <img src="002.png" class="img-fluid aboutimg">
    </div>
  </div>


<section class="text-center my-2">
    <div class="py-0">
            <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Thankyou so much for booking your dream trip with Dream Tourism we glad to see you here :)</th>
      </tr>
      <tr>
        <th>Please rate our website from <a href="../ContactUs.php">Feedback</a> section </th>
      </tr>
    </thead>
                 <tbody>
      <tr>
        <td><a href="../package.php">Book Another Trip</a></td>
    </tbody>
    <tbody>
      <tr>
        <td><a href="../index.php">Home</a></td>
      </tr>
    </tbody>

   </table>
</div>
</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script type="text/javascript"></script>
</body>
</htlm>