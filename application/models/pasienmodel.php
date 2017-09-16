<?php 

class pasienmodel extends CI_Model{
	function tampil_data()
	{
		return $this->db->get('pasien');
	}

	function hapus_data($where,$pasien){
	$this->db->where($where);
	$this->db->delete($pasien);
}

	function input_data($data,$pasien){
		$this->db->insert($pasien,$data);
	}

	function edit_data($where,$pasien){		
	return $this->db->get_where($pasien,$where);
}
	function update_data($where,$data,$pasien){
		$this->db->where($where);
		$this->db->update($pasien,$data);
	}	



}
