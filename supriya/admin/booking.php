<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Add Booking
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Add Booking</a></li>
            <li class="active">Add Booking</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Add Booking</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form method="post" action="" role="form" enctype="multipart/form-data">
                    <!-- text input -->
                    
                   
                    

					<div class="form-group">
                      <label>Title</label>
                      <input type="text" name="Title" class="form-control" placeholder="Enter Name"/>
                    </div>

                    <div class="form-group">
                      <label>Image</label>
                      <input type="file" name="Img" class="form-control" >
                    </div>

                    <div class="form-group">
                      <label>Description</label>
                      <input type="text" name="Description" class="form-control" placeholder="Enter Name"/>
                    </div>

                    <div class="form-group">
                      <label>Price</label>
                      <input type="text" name="Price" class="form-control" placeholder="Enter Name"/>
                    </div>

                    <div class="form-group">
                      <label>Terms and cond</label>
                      <input type="text" name="Terms_cond" class="form-control" placeholder="Enter Name"/>
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