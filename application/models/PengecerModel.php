<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengecerModel extends CI_Model {
	
	public function GetAll(){
		$this->db->from('member_elpiji');
		$data=$this->db->query("SELECT * FROM member_elpiji WHERE jenis = 'pengecer' ");
		return $data->result_array();
	} 

	public function InsertData($data){
		$this->db->insert('member_elpiji', $data);
	}

	public function get_preview($id)
    {
        $query = $this->db->get_where('member_elpiji', array('id_member' => $id));
        return $query->row();
    } 

	public function DeleteData($id){
	  $this->db->where('id_member',$id);
	 $this->db->delete('member_elpiji');
	
	}

	public function getedit($where, $tableNama){
			return $this->db->get($tableNama, $where);}

	public function getsingle($id){
		// $this->db->where('id_member', $id);
		// return $this->db->get('member_elpiji')->result_array();
		// return $this->db->get('member_elpiji')->row();
		$query = $this->db->get_where('member_elpiji', array('id_member' => $id));
		return $query->row();
	}

	public function UpdateData($id, $post_image){
		// $where = array('id_member' => $id);
		// $res = $this->db->update('member_elpiji', $data, $where);
		// return $res;
		$data = array(
	                       	'no_reg' => $this->input->post('no_reg'),
	                    	'nama_member' => $this->input->post('nama_member'),
	                    	'nama_pangkalan' => $this->input->post('nama_pangkalan'),
	                    	'alamat' => $this->input->post('alamat'),
	                    	'no_ktp' => $this->input->post('no_ktp'),
	                    	'no_tlp' => $this->input->post('no_tlp'),
	                    	// 'id_login' => $this->input->post('id_login'),
	                    	// 'paraf_pembeli' => $this->upload->data('file_name'),
	                    	'paraf_pembeli' => $post_image,
	                    	'jenis' => $this->input->post('jenis')
	                    );
	            $where = array('id_member' => $id);
	            $res = $this->db->update('member_elpiji', $data, $where);
	            return $res;
	}

	public function getNama()
	{
		$query = $this->db->get('member_elpiji');
		return $query;
	}
	}
?>