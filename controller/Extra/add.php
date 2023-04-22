<?php
	include('conn.php');
	
	$user_id=$_POST['user_id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$img=$_POST['img'];
	$type=$_POST['type'];
		
	mysqli_query($conn,"insert into `users` (user_id,fname,lname,email,img,type) values ('$user_id','$fname','$lname','$email','img','type')");
	header('location:index.php');
	
?>