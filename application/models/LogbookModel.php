<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogbookModel extends CI_Model {
	
	public function GetAll($day){
		$query=$this->db->query("SELECT distribusi2.nama_pembeli, distribusi2.jenis_pembeli, distribusi2.alamat_pembeli,
		 						 distribusi2.keterangan, distribusi2.jumlah_gas FROM distribusi2 WHERE distribusi2.tanggal IN
		 						 (SELECT distribusi2.tanggal FROM distribusi2 WHERE month(distribusi2.tanggal) = '$month' AND 
		 						  day(distribusi2.tanggal) = '$day')");
		return $query->result_array();
	}

	public function getbulan($month){
		$sql = $this->db->query("
			   	SELECT distribusi2.tanggal FROM distribusi2 where month(tanggal)='$month'
				UNION
				SELECT stock_elpiji.tanggal FROM stock_elpiji where month(tanggal)='$month'
			   ");
		return $sql->result_array();
	}

	public function getData($nama_pembeli, $month, $day) {
		$query=$this->db->query("SELECT * FROM distribusi2 WHERE nama_pembeli = '$nama_pembeli' AND MONTH(tanggal) = '$month' AND DAY(tanggal) = '$day'");

		$result = $query->result_array();

		return (count($result) > 0 ? $result[0]['jumlah_gas'] : 0);
	}


	public function getTotal($nama_pembeli, $month, $day) {
		$query=$this->db->query("SELECT * FROM stock_elpiji WHERE id_member = '$id_member' AND MONTH(tanggal) = '$month' AND DAY(tanggal) = '$day'");

		$result = $query->result_array();

		return (count($result) > 0 ? $result[0]['stock_keluar'] : 0);
	}
	
}