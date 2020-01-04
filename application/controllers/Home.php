<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {



	public function index(){
		$kata = 'ahmad';
		$var_encode = $this->encrypt->encode($kata);
		$var_decode = $this->encrypt->decode($var_encode);
		$data['judul'] = 'Home';

		$data['isi'] = 'content_pengunjung/v_home';
		$this->load->view('layout/wrapper', $data);
	}
	
	
}
