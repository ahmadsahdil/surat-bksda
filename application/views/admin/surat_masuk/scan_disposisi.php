
<button type="button" class="btn btn-success btn-sm"" data-toggle="modal" data-target="#Tambah<?php echo $lihat->idMasuk ?>"> 
<i class="fa fa-edit"></i>Scan 
</button>

<div class="modal modal-default fade" id="Tambah<?php echo $lihat->idMasuk ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Scan Disposisi</h4>
      </div>
      <div class="modal-body">
       <?php 

       $atribut='class="form-horizontal"';

       // form open
       echo form_open_multipart(base_url('admin/update_disposisi'), $atribut);
        ?>
     <input type="" name="id_masuk" value="<?php echo $lihat->idMasuk ?>" hidden>

  <table width="100%" >
   
   
    <tr>
      <td style="margin-right: 10px;text-align: right;" width="40%">Scan Disposisi : </td>
      <td style="text-align: left"><input type="file" class="form-control" name="scan_disposisi" accept=".pdf"  value="<?php echo $lihat->scan_disposisi ?>"></td>
    </tr>

 <tr>
   <td colspan="2" style="text-align: right;">
        
<button type="submit" class="btn btn-success btn-sm"> 
<i class="fa fa-edit"></i>Edit
</button>
      
   </td>
 </tr>
  
 </table>
        <?php 
// form close
        echo form_close();
         ?>
      </div>
      
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->