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
    <title>software Tester</title>
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
<button><a href="../controller/IDE/ui/ide.html">Compiler</a></button>
<br>
<h4>Work For you</h4>
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
$sql = "SELECT workerID,status,img,details FROM work where status='testing'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-primary'>";
            echo "<tr class='table-warning'>";
                echo "<th>worker ID</th>";
                //echo "<th>customerName</th>";
                //echo "<th>Price</th>";
                echo "<th>status</th>";
                //echo "<th>img</th>";
                echo "<th>details</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['workerID'] . "</td>";
                //echo "<td>" . $row['customerName'] . "</td>";
                //echo "<td>" . $row['price'] . "</td>";
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
<!-- File Upload -->
<div class="form-group"> <i class="fa fa-paperclip" aria-hidden="true" for="form_message"> Attached File * </i>
                                            <form action="../controller/upload.php" method="post" enctype="multipart/form-data">  
                                             <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
                                             <br>
                                                 <input type="submit" value="Upload File" class="btn btn-success btn-send pt-2 btn-block " name="submit">
                                             </form>
                                             </div>

<!-- <form action="../controller/upload.php" method="post" enctype="multipart/form-data">
  Select File to upload: <br>
  <input type="file" name="fileToUpload" id="fileToUpload"><br>
  <input type="submit" value="Upload File" name="submit">
</form> -->

<form action="../controller/testingOk.php" method="post">
<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">work ID</span>
  </div>
  <input type="text" name="workerID" id="$workerID" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Continue</button>
</form>

<div class="chatdiv btn btn-dark btn-send pt-2 btn-block" >
<a class="chat btn btn-dark btn-send pt-2 btn-block " href="../controller/Chat/login.php"> <img src="https://img.icons8.com/color/48/000000/chat--v3.png"/> Chat</a>

</div>
<?php require_once('displayimage.php')?>
</main>