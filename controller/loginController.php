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

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($password);
            $enc_pass = $row['password'];
            $enc_type = $row['type'];
            $lname=$row['lname'];
            $fname=$row['fname'];
            if($user_pass === $enc_pass){
                        echo "<h1><center> Login successful </center></h1>"; 
                        session_start();
                        $_SESSION["lname"]=$lname;
                        $_SESSION["fname"]=$fname;
                            switch ($enc_type){
                                case "Customer" :header("refresh: 2; url = ../view/customer.php");
                                break;
                                case "Software Developer":header("refresh: 2; url = ../view/softwareDeveloper.php");
                                break;
                                case "Software Programer":header("refresh: 2; url = ../view/softwareProgramer.php");
                                break;
                                case "Software Tester":header("refresh: 2; url = ../view/softwareTester.php");
                                break;
                                case "Designer":header("refresh: 2; url = ../view/Designer.php");
                                break;
                                case "requirement Manager":header("refresh: 2; url = ../view/requirmentEng.php");
                                break;
                                
                            }
                    }  
                    else{  
                        echo "<h1> Login failed. Invalid  password.</h1>";  
                    } 
                    }  
                    else{  
                        echo "<h1> Login failed. Invalid Email address.</h1>";  
                    } 
    }else{
        echo "All input fields are required!";
    }
?>