   <?php 
include "config.php";

	$select_id = @$_GET['edit'];
			

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body style="width:1000px;  margin:95px 243px;  text-align:-webkit-center;">


					<?php
						
							
						$sql  = "SELECT * FROM menu WHERE menu_id='$select_id'";

							$result = $conn->query($sql);

						   if ($result->num_rows > 0) {
							   
							// output data of each row
							
							while($row = $result->fetch_assoc()) {
								
							 $menu_id		= $row['menu_id'];
					        $menu_name 		= $row["menu_name"];
							$menu_icon 		= $row["menu_icon"];
							$menu_icon_last	= $row['menu_icon_last'];
							$menu_link		= $row['menu_link'];
							
							}}
							
					?>		
					
<h2>Update menu name and icons... </h2>
	<form method="get" action="update_menu.php" enctype="multipart/form-data">
		<input type="hidden" name= "menu_id" value="<?php echo $menu_id ?>"/>
		menu Name:<br>
		<input type="text" name="menu_name" value="<?php echo $menu_name; ?>" style="padding:6px 29px; font-size:18px;">
		<br><br>
		 First Icon:<br> 
		<input type="text" name="menu_icon" value="<?php echo $menu_icon; ?>"  style="padding:6px 29px; font-size:18px;">
		<br><br>
		Last Icon:<br>
		<input type="text" name="menu_icon_last"value="<?php echo $menu_icon_last; ?>"  style="padding:6px 29px; font-size:18px;">
		<br><br>
		Menu Link:<br>
		<input type="text" name="menu_link"value="<?php echo $menu_link; ?>"  style="padding:6px 29px; font-size:18px;">
		<br><br>
		<input type="submit" name="submit" value="Submit"  style="padding:6px 29px; font-size:18px;">
	</form>
<?php 
if (isset($_GET['submit'])){
 $update_id = $_GET['menu_id'];
 
 $admin_name_u 	= $_GET['menu_name'];
 $admin_email_u = $_GET['menu_icon'];
 $admin_pwd_u 	= $_GET['menu_icon_last'];
 $menu_link_u 	= $_GET['menu_link'];
 
 
 
 $upsql = "UPDATE menu SET menu_name='$admin_name_u', menu_icon='$admin_email_u', menu_icon_last='$admin_pwd_u', menu_link='$menu_link_u' WHERE menu_id='$update_id'"; 
 
 

  if ($conn->query($upsql) === TRUE) {
	  
    echo "<script>window.open('mange_menu.php?updated=Post Updated', '_self')</script>";
  } else {
   echo "Error updating record: " . $conn->error;
  }
 
 echo $admin_name_u.$admin_email_u.$admin_pwd_u.$menu_link_u;
} 
?>	
	
</body>
</html>