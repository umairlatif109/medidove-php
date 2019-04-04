<?php
include "config.php";


include "header.php";


// this code for add sub menu
	if(isset($_POST["submit"])){
		
	$menu_id		= $_POST['menu_id'];
	$page_id		= $_POST['page_id'];
	$sub_menu_name	= $_POST['sub_menu_name'];
	$sub_menu_link	= $_POST['sub_menu_link'];
	
	$sql="INSERT INTO sub_menu( menu_id, page_id, sub_menu_name, sub_menu_link ) VALUES ( '$menu_id', '$page_id', '$sub_menu_name', '$sub_menu_link' )";
	
	if ($conn->query($sql) === TRUE){
		echo "New sub_menu are Add successfully";
		
	}else{
		echo "Error:" . $sql . "<br>" .$conn->error;
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<style>
	 input{
	 	color: #000;
	 }
	 option{
	 	color: #000;
	 }
	</style>
</head>
<body>




<div style="margin:131px 547px">
	
	
	<h2>Input sub menu name and Id...</h2>
	
	<form method="post" action="add_sub_menu.php" enctype="multipart/form-data">
		menu Name:<br>
		<select name="menu_id" style="padding:4px 82px; font-size:18px; color: black;">
								<?php
										$sql ="SELECT * FROM menu ";
									  $result = $conn->query($sql);
									  
									  if ($result->num_rows > 0) {
									  
									  // output data of each row
									  while($row = $result->fetch_assoc()) {
										  
									  
									  $menu_id		= $row['menu_id'];									  
									  $menu_name	= $row['menu_name'];

								?>
		
		
			<option  value="<?=$menu_id; ?>" ><?=$menu_name; ?></option>
		
			<?php }} ?>
		</select><br></br>

		Page Name:<br></br>
		<select name="page_id" style="padding:4px 82px; font-size:18px; color: black;">
								<?php
										$sql ="SELECT * FROM page";
									  $result = $conn->query($sql);
									  
									  if ($result->num_rows > 0) {
									  
									  // output data of each row
									  while($row = $result->fetch_assoc()) {
										  

									  $page_id		= $row['page_id'];									  
									  $page_name	= $row['page_name'];
								?>

			<option  value="<?=$page_id; ?>" ><?=$page_name; ?></option>
		
			<?php }} ?>
		</select>
		
		
		<br><br>
		Sub menu Name:<br>
		<input type="text" name="sub_menu_name"  style="padding:4px 29px; font-size:18px;">
		<br><br>
		Link for landing page:<br>
		<input type="text" name="sub_menu_link"  style="padding:4px 29px; font-size:18px;">
		<br><br>
		<input type="submit" name="submit" value="Submit"  style="padding:6px 29px; font-size:18px; background-color: #000; color: #fff;">
	</form>
	<br>
	
	</div>
				
	
</body>
</html>