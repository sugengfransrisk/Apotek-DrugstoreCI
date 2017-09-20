<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model {
function tampil_data()
	{
		return $this->db->get('admin');
	}

	function hapus_data($where,$admin){
	$this->db->where($where);
	$this->db->delete($admin);
}

	function input_data($data,$admin){
		$this->db->insert($admin,$data);
	}

	function edit_data($where,$admin){		
	return $this->db->get_where($admin,$where);
}
	function update_data($where,$data,$admin){
		$this->db->where($where);
		$this->db->update($admin,$data);
	}	



	

}

/* End of file adminmodel.php */
/* Location: ./application/models/adminmodel.php */