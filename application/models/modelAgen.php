<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelAgen extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//Model for Barang
	public function readAgen()
	{
		$query=$this->db->query("SELECT * FROM member_elpiji WHERE jenis = 'agen' ");
		return $query->result_array();
	}

	// public function addbarang($aw)
	// {
	// 	$sql="INSERT IGNORE INTO tb_barang (nama_barang, harga_barang, stok) VALUES(?,?,?);";
	// 	$this->db->query($sql, array($raw['namaBarang'],$raw['hargaBarang'],$raw['stokBarang']));
	// 	return $this->db->affected_rows();
	// }

	public function addAgen($raw)
	{
		$sql="INSERT IGNORE INTO Agen (nama_agen, 
											email, 
											alamat,
											no_soldto,
											no_shipto,
											kota) VALUES(?,?,?,?,?,?);";
		$this->db->query($sql, array($raw['nama_agen_in'],
								$raw['email_in'],
								$raw['alamat_in'],
								$raw['no_soldto_in'],
								$raw['no_shipto_in'],
								$raw['kota_in']));
		return $this->db->affected_rows();
	}

	public function readdata_indexAgen($index)
	{
		$sql='SELECT * FROM Agen WHERE id = ? LIMIT 1';
		$query=$this->db->query($sql, $index);
		return $query->row();
	}

	public function editAgen($raw)
	{
		$sql="UPDATE agen SET nama_Agen = ?, 
				email = ?, 
				alamat = ?, 
				no_soldto = ?, 
				no_soshipto = ?, 
				kota = ? WHERE id = ?;";
		$this->db->query($sql, array($raw['nama_agen_up'],
			$raw['email_up'],
			$raw['alamat_up'],
			$raw['no_soldto_up'],
			$raw['no_shipto_up'],
			$raw['kota_up'],
			$raw['index']));
		return $this->db->affected_rows();
	}

	public function deleteAgen($raw)
	{
		$sql="DELETE FROM Agen WHERE id = ?;";
		$this->db->query($sql, $raw['index']);
		return $this->db->affected_rows();
	}
	//End for Barang

	//Model for User
	public function readpelanggan()
	{
		$query=$this->db->query("select * from tb_pelanggan");
		return $query->result_array();
	}

	// public function addpelanggan($aw)
	// {
	// 	$sql="INSERT IGNORE INTO tb_pelanggan (nama_barang, harga_barang, stok) VALUES(?,?,?);";
	// 	$this->db->query($sql, array($raw['namaBarang'],$raw['hargaBarang'],$raw['stokBarang']));
	// 	return $this->db->affected_rows();
	// }

	public function pelangganbaru($raw)
	{
		$sql="INSERT IGNORE INTO tb_pelanggan (nama_barang, harga_barang, stok) VALUES(?,?,?);";
		$this->db->query($sql, array($raw['nama_in'],$raw['harga_in'],$raw['stok_in']));
		return $this->db->affected_rows();
	}

	public function readdata_indexUser($index)
	{
		$sql='SELECT * FROM tb_pelanggan WHERE id_barang = ? LIMIT 1';
		$query=$this->db->query($sql, $index);
		return $query->row();
	}

	public function editpelanggan($raw)
	{
		$sql="UPDATE tb_pelanggan SET nama_barang = ?, harga_barang = ?, stok = ? WHERE id_barang = ?;";
		$this->db->query($sql, array($raw['nama_up'],$raw['harga_up'],$raw['stok_up'],$raw['index']));
		return $this->db->affected_rows();
	}

	public function deletepelanggan($raw)
	{
		$sql="DELETE FROM tb_pelanggan WHERE id_barang = ?;";
		$this->db->query($sql, $raw['index']);
		return $this->db->affected_rows();
	}
	// End for User

	// public function readnews()
	// {
	// 	$query=$this->db->query("select * from berita WHERE status = 'publish' ORDER BY idberita DESC");
	// 	return $query->result_array();
	// }

	// public function readnewsother($id)
	// {
	// 	$sql="SELECT * FROM berita b INNER JOIN pelanggan u ON b.UID = u.UID WHERE idberita != ? AND status = 'publish' ORDER BY idberita DESC LIMIT 3";
	// 	$query=$this->db->query($sql, $id);
	// 	return $query->result_array();
	// }

	// public function readnewscategory($index)
	// {
	// 	$sql='SELECT * FROM berita WHERE idkategori = ? AND status = "publish" ORDER BY idberita DESC';
	// 	$query=$this->db->query($sql, $index);
	// 	return $query->result_array();
	// }

	// public function readnewsdetail($id)
	// {
	// 	$sql='SELECT * FROM berita b INNER JOIN pelanggan u ON b.UID = u.UID WHERE idberita = ?';
	// 	$query=$this->db->query($sql, $id);
	// 	return $query->row();
	// }

	// public function getlast()
	// {
	// 	$last=$this->db->query("select id_barang from barang ORDER BY id_barang DESC LIMIT 1");
	// 	return $last->row();
	// }

	// public function barangbaru($raw)
	// {
	// 	$sql="INSERT IGNORE INTO barang (nama_barang, harga_barang, stok_barang) VALUES(?,?,?);";
	// 	$this->db->query($sql, array($raw['namabarangtomodel'],$raw['hargatomodel'],$raw['stoktomodel']));
	// 	return $this->db->affected_rows();
	// }

	// public function readdata_index($index)
	// {
	// 	$sql='SELECT * FROM barang WHERE id_barang = ? LIMIT 1';
	// 	$query=$this->db->query($sql, $index);
	// 	return $query->row();
	// }

	// public function delete($raw)
	// {
	// 	$sql="DELETE FROM barang WHERE id_barang = ?;";
	// 	$this->db->query($sql, $raw['index']);
	// 	return $this->db->affected_rows();
	// }

	// public function edit($raw)
	// {
	// 	$sql="UPDATE barang SET nama_barang = ?, harga_barang = ?, stok_barang = ? WHERE id_barang = ?;";
	// 	$this->db->query($sql, array($raw['namabaranged'],$raw['hargaed'],$raw['stoked'],$raw['index']));
	// 	return $this->db->affected_rows();
	// }
}

?>