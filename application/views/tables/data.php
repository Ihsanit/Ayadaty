  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  
                  <th>ID</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Privilage</th>
                  <th>Operation</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user) {?>
                <tr>
                  
                  <td><?php echo $user['u_id']; ?></td>
                  <td><?php echo $user['u_username']; ?></td>
                  <td><?php echo $user['u_email']; ?></td>
                  <td><?php echo $user['u_password']; ?></td>
                  <td><?php echo $user['u_privilage']; ?></td>
                  <td>
                    <?php echo form_open('user_c/edit_user/'.$user['u_id']);?>
                    <button type="submit" class="btn btn-default btn-sm"><i class="fa fa-pencil-square-o"></i></button>
                    <?php echo form_close();?>
                  </td>
                  <td>
                    <?php echo form_open('user_c/delete_user/'.$user['u_id']);?>
                    <button type="submit" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                    <?php echo form_close();?>
                  </td>
                </tr>
              <?php };?>                
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                 </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

 

