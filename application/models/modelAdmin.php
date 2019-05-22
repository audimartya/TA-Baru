<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelAdmin extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//Model for Barang
	public function readLogin()
	{
		$query=$this->db->query("select * from login");
		return $query->result_array();
	}

	// public function addbarang($aw)
	// {
	// 	$sql="INSERT IGNORE INTO tb_barang (nama_barang, harga_barang, stok) VALUES(?,?,?);";
	// 	$this->db->query($sql, array($raw['namaBarang'],$raw['hargaBarang'],$raw['stokBarang']));
	// 	return $this->db->affected_rows();
	// }

	public function addLogin($raw)
	{
		$sql="INSERT IGNORE INTO Login (username, 
											password,
											level) VALUES(?,?,?);";
		$this->db->query($sql, array($raw['username_in'],
								$raw['password_in'],
								$raw['level_in']));
		return $this->db->affected_rows();
	}

	public function readdata_indexLogin($index)
	{
		$sql='SELECT * FROM login WHERE id_login = ? LIMIT 1';
		$query=$this->db->query($sql, $index);
		return $query->row();
	}

	public function editLogin($raw)
	{
		$sql="UPDATE login SET username = ?, 
				password = ?, 
				level = ?
				WHERE id_login = ?;";
		$this->db->query($sql, array($raw['username_up'],
			$raw['password_up'],
			$raw['level_up'],
			$raw['index']));
		return $this->db->affected_rows();
	}

	public function deleteLogin($raw)
	{
		$sql="DELETE FROM login WHERE id_login = ?;";
		$this->db->query($sql, $raw['index']);
		return $this->db->affected_rows();
	}
}

?>