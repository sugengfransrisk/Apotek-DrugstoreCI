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

	public function update($id){
		$data = array(

			'nama'			=> $this->input->post('nama_pasien'),
			'alamat'		=> $this->input->post('alamat')
			
			 );

		$this->db->where('id', $id)->update('pasien', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}



}
