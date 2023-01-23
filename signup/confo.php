<?php

session_start();

if(!isset($_SESSION['username'])){
    echo "You are logged out";
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
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
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
<a href="logout.php" class="btn btn-primary">Logout</a>
    </ul>
</div>
</nav>

</head>
<body> 
        <div id="div_content"> 
            <div class = "text-center gfg">Hello <?php echo $_SESSION['username']; ?> </div> 
            <div class = "text-center gfg">email <?php echo $email = $_POST['email']; ?> </div> 
        </div>
</body>
</html>