

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="#">Product</a></li>
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
                <h3 class="card-title">Add Product</h3>
                <div class="float-right">
                  <a href="<?php echo site_url('product'); ?>" class="btn-sm btn-warning btn-flat">
                     <i class="fa fa-undo"> back</i>
                    </a>
                </div>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="<?php base_url('product/edit') ?>" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="id" value="<?php echo $product->kode_product?>" />
                            <div class="form-group <?= form_error('name') ? 'is-invalid':'' ?>">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" value="<?= $product->name ?>" id="name" placeholder="name" name="name">
                                <div class="invalid-feedback">
                                    <?= form_error('name') ?>
                                </div>        
                            </div>
                            <!-- <div class="form-group">
                                <label for="id_vendor">ID Vendor</label>
                                <?= form_dropdown('id_vendor', $vendor, $selected, ['class' => 'form-control' , 'required' => 'required']) ?>  
                            </div> -->
                            <div class="form-group <?= form_error('price') ? 'is-invalid':'' ?>">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" value="<?= $product->price ?>" id="price" placeholder="price" name="price">
                                <div class="invalid-feedback">
                                    <?= form_error('price') ?>       
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category" id="category" class="form-control" required>
                                    <option value="">- select -</option>
                                    <option value="Akademik" <?= $product->category == 'Akademik' ? 'selected' : ''  ?>>Akademik</option>
                                    <option value="Bahasa" <?= $product->category == 'Bahasa' ? 'selected' : ''  ?>>Bahasa</option>
                                    <option value="Sport" <?= $product->category == 'Sport' ? 'selected' : ''  ?>>Sport</option>
                                    <option value="Musik" <?= $product->category == 'Musik' ? 'selected' : ''  ?>>Musik</option>
                                    <option value="Seni" <?= $product->category == 'Seni' ? 'selected' : ''  ?>>Seni</option>
                                    <option value="Programmer" <?= $product->category == 'Programmer' ? 'selected' : ''  ?>>Programmer</option>
                                </select>
                            </div>
                            <div class="form-group <?= form_error('image') ? 'is-invalid':'' ?>">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                                <input type="hidden" name="old_image" value="<?= $product->img ?>">
                                <div class="invalid-feedback">
                                    <?= form_error('image') ?>       
                                </div>
                            </div>
                            <div class="form-group <?= form_error('detail') ? 'is-invalid':'' ?>">
                                <label for="detail">Detail</label>
                                <textarea name="detail" id="detail" cols="15" rows="5" class="form-control"><?= $product->detail ?></textarea>
                                <div class="invalid-feedback">
                                    <?= form_error('detail') ?>
                                </div>
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
