<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/f6bba71e8b.js" crossorigin="anonymous"></script>

<?php 
  session_start();
  session_destroy();
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
    <link rel="stylesheet" href="..controller/style.css">
    <link rel="icon" href="Favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>software Developer</title>
    <style>
img {
  border-radius: 50%;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel" style="background-color: #008ff5;">
    <div class="container" >
        <a class="navbar-brand" href="#">Online-Project-Management-System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="navbar-brand" href="#">Welcome Admin !</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Team</a>
                </li>
              <!--   <li class="nav-item">
                    <a class="nav-link" href="http://localhost/Online-Project-Management-System/">Logout</a>
                </li> -->
            </ul>
        </div>
    </div>

</nav>


        <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <!-- <li class="active"><a href="index.php">Dashboard <span class="sr-only">(current)</span></a></li> -->
            <!-- find users' image if image not found then show dummy image -->
            
            
            <li> <br> <a href="#"><img src="image/person.jpg" width="100" height="100" alt="not found"/></a></li>
            

            </br>          
            <!-- <li><a href="index.php?page=update_password"><span class="fas fa-lock"></span> Update Password</a></li> -->
            <li> <br> <a href="../view/reg.php"><span class="far fa-user-circle">
            </span> User Registration </a></li>
            <li> <br> <a href="../controller/Extra/index.php">
                <span class="fas fa-user"></span>  Manage Users </a></li>
             <li> <br><a href="../controller/Chat/login.php">
                <span class="far fa-envelope"></span>  Mange  Notification </a></li>
             <li> <br><a href="http://localhost/Online-Project-Management-System/">
                <span class="fas fa-sign-out-alt"></span> Logout </a></li>
            
          </ul>
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

             <!-- container-->

    
          <!-- container end-->
 <h1 class="page-header">Dashboard</h1>
<div class="row">
     <div class="col-xl-3 col-md-6" >
         <div class="card bg-primary text-white mb-4" >
             <div class="class-body">
                <h4>Total Work</h4>
                <?php
                $connection = mysqli_connect('localhost', 'root', '', 'chatapp');
                $sql = "SELECT * from work";

if ($result = mysqli_query($connection, $sql)) {


    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    printf("%d\n", $rowcount);
 }

                ?>

                <!-- <h4 class="mb-2">2</h4> -->
             </div>
             <div class="card-footer d-flex align-items-center justify-content-between">
                 <a class="small text-white stretched-link" href="">View Details</a>
                 <div class="small text-white"><i class="fas fa-angle-right"></i></div>
             </div>
         </div>
     </div>
     <!-- Total user -->
     <div class="col-xl-3 col-md-6" >
         <div class="card bg-primary text-white mb-4" >
             <div class="class-body">
                <h4>Total User</h4>
                <?php
                $connection = mysqli_connect('localhost', 'root', '', 'chatapp');
                $sql = "SELECT * from users";

if ($result = mysqli_query($connection, $sql)) {


    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    printf("%d\n", $rowcount);
 }

                ?>

                <!-- <h4 class="mb-2">2</h4> -->
             </div>
             <div class="card-footer d-flex align-items-center justify-content-between">
                 <a class="small text-white stretched-link" href="">View Details</a>
                 <div class="small text-white"><i class="fas fa-angle-right"></i></div>
             </div>
         </div>
     </div>
     <!-- file download -->
     <div class="col-xl-3 col-md-6" >
         <div class="card bg-primary text-white mb-4" >
             <div class="class-body">
                <h4>Total File</h4>
                <?php
                $connection = mysqli_connect('localhost', 'root', '', 'chatapp');
                $sql = "SELECT * from filedownload";

if ($result = mysqli_query($connection, $sql)) {


    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    printf("%d\n", $rowcount);
 }

                ?>

                <!-- <h4 class="mb-2">2</h4> -->
             </div>
             <div class="card-footer d-flex align-items-center justify-content-between">
                 <a class="small text-white stretched-link" href="">View Details</a>
                 <div class="small text-white"><i class="fas fa-angle-right"></i></div>
             </div>
         </div>
     </div>
     <!-- file info -->
     <div class="col-xl-3 col-md-6" >
         <div class="card bg-primary text-white mb-4" >
             <div class="class-body">
                <h4>Work Details</h4>
                <?php
                $connection = mysqli_connect('localhost', 'root', '', 'chatapp');
                $sql = "SELECT * from dnrimage";

if ($result = mysqli_query($connection, $sql)) {


    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    printf("%d\n", $rowcount);
 }

                ?>

                <!-- <h4 class="mb-2">2</h4> -->
             </div>
             <div class="card-footer d-flex align-items-center justify-content-between">
                 <a class="small text-white stretched-link" href="">View Details</a>
                 <div class="small text-white"><i class="fas fa-angle-right"></i></div>
             </div>
         </div>
     </div>



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
$sql = "SELECT * FROM work";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-primary'>";
            echo "<tr class='table-warning'>";
                echo "<th>workerID</th>";
                echo "<th>Client Name</th>";
                echo "<th>Amount</th>";
                echo "<th>status</th>";
                //echo "<th>img</th>";
                echo "<th>details</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['workerID'] . "</td>";
                echo "<td>" . $row['customerName'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                //echo "<td>" . $row['img'] . "</td>";
                echo "<td>" . $row['details'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
?>

<form action="../controller/workDone.php" method="post">
<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">work ID</span>
  </div>
<input type="text" name="workerID" id="$workerID" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Continue</button>
</form>

  </div>
 </div>
</div>
   


<!-- <a href="../controller/Extra/index.php" class="btn btn-secondary btn-lg btn-block">Edit User</a>
<br>
<a href="../view/reg.php" class="btn btn-primary btn-lg btn-block"><img src="https://cdn-icons-png.flaticon.com/512/17/17004.png" style="width: 35px; height: 35px; User Registration> </a>
<br>
<div class="chatdiv">
<a class="chat btn btn-dark btn-send pt-2 btn-block " href="../controller/Chat/login.php"> <img src="https://img.icons8.com/color/48/000000/chat--v3.png"/> Chat</a> -->
