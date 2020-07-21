

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
      <?php $this->load->view('messages') ?>
     <div class="card card-orange card-outline">
            <div class="card-header">
                <h3 class="card-title">Add Admin</h3>
                <div class="float-right">
                  <a href="<?php echo site_url('admin/adminview'); ?>" class="btn-sm btn-warning btn-flat">
                     <i class="fa fa-undo"> back</i>
                    </a>
                </div>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 mx-auto">
                        <?php echo form_open_multipart('admin/addAdmin');?>
                            <div class="form-group <?= form_error('username') ? 'is-invalid':'' ?>">
                                <label for="username">username</label>
                                <input type="text" class="form-control" value="<?=set_value('username') ?>" id="username" placeholder="username" name="username">
                                <div class="invalid-feedback">
                                    <?= form_error('username') ?>
                                </div>        
                            </div>
                            <div class="form-group <?= form_error('name') ? 'is-invalid':'' ?>">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" value="<?=set_value('name') ?>" id="name" placeholder="name" name="name">
                                <div class="invalid-feedback">
                                    <?= form_error('name') ?>
                                </div>        
                            </div>
                            
                            <div class="form-group <?= form_error('password') ? 'is-invalid':'' ?>">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" value="<?=set_value('password') ?>" id="password" placeholder="password" name="password">
                                <div class="invalid-feedback">
                                    <?= form_error('password') ?>
                                </div>             
                            </div>
                            <div class="form-group <?= form_error('passconf') ? 'is-invalid':'' ?>">
                                <label for="passconf">Password Confir</label>
                                <input type="password" class="form-control" value="<?=set_value('passconf') ?>" id="passconf" placeholder="Password confir" name="passconf">
                                <div class="invalid-feedback">
                                    <?= form_error('passconf') ?>
                                </div>             
                            </div>
                            
                            <div class="form-group ">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file"  id="image" placeholder="image" name="image">        
                            </div>
                            
                            <div class="form-group ">
                                <button type="submit" class="btn btn-success btn-flat">Save</button>
                                <button type="reset" class="btn  btn-flat">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>  
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="#">Si Pegat</a>.</strong>
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
