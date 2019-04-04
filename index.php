

<?php 

include 'admin/config.php';

include 'include/header.php';

?>


			<div class="row">
				<div class="col-md-12" style="padding: 0px;">
					<img src="img/female-doctor.jpg" style="width: 100%; position: relative;">			
					
				</div>
					<div class="row" style="position: absolute; width: 100%;  margin-top: 170px;">
						<div class="col-md-2"></div>
						<div class="col-md-10">
							<div class="row">
								<div class="col-md-6">
									<span >we are here for your care</span>
									<h1 style="font-size: 56px;">Best Care & <br>Better Doctor</h1>
									<p style="font-size: 10px;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.dolor sit amet, adipiscing<br>Mauris imperdiet odioadipiscing.</p><br>
									<a href="#" class="banr-btn"><i class="fas fa-plus-circle btn-icon"></i>MAKE APPOINTMENT</a>
									<span class="banr-bnt-arrow"><i class="fas fa-caret-right"></i></span>
								</div>									
								<div class="col-md-6"></div>
							</div>
							
						</div>
					</div>		
			</div>


			<div class="row" style="    margin-top: 75px;">
				<div class="col-md-2"></div>
				<div class="col-md-4">
						<img src="img/01_home-Recovered.jpg" style="width: 100%;">
						<img src="img/Untitled-2.jpg" class="img-logo">
				</div>				
				<div class="col-md-6 design-font-detail-text" style="top:48px; padding-left:40px;">
					<h6 >About Us</h6>
					<h1>Short Story About <br>MediDove Clinic.</h1>
					<p style="font-size: 10px;
					    color: #8b8b8b;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in<br> a piece of classical Latin literature from 45 BC, making it over 2000<br> years old. Richard McClintock, a Latin professor at Hampden-Sydney College in <br>  and going through the cites of the word in classical literature, discovered the undoubtable <br><br><br>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in<br> a piece of classical Latin literature from 45 BC, making it over 2000<br> years old. Richard McClintock, a Latin professor at Hampden-Sydney College in,<br>  and going through the cites of the word in classical literature, discovered the undoubtable <br> years old. Richard McClintock, a Latin professor at Hampden-Sydney College in,<br> years old. Richard McClintock, a Latin professor at Hampden-Sydney College in,<br><br><br>
					</p>
					<img src="img/01_home.png">
						<div class="founder-name">
							<h5>Rasalina D. Williamsan</h5>
							<a href="#" style="color:#e12454!important;">Founder</a>
						</div>
				</div>
			</div>




			<div class="row" style="text-align: center;">
				<div class="col-md-12" style="position: absolute;  margin-top: 115px;">
					<img src="img/adfbgd.png" style="width:8%; opacity: 0.5; ">
				</div>
			</div>








			<div class="row text-p" style="    text-align: center;   background: #f4f9fc; padding: 81px 0px 80px 0px; margin-top: 70px;">
				<div class="col-md-2"></div>
				<div class="col-md-8">
						<h6>Departments</h6>
						<h1>Managed Your <br>Healthcare Services</h1>
						<h4 style="color: #e12454;">_ ______ _</h4>
					<div class="row" style="padding-top:60px;">
						
						<?php
							$sql = "SELECT * FROM department ORDER BY user_id ASC LIMIT 6";	
							
							$result = $conn->query($sql);
							
    						   if ($result->num_rows > 0) {
								   
								   // output data of each row
								   
							    while($row = $result->fetch_assoc()) {															
																	
										$image 		= $row["image"];
										$heading 	= $row["heading"];
										$werbpage 	= $row["werbpage"];
																	
																	
						?>	

						<div class="col-md-3 col-back-pading" style="background-color: #ffffff; margin-bottom: 50px;
">
							<img src="admin/department/<?php echo $image; ?>" alt="Avatar" />
							<h5><?php echo $heading; ?></h5>
							<p class=".text-p"><?php echo $werbpage ?> </p>
							<a href="#">Read More</a>
						</div>
						<div class="col-md-1"></div>

						<?php }}?>

					</div>
				</div>
				<div class="col-md-2"></div>
			</div>




<!--- our team ---->


			<div class="row" style="text-align: left;">
				<div class="col-md-2"></div>
				<div class="col-md-8" style="">
					<img src="img/adfbgd.png" style="width:129px; position:absolute; height:150px; margin-top:40px; opacity: 0.5; ">
				</div>
				<div class="col-md-2"></div>
			</div>




			<div class="row" style="padding-top: 75px;">
				<div class="col-md-2"></div>
				<div class="col-md-4">
					<h6>Our Team</h6>
					<h1>A Perofessional & <br> care Provider</h1>
					<h4 style="color: #e12454;">_ ______ _</h4>
				</div>
				<div class="col-md-4" style="text-align: right ; padding-top: 60px;">
					<a href="#" class="banr-btn" ><i class="fas fa-plus-circle btn-icon"></i>MAKE APPOINTMENT</a>
				</div>
				<div class="col-md-2"></div>
			</div>



			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8" style="    text-align: center;">
					<div class="row team-img">

						<?php
							$sql = "SELECT * FROM team ORDER BY user_id ASC LIMIT 6";	
							
							$result = $conn->query($sql);
							
    						   if ($result->num_rows > 0) {
								   
								   // output data of each row
								   
							    while($row = $result->fetch_assoc()) {															
																	
										$image 		= $row["image"];
										$heading 	= $row["heading"];
																	
																	
						?>	
						<div class="col-md-4 " style="margin-top:70px;">
							<img src="admin/team/<?php echo $image; ?>" alt="Avatar" />
							<h5><?php echo $heading; ?></h5>
							<a href="#">FOUNDER</a>
						</div>

						<?php }}?>

						
					</div>
					
				</div>
				<div class="col-md-2"></div>
			</div>




			<div class="row" style="background-image:url(img/aaaaaaaaaaad.jpg); height: 375px;     margin-top: 70px;">
				<div class="col-md-2"></div>
				<div class="col-md-4" style="padding-top:90px;">
					<h6 style="color: darkgray;">We are available  24/7</h6>
					<h1 style="color: #ffffff; padding-bottom: 30px;">We Always Ready<br> For A Challenge.</h1>
					<a href="#" class="banr-btn" ><i class="fas fa-plus-circle btn-icon"></i>MAKE APPOINTMENT</a>
				</div>
				<div class="col-md-1" style="color:#39ae54; padding-top: 80px;">
					<h1>1M+</h1>
					<h1>100+</h1>
				</div>
				<div class="col-md-3" style="    color: aliceblue; padding-top: 90px;">
					<h6><i class="fas fa-thumbtack"></i> Satisfied Patients</h6>
					<p style="color: #b1b2b4;">Lorem ipsum dolor sit amet, consectetur  <br>adipiscing elit. Maecenas mattis nunc <br> turpis ac. </p>

					<h6><i class="far fa-thumbs-up"></i> Satisfied Patients</h6>
					<p  style="color: #b1b2b4;">Lorem ipsum dolor sit amet, consectetur  <br>adipiscing elit. Maecenas mattis nunc <br> turpis ac. </p>
				</div>
				<div class="col-md-2"></div>
			</div>




			<div class="row" style="text-align: left;">
				<div class="col-md-2"></div>
				<div class="col-md-8" style="">
					<img src="img/adfbgd.png" style="width:129px; position:absolute; height:150px; margin-top:60px; opacity: 0.5; ">
				</div>
				<div class="col-md-2"></div>
			</div>









			<div class="row" style="padding-top: 110px; background: aliceblue;   padding-bottom: 60px;">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<h6>Our Plans</h6>
					<h1>Pricing & plans</h1>
					<h4 style="color: #e12454;">_ ______ _</h4>
					<div style="text-align: right; margin-top: -70px;"><a href="#" class="banr-btn" ><i class="fas fa-plus-circle btn-icon"></i>MONTHLY & YEARLY</a></div>
					<div class="row" style="padding-top:110px;">


							<?php
							$sql = "SELECT * FROM plans ORDER BY user_id ASC LIMIT 3";	
							
							$result = $conn->query($sql);
							
    						   if ($result->num_rows > 0) {
								   
								   // output data of each row
								   
							    while($row = $result->fetch_assoc()) {															
																	
										$image 		= $row["image"];
										$heading 	= $row["heading"];
										$werbpage 	= $row["werbpage"];
																	
																	
							?>	
						
						<div class="col-md-3 col-back-pading" >
							<img src="admin/plans/<?php echo $image ?>" style="height:170px; width:115px;" />
							<h5 style="padding-bottom: 20px;  padding-top: 25px;"> <?php echo $heading ?> </h5>
							<p class=".text-p" style="font-size:12px !important;"><?php echo $werbpage ?> </p>
							<div class="bogo">
								<a href="#" class="banr-btn" style="background: #fefefe; color: #767575;">
									<i class="fas fa-plus-circle btn-icon login" style="margin-left:-14px !important;"></i>
										PRICE :$ 480.00
								</a>
							</div>
							
						</div>

						
						<div class="col-md-1"></div>
						<?php }}?>
						
					</div>

				</div>
				
				
				<div class="col-md-2"></div>
			</div>





			<div class="row" style="background-image: url(img/doctor-bg.jpg); height: 350px; text-align: center;">
				<div class="col-md-12">
					<h6 style="margin-top: 70px;  color: rgba(144, 171, 200, 0.63);">Stay healthy & strong to enjoy life</h6>
					<h1 style="color: aliceblue;  padding-top: 15px; padding-bottom:35px;">Trust Us To Be There TO Help All & <br>Make Things Well Again.</h1>
					<a href="#" class="banr-btn" style="background:#8fb569 !important;"><i class="fas fa-plus-circle btn-icon"></i>MAKE APPOINTMENT</a>
				</div>
			</div>




			<div class="row" style="text-align: left;">
				<div class="col-md-2"></div>
				<div class="col-md-8" style="">
					<img src="img/adfbgd.png" style="width:129px; position:absolute; height:150px; margin-top:60px; opacity: 0.5; ">
				</div>
				<div class="col-md-2"></div>
			</div>




			<div class="row" style="padding-top: 110px;   padding-bottom: 60px;">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<h6>News</h6>
					<h1>Get Every Single<br> Updates Hare.</h1>
					<h4 style="color: #e12454;">_ ______ _</h4>
					<div style="text-align: right; margin-top: -70px;"><a href="#" class="banr-btn" ><i class="fas fa-plus-circle btn-icon"></i> OUR BLOG </a></div>
					<div class="row" style="padding-top:110px;">
						

							<?php
							$sql = "SELECT * FROM news ORDER BY user_id ASC LIMIT 2";	
							
							$result = $conn->query($sql);
							
    						   if ($result->num_rows > 0) {
								   
								   // output data of each row
								   
							    while($row = $result->fetch_assoc()) {															
																	
										$image 		= $row["image"];
										$heading 	= $row["heading"];
										$werbpage 	= $row["werbpage"];
																	
																	
							?>


						<div class="col-md-3 col-back-pading" >
							<img src="admin/news/<?php echo $image ?>" style="width: 140%; padding-bottom: 25px;">
							<a href="#" style="color: #e12454;">Medical Medicen</a>
							<h6><?php echo $heading ?> </h6>
							<p class=".text-p" style="font-size:12px !important;"><?php echo $werbpage ?> </p>
						</div>



						<div class="col-md-1"></div>

						<?php }}?>

						

						<div class="col-md-3 col-back-pading" style="border: 1px solid #d5d4d4; margin-bottom: 40px;">
							

							<?php
							$sql = "SELECT * FROM news_sidebar ORDER BY user_id ASC LIMIT 3";	
							
							$result = $conn->query($sql);
							
    						   if ($result->num_rows > 0) {
								   
								   // output data of each row
								   
							    while($row = $result->fetch_assoc()) {															
																	
										$heading 	= $row["heading"];
																	
																	
							?>



							<div style="padding: 24px 11px;  border-bottom: 1px solid #b4b4b4;">
								<h6><?php echo $heading ?>  </h6>
								<span style="font-size: 10px;"><i class="fas fa-calendar-week"></i> 23rd jan 2019 &nbsp; &nbsp; <i class="far fa-comments"></i>  33comments</span>
							</div>

							<?php }} ?>

							
						</div>

					</div>

				</div>
				
				
				<div class="col-md-2"></div>
			</div>




<?php

include "include/footer.php";

?>