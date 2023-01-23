<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:adminlogin.php');
}

?>

<!DOCTYPE html>
<html>
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
                font-size:20px; 
                font-weight: bold; 
                color: indigo; 
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
	<link rel="stylesheet" type="text/css" href="style.css">
    <?php include 'links.php' ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand">Dream Tourism</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="feedback.php">Feedback<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ragistration.php">Ragistration</a>
      </li>
    	</ul>
</div>
<a href="logout.php"class="btn btn-danger">Logout</a>
</nav>

<style>
    body {
  background-image: url('14.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
  </style>

<div class="py-3">
      <h2 class="text-center">Dream Tourism Admin Panel</h2>
    </div class>
    <div class="text-center text-uppercase gfg">Hello, welcome Admin
    	<?php echo $_SESSION['user']?>!</div>


<section class="text-center my-5">
    <div class="py-5">
            <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>RECORD OF ALL THE PACKAGES</th>
      </tr>
    </thead>
                 <tbody>
      <tr>
        <td><a href="airbatabase.php">Air International Package</a></td>
    </tbody>
    <tbody>
      <tr>
        <td><a href="domesticbatabase.php">Domestic Package</a></td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <td><a href="cruisebatabase.php">Cruise Package</a></td>
      </tr>
    </tbody>

   </table>
</div>
</div>
</section>

</body>
</html>