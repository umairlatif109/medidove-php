<?php 

include 'admin/config.php';

include 'include/header.php';


?>






<div class="row" style="padding: 75px 10px;">
	<div class="col-md-2"></div>

			<?php

			$select_id =  ($_GET['id']);

			$sql = "SELECT * FROM page WHERE page_id='$select_id'";	
			
			$result = $conn->query($sql);
			
			   if ($result->num_rows > 0) {
				   
				   // output data of each row
				   
			    while($row = $result->fetch_assoc()) {															
													
						$page_id		= $row["page_id"];					
						$page_name 	    = $row["page_name"];
						$page_heading 	= $row["page_heading"];
						$page_content 	= $row["page_content"];
													
													
			?>	
	<div class="col-md-8">

		<h1><?php echo $page_name ?></h1>
		<h3><?php echo $page_heading ?></h3>
		<p><?php echo $page_content ?></p> 

	</div>

	<?php }}?>
	<div class="col-md-2"></div>
</div>

























<?php

include "include/footer.php";

?>