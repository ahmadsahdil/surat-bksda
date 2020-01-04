
<button type="button" class="btn btn-success btn-sm"" data-toggle="modal" data-target="#Tambah<?php echo $lihat->idMasuk ?><?php echo $lihat->scan_disposisi ?>"> 
<i class="fa fa-edit"></i>Scan 
</button>

<div class="modal modal-default fade" id="Tambah<?php echo $lihat->idMasuk ?><?php echo $lihat->scan_disposisi ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Scan Disposisi</h4>
      </div>
      <div class="modal-body">
      

       $atribut='class="form-horizontal"';

       // form open
      
  <table width="100%" >
   
   <tr>
  <a href="<?php echo base_url(); ?>assets/upload/surat_masuk/disposisi/<?php echo $lihat->scan_disposisi?>" class="btn btn-sm btn-warning " ><i class="fa fa-file-pdf-o"></i> Surat</a>
   </tr>

 <tr>
   <td colspan="2" style="text-align: right;">
        
<a href="<?php echo base_url(); ?>disposisi/tampil_disposisi_masuk/<?php echo $lihat->idMasuk?>" class="btn btn-sm btn-success " ><i class="fa fa-eye"></i> Disposisi</a>
      
   </td>
 </tr>
  
 </table>
       
      </div>
      
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->