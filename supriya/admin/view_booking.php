<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            View Booking
          
          </h1>
         



          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">View Booking</a></li>
            <li class="active">View Booking</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">View Booking</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>image</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Terms and cond</th>
                        
                      </tr>
                    </thead>
                    <tbody>
					<?php
					foreach($booking_arr as $d)
					{
					?>
                     <tr>
                        <td><?php echo $d->Title?></td> 
                        <td><img src="upload/booking/<?php echo $d->Img?>"width="50px"></td>  

                         

		                <td><?php echo $d->Description?></td>
                        <td><?php echo $d->Price?></td>
						<td><?php echo $d->Terms_cond?></td>
						
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
                       