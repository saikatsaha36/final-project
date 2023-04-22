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

    $customerName = mysqli_real_escape_string($conn, $_SESSION["lname"]);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $details = mysqli_real_escape_string($conn, $_POST['details']);
    $img = mysqli_real_escape_string($conn, $_POST['img']);
    $sql = "INSERT INTO work (customerName, price, status,details,img)
VALUES ('$customerName', '$price', 'Assigned','$details','$img')";
//header("location: ../Index.php");
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header("location: ../view/customer.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>