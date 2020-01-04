<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>Surat Keluar</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/surat_keluar">Surat Keluar</a></li>
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
                <h3 class="box-title">Form Data Edit Surat Keluar</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open_multipart('admin/update_surat_keluar'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                
                   <div class="form-group">
                    <label for="nokeluar">No Keluar</label>
                      <input type="text" class="form-control" name="nokeluar" value="<?php echo $data->nomorKeluar; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="perihal">Perihal</label>
                      <input type="text" class="form-control" name="perihal" value="<?php echo $data->perihal; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="tanggalsurat">Tanggal Surat</label>
                      <input type="date" class="form-control" name="tanggalsurat" value="<?php echo $data->tanggal_surat ?>" />
                  </div>
                   <div class="form-group">
                    <label for="tanggalkeluar">Tanggal Keluar</label>
                      <input type="date" class="form-control" name="tanggalkeluar" value="<?php echo $data->tanggal_keluar ?>" />
                  </div>
                   <div class="form-group">
                    <label for="asal">Kepada</label>
                      <input type="text" class="form-control" name="kepada" value="<?php echo $data->kepada ?>" />
                  </div>
                   <div class="form-group">
                    <label for="asal">Penanggung Jawab</label>
                      <input type="text" class="form-control" name="penanggung_jawab" value="<?php echo $data->penanggung_jawab ?>"  />
                  </div>
                   <div class="form-group">
                    <label for="scan">Scan</label>
                      <input type="file" class="form-control" name="scan" accept=".pdf" value="<?php echo $data->scan ?>" />
                  </div>
                  <input type="hidden" name="id" value="<?php echo $data->idKeluar ?>">
                  <a href="<?php echo base_url(); ?>admin/update_surat_keluar" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>