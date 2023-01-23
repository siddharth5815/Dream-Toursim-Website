<?php
session_start();
?>

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
      <a href="../index.php" class="btn btn-primary">Home</a>
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
  $email = $_POST['email'];
  $password = $_POST['password'];

  $email_search = " select * from registration where email='$email' ";
  $query = mysqli_query($con,$email_search);

  $email_count = mysqli_num_rows($query);
  if($email_count){
    $email_pass = mysqli_fetch_assoc($query);
    $db_pass = $email_pass['password'];
    $_SESSION['username'] = $email_pass['username'];
    $pass_decode = password_verify($password, $db_pass);
    if($pass_decode){
      echo "";
      ?>
      <script>
        location.replace("show.php");
      </script>
      <?php
    }else{
      echo "Password Incorrect";
    }

    }else{
      echo "Invalid Email";
    }
  }

?>
    <!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image: url('111.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>

<article class="card-body mx-auto" style="max-width: 305px;">
      <h4 class="text-center">User Login</h4>
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
          <input name="email" class="form-control" placeholder="Gmail" type="email" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i></span>
          </div>
          <input class="form-control" placeholder="Password"
          type="password" name = "password" value="" required>
          </div> <!-- form-group// -->
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary btn-block">Login Now  </button>
        </div> <!-- form-group// -->
        <p class="text-center">Not Have an account?  <a href="regis.php">SignUp Here</a> </p>

      </form>
  </article>
  </div> <!--card.//-->
</div>
</div>

</body>
</html>