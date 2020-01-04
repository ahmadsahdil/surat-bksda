<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_admin extends CI_Model {

	
	public function tampil_surat_masuk()
	{
		return $this->db->get('surat_masuk');
	}

	public function tampil_surat_keluar()
	{
		return $this->db->get('surat_keluar');
	}
/*
	public function edit_jenis($id)
	{
		return $this->db->get_where('surat_masuk',array('idMasuk'=>$id));
	}
*/
	public function hapus_surat_masuk($id)
	{
		return $this->db->delete('surat_masuk', array('idMasuk' => $id));
	}

	public function hapus_surat_keluar($id)
	{
		return $this->db->delete('surat_keluar', array('idKeluar' => $id));
	}

	public function cek_user($user, $pass)
	{
		$array = array('username' => $user, 'password' => $pass);

		$query = $this->db->where($array);

		$query = $this->db->get('user');

		return $query;
	}

	public function tampil_user()
	{
		return $this->db->get('user');
	}

	public function insert_user($object)
	{
		$this->db->insert('user', $object);
	}

	public function edit_user($id)
	{
		return $this->db->get_where('user',array('idUser'=>$id));
	}

	public function update_user($id, $object)
	{
		$this->db->where('idUser', $id);
		$this->db->update('user', $object); 
	}

	public function hapus_user($id)
	{
		return $this->db->delete('user', array('idUser' => $id));
	}

	public function detail($IdUser)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('IdUser',$IdUser);
		$this->db->order_by('IdUser');
		$query=$this->db->get();
		return $query->row();
	}
	public function detailmasuk($id)
	{
		$this->db->select('*');
		$this->db->from('surat_masuk');
		$this->db->where('idMasuk',$id);
		$this->db->order_by('idMasuk');
		$query=$this->db->get();
		return $query->row();
	}
	public function detailkeluar($id)
	{
		$this->db->select('*');
		$this->db->from('surat_keluar');
		$this->db->where('idKeluar',$id);
		$this->db->order_by('idKeluar');
		$query=$this->db->get();
		return $query->row();
	}
}
