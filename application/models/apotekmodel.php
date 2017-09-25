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

public function getCount(){
		return $this->db->count_all('obat');
	}

	public function getDetail($id){
		return $this->db->where('id', $id)->get('obat')->row();
	}

		function get_obat_by_id($id,$output)
	{
		$this->load->library('database_library');
		$this->database_library->pake_table('obat');
		$isdata=$this->database_library->ambil_satu_data('id',$id,$output);
		if(!empty($isdata))
		{
			return $isdata;
		}else{
			return null;
		}
	}
	
	function update_obat($id,$data)
	{
		$this->load->library('database_library');
		
			$this->database_library->pake_table('obat');		
			$arr=array(
				
				'id'=>$id
				);			
			if($this->database_library->ubah_data($arr,$data)==TRUE)
			{
				return true;
			}else{
				return false;
			}
		
	}


}
