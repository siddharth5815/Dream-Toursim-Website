<?php

session_start();
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
      
    </ul>
    
  </div>
</nav>



  <?php include 'css/style.css' ?>
  <?php include 'links/links.php' ?>

</head>
<body>

<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

  $pass = password_hash($password, PASSWORD_BCRYPT);
  $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

  $emailquery = "select * from registration where email='$email' ";
  $query = mysqli_query($con,$emailquery);
  $emailcount = mysqli_num_rows($query);

  if($emailcount>0){
  echo "email already exists";
}else{
  if($password === $cpassword){

  $insertquery = "insert into registration(username, email, mobile, password, cpassword) values('$username','$email','$mobile','$pass','$cpass')";

  $iquery = mysqli_query($con, $insertquery);
 
  if($iquery){
  ?>
  <script>
    alert("Inserted Successful");
    location.replace("login.php");
  </script>
  <?php
}else{
  ?>
  <script>
    alert("No Inserted");
  </script>
  <?php

}

}else{
  ?>
  <script>
    alert("Password are not matching");
  </script>
  <?php
}

}
}

?>
    <!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image: url('58.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>
    <article class="card-body mx-auto" style="max-width: 295px;">
      <h4 class="text-center">Create Account</h4>
      <p class="text-center">Get started with your free account</p>
      <p>
        <a href="" class="btn btn-block btn-gmail"> <i class="fa fa-google">
        </i> Login via Gmail</a>
        <a href="" class="btn btn-block btn-facebook">
          <i class="fa fa-facebook-f"></i> Login via facebook
        </a>
      </p>
      <p class="divider-text">
        <span class="">OR</span>
      </p>
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i></span>
          </div>
          <input name="username" class="form-control" placeholder="Full name" type="text" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i></span>
          </div>
          <input name="email" class="form-control" placeholder="Email address"
          type="email" required>
        </div> <!-- form-group// -->
        <div class="form-group  input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-phone"></i></span>
          </div>
          <input name="mobile" class="form-control" placeholder="Phone number" type="number" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i></span>
          </div>
          <input class="form-control" placeholder="Create password"
          type="password" name = "password" value="" required>
        </div> <!-- form-group// -->
        <div class="form-group  input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i></span>
          </div>
          <input class="form-control" placeholder="Repeat password" type="password" name="cpassword" required>
        </div> <!-- form-group// -->
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary btn-block">Create Account </button>
        </div> <!-- form-group// -->
        <p class="card-title ml-1 text-center"> Have an account? <a href="login.php">Log In</a> </p>
      </form>
  </article>
  </div> <!--card.//-->
</div>
</div>

</body>
</html>