<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disposisi extends CI_Controller {

public function __construct(){
	parent::__construct();
	$this->load->library('pdf_report');
	// $this->load->model('model_admin');
	$this->load->model('model_disposisi');
}
	public function tampil_disposisi_masuk($id)
	{
		$data=$this->model_disposisi->tampil_disposisi_masuk($id);
	$this->load->view('admin/disposisi/disposisi_masuk',['data'=>$data]);
	
	}
	public function tampil_disposisi_keluar($id)
	{
		$data=$this->model_disposisi->tampil_disposisi_keluar($id);
	$this->load->view('admin/disposisi/disposisi_keluar',['data'=>$data]);
	
	}
	

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */