<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksimodel extends CI_Model {
function tampil_data_pasien()
	{
		return $this->db->get('pasien');
	}

	function tampil_data_obat()
	{
		return $this->db->get('obat');
	}
	function tampil_data_pegawai()
	{
		return $this->db->get('pegawai');
	}
	function tampil_data()
	{
		return $this->db->get('transaksi');
	}
	
    function getCount(){
		return $this->db->count_all('obat');
	}
	function input_data($data,$transaksi){
		$this->db->insert($transaksi,$data);
	}

	function hapus_data($where,$transaksi){
	$this->db->where($where);
	$this->db->delete($transaksi);
}
	

}

/* End of file transaksimodel.php */
/* Location: ./application/models/transaksimodel.php */