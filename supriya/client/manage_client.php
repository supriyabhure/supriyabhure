<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage Client
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Manage Client</a></li>
            <li class="active">Manage Client</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Manage Client</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
					   
                        <th>client_id</th>
                        <th>Adharcard_no</th>
                        <th>Liacence_no</th>
                        <th>Car_no</th>
                        <th>Rc_no</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile_no</th>
                        <th>User_name</th>
                        <th>img</th>
                        
						            <th>Delete</th>
						            <th>status</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
					foreach($client_arr as $d)
					{
					?>
                      <tr>
                       
						<td><?php echo $d->client_id?></td>
						<td><?php echo $d->Adharcard_no?></td>
						<td><?php echo $d->Liacence_no?></td>
						<td><?php echo $d->Car_no?></td>
						<td><?php echo $d->Rc_no?></td>
						<td><?php echo $d->Name?></td>
            <td><?php echo $d->Email?></td>
            <td><?php echo $d->Mobile_no?></td>
            <td><?php echo $d->User_name?></td>
        

            <td><img src="upload/client/<?php echo $d->img?>" width="50px"></td>
           
						<td><a href="delete?btn_client_id=<?php echo $d->client_id?>">Delete</a></td>
            
						<td><a href="status?status_client_id=<?php echo $d->client_id?>"><?php echo $d->status?></a></td>
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