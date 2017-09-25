<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboardmodel');
		$this->load->helper('url');
		if($this->session->userdata('logged_in') == false){
			redirect('login?dst=dashboard');
		}
	}

	function index()
	{
		$data = array(
			'title'			=> 'Dashboard',
			'primary_view'	=> 'dashboard_view',
			'obtCount'		=> $this->dashboardmodel->getObtCount(),
			'psnCount'		=> $this->dashboardmodel->getPsnCount(),
			'akunCount'		=> $this->dashboardmodel->getAkunCount(),
			'trCount'		=> $this->dashboardmodel->getTrCount(),
			'pgCount'		=> $this->dashboardmodel->getPgCount()
		);
		$data['main_view'] = 'dashboard_view';
		$this->load->view('template', $data);
	
	}
		public function logout(){
		$data = array(
			'username'	=> '',
			'logged_in'	=> false,
			'role'		=> ''
		);

		$this->session->sess_destroy();
		redirect('login');
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */