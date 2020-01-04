<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>User</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/manage_user">Manage User</a></li>
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
                <h3 class="box-title">Form Data Tambah User</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/insert_user'); ?>
                  <div class="form-group">
                    <label for="namauser">Nama</label>
                      <input type="text" class="form-control" name="namauser" placeholder="Nama"/>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                      <input type="text" class="form-control" name="alamat" placeholder="alamat"/>
                  </div>
                  <div class="form-group">
                    <label for="nohp">No Hp</label>
                      <input type="number" class="form-control" name="nohp" placeholder="nohp"/>
                  </div>
                   <div class="form-group">
                    <label for="username">Username</label>
                      <input type="text" class="form-control" name="username" placeholder="Username"/>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Password"/>
                  </div>
                    <div class="form-group">
                    <label>Role</label>
                    <select type="text" name="role" class="form-control">
                      <option value="Admin">Admin</option>
                      <option value="User">User</option>
                    </select>
                  </div
                  <a href="<?php echo base_url(); ?>admin/manage_user" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>