<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelPangkalan extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function readPangkalan()
	{
		$query=$this->db->query("SELECT * FROM member_elpiji WHERE jenis = 'pangkalan' ");;
		return $query->result_array();
	}

	public function lastPangkalan()
	{
		$query=$this->db->query("select * from member_elpiji order by id_member DESC limit 1");
		return $query->result_array();
	}

	public function addPangkalan($raw)
	{
		$sql="INSERT IGNORE INTO member_elpiji (no_reg,
											nama_member, 
											nama_pangkalan, 
											alamat,
											no_ktp,
											no_tlp
											-- id_login,
											-- paraf_pembeli,
											) VALUES(?,?,?,?,?,?);";
		$this->db->query($sql, array(
								$raw['no_reg_in'],
								$raw['nama_member_in'],
								$raw['nama_pangkalan_in'],
								$raw['alamat_in'],
								$raw['no_ktp_in'],
								$raw['no_tlp_in']
								// $raw['id_login_in'],
								// // $raw['paraf_pembeli_in'],
								));
		return $this->db->affected_rows();
	}

	public function readdata_indexPangkalan($index)
	{
		$sql='SELECT * FROM member_elpiji WHERE id_member = ? LIMIT 1';
		$query=$this->db->query($sql, $index);
		return $query->row();
	}


	public function editPangkalan($raw)
	{
		$sql="UPDATE member_elpiji SET 
				no_reg = ?, 
				nama_member = ?, 
				nama_pangkalan = ?, 
				alamat = ?, 
				no_ktp = ?, 
				no_tlp = ? 
				
				WHERE id_member = ?;";
		$this->db->query($sql, array(
			$raw['no_reg_up'],
			$raw['nama_member_up'],
			$raw['nama_pangkalan_up'],
			$raw['alamat_up'],
			$raw['no_ktp_up'],
			$raw['no_tlp_up'],
			// $raw['id_login_up'],
			// $raw['paraf_pembeli_up'],
			// $raw['jenis_up'],
			$raw['index']));
		return $this->db->affected_rows();
	}

	public function DeleteData($id){
	  $this->db->where('id_member',$id);
	 $this->db->delete('member_elpiji');
	
	}

	public function dropdown_level() {
	        // Mendapatkan data ID dan nama kategori saja
	        $this->db->select ('
	            login.level
	        ');
	        // Urut abjad
	        $this->db->order_by('level');
	        $result = $this->db->get('login');
	        
	        // bikin array
	        // please select berikut ini merupakan tambahan saja agar saat pertama
	        // diload akan ditampilkan text please select.
	        $dropdown[''] = 'Please Select';
	        if ($result->num_rows() > 0) {
	            
	            foreach ($result->result_array() as $row) {
	                // Buat array berisi 'value' (id kategori) dan 'nama' (nama kategori)
	                $dropdown[$row['level']] = $row['level'];
	            }
	        }
	        return $dropdown;
	    }
	
	
}

?>