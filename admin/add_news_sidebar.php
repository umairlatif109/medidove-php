<?php
include "config.php";

include "header.php";


if(isset($_POST['submit'])){
	
$heading = $_POST['heading'];

		$sql = "INSERT INTO news_sidebar (heading) VALUES ('$heading')";

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

<form method="post" action="add_news_sidebar.php"enctype="multipart/form-data" style="text-align:-webkit-center;  background-color:#3d7e7e; padding:21px;">

<div style="font-size: xx-large;">
Insert heading:</div>
<input type="text" name="heading"  style="padding:8px 31px; font-size:17px;"><br><br>

<input type="submit" name="submit" value="submit"  style="padding:8px 31px; background-color: #000; color: #fff; font-size:17px;">
</form>


  
						   
						   
						   
						   

</div>


</body>
</html>