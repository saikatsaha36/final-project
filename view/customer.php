<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/f6bba71e8b.js" crossorigin="anonymous"></script>
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
    <link rel="stylesheet" href="../controller/style.css">
    <link rel="icon" href="Favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Customer</title>
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
                    <?php
                                $login="login";
                        $name="";
                        if(isset($_SESSION["fname"])){
                            $name=$_SESSION["fname"];
                            $login="<a class='nav-link' href='../Index.php'>logout</a>"; 
                            echo"| $name  |  ";
                            echo "<li>$login</li>";
                        }
                        
                        else{echo"| $name  |  ";
                            echo "<li>$login</li>" ;}
                    ?>
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
<main>
    
    <div class="container"> <div class=" text-center mt-5 ">
        <h1>Client Work Details</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="contact-form" role="form" action="../controller/work.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Firstname *</label> <br>
                                        
                                        <h4><?php echo $_SESSION["lname"]; ?></h4> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Lastname *</label> <br> <h4> <?php echo $_SESSION["fname"]; ?></h4> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Budget *</label> <input id="form_email" type="text" name="price" class="form-control" placeholder="Please enter how much you will pay *" required="required" onkeypress="return validateNumber(event)"> </div>
                                    </div>

<!--                                     <form action="../controller/customer.php" method="post" enctype="multipart/form-data">
  Select image to upload: <br>
  <input type="file" name="fileToUpload" id="fileToUpload"><br>
  <input type="submit" value="Upload File" name="submit">
</form> -->

                                   <!--  <div class="form-group row">
                                <label for="Select Image" class="col-md-4 col-form-label text-md-right">Select Image</label>
                                <div class="col-md-6">
                                    <form action="../controller/up.php" method="post" enctype="multipart/form-data">
                                    <input type="file" name="submit" id="img" accept="image/x-png,image/gif,image/jpeg,image/jpg" >
                                    *If you want to add any image.
                                </div>
                            </div> -->

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="form_message">Work Details *</label> 
                                        <textarea id="form_message" name="details" class="form-control" placeholder="Write your details here." rows="4" required="required" data-error="Please, leave us a details."></textarea> </div>
                                    </div>
                                    <div class="col-md-12"> <input id="img" type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Done"> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>
<!-- File Upload -->
<div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <i class="fa fa-paperclip" aria-hidden="true" for="form_message"> Attached File * </i>
                                            <form action="../controller/up.php" method="post" enctype="multipart/form-data">
                                             <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
                                             <br>
                                                 <input type="submit" value="Upload File" class="btn btn-success btn-send pt-2 btn-block " name="submit">
                                             </form>
                                             </div>
                                         </div>
                                    </div>                                   
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<br>

<div class="chatdiv" >
<a class="chat btn btn-dark btn-send pt-2 btn-block " href="../controller/Chat/login.php"> <img src="https://img.icons8.com/color/48/000000/chat--v3.png"/> Chat</a>
</div>
    
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chatapp";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$cname=$_SESSION["lname"];
$sql = "SELECT * FROM work where customerName='$cname'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-primary'>";
            echo "<tr class='table-warning'>";
                echo "<th>workerID</th>";
                echo "<th>Client Name</th>";
                echo "<th>Amount</th>";
                echo "<th>status</th>";
                echo "<th>details</th>";
                      // echo "<th>img</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['workerID'] . "</td>";
                echo "<td>" . $row['customerName'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "<td>" . $row['details'] . "</td>";
                // echo "<td>" . $row['img'] . "</td>";
    
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>

<script>
    function validateNumber(e) {
            const pattern = /^[0-9]$/;

            return pattern.test(e.key )
        }
</script>
</main>