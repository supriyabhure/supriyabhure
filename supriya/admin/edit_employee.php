<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Edit Employee
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Edit Employee</a></li>
            <li class="active">Edit Employee</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Edit Employee</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form method="post" action="" role="form" enctype="multipart/form-data">
                    <!-- text input -->

                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" name="First_name" value="<?php echo $fetch->First_name;?>" class="form-control" placeholder="Enter First Name"/>
                    </div>

                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" name="Last_name" value="<?php echo $fetch->Last_name;?>" class="form-control" placeholder="Enter Last Name"/>
                    </div>

                    <div class="form-group">
                      <label>Birth of Date</label>
                      <input type="date" name="Birth_of_date" value="<?php echo $fetch->Birth_of_date;?>" class="form-control" placeholder="Enter Birth_of_date"/>
                    </div>

                    <!-- radio -->
                    <div class="form-group">
					<label>Gender</label>
					<?php
					$gen=$fetch->Gender;
					if($gen=="Male")
					{
					?>
                      <div class="radio">
                        <label>
                          <input type="radio" name="Gender" id="optionsRadios1" value="Male" checked/>Male
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="Gender" id="optionsRadios2" value="Female"/>Female
                        </label>
                      </div>
                    <?php
					}
					else
					{
					?>
                      <div class="radio">
                        <label>
                          <input type="radio" name="Gender" id="optionsRadios1" value="Male" />Male
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="Gender" id="optionsRadios2" value="Female" checked/>Female
                        </label>
                      </div>
                    <?php
					}
					?>
                      </div>

                      <div class="form-group">
                      <label>Email</label>
                      <input type="text" name="Email" value="<?php echo $fetch->Email;?>" class="form-control" placeholder="Enter Email id"/>
                    </div>
                    
                    <div class="form-group">
                      <label>Mobile number</label>
                      <input type="text" name="Mobile_no" value="<?php echo $fetch->Mobile_no;?>" class="form-control" placeholder="Enter Email id"/>
                    </div>
                    
                    
                    
					
					
                    

                   
                    

					         <div class="form-group">
                      <input type="submit" name="update" value="Save" class="btn btn-primary">
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
  