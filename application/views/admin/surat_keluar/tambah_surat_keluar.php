<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Surat keluar</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/surat_keluar">Surat Keluar</a></li>
              <li class="active">Tambah</li>
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
                <h3 class="box-title">Form Data Tambah Surat Keluar</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open_multipart('admin/insert_surat_keluar'); ?>
                  <div class="form-group">
                    <label for="nokeluar">No Keluar</label>
                      <input type="text" class="form-control" name="nokeluar" placeholder="Nomor Keluar"/>
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
                    <label for="tanggalkeluar">Tanggal Keluar</label>
                      <input type="date" class="form-control" name="tanggalkeluar" />
                  </div>
                   <div class="form-group">
                    <label for="asal">Kepada</label>
                      <input type="text" class="form-control" name="kepada" />
                  </div>
                   <div class="form-group">
                    <label for="asal">Penanggung Jawab</label>
                      <input type="text" class="form-control" name="penanggung_jawab" />
                  </div>
                   <div class="form-group">
                    <label for="scan">Scan</label>
                      <input type="file" class="form-control" name="scan" accept=".pdf" />
                  </div>
                 
                  <a href="<?php echo base_url(); ?>admin/surat_keluar/surat_keluar" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>