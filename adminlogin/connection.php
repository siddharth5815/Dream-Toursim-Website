<?php


$username = "root";
$password = "";
$server = 'localhost';
$db = 'dreamtourismdata';

 $con = mysqli_connect($server,$username,$password,$db);
if ($con) {
	// echo "Connection Successful";
	?>
	<?php
}else{
	// echo "No connection";
	die("no connection" . mysqli_connect_error());
}

?>