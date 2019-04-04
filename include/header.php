

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Medi Dove</title>


	<link rel="shortcut icon" href="img/Untitlexcvbd-1.jpg">
	<link rel="stylesheet" type="text/css" href="src/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>


	
	
</head>
<body>

	<div class="container-fluid">
		
			<div class="row header-row" >
				<div class="col-md-3"></div>
				<div class="col-md-5" style="text-align: left;">
					<a href="#" class="font-f nmb-a">
						<i class="fas fa-phone" style="margin-right:5px;"></i> +1800 833 9780  
					</a> 
					<a href="#" class="font-f email-a" >
						<i class="far fa-envelope email-i"></i>  info@example.com 
					</a>
				</div>
				<div class="col-md-4"> <a href="#" class="make-appointment-btn" > MAKE APPOINTMENT </a> </div>
				
			</div>




			<div class="row">
				<div class="col-md-4" style="text-align: right;">
					<?php

						$sql= "SELECT * FROM logo";
						$result = $conn->query($sql);
						if($result->num_rows > 0){
							while($row=$result->fetch_assoc()){
								$imagepath = $row["imgpath"];
								
								  
						?>
								<a href="index.php"><img src="admin/logo/<?php echo $imagepath; ?>"  class="logo-img"  /> </a>
								
						<?php }} ?>

				</div>


				<div class="col-md-4">
					<nav class="nave">
						
						<ul class="nav  " >
						<?php
						$sql = "SELECT * FROM menu limit 5";
						
						   $result = $conn->query($sql);

						   if ($result->num_rows > 0) {
							   
							// output data of each row
							
							while($row = $result->fetch_assoc()) {
								
					        $menu_name 		= $row["menu_name"];
							$menu_icon 		= $row["menu_icon"];
							$menu_icon_last	= $row['menu_icon_last'];
							$menu_id		= $row['menu_id'];
							$menu_link		= $row['menu_link'];

						?>
							
								<li class="dropdown">
									<a href="<?=$menu_link ?>" class="menu_familyfont">
										<i class=" <?php echo $menu_icon; ?>" style="margin-right:10px; " ></i>
										<?php echo $menu_name; ?> 
										<i  class="<?php echo $menu_icon_last; ?>"></i>
									</a>
									<div class="dropdown-content" style="padding: 5px 10px;">
									
									
											<?php
												$sql1 ="SELECT * FROM sub_menu WHERE menu_id='$menu_id'";
											  $result1 = $conn->query($sql1);
											  if ($result1->num_rows > 0) {
											  
											  // output data of each row
											  while($row1 = $result1->fetch_assoc()) {

											  
											  $menu_id 		 = $row['menu_id'];											  
											  $page_id       = $row1["page_id"];
											  $sub_menu_id   = $row1["sub_menu_id"];
											  $sub_menu_name = $row1["sub_menu_name"];
											  $sub_menu_link = $row1["sub_menu_link"];
											  
							
											?>
											 
													<a href="page.php?id=<?=$page_id?>"><?php echo $sub_menu_name; ?></a>
												 <?php }} ?>
									 </div>
								</li>
						   <?php }} ?>
								
						</ul>

					</nav>
				</div>


				<div class="col-md-4 media">
					<ul>
						  <li><a  href="#home"><i class="fab fa-facebook-f"></i></a></li>
						  <li><a href="#news"><i class="fab fa-behance"></i></a></li>
						  <li><a href="#contact"><i class="fab fa-youtube"></i></a></li>
						  <li><a href="#about"><i class="fab fa-invision"></i></a></li>
						  <li><a href="#about"><i class="fab fa-pinterest"></i></a></li>
						  <li><img src="img/flag-button-round-250.png" style="width: 40px;"></li>
						  <li><a href="#about">Pak <i class="fas fa-angle-down"></i></a></li>
						</ul>
				</div>	
			</div>
