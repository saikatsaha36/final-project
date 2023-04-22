<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `users` where user_id='$id'");
	header('location:index.php');
?>