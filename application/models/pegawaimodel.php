<?php 

class Pegawaimodel extends CI_Model{
	function tampil_data()
	{
		return $this->db->get('pegawai');
	}

	function hapus_data($where,$pegawai){
	$this->db->where($where);
	$this->db->delete($pegawai);
}

	function input_data($data,$pegawai){
		$this->db->insert($pegawai,$data);
	}

	
	public function getDetail($id){
		return $this->db->where('id', $id)->get('pegawai')->row();
	}

		function get_pegawai_by_id($id,$output)
	{
		$this->load->library('database_library');
		$this->database_library->pake_table('pegawai');
		$isdata=$this->database_library->ambil_satu_data('id',$id,$output);
		if(!empty($isdata))
		{
			return $isdata;
		}else{
			return null;
		}
	}
	
	function update_pegawai($id,$data)
	{
		$this->load->library('database_library');
		
			$this->database_library->pake_table('pegawai');		
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
