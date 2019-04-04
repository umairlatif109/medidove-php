<?php
include "config.php";

include "header.php";


if(isset($_POST['submit'])){
	

$page_name    = $_POST['page_name'];	
$page_heading = $_POST['page_heading'];
$page_content = $_POST['page_content'];

		$sql = "INSERT INTO page (page_name,page_heading,page_content) VALUES ('$page_name','$page_heading','$page_content')";

			if ($conn->query($sql) === TRUE) {
				echo "uploaded successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
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
	</style>
</head>
<body>


<div style="margin-top:100px; background-color:lightslategray; padding: 50px;">

<form method="post" action="add_page.php"enctype="multipart/form-data" style="text-align:-webkit-center;  background-color:#3d7e7e; padding:21px;">

<div style="font-size: xx-large;">
Insert page name:</div>
<input type="text" name="page_name"  style="padding:8px 31px; font-size:17px;"><br><br>

<div style="font-size: xx-large;">
Insert heading:</div>
<input type="text" name="page_heading"  style="padding:8px 31px; font-size:17px;"><br><br>

<div style="font-size: xx-large;">
Insert content:</div>
<textarea name="page_content"  class="tinymce"></textarea><br><br>


<input type="submit" name="submit" value="submit"  style="padding:8px 31px; background-color: #000; color: #fff; font-size:17px;">
</form>


	   
						   
						   

</div>


		<!-- javascript -->
		<script type="text/javascript" src="tinymce/js/jquery.min.js"></script>
		<script type="text/javascript" src="tinymce/plugin/tinymce/tinymce.min.js"></script>
		<script type="text/javascript" src="tinymce/plugin/tinymce/init-tinymce.js"></script>	
</body>
</html>