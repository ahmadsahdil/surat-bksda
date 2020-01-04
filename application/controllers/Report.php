<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

public function __construct(){
	parent::__construct();
	$this->load->model('model_admin');
	$this->load->model('Laporan');
}
	
	public function excel_surat_masuk()
	{
				$tanggal=$this->input->post('tanggal');

		$data=$this->Laporan->tampil_surat_masuk($tanggal);
	$this->load->view('admin/laporan/excel_surat_masuk',['data'=>$data]);
	
	}
	public function surat_masuk()
	{
		$data=$this->Laporan->surat_masuk();
	$this->load->view('admin/laporan/excel_surat_masuk',['data'=>$data]);
	
	}
	public function excel_surat_keluar()
	{
				$tanggal=$this->input->post('tanggal');

		$data=$this->Laporan->tampil_surat_keluar($tanggal);
	$this->load->view('admin/laporan/excel_surat_keluar',['data'=>$data]);
	
	}
	public function surat_keluar()
	{
				$tanggal=$this->input->post('tanggal');

		$data=$this->Laporan->surat_keluar();
	$this->load->view('admin/laporan/excel_surat_keluar',['data'=>$data]);
	
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */