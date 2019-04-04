<?php
include "config.php";

include "header.php";

?>
<!DOCTYPE html>
<html>
<head>
<style>

*{padding:0px; margin:0px;}

table, th,td {
	border: 1px solid black;
	border-collapse: collapse;
		}
 th, td {
    padding: 8px;
 }
 input {
	 float: right;
    margin-right: 295px;
    margin-top: -67px;
    padding: 7px 22px;
    font-weight: 700;	
    background-clip: padding-box;
	 }
	 th{
	 	color: #000;
	 }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


<div style="margin-top: 140px;">

<table style="width:1000px;  margin:95px 243px; ">
<h3 style="text-align: center;">Update & Delete Menu </h3>
<thead>
<tr>
	<th>Menu Id</th>
	<th>Menu Name</th>
	<th>First Icon</th>
	<th>Last Icon</th>
	<th>Menu Link</th>
	<th>Action</th>
</tr>
</thead>
					<?php
						$sql = "SELECT * FROM menu  ";
						
						  	$result = $conn->query($sql);

						   if ($result->num_rows > 0) {
							   
							// output data of each row
							
							while($row = $result->fetch_assoc()) {
								
					        $menu_name 		= $row["menu_name"];
							$menu_icon	 	= $row["menu_icon"];
							$menu_icon_last	= $row['menu_icon_last'];
							$menu_id		= $row['menu_id'];
							$menu_link		= $row['menu_link'];
					?>
					<tbody>
						<tr>
							<td><?php echo $menu_id; ?></td>
							<td><?php echo $menu_name; ?> </td>
							<td><?php echo $menu_icon; ?></td>
							<td><?php echo $menu_icon_last; ?></td>
							<td><?php echo $menu_link; ?></td>
							<td>
								<a href="update_menu.php?edit=<?php echo $menu_id; ?>"  style="margin-right:12px; font-size: 29px;  ">
									<i class="fa fa-pencil-square-o" aria-hidden="true" style="color: #ff7600;"></i>
								</a>

								<a href="del_menu.php?id=<?php echo $menu_id; ?>" onClick="return do_confirm();" style="font-size: 29px; " >
									<i class="fa fa-trash" aria-hidden="true" style="color: red;"></i>
								</a>
								
							</td>
						</tr>
					</tbody>
					<?php }} ?>
</table>

					<?php
						$sql = "SELECT * FROM menu ";
						
						  $result = $conn->query($sql);

						   if ($result->num_rows > 0) {
							   
							// output data of each row
							
							while($row = $result->fetch_assoc()) {
								
							$menu_id= $row['menu_id'];
							
					?>
					<a href="all_del_menu.php?id=<?php echo $menu_id; ?>" onClick="return do_confirm();" >
						<input type="submit" name="submit" value="Delete All" style="background-color: #000; color: #fff;">
					</a>
					<?php }} ?>






</div>


<!-- for delete varification -->


<script language="javascript">
  function do_confirm()
  {
   var a = confirm("Are you sure, you want to delete the record?");
   return a;
  }
  </script>
</body>
</html>