<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Add Employee
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Add Employee</a></li>
            <li class="active">Add Employee</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Add Employee</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form method="post" action="" role="form" enctype="multipart/form-data">
                    <!-- text input -->
                    
                   
					<div class="form-group">
                      <label>User Name</label>
                      <input type="text" name="Username" class="form-control" placeholder="Enter User Name"/>
                    </div>
                    
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="Password" class="form-control" placeholder="Enter Password"/>
                    </div>

                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" name="First_name" class="form-control" placeholder="Enter First Name"/>
                    </div>

                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" name="Last_name" class="form-control" placeholder="Enter Last Name"/>
                    </div>

                    <div class="form-group">
                      <label>Birth of Date</label>
                      <input type="date" name="Birth_of_date" class="form-control" placeholder="Enter Birth of date"/>
                    </div>

                    <!-- radio -->
                    <div class="form-group">
						<label>Gender</label>
                      <div class="radio">
                        <label>
                          <input type="radio" name="Gender" id="optionsRadios1" value="Male" checked>
                          Male
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="Gender" id="optionsRadios2" value="Female">
						  Female
                        </label>
                      </div>

                      <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="Email" class="form-control" placeholder="Enter Email Id"/>
                    </div>

                    <div class="form-group">
                      <label>Mobile Number</label>
                      <input type="number" name="Mobile_no" class="form-control" placeholder="Enter Mobile number"/>
                    </div>

                    <div class="form-group">
                      <label>Job tittle</label>
                      <input type="Job_tittle" name="Job_title" class="form-control" placeholder="Enter job tittle"/>
                    </div>

                    

                    <div class="form-group">
                      <label>Salary</label>
                      <input type="number" name="Salary" class="form-control" placeholder="Enter Salary"/>
                    </div>

                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" name="Address" class="form-control" placeholder="Enter job tittle"/>
                    </div>
                    <div class="form-group">
                      <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    </div>







                      
                    </div>
					
					
                 

                     

                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     <?php
include_once('footer.php');
?>
