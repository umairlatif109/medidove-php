   <?php 
include "config.php";

/* This query for delete item from table */

$select_id =  ($_GET['id']);

			

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body style="width:1000px;  margin:95px 243px;  text-align:-webkit-center;">


					<?php

						$sql  = "SELECT * FROM team WHERE user_id='$select_id'";

							$result = $conn->query($sql);

						   if ($result->num_rows > 0) {
							   
							// output data of each row
							
							while($row = $result->fetch_assoc()) {
								
							$user_id = $row["user_id"];
							
							$heading = $row["heading"];
							
							$image= $row['image'];
							}}
							
					?>		
					
<h2>Update Service... </h2>
	<form method="post" action="update_team.php?edit_form=<?php echo $user_id; ?>" enctype="multipart/form-data">
		
		heading:<br>
		<input type="text" name="heading" value="<?php echo $heading ?>" style="padding:6px 29px; font-size:18px;">
		<br><br>
		
		Image:<br>
		<img src="team/<?=$image;?>" height="100px;" width="100px;">
		<input type="file" name="image" style="padding:6px 29px; font-size:18px;">
		<br><br>
		
		<input type="submit" name="submit" value="Submit"  style="padding:6px 29px; font-size:18px;">
	
	</form>
	
<?php 

if (isset($_POST['submit'])){
	
 $update_id = @$_GET['edit_form'];
 
 $heading = $_POST['heading'];
 
$image = $_FILES['image']['name'];


 
		
 if(!empty($image)){
	 
	 
	 if($_FILES['image']['type']=="image/png" || $_FILES['image']['type']=="image/jpeg" || $_FILES['image']['type']=="image/jpg")
	{
		move_uploaded_file($_FILES['image']['tmp_name'],'team/'.$image);
		
	}
 $sql = "UPDATE team SET heading='$heading', werbpage='$werbpage', image='$image'	 WHERE user_id='$update_id'";
 }
 else{
  $sql = "UPDATE team SET heading='$heading'WHERE user_id='$update_id'";
 }
 

 

  if ($conn->query($sql) === TRUE) {
	  
   echo "<script>window.open('mange_team.php?updated=Post Updated', '_self')</script>";
 
 } else {
 
 echo "Error updating record: " . $conn->error;
 
 }
 
} 
?>	
	
</body>
</html>