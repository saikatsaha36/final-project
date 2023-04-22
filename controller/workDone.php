<?php
session_start();
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
    $workerID = mysqli_real_escape_string($conn, $_POST['workerID']);
    $sql = "UPDATE work SET status='Done File Sent By Email' WHERE workerID=$workerID";
//header("location: ../Index.php");
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header("location: ../view/softwareDeveloper.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>