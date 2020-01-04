<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_disposisi extends CI_Model {

	public function tampil_disposisi_masuk($id)
	{
			$this->db->select('*');
		$this->db->from('surat_masuk');
		$this->db->where('idMasuk',$id);
		$this->db->order_by('idMasuk');
		$query=$this->db->get();
		return $query->row();
	}
	public function tampil_disposisi_keluar($id)
	{
			$this->db->select('*');
		$this->db->from('surat_keluar');
		$this->db->where('idKeluar',$id);
		$this->db->order_by('idKeluar');
		$query=$this->db->get();
		return $query->row();
	}
	
}