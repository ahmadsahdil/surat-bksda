<button type="button" class="btn  btn-primary btn-sm" data-toggle="modal" data-target="#print">
<i class="fa fa-cloud-download"></i>Print
</button>
<div class="modal modal-primary fade" id="print">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Download Berdasarkan Tanggal Surat </h4>
      </div>
      <div class="modal-body">
           <?php echo form_open('report/excel_surat_keluar/'); ?>
           <div class="form-group">
 <input type="date" class="form-control" name="tanggal"  />                      </div>
                      <br>
                      
                       <br>
                      
                         <button type="submit" name="export" class="btn btn-outline  pull-right"  id="export" ><i class="fa fa-file-excel-o"></i>  Export Excel</button>
                          
                          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <?php echo form_close(); ?>
                 <br>
                 <br>
      </div>


    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
