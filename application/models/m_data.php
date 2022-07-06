<?php 
 
class M_data extends CI_Model{
	function ambil_data($nama_karyawan, $tanggal=null){
			if (!empty($tanggal)) {
    		$this->db->where('tanggal',$tanggal);
    	}
			$this->db->where('username',$nama_karyawan);

		return $this->db->get('tabelkegiatan')->result_array();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function edit ($where,$table){
		$this->db->where($where);
		return $this->db->get('tabelkegiatan');
	}
	function option ($where,$table){
		$this->db->where($where);
		return $this->db->get('usertelkom');
	}	
	 function sto_select(){
        $this->db->select('nama_karyawan');
        $this->db->group_by('nama_karyawan','asc');
        return $this->db->get('usertelkom')->result_array();
    }
    function ambil_data2($nama_karyawan=null) {
    	if (!empty($nama_karyawan)) {
    		$this->db->where('nama_karyawan',$nama_karyawan);
    	}

     $this->db->select('nama_karyawan, COUNT(nama_karyawan) as total');
     $this->db->select('username');
	 $this->db->group_by('nama_karyawan'); 
	 $this->db->order_by('total', 'asc'); 
	 return $this->db->get('tabelkegiatan')->result_array();
	}
}