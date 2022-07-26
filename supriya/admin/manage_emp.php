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
                  <h3 class="box-title">Manage Employee</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
					   
                        <th>Employee_id</th>
                        <th>Username</th>
                        <th>First_name</th>
                        <th>Last_name</th>
                        <th>Birth_of_date</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Mobile_no</th>
                        <th>Job_title</th>
                        <th>Salary</th>
                        <th>Address</th>
						            <th>Delete</th>
						            <th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
					foreach($emp_arr as $d)
					{
					?>
            <tr>
            <td><?php echo $d->Employee_id?></td>          
            <td><?php echo $d->Username?></td>          
            <td><?php echo $d->First_name?></td>
            <td><?php echo $d->Last_name?></td>
            <td><?php echo $d->Birth_of_date?></td>
            <td><?php echo $d->Gender?></td>
            <td><?php echo $d->Email?></td>
            <td><?php echo $d->Mobile_no?></td>
            <td><?php echo $d->Job_title?></td>
            <td><?php echo $d->Salary?></td>
            <td><?php echo $d->Address?></td>
            
          
						
            
  
            
           
						
						<td><a href="delete?btn_Employee_id=<?php echo $d->Employee_id?>">Delete</a></td>
						<td><a href="edit_employee?btn_Employee_id=<?php echo $d->Employee_id?>">Edit</a></td>
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