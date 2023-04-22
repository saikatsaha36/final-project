<?php include "db.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>upload</title>

    
</head>
<body>
   
  
   
   <table>
    <label class="form-label" for="customFile">Upload Work File</label>
               <form action="" method="post" enctype="multipart/form-data">
                    <input type="file" name="file" required class="form-control form-control-sm">
                    <button type="submit" name="submit" class="btn btn-secondary btn-sm"> File Upload</button>
                </form>
    
    
   </table>
    
</body>
</html>