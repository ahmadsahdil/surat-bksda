<!-- 
Programmer : Ahmad
Programmer Support : Muhammad
ketikanmd.blogspot.com
 -->
<?php 
$user_id=$this->session->userdata('user_id');
$user = $this->model_admin->detail($user_id);
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  

<link rel="shortcut icon" href="<?php echo base_url('assets/gambar/3.png') ?>">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>/assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>/assets/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="<?php echo base_url()?>/assets/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->

</head>
<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('admin')?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SM</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Surat Menyurat</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url('') ?>" title="Dasbor" target="_blank">
          <i class="fa fa-home"></i>Beranda</a></li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
          <span class="hidden-xs"><?php echo $user->namaUser ?>  </span>
            </a>
            <ul class="dropdown-menu">
        
              <li class="user-footer">
                
                <div class="pull-right">
                  <a href="<?php echo base_url('login/logout') ?>" class="btn btn-success btn-flat"><i class="fa fa-sign-out"></i>Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        
        </ul>
      </div>
    </nav>
  </header>
  <body class="hold-transition skin-green sidebar-mini">
         <aside class="main-sidebar">
        <section class="sidebar">
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?php if($page == 'home'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/index">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>
            </li>            
            <li class="<?php if($page == 'surat_masuk/surat_masuk'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/surat_masuk">
                <i class="fa fa-envelope-o"></i> <span>Surat Masuk</span>
              </a>
            </li>           
            <li class="<?php if($page == 'surat_keluar/surat_keluar'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/surat_keluar">
                <i class="fa fa-envelope"></i> <span>Surat Keluar</span>
              </a>
            </li>
              <?php if($this->session->userdata('user_status')=="Admin") {?>
             <li class="<?php if($page == 'user/manage_user'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/manage_user">
                <i class="fa fa-user"></i> <span>User</span>
              </a>
            </li>
            <?php }; ?>
              <li class="<?php if($page == 'about'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>about">
                <i class="fa fa-user-md"></i> <span>About</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <?php $this->load->view('admin/'.$page); ?>

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; <?php echo date('Y') ?> .</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

  <script src="<?php echo base_url()?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url()?>/assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()?>/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>/assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>/assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>