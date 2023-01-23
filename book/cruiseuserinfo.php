<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connention successful";
}else{
	echo "No connection";
}

mysqli_select_db($con, 'dreamtourismdata');

$from = $_POST['from'];
$to = $_POST['to'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$persons = $_POST['persons'];
$tour = $_POST['tour'];
$comment = $_POST['comment'];

$query = "insert into cruisebooking (froms, tos, name, email, mobile, persons, tour, comment) 
values ('$from', '$to', '$name', '$email','$mobile','$persons','$tour','$comment')";

mysqli_query($con,$query);

header('location:last.php');
?>