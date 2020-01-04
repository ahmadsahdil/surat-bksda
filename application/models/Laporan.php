<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Model {

	public function tampil_surat_masuk($tanggal)
	{
		$this->db->select('*');
		$this->db->from('surat_masuk');
		$this->db->where(array(
						 'tanggal_surat'=>($tanggal)));
		$this->db->order_by('idMasuk');
		$query=$this->db->get();
		return $query->result();
	}
	public function surat_masuk()
	{
		$this->db->select('*');
		$this->db->from('surat_masuk');
		$this->db->order_by('idMasuk');
		$query=$this->db->get();
		return $query->result();
	}
	public function tampil_surat_keluar($tanggal)
	{
		$this->db->select('*');
		$this->db->from('surat_keluar');
		$this->db->where(array(
						 'tanggal_surat'=>($tanggal)));
		$this->db->order_by('idKeluar');
		$query=$this->db->get();
		return $query->result();
	}
	public function surat_keluar()
	{
		$this->db->select('*');
		$this->db->from('surat_keluar');
		$this->db->order_by('idKeluar');
		$query=$this->db->get();
		return $query->result();
	}

}