<?php include "db.php"?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show file</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<style>
.btn {
/*  background-color: DodgerBlue;*/
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

.btn:hover {
  background-color: DodgerBlue;
}
</style>

</head>
<body>

              <?php
               $query2 = "SELECT * FROM filedownload ";
               $run2 = mysqli_query($conn,$query2);

               
               while($rows = mysqli_fetch_assoc($run2)){
                   ?>

               <button class="btn"><i class="fa fa-download"></i> <a href="download.php?file=<?php echo $rows['filename'] ?>">Download</a></button>
                
               <br>
             </br>
               <?php
               }               
               ?>
           
</body>
</html>