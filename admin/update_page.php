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

						$sql  = "SELECT * FROM page WHERE page_id='$select_id'";

							$result = $conn->query($sql);

						   if ($result->num_rows > 0) {
							   
							// output data of each row
							
							while($row = $result->fetch_assoc()) {
								
							$page_id = $row["page_id"];
							
							$page_name = $row["page_name"];

							$page_heading = $row["page_heading"];
							
							$page_content= $row['page_content'];
							
							
							}}
							
					?>		
					
<h2>Update Service... </h2>
	<form method="post" action="update_page.php?edit_form=<?php echo $page_id; ?>" enctype="multipart/form-data">

		page_name:<br>
		<input type="text" name="page_name" value="<?php echo $page_name ?>" style="padding:6px 29px; font-size:18px;">
		<br><br>

		page_heading:<br>
		<input type="text" name="page_heading" value="<?php echo $page_heading ?>" style="padding:6px 29px; font-size:18px;">
		<br><br>

		 content:<br> 
		<textarea type="textarea"  name="page_content" class="tinymce"> <?php echo $page_content?> </textarea>
		<br><br>

		<input type="submit" name="submit" value="Submit"  style="padding:6px 29px; font-size:18px;">
	</form>
	
<?php 

if (isset($_POST['submit'])){
	
 $update_id = @$_GET['edit_form'];
 
 $page_name = $_POST['page_name'];
 
 $page_heading = $_POST['page_heading'];
 
 $page_content = $_POST['page_content'];

 
		
 if(!empty($image)){
	 
	 
	 if($_FILES['image']['type']=="image/png" || $_FILES['image']['type']=="image/jpeg" || $_FILES['image']['type']=="image/jpg")
	{
		move_uploaded_file($_FILES['image']['tmp_name'],'page/'.$image);
		
	}
 $sql = "UPDATE page SET page_name='$page_name', page_heading='$page_heading', page_content='$page_content', image='$image' WHERE page_id='$update_id'";
 }
 else{
  $sql = "UPDATE page SET page_name='$page_name', page_heading='$page_heading', page_content='$page_content' WHERE page_id='$update_id'";
 }
 

 

  if ($conn->query($sql) === TRUE) {
	  
   echo "<script>window.open('mange_page.php?updated=Post Updated', '_self')</script>";
 
 } else {
 
 echo "Error updating record: " . $conn->error;
 
 }
 
} 
?>	





<!-- javascript -->
		<script type="text/javascript" src="tinymce/js/jquery.min.js"></script>
		<script type="text/javascript" src="tinymce/plugin/tinymce/tinymce.min.js"></script>
		<script type="text/javascript" src="tinymce/plugin/tinymce/init-tinymce.js"></script>
	
</body>
</html>