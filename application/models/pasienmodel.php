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

	
	public function getDetail($id){
		return $this->db->where('id', $id)->get('pasien')->row();
	}

		function get_pasien_by_id($id,$output)
	{
		$this->load->library('database_library');
		$this->database_library->pake_table('pasien');
		$isdata=$this->database_library->ambil_satu_data('id',$id,$output);
		if(!empty($isdata))
		{
			return $isdata;
		}else{
			return null;
		}
	}
	
	function update_pasien($id,$data)
	{
		$this->load->library('database_library');
		
			$this->database_library->pake_table('pasien');		
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
