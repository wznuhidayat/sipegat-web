<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-orange navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- User Account: style can be found in dropdown.less -->
          <li class="nav-item dropdown user user-menu">
            <a href="#" class="nav-link" data-toggle="dropdown">
              <img src="<?= base_url('upload/admin/').$this->funct->admin_login()->img ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= $this->funct->admin_login()->name ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= base_url('upload/admin/').$this->funct->admin_login()->img ?>" class="img-circle" alt="User Image" >
                <?php //echo var_dump($this->funct->admin_login()); ?>
                <p>
                  <?= $this->funct->admin_login()->name ?>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="float-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="float-right">
                  <a href="<?php echo site_url('auth/logout') ?>" class="btn btn-danger btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>  
    </ul>
  </nav>
  <!-- /.navbar -->