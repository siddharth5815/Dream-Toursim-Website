<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "dreamtourismdata";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
	?>
	<script>
		
	</script>
	<?php
}else{
	?>
	<script>
		alert("No Connection");
	</script>
	<?php
}

?>