<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelDistribusiPangkalan extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function readDistribusiPangkalan()
	{
		$query=$this->db->query("
			select distribusi1.id_kirim1, distribusi1.tanggal, distribusi1.jumlah_gas, member_elpiji.nama_pangkalan from distribusi1 join member_elpiji on member_elpiji.id_member = distribusi1.tujuan");
		return $query->result_array();
	}

	public function read_all(){
		$this->db->select ('*');
        $this->db->from('distribusi1');
        // $this->db->join('distribusi1','distribusi1.id_kirim1 = member_elpiji.id_member');
        // $query = $this->db->get();
        // return $query->result_array();
        // $query = $this->db->get(); 
        // if ($query->num_rows() >0){ 
        //     foreach ($query->result() as $data) {
        //         # code...
        //         $hasil[] = $data;
        //     }
        // return $hasil; 
        // }
	}

	public function lastDistribusiPangkalan()
	{
		$query=$this->db->query("select * from distribusi1 order by id_kirim1 DESC limit 1");
		return $query->result_array();
	}
	public function addDistribusiPangkalan($raw)
	{
		$sql="INSERT IGNORE INTO distribusi1 (
											tanggal, 
											jumlah_gas,
											tujuan) VALUES(?,?,?);";
		$this->db->query($sql, array(
								
								$raw['tanggal_in'],
								$raw['jumlah_gas_in'],
								$raw['tujuan_in']));
		return $this->db->affected_rows();
	}

	public function readdata_indexDistribusiPangkalan($index)
	{
		$sql='SELECT * FROM Distribusi1 WHERE id_kirim1 = ? LIMIT 1';
		$query=$this->db->query($sql, $index);
		return $query->row();
	}

	public function EditNamaPangkalan($id)
	{
		$query = $this->db->query('select distribusi1.tanggal,distribusi1.id_kirim1,distribusi1.jumlah_gas,member_elpiji.nama_pangkalan from distribusi1 inner join member_elpiji on member_elpiji.id_member=distribusi1.tujuan where distribusi1.id_kirim1 = ?',$id);
		return $query->result_array();
	}

	public function dropdownNama()
	{
		$query = $this->db->query('select id_member,nama_pangkalan from member_elpiji');
		return $query->result_array();
		
	}


	public function editDistribusiPangkalan($raw)
	{
		$sql="UPDATE distribusi1 SET 
				tanggal = ?, 
				jumlah_gas = ?,
				tujuan = ? WHERE id_kirim1 = ?;";
		$this->db->query($sql, array(
			
			$raw['tanggal_up'],
			$raw['jumlah_gas_up'],
			$raw['tujuan_up'],
			$raw['index']));
		return $this->db->affected_rows();
	}

	public function DeleteData($id){
	  $this->db->where('id_kirim1',$id);
	 $this->db->delete('distribusi1');
	
	}

	public function dropdown_tujuan()
    {
        // Mendapatkan data ID dan nama kategori saja
        $this->db->select ('member_elpiji.id_member');
        $this->db->select ('distribusi1.id_kirim1');
        $this->db->from('member_elpiji');
        $this->db->join('distribusi1','distribusi1.id_kirim1 = member_elpiji.id_member');
        $result = $this->db->get();
        
        // bikin array
        // please select berikut ini merupakan tambahan saja agar saat pertama
        // diload akan ditampilkan text please select.
        // $dropdown[''] = 'Please Select';
        // if ($result->num_rows() > 0) {
            
        //     foreach ($result->result_array() as $row) {
        //         // Buat array berisi 'value' (id kategori) dan 'nama' (nama kategori)
        //         $dropdown[$row['id_kirim1']] = $row['member_elpiji'];
        //     }
        // }
        // return $dropdown;
    }
	
}

?>