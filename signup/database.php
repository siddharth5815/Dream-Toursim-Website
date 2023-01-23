<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connention successful";
}else{
	echo "No connection";
}
mysqli_select_db($con, 'dreamtourismdata');

$package = $_GET['package'];
$tour = $_GET['tour'];
$from = $_POST['from'];
$to = $_POST['to'];
$email = $_POST['cemail'];
$mobile = $_POST['cmobile'];
$persons = $_POST['noofpersons'];
$comment = $_POST['comment'];

$query = "insert into booking (package, tour, from, to, cemail, cmobile, noofpersons, comment) 
values ('$package', '$tour', '$from', '$to','$email','$mobile','$persons','$comment')";

mysqli_query($con,$query);
?>