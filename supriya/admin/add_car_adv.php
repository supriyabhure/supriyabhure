<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Add Car Adv
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Add Car Adv</a></li>
            <li class="active">Add Car Adv</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Add Car Adv</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form method="post" action="" role="form" enctype="multipart/form-data">
                    <!-- text input -->
                    
                   
					<div class="form-group">
                      <label>Cust Id</label>
                      <input type="text" name="Cust_id" class="form-control" placeholder="Enter Customer Id"/>
                    </div>
                    
                    <div class="form-group">
                      <label>Cartype id</label>
                      <input type="text" name="Cartype_id" class="form-control" placeholder="Enter Cartype Id"/>
                    </div>

                    <div class="form-group">
                      <label>Location Id</label>
                      <input type="text" name="Loca_id" class="form-control" placeholder="Enter location id"/>
                    </div>

                    <div class="form-group">
                      <label>Car No</label>
                      <input type="text" name="Car_no" class="form-control" placeholder="Enter Car Number"/>
                    </div>

                    <div class="form-group">
                      <label>Rc Number</label>
                      <input type="text" name="RC_no" class="form-control" placeholder="Enter RC Number"/>
                    </div>

                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" name="Title" class="form-control" placeholder="Enter Birth of date"/>
                    </div>

                    <div class="form-group">
                      <label>Image</label>
                      <input type="file" name="Img" class="form-control" >
                    </div>

                    <div class="form-group">
                      <label>Description</label>
                      <input type="text" name="Description" class="form-control" placeholder="Enter Description"/>
                    </div>

                    <div class="form-group">
                      <label>Price Type</label>
                      <input type="text" name="price_type" class="form-control" placeholder="Enter price type"/>
                    </div>

                    <div class="form-group">
                      <label>Price </label>
                      <input type="text" name="price_type" class="form-control" placeholder="Enter price"/>
                    </div>

                    <div class="form-group">
                      <label>Term of condition</label>
                      <input type="text" name="Terms_cond" class="form-control" placeholder="Enter terms of condition"/>
                    </div>

                    <div class="form-group">
                      <label>post status</label>
                      <input type="text" name="Post_status" class="form-control" placeholder="Enter terms of condition"/>
                    </div>

                    <div class="form-group">
                      <label>car status</label>
                      <input type="text" name="Car_status" class="form-control" placeholder="Enter terms of condition"/>
                    </div>



                    
                  

                    <div class="form-group">
                      <input type="submit" name="submit" value="Submit" class="btn btn-primary">
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
