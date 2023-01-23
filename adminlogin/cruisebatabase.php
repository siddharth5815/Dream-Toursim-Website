<!DOCTYPE html>
<html>
<head>
	<title></title>

    <?php include 'style2.css'; ?>

</head>
<body>
<div class="main-div"> 
<h1>List Of Booking Cruise Tours</h1>
<div class="center-div">
	<div class="table-responsive">
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>froms</th>
				<th>tos</th>
				<th>name</th>
				<th>email</th>
				<th>mobile</th>
				<th>persons</th>
				<th>tour</th>
				<th>comment</th>
			</tr>
		</thead>

		<tbody>
			<?php

            include 'connection.php';
            $selectquery = "select * from cruisebooking";

            $query = mysqli_query($con,$selectquery);

            $nums = mysqli_num_rows($query);

            while($res = mysqli_fetch_array($query)){
            ?>
            <tr>
				<td> <?php echo $res['id']; ?> </td>
				<td> <?php echo $res['froms']; ?></td>
				<td> <?php echo $res['tos']; ?></td>
				<td> <?php echo $res['name']; ?></td>
				<td> <span class="email-style"> <?php echo $res['email']; ?> </span> </td>
				<td> <?php echo $res['mobile']; ?></td>
				<td> <?php echo $res['persons']; ?></td>
				<td> <?php echo $res['tour']; ?></td>
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