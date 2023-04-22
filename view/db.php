 <?php
    $conn = mysqli_connect('localhost','root','','chatapp');
    if(isset($_POST['submit'])){
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $path = "files/".$fileName;
        
        $query = "INSERT INTO filedownload(filename) VALUES ('$fileName')";
        $run = mysqli_query($conn,$query);
        
        if($run){
            move_uploaded_file($fileTmpName,$path);
            echo '<script>alert("File Upload Successfully")</script>';
            // echo "success";
        }
        else{
            echo "error".mysqli_error($conn);
        }
        
    }
    
    ?>