
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Surat masuk</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/surat_masuk">Surat Masuk</a></li>
              <li class="active">Tambah</li>

            </ol>
          </section>
 <?php  if($this->session->flashdata('alert')){
       echo '<div class="alert alert-danger">';
      echo $this->session->flashdata('alert');
      echo '</div>';
    }?>
          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Data Tambah Surat Masuk</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open_multipart('admin/insert_surat_masuk'); ?>
                  <div class="form-group">
                    <label for="nomasuk">No Masuk</label>
                      <input type="text" class="form-control" name="nomasuk" placeholder="Nomor Masuk"/>
                  </div>
                  <div class="form-group">
                    <label for="perihal">Perihal</label>
                      <input type="text" class="form-control" name="perihal" placeholder="Perihal Surat"/>
                  </div>
                  <div class="form-group">
                    <label for="tanggalsurat">Tanggal Surat</label>
                      <input type="date" class="form-control" name="tanggalsurat" />
                  </div>
                   <div class="form-group">
                    <label for="tanggalmasuk">Tanggal Masuk</label>
                      <input type="date" class="form-control" name="tanggalmasuk" />
                  </div>
                   <div class="form-group">
                    <label for="asal">Asal</label>
                      <input type="text" class="form-control" name="asal" />
                  </div>
                   <div class="form-group">
                    <label for="scan">Scan</label>
                      <input type="file" class="form-control" name="scan" accept=".pdf"  />
                  </div>
                 
                  <a href="<?php echo base_url(); ?>admin/surat_masuk/surat_masuk" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>