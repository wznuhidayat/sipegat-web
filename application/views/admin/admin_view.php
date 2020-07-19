

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="#">Admin</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <?php // $this->load->view('messages') ?>
     <div class="card card-orange card-outline">
            <div class="card-header">
                <h3 class="card-title">Data Admin</h3>
                <div class="float-right">
                    <a href="<?php echo site_url('admin/addadmin'); ?>" class="btn-sm btn-success ">
                     <i class="fa fa-plus"> Add admin</i>
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Img</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach($admin as $u => $data): ?>
                        <tr>
                            <td>
                                <img src="<?php echo base_url('upload/admin/').$data->img ?>" alt="" width="64" >
                            </td>
                            <td><?php echo $data->username ?></td>
                            <td><?php echo $data->name ?></td>
                            <td class="text-center">                    
                                    <a ><?php echo anchor('admin/editadmin/'.$data->username, '<div class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></div>') ?>
                                    </a>
                                    <a href="<?= site_url('admin/deleteadmin/'.$data->username) ?>" onclick="javascript: return confirm('are you sure to delete this data?')"  class="btn btn-xs btn-danger"  ><i class="fa fa-trash"></i></a>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                 </table>
            </div>  
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
