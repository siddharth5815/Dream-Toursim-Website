$_SESSION['username'] = $email_pass['username'];

if(!isset($_SESSION['username'])){
echo "You are logged out";
  header('location:login.php');
}

container mr-5