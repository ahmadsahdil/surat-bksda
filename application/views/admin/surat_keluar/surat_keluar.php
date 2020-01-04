<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Surat Keluar
      
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Surat Keluar</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

        	<div class="row">          	
          	<div class="col-xs-12">
          		<div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                  <?php if($this->session->userdata('user_status')=="Admin") {?>
                  	<a href="<?php echo base_url(); ?>admin/tambah_surat_keluar" class="btn btn-sm btn-primary "><i class="fa fa-plus"></i> Tambah</a>
                    <?php } ?>
                    <?php include 'cetak.php'; ?>
                     <a href="<?php echo base_url(); ?>report/surat_keluar" class="btn btn-sm btn-primary "><i class="fa fa-file-excel-o"></i> Cetak Semua</a>
                  </h3>
                  <div class="box-tools">
                  
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                
                
                  <table id="example1" class="table table-bordered table-hover dataTable">
                    <thead>
                      <tr>
                        <th style="text-align: center">No</th>
                        <th style="text-align: center">No Keluar</th>
                        <th style="text-align: center">Perihal</th>
                        <th style="text-align: center">Tanggal Surat</th>
                        <th style="text-align: center">Tanggal Keluar</th>
                        <th style="text-align: center">Kepada</th>
                        <th style="text-align: center">Penanggung Jawab</th>
                        <th style="text-align: center">File Surat</th>
                         <?php if($this->session->userdata('user_status')=="Admin") {?>
                        <th style="text-align: center">Aksi</th>
                        <?php } ?>
            
                    </thead>
                    <tbody>
                      	<?php  
                      	$no = 1;
                      	foreach ($data as $lihat):
                      	?>
                    	<tr>
                        <td><?php echo $no++ ?></td>
                    	<td><?php echo $lihat->nomorKeluar?></td>
                      <td><?php echo ucfirst($lihat->perihal) ?></td> 
                    	<td><?php echo date('d M Y',strtotime($lihat->tanggal_surat)) ?></td> 
                      <td><?php echo date('d M Y',strtotime($lihat->tanggal_keluar)) ?></td> 
                      <td><?php echo ucwords($lihat->kepada) ?></td> 
                      <td><?php echo ucwords($lihat->penanggung_jawab) ?></td> 
                      <td><?php echo $lihat->scan ?><br>
                       <a href="<?php 
                            echo base_url(); ?>assets/upload/surat_keluar/<?php echo $lihat->scan?>" class="btn btn-sm btn-warning " ><i class="fa fa-file-pdf-o"></i> File Surat</a>
                         </td> 
                    <?php if($this->session->userdata('user_status')=="Admin") {?>
                        <td align="center">
                          
                            <a href="<?php echo base_url(); ?>admin/edit_surat_keluar/<?php echo $lihat->idKeluar ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php echo base_url(); ?>admin/hapus_surat_keluar/<?php echo $lihat->idKeluar ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
                    
                        </td>  
                        <?php } ?>   
                                           		
                    	</tr>
                    	<?php endforeach ?>
                    </tbody>
                  </table>
                  
                </div><!-- /.box-body -->
                </div>
             </div>
          </div>
          
         

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
