<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connention successful";
}else{
	echo "No connection";
}
mysqli_select_db($con, 'dreamtourismdata');

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$rating = $_POST['rating'];
$comment = $_POST['comment'];

$query = "insert into feedback (name, mobile, rating, comment) 
values ('$name', '$mobile', '$rating', '$comment')";

mysqli_query($con,$query);

header('location:index.php');

?>