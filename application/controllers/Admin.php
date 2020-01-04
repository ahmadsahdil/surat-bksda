<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_admin');
	}

	function index(){
$this->check_login->check();

		$a['surat_masuk']	= $this->model_admin->tampil_surat_masuk()->num_rows(); 
		$a['surat_keluar']	= $this->model_admin->tampil_surat_keluar()->num_rows();
		$a['user']	= $this->model_admin->tampil_user()->num_rows();
		$a['page']	= "home";
		$a['title']	= "Admin";
		
		$this->load->view('admin/index', $a);
	}	


	function lihat($lihat){
		$this->check_login->check();
		$file=site_url('assets/upload/surat_masuk/'.$lihat);
		$filename=$lihat;
		header('Content-type: application/pdf');
		header('Content-Disposition: inline; filename="'.$filename.'"');
		header('Content-Transfer-Encoding: binary');
		header('Accept-Ranges: bytes');
		@readfile($file);
		
	}
	function surat_masuk(){
		$this->check_login->check();
		$a['data']	= $this->model_admin->tampil_surat_masuk()->result_object();
		$a['page']	= "surat_masuk/surat_masuk";
			$a['title'] = "Surat Masuk";
		$this->load->view('admin/index', $a);
	}

	function tambah_surat_masuk(){
		$this->check_login->check();
		$a['page']	= "surat_masuk/tambah_surat_masuk";
		$a['title'] = "Tambah Surat Masuk";
		
		$this->load->view('admin/index', $a);
	}

	function insert_surat_masuk(){
		$this->check_login->check();
		        $config['upload_path']          = './assets/upload/surat_masuk/';
                $config['allowed_types']        = 'application/pdf|pdf';
                $config['max_size']             = 20480;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('scan'))
                {

                           $error = array('error' => $this->upload->display_errors());
		
	
                }
                else
                {
                        $data = array('uploads' => $this->upload->data());
                    $i=$this->input;
					$object = array(
			  	     		 'nomorMasuk' =>$i->post('nomasuk'),
					 		 'perihal' =>$i->post('perihal'),
				  			'tanggal_surat' =>$i->post('tanggalsurat'),
				  			'tanggal_masuk' =>$i->post('tanggalmasuk'),
				  			'asal' =>$i->post('asal'),
				  			'scan' => $data['uploads']['file_name']
					  );
		$this->db->insert('surat_masuk', $object);
		redirect('admin/surat_masuk','refresh');
                }
}
	

	function edit_surat_masuk($id){

		 $idreplace = strtr($id,array('.' => '+', '-' => '=', '~' => '/'));
		  $decodeid = $this->encrypt->decode($idreplace);
		$this->check_login->check();
		$a['editdata']	= $this->db->get_where('surat_masuk',array('idMasuk'=>$decodeid))->result_object();		
		$a['page']	= "surat_masuk/edit_surat_masuk";
		$a['title']="Edit Surat Masuk";
		
		$this->load->view('admin/index', $a);
	}

		function update_surat_masuk(){
			$this->check_login->check();
			$id=$this->input->post('id');
			$suratmasuk=$this->model_admin->detailmasuk($id);
				$config['upload_path']          = './assets/upload/surat_masuk/';
                $config['allowed_types']        = 'application/pdf|pdf';
                $config['max_size']             = 20480;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('scan') )
                {
                        $error = array('error' => $this->upload->display_errors());

                      
                }else{
                        $data = array('uploads' => $this->upload->data());
                        // $data1 = array('uploads1' => $this->upload->data(1));
                        	
                        if($suratmasuk->scan != "" ){
							unlink('./assets/upload/surat_masuk/'.$suratmasuk->scan);
                       }
                   		$i=$this->input;
						$object = array(
			  	     		 'nomorMasuk' =>$i->post('nomasuk'),
					 		 'perihal' =>$i->post('perihal'),
				  			'tanggal_surat' =>$i->post('tanggalsurat'),
				  			'tanggal_masuk' =>$i->post('tanggalmasuk'),
				  			'asal' =>$i->post('asal'),
				  		'scan' => $data['uploads']['file_name']
				  		
					  );
		$this->db->where('idMasuk', $id);
		$this->db->update('surat_masuk', $object); 
		redirect('admin/surat_masuk/surat_masuk','refresh');
 }

 if(empty($FILES['scan']['name'])){

                   		$i=$this->input;
						$object = array(
							
			  	     		 'nomorMasuk' =>$i->post('nomasuk'),
					 		 'perihal' =>$i->post('perihal'),
				  			'tanggal_surat' =>$i->post('tanggalsurat'),
				  			'tanggal_masuk' =>$i->post('tanggalmasuk'),
				  			'asal' =>$i->post('asal')
				  	
					  );
		$this->db->where('idMasuk', $id);
		$this->db->update('surat_masuk', $object); 
		redirect('admin/surat_masuk/surat_masuk','refresh');
	}

	}
	function update_disposisi(){
			$this->check_login->check();
			$id=$this->input->post('id_masuk');
			$suratmasuk=$this->model_admin->detailmasuk($id);
				$config['upload_path']          = './assets/upload/surat_masuk/disposisi/';
                $config['allowed_types']        = 'application/pdf|pdf';
                $config['max_size']             = 20480;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('scan_disposisi') )
                {
                        $error = array('error' => $this->upload->display_errors());

                      
                }else{
                          $data = array('uploads' => $this->upload->data());
                        if($suratmasuk->scan_disposisi != "" ){
							unlink('./assets/upload/surat_masuk/disposisi/'.$suratmasuk->scan_disposisi);
                       }
						$object = array(

				  		'scan_disposisi' => $data['uploads']['file_name']
					  );
		$this->db->where('idMasuk', $id);
		$this->db->update('surat_masuk', $object); 
		redirect('admin/surat_masuk/surat_masuk','refresh');
 }
 if(empty($FILES['scan_disposisi']['name'])){

		redirect('admin/surat_masuk/surat_masuk','refresh');
	}
	}
	function hapus_surat_masuk($id){
		$this->check_login->check();
			$suratmasuk=$this->model_admin->detailmasuk($id);
			unlink('./assets/upload/surat_masuk/'.$suratmasuk->scan);
			if ($suratmasuk->scan_disposisi!="") {
				unlink('./assets/upload/surat_masuk/disposisi/'.$suratmasuk->scan_disposisi);
			}
			
		$this->model_admin->hapus_surat_masuk($id);
		redirect('admin/surat_masuk/surat_masuk','refresh');
	}


	/* Fungsi Surat Keluar */
	function surat_keluar(){
		$this->check_login->check();
		$a['data']	= $this->model_admin->tampil_surat_keluar()->result_object();
		$a['page']	= "surat_keluar/surat_keluar";
		$a['title']	= "Surat Keluar";

		
		$this->load->view('admin/index', $a);
	}

	function tambah_surat_keluar(){
		$this->check_login->check();
		$a['page']	= "surat_keluar/tambah_surat_keluar";
		$a['title']="Tambah Surat Keluar";
		
		$this->load->view('admin/index', $a);
	}

	function insert_surat_keluar(){
		$this->check_login->check();
 				$config['upload_path'] = './assets/upload/surat_keluar/';
                $config['allowed_types']        = 'application/pdf|pdf';
                $config['max_size']             = 20480;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('scan'))
                {
                        $error = array('error' => $this->upload->display_errors());

                       
                }
                else
                {
        $data = array('uploads' => $this->upload->data());
		$nokeluar = $this->input->post('nokeluar');
		$perihal = $this->input->post('perihal');
		$tglsurat = $this->input->post('tanggalsurat');
		$tglkeluar = $this->input->post('tanggalkeluar');
		$kepada = $this->input->post('kepada');
		$penanggung_jawab = $this->input->post('penanggung_jawab');
		$object = array(
				'nomorKeluar' => $nokeluar,
				'perihal' => $perihal,
				'tanggal_surat' => $tglsurat,
				'tanggal_keluar' => $tglkeluar,
				'kepada' => $kepada,
				'penanggung_jawab' => $penanggung_jawab,
				'scan' => $data['uploads']['file_name']
					  );
	$this->db->insert('surat_keluar', $object);

		redirect('admin/surat_keluar/surat_keluar','refresh');
                }	
	}

	function edit_surat_keluar($id){
		$this->check_login->check();
		$a['editdata']	= $this->db->get_where('surat_keluar',array('idKeluar'=>$id))->result_object();		
		$a['page']	= "surat_keluar/edit_surat_keluar";
		$a['title']	= "Edit Surat Keluar";
		
		$this->load->view('admin/index', $a);
	}

	function update_surat_keluar(){
		$this->check_login->check();
		$id=$this->input->post('id');
			$suratkeluar=$this->model_admin->detailkeluar($id);
			// if(!empty($FILES['scan']['name'])){
				$config['upload_path']          = './assets/upload/surat_keluar/';
                $config['allowed_types']        = 'application/pdf|pdf';
                $config['max_size']             = 20480;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('scan'))
                {
                        $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                        $data = array('uploads' => $this->upload->data());
                        if($suratkeluar->scan != ""){
							unlink('./assets/upload/surat_keluar/'.$suratkeluar->scan);
                       }
                   		$i=$this->input;
						$object = array(
			  	     		 'nomorKeluar' =>$i->post('nokeluar'),
					 		 'perihal' =>$i->post('perihal'),
				  			'tanggal_surat' =>$i->post('tanggalsurat'),
				  			'tanggal_keluar' =>$i->post('tanggalkeluar'),
				  			'kepada' =>$i->post('kepada'),
				  			'penanggung_jawab' =>$i->post('penanggung_jawab'),
				  		'scan' => $data['uploads']['file_name']
					  );
		$this->db->where('idKeluar', $id);
		$this->db->update('surat_keluar', $object); 

							
		redirect('admin/surat_keluar/surat_keluar','refresh');
	}
// }else{
// }
	 if(empty($FILES['scan']['name'])){

                   		$i=$this->input;
						$object = array(
			  	     		 'nomorKeluar' =>$i->post('nokeluar'),
					 		 'perihal' =>$i->post('perihal'),
				  			'tanggal_surat' =>$i->post('tanggalsurat'),
				  			'tanggal_keluar' =>$i->post('tanggalkeluar'),
				  			'kepada' =>$i->post('kepada'),
				  			'penanggung_jawab' =>$i->post('penanggung_jawab'),
				  	
					  );
		$this->db->where('idKeluar', $id);
		$this->db->update('surat_keluar', $object); 
		redirect('admin/surat_keluar/surat_keluar','refresh');
	}
	
	}


	function hapus_surat_keluar($id){
		$this->check_login->check();
		$suratkeluar=$this->model_admin->detailkeluar($id);
			unlink('./assets/upload/surat_keluar/'.$suratkeluar->scan);
		$this->model_admin->hapus_surat_keluar($id);
		redirect('admin/surat_keluar/surat_keluar','refresh');
	}	

	/* Fungsi Manage User */
	function manage_user(){
		$this->check_login->check();
		$a['data']	= $this->model_admin->tampil_user()->result_object();
		$a['page']	= "user/manage_user";
		$a['title']="User";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_user(){
		$this->check_login->check();
		$a['page']	= "user/tambah_user";
		$a['title']="Tambah User";
		
		$this->load->view('admin/index', $a);
	}

	function insert_user(){
		$this->check_login->check();
		$namauser 	  = $this->input->post('namauser');
		$alamat 	  = $this->input->post('alamat');
		$nohp 	  = $this->input->post('nohp');
		$username 	  = $this->input->post('username');
		$password = $this->input->post('password');
		$role = $this->input->post('role');


		$object = array(
			'namaUser' => $namauser,
			'alamat' => $alamat,
			'noHp' => $nohp,
			'username' => $username,
			'password' => sha1($password),
			'role' => $role
				
			);
		$this->model_admin->insert_user($object);

		redirect('admin/manage_user','refresh');
	}

	function edit_user($id){
		$this->check_login->check();
		$a['editdata']	= $this->model_admin->edit_user($id)->result_object();		
		$a['page']	= "user/edit_user";
		$a['title']="Edit User";
		
		$this->load->view('admin/index', $a);
	}

	function update_user(){
		$this->check_login->check();
		$id 	  = $this->input->post('id');
		$namauser 	  = $this->input->post('namauser');
		$alamat 	  = $this->input->post('alamat');
		$nohp 	  = $this->input->post('nohp');
		$username 	  = $this->input->post('username');
		$password = $this->input->post('password');
		$pass_old = $this->input->post('pass_old');
		$Role = $this->input->post('role');


		if (empty($password)) {
			$object = array(
				'namaUser' => $namauser,
			'alamat' => $alamat,
			'noHp' => $nohp,
			'username' => $username,
			'password' => $pass_old,
			'role' => $Role
			);
		}else{
			$object = array(
				'namaUser' => $namauser,
			'alamat' => $alamat,
			'noHp' => $nohp,
			'username' => $username,
			'password' => sha1($password),
			'role' => $Role
			);
		}

		
		$this->model_admin->update_user($id, $object);

		redirect('admin/manage_user','refresh');
	}

	function hapus_user($id){
		$this->check_login->check();
		$this->model_admin->hapus_user($id);
		redirect('admin/manage_user','refresh');
	}	


}

