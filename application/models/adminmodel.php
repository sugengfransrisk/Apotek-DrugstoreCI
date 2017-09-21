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

	function changestatus()
	{
		$id=$_GET['uid'];
		$r=$_GET['r'];
		$this->load->model('adminmodel');
		if($this->adminmodel->change_status_user($id,$r)==TRUE)
		{
			redirect('admin/index');
		}else{
			redirect('admin/index');
		}
	}

	function change_status_user($idUser,$role)
	{
		$this->load->library('database_library');
		$this->database_library->pake_table('admin');
		$arraysearch=array(
				'ID_ADMIN'=>$idUser,
				);
		$data=array(
				'status'=>$role,
				);
		if($this->database_library->ubah_data($arraysearch,$data)==TRUE)
		{
			return true;
		}else{
			return false;
		}
	}

	function change_role_user($idUser,$role)
	{
		$this->load->library('database_library');
		$this->database_library->pake_table('admin');
		$arraysearch=array(
				'ID_ADMIN'=>$idUser,
				);
		$data=array(
				'ROLE'=>$role,
				);
		if($this->database_library->ubah_data($arraysearch,$data)==TRUE)
		{
			return true;
		}else{
			return false;
		}
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