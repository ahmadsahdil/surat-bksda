<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Surat Masuk
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Surat Masuk</li>
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
                  	<a href="<?php echo base_url(); ?>admin/tambah_surat_masuk" class="btn btn-sm btn-primary "><i class="fa fa-plus"></i> Tambah</a>
                    <?php } ?>
               <?php include 'cetak.php'; ?>
                 <a href="<?php echo base_url(); ?>report/surat_masuk" class="btn btn-sm btn-primary "><i class="fa fa-file-excel-o"></i> Cetak Semua</a>
                    
                  </h3>
                  <div class="box-tools">

                  </div>
                </div>
                <div class="box-body table-responsive no-padding">
                  <table id="example1" class="table table-bordered table-hover dataTable">
                    <thead>
                      <tr>
                      <th style="text-align: center">ID</th>
                        <th style="text-align: center">No Masuk</th>
                        <th style="text-align: center">Perihal</th>
                        <th style="text-align: center">Tanggal Surat</th>
                        <th style="text-align: center">Tanggal Masuk</th>
                        <th style="text-align: center">Asal</th>
                        <th style="text-align: center">File Surat</th>
                        <th style="text-align: center">Scan Disposisi</th>
                      <?php if($this->session->userdata('user_status')=="Admin") {?>
                        <th style="text-align: center">Aksi</th>
                      <?php } ?>
                        <th style="text-align: center">Lihat</th>
                    </thead>
                    <tbody>
                      	<?php  
                        $no = 1;
                        foreach ($data as $lihat):
                        ?>
                    	<tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $lihat->nomorMasuk ?></td>
                        <td><?php echo $lihat->perihal ?></td>
                          <td><?php echo date('d M Y',strtotime($lihat->tanggal_surat)) ?></td> 
                          <td><?php echo date('d M Y',strtotime($lihat->tanggal_masuk)) ?></td> 
                          <td><?php echo $lihat->asal ?></td>
                          <td><?php echo $lihat->scan ?><br>
 <a href="<?php echo base_url(); ?>assets/upload/surat_masuk/<?=  $lihat->scan?>" class="btn btn-sm btn-warning " ><i class="fa fa-file-pdf-o"></i> Surat</a>
                          </td>
                          <td><?php echo $lihat->scan_disposisi?></td>
                    		
                         <?php if($this->session->userdata('user_status')=="Admin") {?>
                        <td align="center">
                          
                            <a href="<?php echo base_url(); ?>admin/edit_surat_masuk/<?= strtr($this->encrypt->encode($lihat->idMasuk),array('+' => '.', '=' => '-', '/' => '~')) ?>" class="btn btn-sm btn-primary "><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php echo base_url(); ?>admin/hapus_surat_masuk/<?php echo $lihat->idMasuk?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger "><i class="fa fa-trash"></i> Hapus</a>
                             
                            <?php include 'scan_disposisi.php'; ?>
                        
                        </td> 
                         <?php } ?>   
                      
                        <td align="center">
                            <a href="<?php echo base_url(); ?>assets/upload/surat_masuk/<?php echo $lihat->scan?>" class="btn btn-sm btn-warning " ><i class="fa fa-file-pdf-o"></i> Surat</a>
                              <a href="<?php echo base_url(); ?>disposisi/tampil_disposisi_masuk/<?php echo $lihat->idMasuk?>" class="btn btn-sm btn-success " ><i class="fa fa-eye"></i> Disposisi</a>
                              <a href="<?php echo base_url(); ?>assets/upload/surat_masuk/disposisi/<?php echo $lihat->scan_disposisi?>" class="btn btn-sm btn-success " ><i class="fa fa-eye"></i> Scan Disposisi</a>
                        </td>              		
                    	</tr>
                    	<?php endforeach; ?>
                    </tbody>
                  </table>
                  
                </div><!-- /.box-body -->
                </div>
             </div>
          </div>
        

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
