<?php 

class apotekmodel extends CI_Model{
	function tampil_data()
	{
		return $this->db->get('obat');
	}

	function hapus_data($where,$obat){
	$this->db->where($where);
	$this->db->delete($obat);
}

	function input_data($data,$obat){
		$this->db->insert($obat,$data);
	}

	function edit_data($where,$obat){		
	return $this->db->get_where($obat,$where);
}
	function update_data($where,$data,$obat){
		$this->db->where($where);
		$this->db->update($obat,$data);
	}	

}
