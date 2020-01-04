<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>Surat Masuk</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/surat_masuk">Surat Masuk</a></li>
              <li class="active">Edit</li>
              <!--
              <li><a href="#">Layout</a></li>
              <li class="active">Top Navigation</li>
              -->
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Data Edit Surat Masuk</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open_multipart('admin/update_surat_masuk'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                   <div class="form-group">
                    <label for="nomasuk">No Masuk</label>
                      <input type="text" class="form-control" name="nomasuk" value="<?php echo $data->nomorMasuk ?>" />
                  </div>
                  <div class="form-group">
                    <label for="perihal">Perihal</label>
                      <input type="text" class="form-control" name="perihal" value="<?php echo $data->perihal ?>" />
                  </div>
                  <div class="form-group">
                    <label for="tanggalsurat">Tanggal Surat</label>
                      <input type="date" class="form-control" name="tanggalsurat" value="<?php echo $data->tanggal_surat ?>"  />
                  </div>
                   <div class="form-group">
                    <label for="tanggalmasuk">Tanggal Masuk</label>
                      <input type="date" class="form-control" name="tanggalmasuk" value="<?php echo $data->tanggal_masuk ?>"  />
                  </div>
                   <div class="form-group">
                    <label for="asal">Asal</label>
                      <input type="text" class="form-control" name="asal" value="<?php echo $data->asal ?>"  />
                  </div>
                   <div class="form-group">
                    <label for="scan">Scan Surat</label>
                      <input type="file" class="form-control" name="scan" accept=".pdf" value="<?php echo $data->scan ?>"  />
                  </div>
                 
                  <input type="hidden" name="id" value="<?php echo $data->idMasuk ?>">
                  <a href="<?php echo base_url(); ?>admin/surat_Masuk" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>