<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReturnBarangModel extends CI_Model {
	
	public function GetAll(){
		$this->db->select('*');
		$this->db->from('pengembalian');
		$data=$this->db->get();
		return $data->result_array();
	} 

	public function excel() {
	 $this->db->select('*');
 	$this->db->from('pengembalian');
 	$excel = $this->db->get();
	 return $excel->result();
 	}

	public function InsertData($data){
		$this->db->insert('pengembalian', $data);
	}

	public function DeleteData($id){
	  $this->db->where('id_kembali',$id);
	 $this->db->delete('pengembalian');
	
	}

public function getedit($where, $tableNama){
			return $this->db->get($tableNama, $where);}

public function getsingle($id){
		$this->db->where('id_kembali', $id);
		return $this->db->get('pengembalian')->result_array();
	}

	public function UpdateData($id, $data){
		$this->db->where('id_kembali', $id);
		$this->db->update('pengembalian', $data);
	}

	public function getNama()
	{
		$query = $this->db->get('pengembalian');
		return $query;
	}

	public function dropdown_asal() {
			$jenis = "pangkalan"; 
	        // Mendapatkan data ID dan nama kategori saja
	        $this->db->select ('*');
	        // Urut abjad
	        $this->db->order_by('jenis');
	        //$this->db->where('jenis' => 'pangkalan');
	        //$result = $this->db->get('member_elpiji');
	        $result = $this->db->get_where('member_elpiji', array('jenis' => $jenis));
	        // bikin array
	        // please select berikut ini merupakan tambahan saja agar saat pertama
	        // diload akan ditampilkan text please select.
	        $dropdown[''] = 'Please Select';
	        if ($result->num_rows() > 0) {
	            
	            foreach ($result->result_array() as $row) {
	                // Buat array berisi 'value' (id kategori) dan 'nama' (nama kategori)
	                $dropdown[$row['nama_pangkalan']] = $row['nama_pangkalan'];
	            }
	        }
	        return $dropdown;
	    }
}
?>