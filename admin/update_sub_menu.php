   <?php 
include "config.php";

/* This query for delete item from table */

$select_id = $_GET['id'];

			

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body style="width:1000px;  margin:95px 243px;  text-align:-webkit-center;">


					<?php

						$sql  = "SELECT * FROM sub_menu WHERE sub_menu_id='$select_id'";

							$result = $conn->query($sql);

						   if ($result->num_rows > 0) {
							   
							// output data of each row
							
							while($row = $result->fetch_assoc()) {
								
							$sub_menu_id	= $row['sub_menu_id'];		
							$menu_id		= $row['menu_id'];	
					        $sub_menu_name 	= $row["sub_menu_name"];						
							$sub_menu_link	= $row['sub_menu_link'];	
							
							}}
							
					?>		
					
	<h2>Update Sub menu name and Id... </h2>
	<form method="post" action="update_sub_menu.php?edit_form=<?php echo $sub_menu_id; ?>" enctype="multipart/form-data">
		menu Id:<br>
		<input type="text" name="menu_id" value="<?php echo $menu_id; ?>" style="padding:6px 29px; font-size:18px;">
		<br><br>
		Sub menu Name:<br>
		<input type="text" name="sub_menu_name" value="<?php echo $sub_menu_name; ?>"  style="padding:6px 29px; font-size:18px;">
		<br><br>
		Link:<br>
		<input type="text" name="sub_menu_link" value="<?php echo $sub_menu_link; ?>"  style="padding:6px 29px; font-size:18px;">
		<br><br>
		<input type="submit" name="submit" value="Submit"  style="padding:6px 29px; font-size:18px;">
	</form>
	
<?php 
if (isset($_POST['submit'])){
 $update_id = @$_GET['edit_form'];
 
 $admin_name_u 	= $_POST['menu_id'];
 $admin_email_u = $_POST['sub_menu_name'];
 $admin_pwd_u 	= $_POST['sub_menu_link'];
 
 
 
 $sql = "UPDATE sub_menu SET menu_id='$admin_name_u', sub_menu_name='$admin_email_u', sub_menu_link='$admin_pwd_u'	 WHERE sub_menu_id='$update_id'"; 
 
 

  if ($conn->query($sql) === TRUE) {
   echo "<script>window.open('mange_sub_menu.php?updated=Post Updated', '_self')</script>";
  } else {
   echo "Error updating record: " . $conn->error;
  }
 
} 
?>	
	
</body>
</html>