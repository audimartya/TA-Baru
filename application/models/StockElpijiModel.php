<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StockElpijiModel extends CI_Model {
	
	public function GetAll(){
		$this->db->select('*');
		$this->db->from('stock_elpiji');
		$data=$this->db->get();
		return $data->result_array();
	}


	public function InsertData($data){
		$this->db->insert('stock_elpiji', $data);
	}

	public function DeleteData($id){
	  $this->db->where('id_member',$id);
	 $this->db->delete('stock_elpiji');
	
	}

	public function UpdateData($id, $data){
		$this->db->where('id_member', $id);
		$this->db->update('stock_elpiji', $data);
	}

	public function getsingle($id){
		$this->db->where('id_member', $id);
		return $this->db->get('stock_elpiji')->result_array();
	}
	
	public function getdatang(){
		$datang=$this->db->query("select jumlah_gas FROM distribusi1 WHERE tanggal = date(now())");
		return $datang->result_array();
	}

	public function getkeluar(){
		$keluar = $this->db->query("select sum(jumlah_gas) as jumlah_gas from distribusi2 where tanggal = date(now())");
		return $keluar->result_array();
	}

	public function getsisa(){
		$sisa=$this->db->query("SELECT (stock_elpiji.stock_datang - stock_elpiji.stock_keluar) as hasil FROM stock_elpiji WHERE tanggal = date(now() - INTERVAL 1 day)");
		return $sisa->result_array();
	}

	// public function gettotal(){
	// 	$total=$this->db->query("select (sum(stock_datang - stock_keluar)) from id_kirim2");
	// 	return $keluar->result_array();
	// }

}