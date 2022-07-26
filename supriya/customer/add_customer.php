

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Add Customer</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form method="post" action="" role="form" enctype="multipart/form-data">
                    <!-- text input -->
                    
                   
					         <div class="form-group">
                      <label>Adharcard number</label>
                      <input type="number" name="Adharcard_no" class="form-control" placeholder="Enter Adharcard Number"/>
                    </div><br>
                    
                    
                      
                      <div class="form-group">
                      <label>Liacence number</label>
                      <input type="number" name="Liacence_no" class="form-control" placeholder="Enter Liacence number"/>
                    </div><br>

                   
      
                      <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="Name" class="form-control" placeholder="Enter Name"/>
                    </div><br>

                    <div class="form-group">
                      <label>Mobile Number</label>
                      <input type="number" name="Mobile_no" class="form-control" placeholder="Enter Mobile number"/>
                    </div><br>

                   

                      <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="Email" class="form-control" placeholder="Enter Email Id"/>
                    </div><br>

                   

                    <div class="form-group">
                      <label>User name</label>
                      <input type="text" name="User_name" class="form-control" placeholder="Enter User name"/>
                    </div><br>

                    

                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="Password" class="form-control" placeholder="Enter Password"/>
                    </div><br>

                    <div class="form-group">
                      <label>Images</label>
                      <input type="file" name="Img" class="form-control" placeholder="choose images"/>
                    </div><br>


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
