<!DOCTYPE html>
<html>
<head>
	<title></title>

    <?php include 'style2.css'; ?>

</head>
<body>
<div class="main-div"> 
<h1>List Of Feedback</h1>
<div class="center-div">
	<div class="table-responsive">
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>mobile</th>
				<th>rating</th>
				<th>comment</th>
			</tr>
		</thead>

		<tbody>
			<?php

            include 'connection.php';
            $selectquery = "select * from feedback";

            $query = mysqli_query($con,$selectquery);

            $nums = mysqli_num_rows($query);

            while($res = mysqli_fetch_array($query)){
            ?>
            <tr>
				<td> <?php echo $res['id']; ?> </td>
				<td> <?php echo $res['name']; ?></td>
				<td> <?php echo $res['mobile']; ?></td>
				<td> <span class="email-style"> <?php echo $res['rating']; ?> </span> </td>
				<td> <?php echo $res['comment']; ?></td>
			</tr>


			<?php
		}

            ?>

		</tbody>
	</table>
</div>
</div>
<p class="text-center"><u> <a href="adminmainpage.php">Back</a></u> </p>
</div>
</body>
</html>