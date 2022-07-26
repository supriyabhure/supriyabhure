<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage Caradv
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Manage Caradv</a></li>
            <li class="active">Manage Caradv</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Manage Caradv</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                      <th>Caradv_id</th>
                        
                        <th>Title</th>
                        <th>Img</th>
                        <th>Description</th>
                        <th>price</th>
                        <th>Car_status</th>
                        <th>delete</th>
						<th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
					foreach($caradv_arr as $d)
					{
					?>
                      <tr>
            <td><?php echo $d->Caradv_id?></td>           
						
						<td><?php echo $d->Title?></td>
                        <td><img src="upload/caradv/<?php echo $d->Img?>"width="50px"></td>
                       
                        <td><?php echo $d->Description?></td>
						<td><?php echo $d->price?></td>
						<td><?php echo $d->Car_status?></td>
						
                        <td><a href="delete?btn_Caradv_id=<?php echo $d->Caradv_id?>">delete</a></td>
                        <td><a href="edit_caradv?btn_Caradv_id=<?php echo $d->Caradv_id?>">Edit</a></td>

						
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