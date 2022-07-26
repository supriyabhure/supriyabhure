<!DOCTYPE html>
<html>

	
    
      
      
	 
	 
	  <div class="col-md-4">
							
						
						<div class="col-md-4">
							<table >
								<tr>
									<td><h2>ID  : </h2></td>
									<td><h2><?php echo $fetch->Caradv_id;?></h2></td>
								</tr>

								<tr>
									<td><h2>Id  : </h2></td>
									<td><h2><?php echo $fetch->Cust_id;?></h2></td>
								</tr>
								
								<tr>
									<td><h2>Car no  : </h2></td>
									<td><h2><?php echo $fetch->Car_no;?></h2></td>
								</tr>
								<tr>
									<td><h2>Rc no  : </h2></td>
									<td><h2><?php echo $fetch->RC_no;?></h2></td>
								</tr>
                                <tr>
									<td><h2>Title  : </h2></td>
									<td><h2><?php echo $fetch->Title;?></h2></td>
								</tr>
								<tr>
									<td><h2>Price  : </h2></td>
									<td><h2><?php echo $fetch->price;?></h2></td>
								</tr>
								
								<tr>
									<td><h2>Description  : </h2></td>
									<td><h2><?php echo $fetch->Description;?></h2></td>
								</tr>

								<tr>
								
								<td><a href="edit_client?btn_client_id=<?php echo $fetch->client_id;?>"class="btn btn-primary">Edit</a></td>
								</tr>

							</table>
						</div>
					</div> 
					</html>
                   