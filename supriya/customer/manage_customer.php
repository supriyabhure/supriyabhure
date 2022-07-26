<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage Employee
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Manage Employee</a></li>
            <li class="active">Manage Employee</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Manage Customer</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
					   
                        <th>Cust_id</th>
                        <th>Adharcard_no</th>
                        <th>Liacence_no</th>
                        <th>Name</th>
                        <th>Mobile_no</th>
                        <th>Email</th>
                        <th>User_name</th>
                        <th>Password</th>
                        <th>Img</th>
                        <th>Delete</th>
						<th>Reply</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
					foreach($customer_arr as $d)
					{
					?>
                      <tr>
                       
						<td><?php echo $d->Cust_id?></td>
						<td><?php echo $d->Adharcard_no?></td>
						<td><?php echo $d->Liacence_no?></td>
						<td><?php echo $d->Name?></td>
						<td><?php echo $d->Mobile_no?></td>
						<td><?php echo $d->Email?></td>
            <td><?php echo $d->User_name?></td>
            <td><?php echo $d->Password?></td>
            <td><img src="upload/customer/<?php echo $d->Img?>" width="50px"></td>
            
						<td><a href="#">Delete</a></td>
						<td><a href="#">Reply</a></td>
					  </tr>
                    <?php
					}
					?> 
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    <?php
	include_once('footer.php');
	?>