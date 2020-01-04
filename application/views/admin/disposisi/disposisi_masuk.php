<?php
//============================================================+
// File name   : example_005.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 005 for TCPDF class
//               Multicell
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Multicell
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
// require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('BKSDA');
$pdf->SetTitle('Laporan Disposisi Masuk');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 10);

// add a page
$pdf->AddPage();

// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);

// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);

// set color for background
$pdf->SetFillColor(255, 255, 127);

// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)

$title= <<<EOD
<h3>Disposisi Masuk</h3>
EOD;
$pdf->WriteHTMLCell(0,0,'','',$title,0,1,0,true,'C',true);
$table='<table style="border:1px solid #000;padding:6px;width:100%; font-size:11px;" >';
$table.='<tr >
      <th rowspan="2" style="border:1px solid #000;width:24%; text-align:center" >LEMBAR PENERUS <br> DISPOSISI </th>
      <th rowspan="2" style="border:1px solid #000;width:52%;text-align:center" >BALAI KONSERVASI SUMBER DAYA ALAM <br> NUSA TENGGARA BARAT </th>
      <th style="border:1px solid #000;width:24%;text-align:left" >Tgl &nbsp;&nbsp; &nbsp; &nbsp;: '.date('d M Y',strtotime($data->tanggal_masuk)). ' </th>
        
      </tr>
      <tr >
      <th style="border:1px solid #000;width:24%;text-align:left" >Agro &nbsp;&nbsp;  : </th>
        
      </tr>
      <tr>
        <td style="border:1px solid #000;width:24%; text-align:center" >Sifat</td>
        <td style="border:1px solid #000;width:52%; text-align:center" >Klasifikasi </td>
        <td style="border:1px solid #000;width:24%; text-align:left" >Selesai :</td>
      </tr>
			';
$table.=	' <tr>
        <td style="border:1px solid #000;width:8%; text-align:center" >Biasa</td>
        <td style="border:1px solid #000;width:8%; text-align:center">Penting</td>
        <td style="border:1px solid #000;width:8%; text-align:center">Rahasia</td>
        <td style="border:1px solid #000;width:17%; text-align:center">Segera</td>
        <td style="border:1px solid #000;width:18%; text-align:center">Amat Segera </td>
        <td style="border:1px solid #000;width:17%; text-align:center">Kilat</td>
        <td style="border:1px solid #000;width:24%; text-align:left">Tgl &nbsp;&nbsp; &nbsp; &nbsp;: </td>
      </tr>
      ';
      $table.='

<tr>
          <td  style="border:1px solid #000;width:16%; text-align:center" >Asal Surat</td>
        <td  style="border:1px solid #000;width:84%; ">'.$data->asal. '</td>
      </tr>
      ';
          $table.='

<tr>
          <td  style="border:1px solid #000;width:16%; text-align:center" >No Surat</td>
        <td  style="border:1px solid #000;width:60%; \">'.$data->nomorMasuk. '</td>
        <td  style="border:1px solid #000;width:24%;text-align:left ">Tgl. Surat  '.date('d M Y',strtotime($data->tanggal_surat)). '</td>
      </tr>

      <tr colspan="3">
      <td>
      '.$data->perihal. '
      <br>
      <br>
      <br>
      <br>
      </td>
      </tr>
      ';

		 $table.='

<tr>
          <td  style="border:1px solid #000;width:40%; text-align:center" >DITERUSKAN KEPADA</td>
        <td  style="border:1px solid #000;width:60%; text-align:center">ISI DISPOSISI</td>
        
      </tr>

      ';

		 $table.='

<tr>
          <td  style="border:1px solid #000;width:40%;" >
          	
            <ul > 
                <li style="list-style-type:square"> Kepala Sub bagian Tata Usaha</li>
                <li style="list-style-type:square">Penelaah dan Penyusunan Rencana Prog.</li>
                <li style="list-style-type:square">Penyaji evaluasi dan pelaporan</li>
                <li style="list-style-type:square">Penata Kerjasama dan Humas</li>
                <li style="list-style-type:square">Penata BWA dan Kader Konservasi</li>
                <li style="list-style-type:square">Penata Bina Konservasi & Perlindungan</li>
                <li style="list-style-type:square">Polisi Kehutanan Mobile</li>
                <li style="list-style-type:square">........................</li>
                <li style="list-style-type:square">........................</li>
                </ul> 

          </td>
          <td  style="border:1px solid #000;width:30%; text-align:center" >
            
            <ul> 
                <li style="list-style-type:square">Untuk diselesikan/proses</li><br>
                <li style="list-style-type:square">Buat saran/pertimbangan</li><br>
                <li style="list-style-type:square">Buat jawaban/tanggapan</li><br>
                <li style="list-style-type:square">Untuk dihadari</li><br>
                <li style="list-style-type:square">Untuk diketahui</li><br>
                <li style="list-style-type:square">Siapkan Bahan</li><br>
               
                </ul> 

          </td>
          <td  style="border:1px solid #000;width:30%; text-align:center" >
            
            <ul> 
                <li style="list-style-type:square">Buat makalah</li><br>
                <li style="list-style-type:square">Berkas digabung</li><br>
                <li style="list-style-type:square">Untuk didata</li><br>
                <li style="list-style-type:square">Edarkan</li><br>
                <li style="list-style-type:square">Diperbanyak...kali</li><br>
                
                </ul> 

          </td>
       
         </tr>
     
      ';
      $table.='

       <tr style="border:1px solid #000;width:100%;"  >
      <td style="width:100%">
<div style="text-align:left">

      Catatan: 
      </div>
      <br>
      <br>
      <br>
      <br>
      <div style="text-align:right">
    
      &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; Kepala Balai,
  </div>
      </td>
      </tr>
      <hr>
  <tr style="border:1px solid #000;width:100%;"  >
      <td style="width:30%;">
      <div style="text-align:left">
      Catatan:
    
      <ul> 
                <li style="list-style-type:square" class="radio-inline">Penata Usaha Umum</li>
                <li style="list-style-type:square" class="radio-inline">Penata Usaha Kepegawaian</li>
             
                
                </ul> 
      </div>
      <br>
      <br>
      <br>
      <br>
   
      </td>
       <td style="width:30%;">
      <div style="text-align:left">
     
    
      <ul> 
                <li style="list-style-type:square;list-style: inline;" >Penata Usaha keuangan</li>
                <li style="list-style-type:square;list-style: inline;" class="radio-inline">Penata Usaha PRT</li>
               
                
                </ul> 
      </div>

      <br>
      <br>
      <br>
      <br>
   
      </td>
      <td style="width:40%;">
      <div style="text-align:left">
     
    
      <ul> 
                <li style="list-style-type:square;list-style: inline;" >Operator Radio Kam</li>
                <li style="list-style-type:square;list-style: inline;" class="radio-inline">............................</li>
               
                
                </ul> 
      </div>

      <br>
      <br>
      <br>
      <br>
    <div style="text-align:right">
      &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; Kasubag Tata Usaha,
  </div>
      </td>


      </tr>

      ';
    
$table.='</table>';



$pdf->WriteHTMLCell(0,0,'','',$table,0,1,0,true,'C',true);
// move pointer to last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
ob_clean();
$pdf->Output('Disposisi Masuk.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
