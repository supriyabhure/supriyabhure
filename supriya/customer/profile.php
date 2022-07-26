<!DOCTYPE html>
<html>

	
    
      
      
	 


<div class="col-md-4">
							<img src="upload/customer/<?php echo $fetch->Img?>" width="20%" height="100px">
						</div>
						
						<div class="col-md-4">
							<table >
								<tr>
									<td><h2>ID : </h2></td>
									<td><h2><?php echo $fetch->Cust_id;?></h2></td>
								</tr>
								<tr>
									<td><h2>Adharcard_no   : </h2></td>
									<td><h2><?php echo $fetch->Adharcard_no;?></h2></td>
								</tr>
								<tr>
									<td><h2>Liacence_no  : </h2></td>
									<td><h2><?php echo $fetch->Liacence_no;?></h2></td>
								</tr>
                                <tr>
									<td><h2>Name  : </h2></td>
									<td><h2><?php echo $fetch->Name;?></h2></td>
								</tr>
								<tr>
									<td><h2>Mobile_no  : </h2></td>
									<td><h2><?php echo $fetch->Mobile_no;?></h2></td>
								</tr>
								
								<tr>
									<td><h2>Email  : </h2></td>
									<td><h2><?php echo $fetch->Email;?></h2></td>
								</tr>

								<tr>
									<td><h2>User_name  : </h2></td>
									<td><h2><?php echo $fetch->User_name;?></h2></td>
								</tr>

								<tr>
								
								<td><a href="edit_customer?btn_Cust_id=<?php echo $fetch->Cust_id;?>"class="btn btn-primary">Edit</a></td>
								</tr>

							</table>
						</div>
					</div> 
					</html>
                   