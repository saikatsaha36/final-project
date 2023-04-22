<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href=".controller/style.css">
    <link rel="icon" href="Favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Registration</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel" style="background-color: #008ff5;">
    <div class="container" >
        <a class="navbar-brand" href="http://localhost/Online-Project-Management-System/">Online-Project-Management-System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Team</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main class="login-form" style="margin-top: 2rem;">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Client's Registration</div>
                    <div class="card-body">
                    <form name="myform" action="../controller/dbnew.php" onsubmit="return validate()" class="bg-light" method="POST" enctype="multipart/form-data" autocomplete="off">
                            <div class="form-group row">
                                <label for="Name" class="col-md-4 col-form-label text-md-right">Name</label> 
                                <div class="col-md-6">
                                    <br>
                                    <input type="text" id="Name" class="form-control" name="fname" placeholder="First name" >
                                    <span id="uname" class="text-danger font-weight-bold"> </span>
                                     <br>
                                    <input type="text" id="Name" class="form-control" name="lname" placeholder="Last name" >
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Enter new password" onkeyup='check();' >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Confirm password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="cpassword" class="form-control" name="cpassword" placeholder="Enter confirm password" onkeyup='check();' >
                                      <span id='message'></span>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="email" placeholder="Enter your email" >
                          
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Select Image" class="col-md-4 col-form-label text-md-right">Select Image</label>
                                <div class="col-md-6">
                                    <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required >
                                </div>
                            </div>
                            <div class="form-group row" >
                                <div class="col-md-6 offset-md-4" >
                                    <div class="radio">
                                        <label>
                                            <span style="color: skyblue;">Register as a: </span>
                                            <ul>
                                                <li><input type="radio" name="usertype" value="Software Programer"> Software Programer </li>
                                                <li><input type="radio" name="usertype" value="requirement Manager"> Requirement Manager</li>                                             <li><input type="radio" name="usertype" value="Software Tester"> Software Tester </li>
                                                <li><input type="radio" name="usertype" value="Designer"> Designer</li>
                                               <!--  <li><input type="radio" name="usertype" value="Customer"> Client</li> -->
                                            </ul>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" name="submit" value="Registration" class="btn btn-primary">
                          <!--       <a href="Team.php">Project</a> -->
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
<script src="../controller/Chat/javascript/pass-show-hide.js"></script>
<script src="../controller/Chat/javascript/signup.js"></script>
<script>

    function validate() 
    {
        var first = document.forms["myform"]["fname"].value;
        var last = document.forms["myform"]["lname"].value;
        var pass = document.forms["myform"]["password"].value;
        var cpass = document.forms["myform"]["cpassword"].value;
        var email = document.forms["myform"]["email"].value;

// Name Validation

        if (first == "")
        {
            alert("Enter the First Name");
            return false;
        }
        if(!isNaN(first))
            {
            alert("name should be in character");
            return false;
            }

             if (last == "")
        {
            alert("Enter the Last Name");
            return false;
        }
        if(!isNaN(last))
            {
            alert("name should be in character");
            return false;
            }
           
// email validation
    var at = email.indexOf("@");
    var dot = email.lastIndexOf(".");
    if(at<1||dot<at+2||dot+2 >= email.lenght)
            {
            alert("Not a valid email");
            return false;
            }
    }

// pass validation
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('cpassword').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}

</script>

</body>
</html>
