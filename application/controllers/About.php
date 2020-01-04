<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('model_admin');
	}
	public function index()
	{
			$a['user']	= $this->model_admin->tampil_user()->num_rows();
		$a['page']	= "about";
		$a['title']	= "About";
		
		$this->load->view('admin/index', $a);
}
}