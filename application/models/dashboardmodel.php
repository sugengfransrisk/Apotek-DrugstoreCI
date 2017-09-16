
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardmodel extends CI_Model {
	public function getObtCount(){
		return $this->db->count_all('obat');
	}

	public function getPsnCount(){
		return $this->db->count_all('pasien');
	}
	public function getAkunCount(){
		return $this->db->count_all('admin');
	}
	

}

/* End of file dashboardmodel.php */
/* Location: ./application/models/dashboardmodel.php */