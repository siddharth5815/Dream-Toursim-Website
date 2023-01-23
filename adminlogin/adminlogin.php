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

<?php
session_start();

$con = mysqli_connect('localhost', 'root');
if($con){
  echo "";
}else{
  echo "no connection";
}


?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php include 'links.php' ?>
</head>
<body>

  <!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image: url('82.jpg');
  background-repeat: no-repeat; 
  background-size: cover;
}
</style>
</head>
<body>

<header>
  <div class="center-div shadow">
    <div class="text-center text-uppercase text-bold"> <h5> ADMIN LOGIN </h5></div>
    <div class="container row d-flex">
      <div class="admin-form  p-3">
        <form action="logincheck.php" method="POST">
          <div class="form-group">
            <label>User ID</label>
            <input type="text" name="user" value=""
            class="form-control" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="pass" value=""
            class="form-control" autocomplete="off" required>
          </div>
          <input type="submit" class="btn btn-success" name="submit" >
          <p class="text-center"><a href="../index.php">Home Page</a> </p>

</form>
      </div>
  </div>
</header>

  </body>
  </html>
</body>
</html>