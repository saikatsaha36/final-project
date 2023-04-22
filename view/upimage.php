
<?php

   $connection = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($connection,'chatapp');

   if(isset($_POST['upload']))

   {
      $id = $_POST['id'];
      // $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
      $username = $_POST['username'];
      $designation = $_POST['designation'];

      $query = "INSERT INTO `dnrimage`(`id`,`username`,`designation`) VALUES ('$id','$username','$designation')";
      $query_run = mysqli_query($connection,$query);

      if($query_run)
      {
         echo '<script type="text/javascript"> alert("Work Information Uploaded") </script>';
      }
      else
      {
          echo '<script type="text/javascript"> alert("Work Information Not Uploaded") </script>';       
      }

   }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="style/style.css">
   <title>File Upload</title>
   <style>
      legend{
         text-align: center;
      }
      td{
         padding-left: 20px;
      }
   </style>
</head>
<body>
  <!--  <table border="1" width="100%" align="center">
      <tr align="center">
         <td  colspan="3" width="100px" align="Left">
            <img src="logo.png"> -->
   <form method="post" action="" enctype="multipart/form-data">
      <fieldset style="background-color: lemonchiffon;">
         <legend><h3>Add Work Details</h3></legend>
         <table>
             <tr>
               <td>Enter Worker ID</td>
               <td><input type="text" name="id" class="form-control" required  value=""></td>
            </tr>

            <tr>
               <td>Enter CustomerName</td>
               <td><input type="text" name="username" class="form-control" required value=""></td>
            </tr>
            <tr>
               <td> Work Details</td>
               <td><textarea type="text" name="designation" class="form-control" required value=""></textarea></td>
            </tr>

            <tr>
             <!--   <td> Select any Picture of project</td>
                       <td><input type="file" name="image" id="image"/> </td>
                     </tr>    -->
                     <td> <input type="submit" name="upload" value="Submit" class="btn btn-secondary btn-sm"></td>

                      </fieldset>
        <tr>
              <!--  <legend><h3>Add File</h3></legend> -->
          <!--     <tr>
            <td>Choose File</td>
               <form action="" method="post" enctype="multipart/form-data">
                    <td><input type="file" class="form-control"  name="file"> </td>
                    </tr>
                    <td><button type="submit" name="submit" class="btn btn-secondary btn-sm"> Upload</button></td>
                </form> -->
    
       
                    
     <!--     </table> -->

   </form>
</body>
</html>



