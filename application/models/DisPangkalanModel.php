<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DisPangkalanModel extends CI_Model {
	
	public function GetAll(){
		$this->db->select('*');
		$this->db->from('distribusi2');
		$data = $this->db->get();

		return $data->result_array();
	} 

	public function InsertData($data){
		$this->db->insert('distribusi2', $data);
	}

	public function DeleteData($id){
	  $this->db->where('id_kirim2',$id);
	 $this->db->delete('distribusi2');
	
	}

public function getedit($where, $tableNama){
			return $this->db->get($tableNama, $where);}

public function getsingle($id){
		$this->db->where('id_kirim2', $id);
		return $this->db->get('distribusi2')->result_array();
	}



	public function UpdateData($id, $data){
		$this->db->where('id_kirim2', $id);
		$this->db->update('distribusi2', $data);
	}

	public function getNama()
	{
		$query = $this->db->get('distribusi2');
		return $query;
	}

	public function dropdown_tujuan() {
	        
	        $this->db->select('*');
			$this->db->from('member_elpiji');
			$this->db->where(array('jenis' => 'pengecer'));
			$result = $this->db->get();

	        $dropdown[''] = 'Pilih';
	        if ($result->num_rows() > 0) {
	        	
	            foreach ($result->result_array() as $row) {
	                // Buat array berisi 'value' (id kategori) dan 'nama' (nama kategori)
	                $dropdown[$row['id_member']] = $row['nama_member'];
	            }
	        }
	        return $dropdown;
	    }


	 public function asal(){
	 	 $this->db->select('*');
			$this->db->from('member_elpiji');
			$result = $this->db->get();
			$dropdown[''] = 'Pilih';
			 if ($result->num_rows() > 0) {
	            
	            foreach ($result->result_array() as $row) {
	                // Buat array berisi 'value' (id kategori) dan 'nama' (nama kategori)
	                $dropdown[$row['id_member']] = $row['nama_pangkalan'];
	            }
	        }
			 return $dropdown;
	 }
}
?>