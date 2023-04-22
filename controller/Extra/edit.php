<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `users` where user_id='$id'");
	$row=mysqli_fetch_array($query);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Update User</title>
    <style>
      legend{
         text-align: center;
         background-color: darkcyan;
	color: #fff;
      }
      td{
         padding-left: 20px;
      }

   </style>
  </head>
  <body>
  	<form method="POST" action="update.php?id=<?php echo $id; ?>" class="bg-light" >
  	<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit User Information</div>
                    <div class="card-body">                 
                    	<div class="form-group row">
                                <label for="Name" class="col-md-4 col-form-label text-md-right">User Id</label> 
                                <div class="col-md-6">
                                  <input type="text" class="form-control" value="<?php echo $row['user_id']; ?>" name="user_id">  
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Firstname</label>
                                <div class="col-md-6">
                                 <input type="text" class="form-control" value="<?php echo $row['fname']; ?>" name="fname">   
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Lastname</label>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" value="<?php echo $row['lname']; ?>" name="lname"> 
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                 <input type="text" class="form-control" value="<?php echo $row['email']; ?>" name="email">  
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Type</label>
                                <div class="col-md-6">
                                 <input type="text" class="form-control" value="<?php echo $row['type']; ?>" name="type"> 
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <br>
		<input class="btn btn-lg btn-primary" type="submit" name="submit" value="Submit">
		<a class="btn btn-secondary btn-lg active" href="index.php">Back</a>
                            </div>
                            
                                
    
                    </div>
                 </div>
              </div>
           </div>
        </div>












  	


    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>





