<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BroadcastModel extends CI_Model {
	
	public function GetAll(){
		$this->db->select('*');
		$this->db->from('member_elpiji');
		$data=$this->db->get();
		return $data->result_array();
	}

	function getphone(){
		$query=$this->db->query("select no_tlp from member_elpiji where jenis='pengecer'");
		return $query->result_array();
	}
}
