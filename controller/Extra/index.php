<!DOCTYPE html>
<html>
<head>
<title>Update User</title>
	<style>
	/*	 body
		{
			background-color: lightblue;
		} */
		th{
	background-color: darkcyan;
	color: #fff;
}	
td{
/*	background-color: lightgrey;*/
	text-align: center;
}
thead{
	text-align: center;
}	
Image{
	width: 120px;
	height: 120px;
}

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div>
		<a class="btn btn-primary" href="http://localhost/Online-Project-Management-System/view/softwareDeveloper.php">Back</a>
		<br>
		<table class="table" align="center" width="100%">
			<thead >
				<th>User Id</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Email</th>
	<!-- 			<th>Image</th> -->
				<th>Type</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `users`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['user_id']; ?></td>
							<td><?php echo $row['fname']; ?></td>
							<td><?php echo $row['lname']; ?></td>
							<td><?php echo $row['email']; ?></td>
					   <!--     <td> <?php echo '<img src="data:image;base64,'.base64_encode($row['img']).'" alt"image" style="width: 150px; height: 120px;" >'; ?> </td> -->


							<td><?php echo $row['type']; ?></td>
							<td>
								<a class="btn btn-primary" href="edit.php?id=<?php echo $row['user_id']; ?>">Edit</a> ||
								<a class="btn btn-info" href="delete.php?id=<?php echo $row['user_id']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>