<?php
header("Cache-Control: no-chace, must-revalidate");
header("Pragma: no-chace"); 
header('Content-type: application/x-msexcel');
header('Content-type: application/octet-stream');
header('Content-Disposition: attachment; filename=Surat_masuk.xls');
 ?>
<style type="text/css">
table,th,td{
	border-collapse: collapse;
	padding: 15px;
	margin: 10px;
	color: #000;
}
</style>

<div style="text-align: center;">
<span style="margin-left: 20px;font-size: 20px"><b>Data Surat Masuk</b></span>
	
</div>
<br>
  <table border="1" >
                    <thead>
                      <tr style="background-color:blue;">
                        <th style="border:1px solid #000;width:30px; color: white">No</th>
                        <th style="border:1px solid #000;width:250;color: white">No Masuk</th> 
                        <th style="border:1px solid #000;width:250;color: white">Perihal</th>
                        <th style="border:1px solid #000;width:120px;color: white">Tanggal Surat</th>
                        <th style="border:1px solid #000;width:120px;color: white">Tanggal Masuk</th>
                       
                        <th style="border:1px solid #000;width:150px;color: white">Asal</th>
                        <th style="border:1px solid #000;width:250;color: white">File Surat</th>
                        <th style="border:1px solid #000;width:250;color: white">Scan Disposisi</th>
                       </tr>
                    </thead>
                    <tbody>
                      	<?php  
                        $no = 1;
                        foreach ($data as $lihat):
                        ?>
                    	<tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $lihat->nomorMasuk ?></td>
                        <td>
                          <?php echo  $lihat->perihal ?>
                        </td>
                          <td><?php echo date('d M Y',strtotime($lihat->tanggal_surat)) ?></td>
                           <td><?php echo date('d M Y',strtotime($lihat->tanggal_masuk)) ?></td>
                          <td><?php echo $lihat->asal ?></td>
                          <td><?php echo $lihat->scan ?></td>
                          <td><?php echo $lihat->scan_disposisi ?></td>
                        
                       
                                  		
                    	</tr>
                    	<?php endforeach; ?>
                    </tbody>
                  </table>