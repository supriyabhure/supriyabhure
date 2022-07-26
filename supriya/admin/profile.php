<!DOCTYPE html>
<html>

	
    
      
      
	 
	 
	  <div class="col-md-4">
							
						
						<div class="col-md-4">
							<table >
								<tr>
									<td><h2>ID  : </h2></td>
									<td><h2><?php echo $fetch->Admin_id;?></h2></td>
								</tr>
								<tr>
									<td><h2>Username  : </h2></td>
									<td><h2><?php echo $fetch->Username;?></h2></td>
								</tr>
								<tr>
									<td><h2>First_name  : </h2></td>
									<td><h2><?php echo $fetch->First_name;?></h2></td>
								</tr>
                                <tr>
									<td><h2>Last_name  : </h2></td>
									<td><h2><?php echo $fetch->Last_name;?></h2></td>
								</tr>
								<tr>
									<td><h2>Email  : </h2></td>
									<td><h2><?php echo $fetch->Email;?></h2></td>
								</tr>
								
								<tr>
									<td><h2>Mobile_no  : </h2></td>
									<td><h2><?php echo $fetch->Mobile_no;?></h2></td>
								</tr>

								<tr>
								
								<td><a href="edit_admin?btn_Admin_id=<?php echo $fetch->Admin_id;?>"class="btn btn-primary">Edit</a></td>
								</tr>

							</table>
						</div>
					</div> 
					</html>
                   