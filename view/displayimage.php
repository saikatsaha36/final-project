<?php include "db.php"?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style/style.css">
	<style>
	/*	 body
		{
			background-color: lightblue;
		} */
		th{
	background-color: darkcyan;
	color: #fff;
}		
	</style>
	<title>Display Work List</title>
</head>
<body>
	<center>
		<form action="" method="POST" enctype="multipart/form-data">
		<table style="border-collapse: collapse; text-align:center;" width="100%">
				
					<tr>
						<th> Worker ID </th>
					<!-- 	<th> Image </th> -->
						<th> CustomerName </th>
						<th> Details </th>
						<th> File </th>	</br>		
					</tr>
			
				<?php
				     $connection = mysqli_connect("localhost","root","");
				     $db = mysqli_select_db($connection,'chatapp');

				     $query = " Select * from `dnrimage`";
				     $query_run = mysqli_query($connection,  $query);

				     while($row = mysqli_fetch_array( $query_run))
				     {
				     	?>
				     	<tr>
				     		<td> <?php echo $row['id'] ?> </td>
				     		<!-- <td> <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt"Image" style="width: 120px; height: 120px;" >'; ?> </td> -->
				     		<td> <?php echo $row['username'] ?> </td>
				     		<td> <?php echo $row['designation'] ?> </td>

							<td rowspan="8"> <?php require_once('showfile.php')?>  </td>
							</tr>
							 	
              
			  <?php
				     }
				?>

			</table>
			
		</form>
		
	</center> 

</body>
</html>