<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view("admin/partials/head") ?>

</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<div class="wrapper">
  <?php $this->load->view("admin/partials/navbar") ?>
  <?php $this->load->view("admin/partials/sidebar") ?>
  <?php echo $contents; ?>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php $this->load->view("admin/partials/js") ?>
</body>
</html>
