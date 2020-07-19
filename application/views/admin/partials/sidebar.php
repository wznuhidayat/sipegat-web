<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-orange elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link navbar-orange">
      <img src="<?= base_url('upload/') ?>logo.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Si Pegat</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url().'admin/index';?>" class="nav-link <?= $this->uri->segment(2) == 'index' ? 'active' : '' ?>">
              <i class="nav-icon fab fa-product-hunt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          
          <li class="nav-header">Admin</li>
          <li class="nav-item">
            <a href="<?= base_url().'admin/adminview';?>" class="nav-link <?= $this->uri->segment(2) == 'adminview' ? 'active' : '' ?>">
              <i class="nav-icon far fa-user"></i>
              <p>Admin</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>