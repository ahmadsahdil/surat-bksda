<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage User
                    </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Manage User</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          	<div class="row">          	
          	<div class="col-xs-12">
          		<div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                  	<a href="<?php echo base_url(); ?>admin/tambah_user" class="btn btn-sm btn-primary "><i class="fa fa-plus"></i> Tambah</a>
                  </h3>
                  <div class="box-tools">
                  	<!--
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    -->
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                
                  <table id="example1" class="table table-bordered table-hover dataTable">
                    <thead>
                      <tr>
                        <th style="text-align: center">No</th>
                        <th style="text-align: center">Nama</th>
                        <th style="text-align: center">Alamat</th>
                        <th style="text-align: center">No Hp</th>
                        <th style="text-align: center">Username</th>
                        <th style="text-align: center">Role</th>
                        <th style="text-align: center">Aksi</th>
                    </thead>
                    <tbody>
                      	<?php  
                        $no = 1;
                        foreach ($data as $lihat):
                        ?>
                    	<tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo ucwords($lihat->namaUser)?></td>
                        <td><?php echo ucwords($lihat->alamat)?></td>
                        <td><?php echo ucwords($lihat->noHp)?></td>
                        <td><?php echo ucwords($lihat->username)?></td>
                        <td><?php echo ucwords($lihat->role)?></td>
                    	
                        <td align="center">
                         
                            <a href="<?php echo base_url(); ?>admin/edit_user/<?php echo $lihat->idUser ?>" class="btn btn-sm btn-primary "><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php echo base_url(); ?>admin/hapus_user/<?php echo $lihat->idUser ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger "><i class="fa fa-trash"></i> Hapus</a>
                      
                        </td>                  		
                    	</tr>
                    	<?php endforeach; ?>
                    </tbody>
                  </table>

               <!--   <ul > 
                <li >&#9744; Kepala Sub bagian Tata Usaha</li>
                <li >&#x2610; Penelaah dan Penyusunan Rencana Prog.</li>
                
                </ul>  -->

                  
                </div><!-- /.box-body -->
                </div>
             </div>
          </div>
        

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
