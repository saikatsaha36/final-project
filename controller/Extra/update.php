<?php
	include('conn.php');
	$id=$_GET['id'];
	
	$user_id=$_POST['user_id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$img=$_POST['img'];
	$type=$_POST['type'];
	
	mysqli_query($conn,"update `users` set user_id='$user_id', fname='$fname', lname='$lname', email='$email', img='$img', type='$type' where user_id='$id'");
	header('location:index.php');
?>