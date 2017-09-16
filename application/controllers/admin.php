
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminmodel');
		$this->load->helper('url');
		if($this->session->userdata('logged_in') == false){
			redirect('login');
		}
	
	}

	 function index()
	{
		
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */