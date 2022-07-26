<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Edit Booking
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Edit Booking</a></li>
            <li class="active">Edit Booking</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Edit Booking</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form method="post" action="" role="form" enctype="multipart/form-data">
                    <!-- text input -->

                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" name="Title" value="<?php echo $fetch->Title;?>" class="form-control" placeholder="Enter Title"/>
                    </div>

                    <div class="form-group">
                      <label>Image</label>
                      <input type="file" name="Img" value="<?php echo $fetch->Img;?>" class="form-control"/>
                      <img src="upload/booking/<?php echo $fetch->Img?>" width="50px" height="50px">
                    </div>

                    <div class="form-group">
                      <label>Description</label>
                      <input type="text" name="Description" value="<?php echo $fetch->Description;?>" class="form-control" placeholder="Enter description"/>
                    </div>

                    <div class="form-group">
                      <label>price</label>
                      <input type="text" name="price" value="<?php echo $fetch->price;?>" class="form-control" placeholder="Enter price"/>
                    </div>

                    <div class="form-group">
                      <label>Terms and condition</label>
                      <input type="text" name="Terms_cond" value="<?php echo $fetch->Terms_cond;?>" class="form-control" placeholder="Enter car status"/>
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
  