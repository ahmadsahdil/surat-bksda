
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <!-- Small boxes (Stat box) -->
          <div class="row">
           
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3><?php echo $surat_masuk; ?></h3>
                  <p>Surat Masuk</p>
                </div>
                <div class="icon">
                  <i class="fa fa-envelope-o"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/surat_masuk" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $surat_keluar ?></h3>
                  <p>Surat Keluar</p>
                </div>
                <div class="icon">
                  <i class="fa fa-envelope"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/surat_keluar" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
             <?php if($this->session->userdata('user_status')=="Admin") {?>
           <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $user; ?></h3>
                  <p>User</p>
                </div>
                <div class="icon">
                  <i class="fa fa-group"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/manage_user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <?php } ?>
          </div><!-- /.row -->
          

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
