<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Edit Loaction
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Edit Loaction</a></li>
            <li class="active">Edit Loaction</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Edit Loaction</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form method="post" action="" role="form" enctype="multipart/form-data">
                    <!-- text input -->

                    <div class="form-group">
                      <label>Location Id</label>
                      <input type="text" name="Loca_id" value="<?php echo $fetch->Loca_id;?>" class="form-control" placeholder="Enter Location_id"/>
                    </div>

                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="Name" value="<?php echo $fetch->Name;?>" class="form-control" placeholder="Enter Location"/>
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
  