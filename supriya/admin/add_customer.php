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
                      <label>Adharcard number</label>
                      <input type="number" name="Adharcard_no" class="form-control" placeholder="Enter Adharcard Number"/>
                    </div>
                    
                    <div class="form-group">
                      <label>Liacence number</label>
                      <input type="number" name="Liacence_no" class="form-control" placeholder="Enter Liacence number"/>
                    </div>

                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="Name" class="form-control" placeholder="Enter Name"/>
                    </div>

                    <div class="form-group">
                      <label>Mobile Number</label>
                      <input type="number" name="Mobile_no" class="form-control" placeholder="Enter Mobile number"/>
                    </div>

                   

                      <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="Email" class="form-control" placeholder="Enter Email Id"/>
                    </div>

                   

                    <div class="form-group">
                      <label>User name</label>
                      <input type="text" name="User_name" class="form-control" placeholder="Enter User name"/>
                    </div>

                    

                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="Password" class="form-control" placeholder="Enter Salary"/>
                    </div>

                    <div class="form-group">
                      <label>Images</label>
                      <input type="file" name="Img" class="form-control" placeholder="choose images"/>
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
